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

$Tsql ="INSERT INTO titlenews (type,title) VALUES ('$type','$title')";
$Dsql="INSERT INTO discreption (image,details) VALUES ('$image','$details')";
$Tresult=$conn->query($Tsql);
$Dresult=$conn->query($Dsql);

}
header("REFRESH:1;URL=Admin.php");

    }
    



?>



