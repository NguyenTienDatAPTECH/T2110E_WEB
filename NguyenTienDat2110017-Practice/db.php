<?php

$servername = 'localhost';
$unMysql = 'root';
$passMysql = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=t2111e-php", $unMysql, $passMysql);
    $conn->query("SET NAMES UTF8");
} catch (PDOException $e) {
    echo "Connect failed.!" . $e->getMessage();
    die("<h2>Lỗi kết nối CSDL.!<?h2>");
}