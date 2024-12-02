<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Results</title>
</head>
<body>
    <h2>Results</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Gender:</strong> {{ ucfirst($gender) }}</p>
    <p><strong>Date of Birth:</strong> {{ $dob }} (yyyy/mm/dd)</p>
    <p><strong>Moolank (Root Number):</strong> {{ $moolank }}</p>
    <p><strong>Bhagyank (Destiny Number):</strong> {{ $bhagyank }}</p>
    <a href="{{ route('home') }}">Calculate Again</a>
</body>
</html>
