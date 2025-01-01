<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Results</title>
    <style>
        /* General Body Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Container */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        /* Title Styles */
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        h2, h3 {
            color: #333;
            margin-bottom: 10px;
        }

        /* Section Titles */
        h4 {
            color: #5d5d5d;
            margin-top: 20px;
            font-size: 1.2em;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }

        /* Lists Styling */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        li span {
            font-weight: bold;
        }

        /* Back Link */
        a {
            display: inline-block;
            margin-top: 30px;
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
            }

            h2, h3, h4 {
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Calculation Results</h1>

        <h2>Name: {{ $name }}</h2>
        <h3>Gender: {{ ucfirst($gender) }}</h3>
        <h3>Date of Birth: {{ $dob }}</h3>

        <h3>Moolank: {{ $moolank }}</h3>
        <h3>Bhagyank: {{ $bhagyank }}</h3>
        <h3>Combination: {{ $combination }}</h3>
        <p><strong>Message:</strong> {{ $message ?? 'No data available for this combination' }}</p>

        <h3>Loshu Grid</h3>

        <h4>Present Numbers (Strengths)</h4>
        <ul>
            @foreach ($loshuGrid['Present Numbers (Strengths)'] as $number)
                <li>
                    <span>Number:</span> {{ $number['number'] }}<br>
                    <span>Data:</span> {{ $number['data'] }}<br>
                    <span>Element:</span> {{ $number['element'] }}<br>
                    <span>Planet:</span> {{ $number['planet'] }}<br>
                    <span>Merit:</span> {{ $number['merit'] }}<br>
                    <span>Direction:</span> {{ $number['direction'] }}<br>
                    <span>Frequency:</span> {{ $number['frequency'] }}
                </li>
            @endforeach
        </ul>

        <h4>Missing Numbers (Areas to Work On)</h4>
        <ul>
            @foreach ($loshuGrid['Missing Numbers (Areas to Work On)'] as $number)
                <li>
                    <span>Number:</span> {{ $number['number'] }} - {{ $number['data'] }}
                </li>
            @endforeach
        </ul>

        <a href="{{ route('home') }}">Go Back</a>
    </div>

</body>
</html>
