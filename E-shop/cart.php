<?php 

include_once "DbConn.php";
include_once "navbar.php";

// function to show the cart item ...

$sql = "SELECT * FROM cart"; 
$result=$connection->query($sql); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="cart_style.css">
    <title>cart</title>
</head>
<body>
    <div class="d-grid margin btn ">
  <?php 
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
    echo "<a href=removeFromCart.php?id=".$row['id'].">REMOVE";
    echo "</a>";
echo "</div>";

      }

  }
  else { 
      echo "<script>"; 
        echo "alert(your Cart Empty !)";
      echo "</script>";
  }
  ?>
</div>
 
<div  class ="check_card"> 
    <?php  
    
    $sql ="SELECT price FROM cart";
    $result=$connection->query($sql); 
   $total_price =0; 
   if($result->num_rows >0 ){ 
    while($r=$result->fetch_assoc()){ 
    $total_price +=$r['price']; 
    }
}

    ?>
    <p>your total is <br> <span style="font-weight:bold;font-size:1.5rem;"><?php echo $total_price ; ?></span></p>
    <!-- for check out ... -->
    <a href="checkOut.php"> Check Out</a>
    </div>

</body>
</html>