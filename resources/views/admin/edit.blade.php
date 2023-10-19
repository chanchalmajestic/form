<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Laravel Form</title>
    <style>
            body{
                height:580px;
                background-image: linear-gradient(rgb(231, 233, 243),rgb(197, 206, 250));
            }

            h1{
                font-size:30px;
                text-align:center;
            }
           .container { 
            border-radius:10px;
            width: 400px;
            margin:0px auto;
            background-image: linear-gradient(rgb(194, 201, 243),rgb(123, 143, 241));
            }
           
          
           .formFill { 
                margin-left:40px;
                text-align: right;
                width: fit-content;
                padding: 0 auto;
                /* margin: 0 auto; */
                padding-top: 30px;
            }
           
           .formFill label {
            display: inline-block;
            margin-right: 10px;
            }
        
           .formCheck {margin-top: 30px;}

           .formFill input {height: 23px;}
           .formFill input:hover{
             border-color:green;
           }
           
           .submit{
            padding-bottom:20px;
           }
           .submit button{
            text-align: center;
            width: 80px;
            height: 30px;
            background-image: linear-gradient(rgb(76 81 107),rgb(31, 73, 240));
            color: white;
            border-radius: 5px;
            border: none;
            font-size: 15px;
           }

           .submit a{
            text-decoration: none;
            background-image: linear-gradient(rgb(76 81 107),rgb(31, 73, 240));;
            color: white;
            padding-inline: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
           }
        </style>
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <h1>Edit and Update Details</h1>
    <div class="container">
        <div class="formCheck">
        <form action="{{ url('update/'.$data->id) }}" method="POST" class="formFill">
            @csrf
            @method('PUT')
            <label for="name" class="pass">Name:</label>
            <input type="text"  id="" name="name" value="{{$data->name}}"><br>
            <br>
            <label for="email" class="pass">Email:</label>
            <input type="email"  id="" name="email" value="{{$data->email}}"><br>
            <br>
            <label for="address" class="pass"> Address:</label>
            <input type="text"  id="" name="address" value="{{$data->address}}"><br>
            <br>
            <label for="state" class="pass">State:</label>
            <input type="text"  id="" name="state" value="{{$data->state}}"><br>
            <br>
            <label for="country" class="pass">Country:</label>
            <input type="text"  id="" name="country" value="{{$data->country}}"><br>
            <br>
            <label for="Phone_number" class="pass"> Phone Number:</label>
            <input type="string"  id="" name="Phone_number" value="{{$data->phone_number}}"><br>
            <br>
            <label for="password" class="pass">Password:</label>
            <input type="password"  id="" name="password" value="{{$data->password}}"><br>
            <br>
            <div class="submit">
                <button type="submit">Update</button>
                <a href="{{ url('admin/studentData') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>