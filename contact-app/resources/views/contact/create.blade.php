<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
<h1>Create Contact App</h1>
<form action="{{route('store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Contact name">
    <input type="number" name="phone" placeholder="phone number">
    <button>Save</button>
</form>
@if(session('status'))
    <small>{{session('status')}}</small>
@endif

@include('contact.list')

</body>
</html>
