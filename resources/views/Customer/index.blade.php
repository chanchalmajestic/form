<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>LaravelForm</title>
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
                margin-left:-385px;
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
           
           .btn{
            height: 40px;
            width: 270px;
            color: white;
            background-image: linear-gradient(rgb(76 81 107),rgb(31, 73, 240));
            border-radius: 5px;
            border: none;
            margin-left: 450px;
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 30px;
           }

           .btn:hover{
            background-image: linear-gradient(rgb(125, 125, 196),rgb(33 33 57));
            
           }

        </style>
</head>
<body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <h1>Laravel Form</h1>
    <div class="container">
        <div class="formCheck">
            <form action="{{route('customers.index')}}" class="formFill" method="POST">
                @csrf
            <label for="name" class="pass">Name:</label>
            <input type="text"  id="" name="name"><br>
            <br>
            <label for="email" class="pass">Email:</label>
            <input type="email"  id="" name="email"><br>
            <br>
            <label for="address" class="pass"> Address:</label>
            <input type="text"  id="" name="address"><br>
            <br>
            <label for="state" class="pass">State:</label>
            <input type="text"  id="" name="state"><br>
            <br>
            <label for="country" class="pass">Country:</label>
            <input type="text"  id="" name="country"><br>
            <br>
            <label for="PhoneNumber" class="pass"> Phone Number:</label>
            <input type="number"  id="" name="phone"><br>
            <br>
            <label for="password" class="pass">Password:</label>
            <input type="password"  id="" name="password"><br>
            <br>
            <div class="submit">
            <button class="btn" type="submit">Submit</button>
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>