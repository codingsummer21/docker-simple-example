<?php

$db = new mysqli("db", "root", "example", "eshop");

$result = $db->query("SELECT * FROM products");


if($result) {
    echo "<h1>Products</h1>";
    while($row = $result->fetch_object()) {
        echo $row->name . "<br>";
    }
}