<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$data->title}}</h2>
    <p><iframe src="{{url('storage/file/'.$data->file)}}" style="width: 600px;heigh: 500px; "allowfullscreen></iframe></p>
</body>
</html>