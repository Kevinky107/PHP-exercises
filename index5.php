<?php 
    $mysqli = mysqli_connect("localhost","root","kev121514","hotelmiranda");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
      
    $sql = "SELECT * FROM Rooms";
    $rooms = mysqli_query($con, $sql);
      
    mysqli_free_result($rooms);
      
    mysqli_close($con);
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