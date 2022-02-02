<?php 

include_once "DbConn.php"; 
$sql = "SELECT * FROM item"; 
$result=$connection->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item</title>
    <link rel="stylesheet" href="item_style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body >
    

<div class="container-fluid bg-trasparent my-4 p-3 " style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
        <?php 
        if($result->num_rows >0){
            while($row=$result->fetch_assoc()){
        echo '<div class="card h-100 shadow-sm">' ;
         echo '<a href="review.php?id='.$row['id'].'">';
           echo '<img src='.$row['image'].' class="card-img-top" alt="product.title" />';
         echo '</a>';

         echo '<div class="label-top shadow-sm">';
            echo '<a class="text-white" href="#">'.$row['name'].'</a>';
         echo '</div>';
         echo ' <div class="card-body">';
            echo '<div class="clearfix mb-3">';
                echo '<span class="float-start badge rounded-pill bg-success">'.$row['price'].'JD</span>';
                echo '<span class="float-end"><a href=review.php?id='.$row['id'].' class="small text-muted text-uppercase aff-link">reviews</a></span>'; //here a link for reviwe.
                echo '<div class="d-grid gap-2 my-4">';
                   echo '<a href=AddToCart.php?name=home.php&id='.$row['id'].' class="btn btn-warning bold-btn">add to cart</a>';
                echo '</div>';
            echo '</div>';
         echo '</div>';
        echo "</div>";
    }
}
        ?>
     </div>
   </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>