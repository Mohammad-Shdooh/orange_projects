<?php
include_once "DbConn.php"; 

if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $name=$_POST['catName']; 
 echo $name ."<br>" ;
 if($name=="AddCategory"){ 
    $category_name=$_POST['name'];
    echo $category_name;
    $testQ ="SELECT * FROM category WHERE category.cname ='$category_name'";
    $resultTest = $connection->query($testQ); 
    echo "<pre>"; 
    print_r($resultTest);
    echo "</pre>";
    if($resultTest->num_rows > 0){ 
        echo '<script type="text/JavaScript">';  
            echo 'alert("JavaScript Alert Box by PHP")';  
        echo '</script>';  
        // the problem here is the alert cannot work .

        header("location:$name.php?name=$name");
    } else {
        $sql="INSERT INTO category (cname) VALUES ('$category_name')";
    $connection->query($sql); 
    header("location:$name.php?name=$name");

    }
    

 }else if($name=="Admin_AddItem"){ 
    
     $item_name     =$_POST['itemName']; 
     $image         =$_POST['image'];
     $price         =$_POST['price']; 
     $discreption   =$_POST['discreption'];
     $cat_name      =$_POST['cat_name'];
    // query to get cat_id . 
     $catQ      = "SELECT * FROM category WHERE cname='$cat_name'"; 
     $catResult= $connection->query($catQ);
     $catrow    =$catResult->fetch_assoc();
     $cat_id    =$catrow['id'];
     
     // query to insert the new product .
     $AdditemQ  ="INSERT INTO item (name , image , price , discreption,cat_id ) 
     VALUES ('$item_name' , '$image' , '$price' , '$discreption','$cat_id' )"  ;

     $AdditemQuery = $connection->query($AdditemQ); 
     header("location:$name.php?name=$name");


 }
 
}else{ 
    echo "you can't do this proccess !cause you dont have permmission to do it ."; 
}

?>