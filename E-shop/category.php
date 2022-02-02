<?php 

include_once "navbar.php";
include_once "DbConn.php";
$category=$_GET['name'];
$sql ="SELECT cname , item.id,name , image, price ,discreption
 FROM category 
 INNER JOIN item ON category.id=item.cat_id WHERE cname='$category' ";
 $result=$connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $category; ?></title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="category_style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    
<div class="col hp d-grid ">
        <?php 
        if($result->num_rows >0){
            while($row=$result->fetch_assoc()){
               
        echo '<div class="size_image width ">' ;
         echo '<a href="#">';
           echo '<img src='.$row['image'].' class="" alt="product.title" />';
         echo '</a>';

         echo '<div class="margin">';
            echo '<a class="" href="#"><h3>'.$row['name'].'</h3></a>';
         echo '</div>';
         echo ' <div class="margin">';
            echo '<div class="margin">';
                echo '<span class="">'.$row['price'].'JD</span>';
                echo '<div class="margin btn ">';
                   echo '<a href=AddToCart.php?cname='.$category.'&name=category.php&id='.$row['id'].' class="">add to cart <i class="fas fa-shopping-cart"></i></a>';
                echo '</div>';
            echo '</div>';
         echo '</div>';
        echo "</div>";
     
    }
}
        ?>
     </div>

</body>
</html>