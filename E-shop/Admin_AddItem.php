<?php

include_once "DbConn.php"; 
include_once "sidebar.php"; 

$name=$_GET['name'];

$sql = "SELECT * FROM category"; 
$result = $connection->query($sql); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="AddCIE.php" method="post">
            <input style="display:none;" type="text" name="catName" value="<?php echo $name; ?>">
				<span class="contact100-form-title">
					Add product!
				</span>
                    <!-- the name  -->
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">product Name </span>
					<input class="input100" type="text" name="itemName" placeholder="Enter product name">
					<span class="focus-input100"></span>
				</div>
                <!-- choose image :   -->
                <span class="label-input100">choose image </span>

                <div class="wrap-contact100-form-btn"> 
						<div class="contact100-form-bgbtn"></div>
					<input type="file" name="image" >
					</div>
				</div>

                 <!-- the category type  :   -->
				<div class="wrap-input100 input100-select">
					<span class="label-input100">category </span>
					<div>
						<select class="selection-2" name="cat_name">
                        <?php 

                             if($result->num_rows >0){ 
                             while($row=$result->fetch_assoc()){ 
                                echo "<option value=".$row['cname'].">";
                                     echo $row['cname'];
                                 echo "</option>";
                                                                 }
                                                    }

?>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

                 <!-- the price :   -->
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">price </span>
					<input class="input100" type="text" name="price" placeholder="Enter product price">
					<span class="focus-input100"></span>
				</div>

                <!-- the discreption :   -->
                
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">discreption</span>
					<textarea class="input100" name="discreption" placeholder="product discreption here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Add
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>


            <div style="margin:10px 10px 10px 10px " class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="Admin.php" class="contact100-form-btn">
							<span>
								Close
								<i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
							</span>
                      </a>
					</div>
				</div>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>






</body>
</html>