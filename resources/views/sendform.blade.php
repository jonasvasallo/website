<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/sendform" method="POST">
        @csrf
        <input type="text" name="name" id="" value="{{ old('name') }}">
        <input type="text" name="message" id="" value="{{ old('message') }}">
        <input type="submit" value="Submit">
        @if ($errors -> any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                <p>{{ $error }}</p>
            </li>
            @endforeach
        </ul>
        @endif
    </form>
</body>

</html>