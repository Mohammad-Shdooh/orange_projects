<?php 



$server = "localhost"; 
$Dbuser="root"; 
$Dbpass=""; 
$Dbname="news"; 
$conn = mysqli_connect($server,$Dbuser,$Dbpass,$Dbname); 
if(!$conn){ 
    echo "<script>" ;
    echo "alert('there is an Error in DataBase ! please check it .')"; 
    echo "</script>";
}
 else { 
     

    $name=$_GET['name'];
    $id =$_GET['id']; 
// delete from DB : 
if($name=="delete"){
 $sql = "DELETE  
     FROM discreption 
     WHERE discreption.id=$id";
     $result =$conn->query($sql); 
     
$s = "DELETE  
FROM titlenews
WHERE titlenews.id=$id";
$r =$conn->query($s); 


     echo "deleted successfuly";
     header("REFRESH:0;URL=Admin.php");


}
else if($name=="edit"){
    echo "Edit";
} elseif($name=="Add"){ 
echo "Add"; 
}
    
      
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <style>
        .hidden{ 
            display :none;
        }
    </style>
</head>
<body>
    
 <form action="<?php echo $name.".php"; ?>" method="post" >

 <input type="text" class="hidden" name="id" value="<?php echo $id ?>">

 <label for="type">enter the type :</label>
 <select name="type" >
 <option value="sport">Sport</option>
 <option value="wether">Wearher</option>
 <option value="sounds">Sound</option>
 </select><br>
 <input type="text" name="title" placeholder="Enter  a title"><br>
 <input type="text" name="image" placeholder="Enter  an image_path"><br>
 <textarea name="text_area" id="details" cols="30" rows="10" placeholder="write details here ."></textarea><br>
 <input type="submit" value="Update">

 
 </form>


</body>
</html>