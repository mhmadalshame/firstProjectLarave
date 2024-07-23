<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>hi</h1>
    @if (1==2)
        <h2>hi he</h2>
    @else
    <h2>hi she</h2>
    @foreach ($w as $x => $y)
        <h1>{{$x}}:{{$y}}</h1>
    @endforeach
    @endif
</body>
</html>
