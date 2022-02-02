<?php

include_once "DbConn.php"; 
$id=$_GET['id']; 
$sql = "DELETE FROM cart WHERE cart.id=$id"; 
$result=$connection->query($sql); 
header("REFRESH:1;URL=cart.php");

?>