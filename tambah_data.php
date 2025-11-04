<?php

echo "Ini adalah halaman untuk menambah data user";

$sql = "INSERT INTO Users (nama, email) VALUES ('Budi', 'budi@example.com')";

echo "<br>Query: " . $sql;
?>