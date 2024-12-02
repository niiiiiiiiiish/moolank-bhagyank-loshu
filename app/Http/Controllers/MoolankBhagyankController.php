<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoolankBhagyankController extends Controller
{
    // Show the form
    public function index()
    {
        return view('home'); // The form view
    }

    // Calculate Moolank and Bhagyank
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

        // Helper function to reduce numbers to single digits
        function reduceToSingleDigit($number)
        {
            while ($number > 9) {
                $number = array_sum(str_split($number));
            }
            return $number;
        }

        // Moolank Calculation
        function calculateMoolank($day)
        {
            return reduceToSingleDigit(array_sum(str_split($day)));
        }

        // Bhagyank Calculation
        function calculateBhagyank($day, $month, $year)
        {
            $daySum = reduceToSingleDigit(array_sum(str_split($day)));
            $monthSum = reduceToSingleDigit(array_sum(str_split($month)));
            $yearSum = reduceToSingleDigit(array_sum(str_split($year)));

            $total = $daySum + $monthSum + $yearSum;
            return reduceToSingleDigit($total);
        }

        // Loshu Chart Calculation
        function calculateLoshuChart($dob)
        {
            // Flatten all digits from dob
            $digits = array_map('intval', str_split(str_replace('-', '', $dob)));

            // Initialize Loshu chart grid
            $loshuChart = [
                1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0,
                6 => 0, 7 => 0, 8 => 0, 9 => 0
            ];

            // Count occurrences of each digit
            foreach ($digits as $digit) {
                if (array_key_exists($digit, $loshuChart)) {
                    $loshuChart[$digit]++;
                }
            }

            return $loshuChart;
        }

        // Calculate values
        $moolank = calculateMoolank($day);
        $bhagyank = calculateBhagyank($day, $month, $year);
        $loshuChart = calculateLoshuChart($dob);

        // Return view with results
        return view('result', compact('name', 'gender', 'dob', 'moolank', 'bhagyank', 'loshuChart'));
    }

}
