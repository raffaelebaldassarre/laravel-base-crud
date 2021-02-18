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
    
    <h1>Laravel Blog</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>body</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->body}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('posts.create')}}">Crea un nuovo Post</a>

</body>
</html>