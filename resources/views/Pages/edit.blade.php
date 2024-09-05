<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555555;
        }

        input[type="text"], input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 500px) {
            .form-container {
                padding: 15px;
            }

            label {
                font-size: 14px;
            }

            input[type="text"], input[type="email"] {
                font-size: 14px;
                padding: 8px;
            }

            button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<div class="form-container">
    <h1>User data Form</h1>
    
    <form  action="{{ route('userdata', $valuedata->id)}}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" value="{{$valuedata->name}}" name="name" id="name" >
        
        <label for="email">Email</label>
        <input type="email" value="{{$valuedata->email}}" name="email" id="email" >

        <label for="age">Age</label>
        <input type="text" value="{{$valuedata->age}}" name="age" id="age" >
                
        <label for="phone">Phone</label>
        <input type="text" value="{{$valuedata->phone}}" name="phone" id="phone" >
        
        <label for="city">City</label>
        <input type="text" value="{{$valuedata->city}}" name="city" id="city" >
        
        <button type="submit" onclick="return confirmSubmission()">Submit</button>
        <br>
        <a href="{{route('showData')}}">
            <div style="padding:10px; text-decoration:none;background-color:green;border-radius:5px; color:white;cursor: pointer;">
                Back To Home
            </div>
        </a>
    </form>
</div>

<script>
    function confirmSubmission() {
        return confirm('Are you sure you want to submit this data?');
    }
</script>

</body>
</html>
