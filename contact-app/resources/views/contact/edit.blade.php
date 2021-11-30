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
<h1>Update Contact Info</h1>
<form action="{{route('update',$contact->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$contact->name}}" placeholder="Contact name">
    <input type="number" name="phone" value="{{$contact->phone}}" placeholder="phone number">
    <button>Update</button>
</form>
@if(session('status'))
    <small>{{session('status')}}</small>
@endif

@include('contact.list');
</body>
</html>
