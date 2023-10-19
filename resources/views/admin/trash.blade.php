<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#ccd3ed;
        }
        .container{
            width:900px;
            margin: 0 auto;
            /* margin-left:20px;
            margin-right:20px; */
            height:100%;
            background-image:linear-gradient(rgb(182 188 235),rgb(200 229 251));
        }

        th{
            padding-left:10px;
            padding-right:10px;
            height:20px;
            /* width:250px; */
            background-color:#8c99d3;
            border:1px blue;
            padding-top:10px;
            padding-bottom:10px;
        }
        td{
            padding-bottom:5px;
            text-align:center;
            /* padding-inline:10px; */
        }

        .add_btn{
            width:180px;
            margin:0 auto;
            padding-top:30px;
            padding-bottom:20px;
        }
        .add_btn a{
            text-decoration:none;
            background-image:linear-gradient(rgb(94 116 201),rgb(120 128 183));
            color:white;
            padding-inline:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
        }
        td a{
            text-decoration:none;
            background-image:linear-gradient(rgb(94 116 201),rgb(120 128 183));
            color:white;
            padding-inline:10px;
            padding-top:5px;
            padding-bottom:5px;
            border-radius:5px;
        }

        .trashBtn{
            width:90px;
            padding-top:30px;
            padding-bottom:20px;
            display:grid;
            margin:auto;
            margin-left:610px;
            text-align:center;
            margin-bottom:50px;
        }

        .trashBtn a{
            text-decoration:none;
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            padding-inline:10px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
        }
    </style>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="add_btn">
    <a href="{{ url('Customer/index') }}" class="btn btn-primary btn-sm">Add New Details</a>
    </div>
    <div class="container">
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
                <th>Phone_number</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $customers)
            <tr>
                <td>{{ $customers->id }}</td>
                <td>{{ $customers->name }}</td>
                <td>{{ $customers->email }}</td>
                <td>{{ $customers->address }}</td>
                <td>{{$customers->state }}</td>
                <td>{{ $customers->country }}</td>
                <td>{{ $customers->phone_number }}</td>
                <td style="padding-top:5px; width:160px;"><a href="{{ url('deletePermanent/'.$customers->id) }}" class="btn btn-danger btn-sm">Delete Forever</a></td>
                <td style="padding-top:5px;"><a href="{{ url('restoretrashData/'.$customers->id) }}" class="btn btn-danger btn-sm">Restore</a></td>
            </tr>
            @endforeach              
            </tbody>
        </table>
    </div>
    </div>
    {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
</body>
</html>