<?php
include_once "DbConn.php"; 


// the catName for return to the page that come from it :
 if($_SERVER['REQUEST_METHOD']=="GET"){ 
    $name=$_GET['catName']; 
    echo $name ."<br>" ;
 }else {
 $name=$_POST['catName']; 
 echo $name ."<br>" ;
 }
   
//////////////////// catName .
 // to remove category : 
if($name=="AddCategory"){ 
    //that come from addcategory page . it's have the controle of category .
    $category_name=$_POST['name'];
    echo $category_name;
    $testQ ="SELECT * FROM category WHERE category.cname ='$category_name'";
    $resultTest = $connection->query($testQ); 
    
    if(!$resultTest->num_rows > 0){ 
        echo "not deleted";
        echo '<script type="text/JavaScript">';  
            echo 'alert("JavaScript Alert Box by PHP")';  
        echo '</script>';  
        // the problem here is the alert cannot work .

        header("location:$name.php?name=$name");
    } else {
        $sql="DELETE FROM category WHERE category.cname='$category_name'";
        $connection->query($sql); 
        header("location:$name.php?name=$name");
    }
    

 }else if($name=="Admin_showProduct"){ 
    
     $item_id     =$_GET['id']; 
    
     
     // query to delete the new product .
     $DeleteitemQ  ="DELETE FROM item WHERE item.id=$item_id";
     
     $DeleteitemQuery = $connection->query($DeleteitemQ); 
     header("location:$name.php?name=$name");

 }
 


?>