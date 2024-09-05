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
        .bg-color{
            background-color:green;
            padding:10px;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for names or emails...">
    </div>
    
    <table>
    <div >
        <div>
            @if (session('status'))
                <div class="bg-color">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
        <thead>
            <th style="background-color:green;"><a href="{{ route('stu.create')}}">Add New</a></th>    
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Grade</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th style="background-color:blue;">View</th>
                <th style="background-color:green;">Edit</th>
                <th style="background-color:red;">Delete</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @foreach ($data as $value)
            <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->first_name}}</td>
                <td>{{ $value->last_name}}</td>
                <td>{{ $value->email}}</td>
                <td>{{ $value->date_of_birth}}</td>
                <td>{{ $value->grade}}</td>
                <td>{{ $value->created_at}}</td>
                <td>{{ $value->updated_at}}</td>
                <td style="background-color:blue;"><a href="{{ route('stu.show',$value->id)}}">View</a></td>
                <td style="background-color:green;"><a href="{{ route('stu.edit',$value->id)}}">Edit</a></td>
                <td style="background-color:red;">
                <form action="{{route('stu.destroy',$value->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="background-color:red; border:none; color:white; cursor:pointer;"  type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            var input, filter, table, tr, td, i, j, txtValue, shouldShow;
            input = document.getElementById('searchInput');
            filter = input.value.toLowerCase();
            table = document.querySelector('table');
            tr = table.querySelectorAll('tbody tr');
            
            for (i = 0; i < tr.length; i++) {
                tr[i].style.display = 'none'; // Hide all rows initially
                td = tr[i].getElementsByTagName('td');
                
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toLowerCase().indexOf(filter) > -1) {
                            shouldShow = true;
                            break;
                        }
                    }
                }
                
                if (shouldShow) {
                    tr[i].style.display = '';
                }
                shouldShow = false;
            }
        });
    </script>
</body>
</html>
