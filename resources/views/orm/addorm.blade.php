<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Student Information Form</h1>
    <div>
        <div>
            @if (session('status'))
                <div>
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
    <form action="{{ route('stu.store')}}" method="post">
        @csrf
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first_name" required>

        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>

        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
