<?php

include_once "DbConn.php";
include_once "sidebar.php";
$categories_type_Q = "SELECT * FROM category ";
$categories_type_Query = $connection->query($categories_type_Q);

if($_SERVER['REQUEST_METHOD']=="POST"){
    $cat_name=$_POST['cat_name']; 
    // echo $cat_name;
    $search_for_cat_id       ="SELECT * FROM category WHERE cname='$cat_name'";
    $search_for_cat_id_query =$connection->query($search_for_cat_id);
    $row=$search_for_cat_id_query->fetch_assoc();
    
    $cat_id =$row['id'];
    $sql ="SELECT * FROM item WHERE cat_id='$cat_id' " ;      
     $result=$connection->query($sql);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart_style.css">
    <style>
        .bton { 
            padding: 10px 40px 10px 40px ;
            background-color :black;
            color :white;
            border-radius :15px;

        }
       
        .drwl{ 
            text-align:center;
            padding:5px 15px 5px 15px ;
            border-radius:15px;
        }
        .form{ 
            text-align:center;
            box-shadow:5px 5px 5px 5px ;   
            border-radius :15px;
            margin :15px auto ;
        }
    </style>
</head>
<body>
 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">

<select name="cat_name" class="drwl" >
<?php

if($categories_type_Query->num_rows >0){ 
    while($row=$categories_type_Query->fetch_assoc()){ 
        echo "<option>";
        echo $row['cname'];
        echo "</option>";
    }
}

?>
</select>
<input class="bton" type="submit" value="Ok">
</form>



<div class="d-grid margin btn ">
  <?php 
  if($_SERVER['REQUEST_METHOD']=="POST")
  if($result->num_rows >0){ 
      while($row=$result->fetch_assoc()){
            
echo "<div class='card'>";
 
    echo "<div class=' imgsize '>";
        echo "<img src='".$row['image']."'/>";
    echo "</div>";
    echo "<div>"; 
      echo "<h3 class='col'>".$row['name']."</h3>";
    echo "</div>";
    echo "<div>";  
      echo "<p>Price : ".$row['price']."-JD</p>";
    echo "</div>";
    echo "<a style='background-color :black ;color:white;'
     href=DeleteCIE.php?catName=Admin_showProduct&id=".$row['id'].">
     Delete";
    echo "</a>";
    echo "<a style='background-color :black ;color:white;' href=EditCIE.php?id=".$row['id'].">Edit";
    echo "</a>";
echo "</div>";

      }

  }
  else { 
      echo "<script>"; 
        echo "alert(your item Empty !)";
      echo "</script>";
  }
  ?>
</div>
 



</body>
</html>