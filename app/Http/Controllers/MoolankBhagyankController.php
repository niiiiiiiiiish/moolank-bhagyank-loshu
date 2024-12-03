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
        $loshuChart = $this->calculateLoshuChart($dob);

        // Interpret the Lo Shu Chart
        $interpretation = $this->interpretLoShuChart($loshuChart);

        // Return the result view with all data
        return view('result', compact('name', 'gender', 'dob', 'moolank', 'bhagyank', 'loshuChart', 'interpretation'));
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

    // Calculate Lo Shu Chart
    private function calculateLoshuChart($dob)
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

    // Interpret the Lo Shu Chart
    private function interpretLoShuChart($loshuChart)
    {
        $present = [];
        $missing = [];

        foreach ($loshuChart as $number => $frequency) {
            if ($frequency > 0) {
                $present[] = [
                    'number' => $number,
                    'frequency' => $frequency,
                    'meaning' => $this->getLoShuMeaning($number, true)
                ];
            } else {
                $missing[] = [
                    'number' => $number,
                    'meaning' => $this->getLoShuMeaning($number, false)
                ];
            }
        }

        return compact('present', 'missing');
    }

    // Get the meaning of a number in Lo Shu Chart
    private function getLoShuMeaning($number, $isPresent)
    {
        $meanings = [
            1 => 'Strong individuality and leadership qualities.',
            2 => 'Cooperation and balance in relationships.',
            3 => 'Creativity and communication.',
            4 => 'Hard work, stability, and practicality.',
            5 => 'Adaptability and freedom.',
            6 => 'Harmony, responsibility, and care for family.',
            7 => 'Introspection and spiritual growth.',
            8 => 'Ambition, material success, and financial growth.',
            9 => 'Compassion, humanitarian efforts, and global thinking.'
        ];

        return $meanings[$number] . ($isPresent ? " Strength is present." : " Area to work on.");
    }
}
