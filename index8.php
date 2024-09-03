
<?php 
    $name = $_POST['name'];
    $number = $_POST['number'];
    $price = $_POST['price'];

    if($_SERVER['REQUEST_METHOD'] === 'GET') {
?>

<h1>Create a room</h1>

<form method="POST">
    <label>Name</label>
    <input type="text" id="name" name="name"><br>
    <label>Number</label>
    <input type="text" id="number" name="number"><br>
    <label>Price</label>
    <input type="text" id="price" name="price"><br>
    <input type="submit" value="Create">
</form>

<?php 
    $mysqli = new mysqli("localhost", "root", "Kev!121514", "hotelmiranda");

    } else {
?>

<h1>Created room!</h1>
<ul>
    <li>Name: <?= $name ?></li>
    <li>Number: <?= $number ?></li>
    <li>Price: <?= $price ?></li>
</ul>

<?php 
    }
?>