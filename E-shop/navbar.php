<?php 
include_once "DbConn.php"; 
$sql ="SELECT cname FROM  category ";
$result=$connection->query($sql); 



?>
<!--TITLE-->
<title>E-SHOP</title>

<!--SHORTCUT ICON-->
<link rel="shortcut icon" href="" />

<!--META TAGS-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 

<!--PLUGIN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <link rel="stylesheet" href="nav_Style.css">

<!--EXTERNAL STYLESHEET
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="css/animation.css">-->
</head>
<body>
<!--TOP NAVIGATION-->
<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img class="logo" src="https://i.ibb.co/ZH11dmd/logo.png" alt=""></a>
<a id="active">E-SHOP</a>
<a href="home.php">HOME</a>
<div class="dropdown">
<button class="dropbtn"> CATEGORY
<i class="fa fa-caret-down"></i>
</button>

<div class="dropdown-content animate">
<?php 

if($result->num_rows >0){ 
    while($row=$result->fetch_assoc()){ 
       echo "<a href=category.php?name=".$row['cname'].">";
         echo $row['cname']; 
       echo "</a>"; 

    }
}


?>
</div>
</div> 
<a href="cart.php">Cart</a>
<a href="checkOut.php">Checkout</a>
<a href="#about" style="float:right;padding: 24px 2px;"><i class="fa fa-search"></i></a>
<a href="logIn.php" style="float:right;padding: 24px 2px;"><i class="fa fa-user-circle"></i></a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>






<!--BANNER-->
<div class="banner" id="banner">
<div class="slideshow">
<div class="overlay"></div>
<img class="mySlides" src="https://i.ibb.co/y5P8bDW/slide-1.jpg">
<img class="mySlides" src="https://i.ibb.co/WHLFx3Q/slide-2.jpg">
<img class="mySlides" src="https://i.ibb.co/QFFxwTN/slide-3.jpg">
</div>
<div id="ourclients">
<div class="clients-wrap">
<ul id="clientlogo" class="clearfix">
<li>
<h4>1Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>2Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>3Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>4Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>5Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
<li>
<h4>6Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
</li>
</ul>
</div>
</div>
</div>

<script src="main.js"></script>
