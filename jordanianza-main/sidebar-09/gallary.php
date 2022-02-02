
<?php 

// require "conn.php";
// require 'function.php';

if($_SERVER['REQUEST_METHOD']=="POST"){ 
  $id=$_POST['id']; 
  
}else { 
  $id=$_GET['id']; 

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<link rel="stylesheet" href="style.css">


</head>
<body >

 <div class="container ">
         
<?php $cate_result = getSubCategory($conn, $id); 
if($cate_result->num_rows >0 ) {  ?>
         <div class="portfolio-menu mt-2 mb-4">
           
         <ul>
              <li class="btn btn-outline-dark active" data-filter="*">All</li>
            
            
            <?php 
while($cate_row = $cate_result->fetch_assoc()) { 
  if($cate_row['name']!="") { 

?>
    <li class="btn btn-outline-dark " data-filter=".<?= $cate_row['name']; ?>"><?= $cate_row['name']; ?></li>

    <?php }} ?>
    <!-- <li class="btn btn-outline-dar "><a href="#vvv">Video </a></li> -->

    </ul>
    <?php
     }else { 
    ?> 

<!-- When RESULT EMPTY  -->
<div class="alert alert-warning" role="alert">
 0 result .
</div>



<?php } ?>
</div>

         </div>



         <div class="container">
         <div class="portfolio-item row">
      
    <?php 

    
$result = getContent($conn, $id);

if($result->num_rows > 0 ) { 
  while($row=$result->fetch_assoc()){ 
    if($row['images']!= "" and $row['images']!="NULL") { 
//../sub-admin/uploads_image/
// don't forget add this ^ to the img tag .
    
?>


            <div class="item <?= $row['name']; ?> col-lg-3 col-md-4 col-6 col-sm">
               <a href="../sub-admin/uploads_image/<?= $row['images']; ?>" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="../sub-admin/uploads_image/<?= $row['images']; ?>" alt="">
               
               </a>
            </div>
       
            <?php
    }}} ?>
</div>
<!-- <div name="vvv" id="vvv">vvv</div> -->
<?php require "../user_interface/videos.php";?>
<script src="main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
</body>
</html>








