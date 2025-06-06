<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoolankBhagyankApiController extends Controller
{
    // API endpoint to calculate and return results
    public function calculate(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
        ]);

        // Extract input data
        $name = $request->input('name');
        $dob = $request->input('dob');
        $gender = $request->input('gender');

        // Extract day, month, and year
        [$year, $month, $day] = explode('-', $dob);

        // Calculate Moolank and Bhagyank
        $moolank = $this->calculateMoolank($day);
        $bhagyank = $this->calculateBhagyank($year, $month, $day);

        // Combine Moolank and Bhagyank
        $combination = $moolank . $bhagyank;

        // Fetch the corresponding message from the database
        $message = DB::table('combinations')
            ->where('combination', $combination)
            ->value('message');

        // Generate Loshu Grid
        $loshuGrid = $this->generateLoshuGrid($dob);

        // Return the response
        return response()->json([
            'success' => true,
            'data' => [
                'name' => $name,
                'gender' => ucfirst($gender),
                'dob' => $dob,
                'moolank' => $moolank,
                'bhagyank' => $bhagyank,
                'combination' => $combination,
                'message' => $message ?? 'No data available for this combination',
                'loshu_grid' => $loshuGrid,
            ],
        ]);
    }

    // Helper method to reduce a number to a single digit
    private function reduceToSingleDigit($number)
    {
        while ($number > 9) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    // Helper method to calculate Moolank
    private function calculateMoolank($day)
    {
        return $this->reduceToSingleDigit(array_sum(str_split($day)));
    }

    // Helper method to calculate Bhagyank
    private function calculateBhagyank($year, $month, $day)
    {
        $daySum = $this->reduceToSingleDigit(array_sum(str_split($day)));
        $monthSum = $this->reduceToSingleDigit(array_sum(str_split($month)));
        $yearSum = $this->reduceToSingleDigit(array_sum(str_split($year)));

        $total = $daySum + $monthSum + $yearSum;
        return $this->reduceToSingleDigit($total);
    }

    // Helper method to generate Loshu Grid
    private function generateLoshuGrid($dob)
    {
        // Extract all digits from DOB
        $digits = array_map('intval', str_split(str_replace('-', '', $dob)));

        // Calculate frequency of each digit
        $frequency = array_count_values($digits);

        // Fetch details for all numbers (1-9)
        $details = DB::table('loshu_numbers')->get();

        // Separate present and missing numbers
        $presentNumbers = [];
        $missingNumbers = [];

        foreach (range(1, 9) as $number) {
            $numberDetails = $details->firstWhere('number', $number);

            if ($numberDetails) {
                $numberDetailsArray = (array) $numberDetails;

                if (isset($frequency[$number])) {
                    // Add frequency for present numbers
                    $numberDetailsArray['frequency'] = $frequency[$number];
                    $presentNumbers[] = $numberDetailsArray;
                } else {
                    // Add missing numbers without frequency
                    $missingNumbers[] = $numberDetailsArray;
                }
            }
        }

        return [
            'Present Numbers (Strengths)' => $presentNumbers,
            'Missing Numbers (Areas to Work On)' => $missingNumbers,
        ];
    }
}
