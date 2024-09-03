<?php 
    $mysqli = new mysqli("localhost", "root", "Kev!121514", "hotelmiranda");
    $name = isset($_GET["search"]) ? intval($_GET["search"]) : null;

    if ($mysqli->connect_errno) {
        echo "Error al conectar con MySQL: " . $mysqli->connect_error;
        exit();
    }

    $sql = $name ? "SELECT * FROM rooms WHERE name LIKE '%$name%';" : "SELECT * FROM rooms";
    $rooms = $mysqli->query($sql);
    
?> 

<h1>Rooms</h1>

<form>
    <label for="search">Search for a room (name)</label>
    <input type="text" id="search" name="search" placeholder="Search term">
    <input type="submit" value="Search">
</form>

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