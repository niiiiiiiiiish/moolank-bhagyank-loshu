<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moolank and Bhagyank Calculator</title>
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
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Title Styles */
        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        /* Form Elements */
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
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
    </div>

</body>
</html>
