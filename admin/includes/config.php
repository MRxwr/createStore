<?php
$servername = "localhost";
$username = "u955967339_multiStoreUser";
$password = "N@b$90949089";
$dbname = "u955967339_multiStoreDB";
$dbconnect = new MySQLi($servername,$username,$password,$dbname);
if ( $dbconnect->connect_error ){
die("Connection Failed: " .$dbconnect->connect_error );
}
$sql = "SET CHARACTER SET utf8mb4";
$dbconnect->query($sql);

if( isset($_GET["storeTitle"]) && !empty($_GET["storeTitle"]) ){
    $check = selectDB("settings","`title` LIKE '%{$_GET["storeTitle"]}%'");
    if( !isset($check[0]["id"]) ){
        header("LOCATION: new.createstore.link");die();
    }
}

?>
 