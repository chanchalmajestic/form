<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Data</title>
    <style>
        *{
            font-family:sans-serif;
        }

        .full_container{
            /* margin-top:-200px; */
            background-image: linear-gradient(rgb(104 124 221),rgb(156 167 211));
            width: 100vw;
            /* height: 100vh; */
            background-size: cover;
            overflow:hidden;
        }

        .container{
            padding-top:100px;
        }
        .content{
            width:900px;
            margin: 0 auto;
            height:100%;
            background-image: linear-gradient(rgb(112 134 245),rgb(36 77 241));
            border-radius:10px;
        }

        th{
            padding-left:10px;
            padding-right:10px;
            height:20px;
            /* width:250px; */
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            border:1px blue;
            padding-top:10px;
            padding-bottom:10px;
            color:white;
            border-radius:5px;
        }
        td{
            padding-bottom:5px;
            text-align:center;
            /* padding-inline:10px; */
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

        .dataBtn{
            width:100px;
            padding-top:30px;
            padding-bottom:20px;
            display:grid;
            margin:auto;
            margin-left:610px;
            text-align:center;
        }

        .dataBtn a{
            text-decoration:none;
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            padding-inline:10px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:5px;
        }

        table{
            margin-left:10px;
            margin-right:10px;
        }
        p{
            text-align: center;
            padding-top: 20px;
        }
    </style>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="full_container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="pt-[20px]">
            <h1 class="text-[30px] text-center py-8">Deleted Data</h1>
            <div class="content">

                <table class="border-separate">
                <thead>
                <tr>
                    <th style="width:20px;">Id</th>
                    <th style="width:400px;">Question</th>  
                    <th style="width:400px;">Answer</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($faqs as $faq)
                <tr>
                    <td style="padding-top:5px;">{{ $faq->id }}</td>
                    <td style="padding-top:5px;">{{ $faq->question}}</td> 
                    <td style="padding-top:5px;">{{ $faq->answer }}</td>
                    <td style="padding-top:5px; width:160px;"><a href="{{ url('deletePermanently/'.$faq->id) }}" class="btn btn-danger btn-sm">Delete Forever</a></td>
                    <td style="padding-top:5px;"><a href="{{ url('restoredeletedData/'.$faq->id) }}" class="btn btn-danger btn-sm">Restore</a></td>
                </tr>
                @endforeach              
                </tbody>
                </table>
            </div>
            <div class="dataBtn">
                <a href="{{ url('admin/fetchData')}}" class="btn btn-danger btn-sm">Data</a>
            </div>
        </div>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $faqs->links() !!}
        </div>
    </div>
</body>
</html>