<?php
/*$servername = "184.168.194.60";
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
    */

/*$servername = "184.168.194.60:1433";
$username = "osmo";
$password = "osmo!123"; 
$conn = mysqli_connect($servername, $username, $password); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/
/*
$serverName = "184.168.194.60\sqlexpress:1433"; 
$connectionInfo = array( "Database"=>"osmo", "UID"=>"osmo", "PWD"=>"osmo123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
*/
$serverName = "184.168.194.60, 1433"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"osmo", "UID"=>"osmo", "PWD"=>"osmo!123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}


?>