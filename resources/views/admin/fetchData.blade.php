<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data Page</title>
    <style>
        *{
            font-family:sans-serif;
        }
        body{
            background-image: linear-gradient(rgb(104 124 221),rgb(156 167 211));
            background-repeat:no-repeat;
            height:fit-content;
        }
        .container{
            /* width:70%; */
            margin: 0 auto;
            /* margin-left:20px;
            margin-right:20px; */
            height:100%;
            background-image: linear-gradient(rgb(112 134 245),rgb(36 77 241));
            border-radius:10px;
        }

        th{
            /* padding-left:10px;
            padding-right:10px; */
            height:20px;
            /* width:250px; */
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            border:1px blue;
            padding-top:10px;
            padding-bottom:10px;
            color:white;
            border-radius:5px;
            padding-left:10px;
            padding-right:10px;
            /* border-collapse:separate; */
        }
        td{
            padding-bottom:5px;
            text-align:center;
            /* padding-inline:10px; */
        }

        .addButton{
            width:110px;
            padding-top:30px;
            padding-bottom:20px;
            /* display:grid;
            margin:auto; */
            margin-left:380px;
        }
        .addButton a{
            text-decoration:none;
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            padding-inline:20px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
        }

        td a{
            text-decoration:none;
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            padding-inline:10px;
            padding-top:5px;
            padding-bottom:5px;
            border-radius:5px;
        }
         table{
            margin-left:10px;
            margin-right:10px;
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
        p{
            padding-top:20px;
            text-align:center;
        }

    </style>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    @vite('resources/css/app.css')
</head>
<body>
    <!-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="content">
    <h1 class="text-[30px] text-center py-8">Questions and Answers Data</h1>
    <div class="container w-[70%]">
        <div class="addButton mx-auto">
            <a href="{{ url('admin/faqform') }}" class="btn btn-primary float-end">Add Data</a>
        </div>
        <table class="border-separate">
            <thead>
            <tr>
                <th style="width:40px; margin-right:10px;">Id</th>
                <th style="width:400px;">Question</th>  
                <th style="width:400px;">Answer</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $faq)
            <tr>
                <td style="padding-top:5px;">{{ $faq->id }}</td>
                <td style="padding-top:5px;">{{ $faq->question}}</td> 
                <td style="padding-top:5px;">{{ $faq->answer }}</td>
                <td style="padding-top:5px;"><a href="{{ url('admin/editData/'.$faq->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                <td style="padding-top:5px;"><a href="{{ url('deleteData/'.$faq->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
   
    </div>
    <div class="trashBtn">
    <td style="padding-top:5px;"><a href="{{ url('admin/deletedData/'.$faq->id) }}" class="btn btn-danger btn-sm">Trash</a></td>
    </div>
   
    {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
    
</body>
</html>