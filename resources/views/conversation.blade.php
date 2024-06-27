<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>{{ $participants->pluck('name')->join(', ') }}</h2>
    <ul>
        @foreach($conversation as $message)
            <li class="{{ $message->from_id == auth()->id() ? 'outgoing' : 'incoming' }}">
                <div class="message">
                    {{ $message->body }}
                </div>
                <div class="date">
                    {{ $message->created_at->format('M d, Y H:i A') }}
                </div>
            </li>
        @endforeach
    </ul>
    <form action="{{ route('conversation.store') }}" method="POST">
        @csrf
        <input type="hidden" name="recipient" value="{{ $participants->pluck('id')->join(',') }}">
        <input type="text" name="message">
        <button type="submit">Send</button>
    </form>



</body>
</html>
