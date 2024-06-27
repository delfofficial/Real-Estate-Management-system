<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <h2>Inbox</h2>
        <ul>
            @foreach($conversations as $conversation)
                <li>
                    <a href="{{ route('conversation.show', $conversation->id) }}">
                        {{ $conversation->name }}
                    </a>
                    <span class="date">
                        {{ $conversation->latestMessage()->created_at->format('M d, Y H:i A') }}
                    </span>
                    <span class="message">
                        {{ $conversation->latestMessage()->body }}
                    </span>
                </li>
            @endforeach
        </ul>
    

</body>
</html>
