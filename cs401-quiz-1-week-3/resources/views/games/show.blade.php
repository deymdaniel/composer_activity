<div>
    <h1>Game Details</h1>
    <ul>
        <li><b>ID:</b> {{ $game['id'] }}</li>
        <li><b>Title:</b> {{ $game['title'] }}</li>
        <li><b>Developer:</b> {{ $game['developer'] }}</li>
    </ul>
    <a href="{{ url('/games') }}">← Back to all games</a>
</div>
