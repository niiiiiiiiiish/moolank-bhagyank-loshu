<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoolankBhagyankController extends Controller
{
    // Show the form
    public function index()
    {
        return view('home'); // The form view
    }

    // Calculate Moolank, Bhagyank, and Lo Shu Chart
    public function calculate(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
        ]);

        // Get form data
        $name = $request->input('name');
        $dob = $request->input('dob');
        $gender = $request->input('gender');

        // Extract day, month, and year
        [$year, $month, $day] = explode('-', $dob);

        // Moolank Calculation
        $moolank = $this->calculateMoolank($day);

        // Bhagyank Calculation
        $bhagyank = $this->calculateBhagyank($year, $month, $day);

        // Loshu Chart Calculation
        $loshuGrid = $this->generateLoshuGrid($dob);

        // Get the corresponding message from the database
        $combination = $moolank . $bhagyank;
        $message = DB::table('combinations')
            ->where('combination', $combination)
            ->value('message');

        // Return the result view with all data
        return view('result', compact('name', 'gender', 'dob', 'moolank', 'bhagyank', 'combination', 'message', 'loshuGrid'));
    }

    // Reduce a number to a single digit
    private function reduceToSingleDigit($number)
    {
        while ($number > 9) {
            $number = array_sum(str_split($number));
        }
        return $number;
    }

    // Calculate Moolank
    private function calculateMoolank($day)
    {
        return $this->reduceToSingleDigit(array_sum(str_split($day)));
    }

    // Calculate Bhagyank
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
