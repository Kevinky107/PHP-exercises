<?php 
    $name = $_POST['name'];
    $offer = $_POST['offer'];
    $price = $_POST['price'];
    $type = "Suite";
    $available = true;

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
?>

<h1>Create a room</h1>

<form method="POST">
    <label>Name</label>
    <input type="text" id="name" name="name"><br>
    <label>Price</label>
    <input type="text" id="price" name="price"><br>
    <label>Offer</label>
    <input type="text" id="offer" name="offer"><br>
    <input type="submit" value="Create">
</form>

<?php 

    } else {

        $mysqli = new mysqli("localhost", "root", "Kev!121514", "hotelmiranda");

        if ($mysqli->connect_errno) {
            echo "Error al conectar con MySQL: " . $mysqli->connect_error;
            exit();
        }

        $sql = "INSERT INTO rooms (name, price, offer, type, available) VALUES ('$name', '$price', '$offer', '$type', '$available')";
        error_log($sql);
        $mysqli->query($sql);
?>

<h1>Created room!</h1>
<ul>
    <li>Name: <?= $name ?></li>
    <li>Price: <?= $price ?></li>
    <li>Discount: <?= round(100-($offer * 100)/$price) ?>%</li>
</ul>

<?php 
        $mysqli->close();
    }
?>