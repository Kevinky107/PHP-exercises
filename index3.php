<?php 
    $json = file_get_contents("./rooms.json");
    $rooms = json_decode($json, true)
?> 

<h1>Rooms</h1>


<?php foreach ($rooms as $room): ?>
    <ol>
        <li>Name: <?= $room['name'] ?></li>
        <li>Number: <?= $room['id'] ?></li>
        <li>Price: <?= $room['price'] ?></li>
        <li>Discount: <?= round(100-($room['offer'] * 100)/$room['price']) ?>%</li>
    </ol>
<?php endforeach; ?>