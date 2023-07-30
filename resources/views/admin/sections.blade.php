<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sections</title>
</head>
<body>
    @foreach($sections as $section)
    <h3> {{ $section->name}}</h3>
    @endforeach
</body>
</html>