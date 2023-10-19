<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel   FAQ Form</title>
    <style>
         *{
            font-family:sans-serif;
        }
        
        body{
            background-image: linear-gradient(rgb(104 124 221),rgb(156 167 211));
            background-repeat: no-repeat;
            height:591px;
        }
        .container{
            width:400px;
            margin:0 auto;
            background-image: linear-gradient(rgb(98, 122, 241),rgb(31, 73, 240));
            border-radius:10px;
        }

        .formFill{
            text-align: right;
            width: fit-content;
            padding: 0 auto;
            margin: 0 auto;
            padding-top: 30px;
            font-family: sans-serif;
            padding-inline:30px;
            padding-bottom:30px;
        }

        .formFill input{
            width:300px;
            height:25px;
            border-radius:5px;
        }
        .formFill input:hover{
            /* cursor: pointer; */
            border-color: green;
        }

        .btn button{
            text-align:center;
            width:80px;
            height:30px;
            background-image: linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            border-radius:5px;
            border:none;
            font-size:15px;
            /* padding-left:15px;
            padding-right:15px; */
        }
        
        .btn a{
            text-decoration:none;
            background-image:linear-gradient(rgb(37 79 245),rgb(3 5 18));
            color:white;
            padding-inline:10px;
            padding-top:5px;
            padding-bottom:5px;
            border-radius:5px;
            padding-left:20px;
            padding-right:20px;
        }
        h1{
            padding-top:150px;
            text-align:center;
            font-size:30px;
        }
        P{
            padding-top:20px;
            text-align:center;
        }
    </style>
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="fullContainer">
        <h1>Add Data</h1>
        <div class="container">
            <div class="content">
                <form action="{{route('f_a_qs.faqform')}}" class="formFill" method="POST">
                    @csrf
                    <label for="question" class=""></label>
                    <input type="text"  id="" name="question" placeholder="Write your question here"><br>
                    <br>
                    <label for="answer" class=""></label>
                    <input type="textarea"  id="" name="answer" placeholder="Write your answer here"><br>
                    <br>
                    <div class="btn">
                    <button>Add</button>
                    <a href="{{ url('admin/fetchData') }}" class="btn btn-primary btn-sm">Data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>