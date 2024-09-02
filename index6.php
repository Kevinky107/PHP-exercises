<?php 
    $id = isset($_GET["id"]) ? intval($_GET["id"]) : -1;

    $mysqli = new mysqli("localhost", "root", "Kev!121514", "hotelmiranda");

    if ($mysqli->connect_errno) {
        echo "Error al conectar con MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = "SELECT * FROM rooms WHERE rooms._id = $id";

    $rooms = $mysqli->query($sql);
    
    if ($rooms && $rooms->num_rows > 0) {
        $room = $rooms->fetch_assoc();
    ?>

<h1>Room <?= $room['name'] ?></h1>
<ul>
    <li>Name: <?= $room['name'] ?></li>
    <li>Number: <?= $room['_id'] ?></li>
    <li>Price: <?= $room['price'] ?></li>
    <li>Discount: <?= round(100-($room['offer'] * 100)/$room['price']) ?>%</li>
</ul>
    
<?php  
    } else { 
?>
no id
<?php
    }
?>