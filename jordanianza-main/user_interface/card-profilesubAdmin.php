<?php 
include_once("../admin/config.php");
include_once ("template/header.php");
$navbarTrans = false;
include_once ("template/navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="themes/CSS/sop.css" rel="stylesheet">
<!-- <link href="themes/CSS/boot.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
    
<?php

if (isset($_GET['showAll'])) {
    $cat = $_GET['showAll'];

$stmt = "SELECT id,name FROM category WHERE name LIKE '%$cat%'";

$resultset1 = mysqli_query($conn, $stmt) or die("database error:". mysqli_error($conn));

while($recordCate = mysqli_fetch_assoc($resultset1)){
    $cate_id = $recordCate['id'];
    $cate_name = $recordCate['name']; ?>
    <div class="container">
    <h1 class="page-header text-center m-5"> <span class="label label-primary" style="color:white;background-color: #EABF9F!important;border:1px solid white; border-radius:15px 0px;padding:10px;"> <?php echo $cate_name; ?> </h1></span>
	<div class="row">
    <?php

	$sql = "SELECT id, username, email, address, profile_pic, facebook, instagram, cate_id,type  FROM sub_admin WHERE cate_id = $cate_id ";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
            
	while( $record = mysqli_fetch_assoc($resultset) ) { ?>
 <?php if ($record['type']!=1){ 

?>
		<div class="col-md-4 call">
            <a href="../sidebar-09/profile.php?id=<?php echo $record['id'];?>"><div class="profile-card-2 h-100">

                <?php if (!empty($record['profile_pic'] )) { 
                  echo'  <img src="../sub-admin/images/'. $record['profile_pic'] . ' " class="img-responsive w-100 h-100">';}
                    else { 
                       echo' <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" class="img img-responsive w-100 ">';}
                          ?>
                    <div class="profile-name"><?php echo $record['username']; ?></div>
                    <div class="profile-username"><?php echo $record['email']; ?></div>
                    <div class="profile-email"><?php echo $cate_name; ?></div>
                    <div class="profile-icons"><a class="text-white" href="<?php echo $record['facebook']; ?>"><i class="fa fa-facebook"></i></a><a class="text-white" href="<?php echo $record['instagram']; ?> "><i class="fa fa-instagram"></i></a>
                    </div>
            </div></a>
        </div>
    <?php }} ?>
    </div>
</div>
<?php }

}
// else {
//      header("Location: ../dashboard.php");
//      exit;
// }
?>
</body>
<?php require 'template/footer.php'?>