<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Form</title>
</head>
<body>
    <h1>Enter Your Age</h1>

    <!-- error message here -->
        @if(session('error'))
            <div style="color: red; font-weight: bold;">
                {{ session('error') }}
            </div>
        @endif

    <form action="{{ route('checkage') }}" method="POST">
        @csrf
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" >
        <button type="submit">Submit</button>
    </form>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>
