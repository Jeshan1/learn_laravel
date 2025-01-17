<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the vote page !!</h1>

    @if (request('age'))
        <p>Your age is: {{ request('age') }}</p>
    @else
        <p>Your age is not here</p>
    @endif
</body>
</html>