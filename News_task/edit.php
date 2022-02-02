<?php 
 
    if($_SERVER['REQUEST_METHOD']=="POST"){ 
        $id=$_POST['id'];
        $type=$_POST['type']; 
        $title=$_POST['title']; 
        $image =$_POST['image']; 
        $details=$_POST['text_area']; 
        
$server = "localhost"; 
$Dbuser="root"; 
$Dbpass=""; 
$Dbname="news"; 
$conn = mysqli_connect($server,$Dbuser,$Dbpass,$Dbname); 
if(!$conn){ 
    echo "<script>" ;
    echo "alert('there is an Error in DataBase ! please check it .')"; 
    echo "</script>";
}else { 

$Tsql ="UPDATE titlenews SET type='$type',title='$title'  WHERE titlenews.id=$id";
$Dsql="UPDATE discreption SET image='$image',details='$details ' WHERE discreption.id=$id";
$Tresult=$conn->query($Tsql);
$Dresult=$conn->query($Dsql);

}

    }
    



?>


