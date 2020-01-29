<?php
$servername = "184.168.194.60:1433";
$username = "osmo";
$password = "osmo!123";

try {
    $conn = new PDO("mysql:host=$servername;dbname=osmo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>