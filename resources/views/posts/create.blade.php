<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    
    <h1>Crea un nuovo Post</h1>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <input type="text">
        <button type="submit">Submit</button>
    </form>

</body>
</html>