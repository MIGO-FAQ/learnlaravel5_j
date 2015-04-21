<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
<h1>Hello {{ $var }}</h1>
<ul>
    @foreach ($lists as $name)
        <li>{{ $name }}</li>
    @endforeach
</ul>
</body>
</html>