<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        tr {
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(253,47,34,1) 56%, rgba(252,176,69,1) 100%);
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
        }
        .search-container {
            margin: 20px;
        }
        .search-container input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
   
    
    <table>
        <thead>
            
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Grade</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Back</th>
                <!-- <th style="background-color:green;">Edit</th>
                <th style="background-color:red;">Delete</th> -->
            </tr>
        </thead>
        <tbody id="tableBody">
            <tr>
                <td>{{ $data->id}}</td>

                
                <td>{{ $data->first_name}}</td>
                <td>{{ $data->last_name}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->date_of_birth}}</td>
                <td>{{ $data->grade}}</td>
                <td>{{ $data->created_at}}</td>
                <td>{{ $data->updated_at}}</td>
                <th style="background-color:blue;"><a href="{{ route('stu.index')}}">Back</a></th>
            </tr>
        </tbody>
    </table>

    
</body>
</html>
