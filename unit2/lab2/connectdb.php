<?php
// creating a PDO object, see slide 32 for generics
 $db = new PDO("mysql:dbname=carent;host=localhost","phpmyadmin1","aston");

// exceptions for errors
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// Querying the table
echo "Your database connection is successful if you can read this message";
/*
$rows = $db->query("SELECT * FROM vehicles"); // this is not an array, but an object of type PDOStatement
foreach ($rows as $row) {
  ?>
  <li>ID: <?= $row["id"] ?>
      Registration Number: <?= $row["reg_no"] ?>
      Category: <?= $row["category"] ?>
      Brand: <?= $row["brand"] ?>
      Description: <?= $row["description"] ?>
      Daily Rate: <?= $row["dailyrate"] ?>
    </li>
  <?php
}
*/
?>
