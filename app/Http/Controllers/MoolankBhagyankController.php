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

        // Functions for Moolank and Bhagyank
        function reduceToSingleDigit($number)
        {
            while ($number > 9) {
                $number = array_sum(str_split($number));
            }
            return $number;
        }

        function calculateMoolank($day)
        {
            return reduceToSingleDigit(array_sum(str_split($day)));
        }

        function calculateBhagyank($day, $month, $year)
        {
            $daySum = reduceToSingleDigit(array_sum(str_split($day)));
            $monthSum = reduceToSingleDigit(array_sum(str_split($month)));
            $yearSum = reduceToSingleDigit(array_sum(str_split($year)));

            $total = $daySum + $monthSum + $yearSum;
            return reduceToSingleDigit($total);
        }

        // Calculate values
        $moolank = calculateMoolank($day);
        $bhagyank = calculateBhagyank($day, $month, $year);

        // Return view with results
        return view('result', compact('name', 'gender', 'dob', 'moolank', 'bhagyank'));
    }
}
