<?php 

$server="localhost"; 
$Dbuser="root"; 
$Dbpass=""; 
$Dbname="e-shop"; 
$connection =mysqli_connect($server,$Dbuser ,$Dbpass,$Dbname); 
if(!$connection){ 
    echo "<script>"; 
    echo "alert(there is a problem conncetion)"; 
    echo "</script>";
}


?>