<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enzo Iacchetti</title>
</head>

<body>
    <header>
        <nav>
            <a href='{{ url('/') }}'>Home</a>
            <a href='{{ url('/greggio') }}'>Ezio Greggio</a>
            <a href='{{ url('/iacchetti') }}'>Enzo Iacchetti</a>
            <a href='{{ url('/scotti') }}'>Gerry Scotti</a>
        </nav>
    </header>

    <p>{{ $name }} {{ $surname }}, {{ $age }} anni</p>

</body>

</html>
