<?php 
require "template/header.php";
$navbarTrans = false;
require "template/navbar.php";

// require_once "conn.php";
require "function.php";
$id=$_GET['id'];
$subAdmin=getSubAdminInfo($conn, $id);
?>




<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		  <!-- fontAowsem link START-->
          <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- fontAowsem link END-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch w-100">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
                    
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../sub-admin/uploads_image/<?= $subAdmin['profile_pic']; ?>);"></div>
	  				<h3><?= $subAdmin['username']; ?></h3>
                      <small><?= $subAdmin['name']; ?></small>
	  			</div>
	  		</div>


  <div class="container">

    <div> 
        <h6 class="text-center mt-2">About</h6>
   
   </div>

<div class="mt-2">
<?php if($subAdmin['address']!==""){ ?>
   <div>
      <i class="fas fa-map-marker-alt"></i> <?=$subAdmin['address'];?>
      </div> 
    <?php } ?>
</div>

    <?php if($subAdmin['phone']!==""){ ?>
        <div class="btn  btn-sm text-center text-light mt-2" style="margin-left:5px;">
        <i class="fas fa-phone-square-alt"></i> <a href="" class="text-light" ><?= $subAdmin['phone'];?></a>
        </div>
    <?php }?>
      <!-- About info END-->
    <hr>
    <div> 
        <h6 class="text-center mt-2">Contact</h6>
   
   </div>
   <div class="mt-3 btn btn-danger btn-sm">
           <!-- EMAIL  -->
               
                          <?php if($subAdmin['email']!==""){ ?>
                           <i class="fa fa-google"></i> 
                    <a class="btn btn-danger btn-sm "  target="_blank" rel="publisher"
                       href="mailto:<?=$subAdmin['email']?>">
                        <small><?= $subAdmin['email']; ?></small>
                    </a>

                    
                    <?php } ?>
   </div>

   <div class="mt-2 btn btn-primary btn-sm">
          
    <!-- FACEBOOK  -->
    <?php if($subAdmin['facebook']!==""){ ?>
    
<i class="fa fa-facebook"></i>

    <a class="btn btn-primary btn-sm" rel="publisher" target="_blank"
href="http://www.facebook.com/<?= $subAdmin['facebook']; ?>">

<small><?= $subAdmin['facebook']; ?> </small>
</a>

<?php } ?>
   </div>

   <div class="mt-2 btn btn-warning btn-sm">
          
       <!-- INSTAGRAM  -->
    <?php if($subAdmin['instagram']!==""){ ?>
    <i class="fa fa-instagram"></i>
    <a class="btn btn-warning btn-sm" rel="publisher" target="_blank"
href="http://www.instagram.com/<?= $subAdmin['instagram']; ?>">
<small><?= $subAdmin['instagram']; ?></small>
</a>

<?php } ?>
   
</div>
    
</div>


    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <?php require "gallary.php"; ?>
     </div>






    <?php 

     
    require "template/footer.php";

    ?> 


		</div>
    
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
  </body>
</html>
