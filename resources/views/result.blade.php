<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo Shu Chart Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            height: 300px;
            margin-bottom: 20px;
        }
        td {
            border: 1px solid #000;
            text-align: center;
            font-size: 18px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <h1>Lo Shu Chart Results</h1>

    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Gender:</strong> {{ ucfirst($gender) }}</p>
    <p><strong>Date of Birth:</strong> {{ $dob }} (yyyy/mm/dd)</p>
    <p><strong>Moolank:</strong> {{ $moolank }}</p>
    <p><strong>Bhagyank:</strong> {{ $bhagyank }}</p>

    <h3>Lo Shu Chart:</h3>
    <table>
        <tr>
            <td>{{ $loshuChart[4] > 0 ? $loshuChart[4] : '0' }}</td>
            <td>{{ $loshuChart[9] > 0 ? $loshuChart[9] : '0' }}</td>
            <td>{{ $loshuChart[2] > 0 ? $loshuChart[2] : '0' }}</td>
        </tr>
        <tr>
            <td>{{ $loshuChart[3] > 0 ? $loshuChart[3] : '0' }}</td>
            <td>{{ $loshuChart[5] > 0 ? $loshuChart[5] : '0' }}</td>
            <td>{{ $loshuChart[7] > 0 ? $loshuChart[7] : '0' }}</td>
        </tr>
        <tr>
            <td>{{ $loshuChart[8] > 0 ? $loshuChart[8] : '0' }}</td>
            <td>{{ $loshuChart[1] > 0 ? $loshuChart[1] : '0' }}</td>
            <td>{{ $loshuChart[6] > 0 ? $loshuChart[6] : '0' }}</td>
        </tr>
    </table>

    <h3>Interpretation:</h3>
    <h4>Present Numbers (Strengths):</h4>
    <ul>
        @foreach ($interpretation['present'] as $present)
            <li>
                {{ $present['number'] }}: {{ $present['meaning'] }} (Appears {{ $present['frequency'] }} times)
            </li>
        @endforeach
    </ul>

    <h4>Missing Numbers (Areas to Work On):</h4>
    <ul>
        @foreach ($interpretation['missing'] as $missing)
            <li>
                {{ $missing['number'] }}: {{ $missing['meaning'] }}
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Go Back</a>
</body>
</html>
