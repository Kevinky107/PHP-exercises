<h1>Rooms</h1>
@foreach ($rooms as $room)
    <ol>
        {{ $room['name']}}
        <ul>
            <li>Number: {{ $room['_id'] }}</li>
            <li>Price: {{ $room['price'] }}</li>
            <li>Offer: {{ $room['offer'] }}</li>
        </ul>
    </ol>
@endforeach