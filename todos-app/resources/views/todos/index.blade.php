<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Todos App</h1>
    <ul>
    @foreach($datatodos as $todo)
        <li>
        {{ $todo->description }}
        </li>
    @endforeach
    </ul>

    

</body>
</html>