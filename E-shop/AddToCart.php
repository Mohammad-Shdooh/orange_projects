<?php 

include_once "DbConn.php"; 
include_once "navbar.php";
$id =$_GET['id']; 
$page_name=$_GET['name']; 

  $check = "SELECT * FROM cart WHERE item_id=$id" ;
  $isFound = $connection->query($check);
  if($isFound->num_rows > 0){ 
      echo "<script>"; 
      echo "alert(this item already Added to cart )"; 
      echo "</script>"; 
      //problem in alert .
  }else{ 
        $sql = "SELECT * FROM item WHERE id=$id"; 
        $result=$connection->query($sql);

    if($result->num_rows >0){ 
        $row=$result->fetch_assoc();
        $name=$row['name']; 
        $image=$row['image']; 
        $price=$row['price']; 
        $item_id=$row['id'];
        $q = "INSERT INTO  cart (name,image,price,item_id) VALUES ('$name','$image','$price','$item_id')"; 
        $connection->query($q);   
        
    }
  }
  if($page_name=='home.php'){ 
    header("location:$page_name");
  }else if($page_name=='category.php'){ 
    $cname=$_GET['cname'];
    header("location:$page_name?name=$cname");
  }else if($page_name=="review.php"){ 
    header("location:$page_name?id=$id");
  }


?>
