<?php 
    $id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
    $json = file_get_contents("./rooms.json");
    $rooms = json_decode($json, true);
    $room = $rooms[$id];
?> 

<h1>Room <?= $room['name'] ?></h1>
<ul>
    <li>Name: <?= $room['name'] ?></li>
    <li>Number: <?= $room['id'] ?></li>
    <li>Price: <?= $room['price'] ?></li>
    <li>Discount: <?= round(100-($room['offer'] * 100)/$room['price']) ?>%</li>
</ul>