<?php 
    $rooms = [
        ['ID' => 0, 'Name' => 'Suite', 'Number' => 107, 'Price' => 350, 'Discount' => 300],
        ['ID' => 1, 'Name' => 'Double Bed', 'Number' => 108, 'Price' => 250, 'Discount' => 220],
        ['ID' => 2, 'Name' => 'Single Bed', 'Number' => 109, 'Price' => 200, 'Discount' => 190]
    ];
?> 

<h1>Rooms</h1>
<pre>
    <?php print_r($rooms) ?>
</pre>