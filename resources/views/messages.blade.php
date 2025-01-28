<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Messages</h3>
    <hr>
    <ul>
        @foreach ($messages as $message)
        <li>
            <p>{{ $message->sender_name }} | {{ $message->sender_message }}</p>
        </li>
        @endforeach
    </ul>
</body>

</html>