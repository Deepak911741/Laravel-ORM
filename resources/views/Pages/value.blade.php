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
        table{
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
        th {
            background-color: #4CAF50;
            color: white;
        }

        a {
            text-decoration: none;
            color:white;
            
        }
        .view{
                background-color:green;
            }
            .delete{
                background-color:red;
            }
            .edit{
                background-color:aqua;
            }
            .edit a{
                color:red;
            }
        @media (max-width: 768px) {
            table, th, td {
                display: block;
                width: 100%;
            }

            th, td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            th::before, td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 10px;
                white-space: nowrap;
                font-weight: bold;
                color: #333;
            }

            td {
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: "";
            }
            
      
        }
    </style>
</head>
<body>
    <div class="data">
        <h1>Users Data</h1>

        <div>
            <button style="padding:10px"><a style="color:red" href="{{route('adduserdata')}}">Add New Data</a></button>
        </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
            <th>City</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>View</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($datavalue as $value)
            <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->name}}</td>
                <td>{{ $value->email}}</td>
                <td>{{ $value->age}}</td>
                <td>{{ $value->phone}}</td>
                <td>{{ $value->city}}</td>
                <td>{{ $value->created_at}}</td>
                <td>{{ $value->updated_at}}</td>
                <td class="view"><a href="{{ route('singleData', $value->id)}}">View</a></td>
                <td class="delete"><a href="{{ route('deleteUserData', $value->id)}}">Delete</a></td>
                <td class="edit"><a href="{{ route('userdataupdate', $value->id)}}">Edit</a></td>
            </tr>
            @endforeach
        <tbody>
    </table>
    </div>
</body>
</html>