<?php

include_once "DbConn.php"; 
$sql = "DELETE FROM cart"; 
$result = $connection->query($sql);
header("REFRESH:1;URL=home.php");

?>

