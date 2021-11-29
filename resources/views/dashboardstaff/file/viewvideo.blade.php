<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>judul</th>
            <th>view</th>
            <th>download</th>
        </tr>
        <tr>
            
            @foreach ($file as $key=>$data)
                <td>{{++$key}}</td>
                <td>{{$data->title}}</td>
                <td><a href="/files/{{$data->id}}">view</a></td>
                <td><a href="/files/download/{{$data->file}}">download</a></td>
            @endforeach
        </tr>
    </table>
</body>
</html>