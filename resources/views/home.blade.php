<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moolank and Bhagyank Calculator</title>
</head>
<body>
    <h2>Moolank and Bhagyank Calculator</h2>
    <form action="{{ route('calculate') }}" method="POST">
        @csrf <!-- Laravel CSRF protection -->

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>
</body>
</html>
