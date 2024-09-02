<?php 
    $mysqli = new mysqli("localhost", "root", "Kev!121514", "hotelmiranda");

    if ($mysqli->connect_errno) {
        echo "Error al conectar con MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = "SELECT * FROM rooms";
    $rooms = $mysqli->query($sql);

    if (!$rooms) {
        echo "Error en la consulta: " . $mysqli->error;
        exit();
    }
?> 

<h1>Rooms</h1>

<?php foreach ($rooms as $room): ?>
    <ul>
        <li>Name: <?= htmlspecialchars($room['name']) ?></li>
        <li>Number: <?= htmlspecialchars($room['_id']) ?></li>
        <li>Price: <?= htmlspecialchars($room['price']) ?></li>
        <li>Discount: <?= round(100 - ($room['offer'] * 100) / $room['price']) ?>%</li>
    </ul>
<?php endforeach; ?>

<?php
    $mysqli->close();
?>