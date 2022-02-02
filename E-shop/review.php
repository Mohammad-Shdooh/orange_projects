<?php 
// code to see the item details ...
include_once "DbConn.php"; 
include_once "navbar.php";
$id=$_GET['id']; 
$sql="SELECT * FROM item WHERE item.id=$id";
$result=$connection->query($sql); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
    <link rel="stylesheet" href="review_style.css">
</head>
<body>


    <?php 
    if($result->num_rows >0 ){ 
        while($row=$result->fetch_assoc()){ 
      echo '<div class="card" style="background-image:linear-gradient(90deg,
      hsl(0, 0%, 10%), hsla(0, 0%, 10%, 0.9), 
        hsla(0, 0%, 10%, 0)), url('.$row['image'].')">'; 

        echo "<h2>"; 
         echo $row['name']; 
        echo "</h2>"; 
        echo "<p>"; 
        echo $row['discreption'];
        echo "</p>";
        echo '<div class="learn-more">';
           echo ' <div class="line"> <hr> </div>';
           echo '<a href="AddToCart.php?name=review.php&id='.$row['id'].'">Add to Cart</a>';
        echo '</div>';

      echo '</div>'; 
        }}
    ?>















</body>
</html>