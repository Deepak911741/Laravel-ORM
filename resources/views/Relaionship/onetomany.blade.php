<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREATED TIME</th>
                <th>UPDATEDED TIME</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $onetomany)
            <tr>
                    <td>{{ $onetomany -> id}}</td>
                    <td>{{ $onetomany ->post -> title}}</td>
                    <td>{{ $onetomany -> email}}</td>
                    <td>{{ $onetomany -> created_at}}</td>
                    <td>{{ $onetomany -> updated_at}}</td>
                    
                </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>