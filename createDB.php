<?php
$pdo = new PDO('mysql:host=mysql;charset=utf8mb4', 'root', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = file_get_contents("schema.sql");
$stmt = $pdo->prepare($query);
$stmt->execute();
$stmt->closeCursor();
echo "Ran schema.sql \r\n";