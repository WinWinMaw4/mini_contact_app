<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #2d3748;
            color: #f7fafc;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            color: #ff8600;
        }
        .card{
            background-color: #6b7280;
            width: fit-content;
            height: 500px;
            border-radius: 5px;
            border-left: 20px solid #427d7e;
            padding: 10px 15px;
            /*box-shadow: -2px 2px 2px #437676, -4px 5px 3px 2px #1e5858, -6px 7px 7px 2px #063f3f,-3px 13px 4px 0px #0c4b4b, 20px 19px 20px 2px #0f0f0f8a;*/
            box-shadow: -2px 2px 2px #437676,
            -4px 5px 3px 2px #1e5858,
            -6px 7px 7px 2px #063f3f,
            -3px 13px 4px 0px #0c4b4b,
            13px 6px 20px 0px #0f0f0f8a;
        }
        .card-title{
            text-align: center;
        }
        .save{
            padding: 5px;
            margin-bottom: 2px;
            background: #54aaa0;
            border: none;
            border-radius: 2px;
            color: #ffffff;
        }
        input{
            padding: 5px;
            background: #ffffff;
            border-radius: 2px;
            border: 1px solid #54aaa0;
            color: white;
            caret-color: #0c4b4b;
        }
        input:focus-visible {
            outline-offset: 0px;
            outline-color: #54aaa0;
        }
    </style>
    </head>
<body>
<div class="card">
    <div class="card-title">
        <h1>Create Contact App</h1>
    </div><br>
    <div class="card-body">
        <form action="{{route('store')}}" method="post" class="form">
            @csrf
            <input type="text" name="name" placeholder="Contact name">
            <input type="number" name="phone" placeholder="phone number">
            <button class="save">Save</button>
        </form>
        @if(session('status'))
            <small>{{session('status')}}</small>
        @endif

        @include('contact.list')
    </div>
</div>

<img src="{{asset('img/pen1.png')}}" alt="">

</body>
</html>
