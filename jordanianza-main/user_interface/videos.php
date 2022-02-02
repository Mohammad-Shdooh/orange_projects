<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){ 
  $id=$_POST['id']; 
  
}else { 
  $id=$_GET['id']; 

}

  
?>


<div class="container">
        
   <h1 class="page-header text-center m-3"> 
     <span class="label label-primary text-light" style="background-color:black!important;
opacity:0.7 ; border:1px solid white; border-radius:15px 0px;padding:10px;font-family:Cursive	;">VIDEOS
     </h1>
    </span>

</div>

<div class="row">
  
  <?php 

  $result = getVideo($conn, $id);

  if($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){ 
      if($row['video']!='NULL'){ 

   ?>
<!-- HERE IS THE VIDEO  -->

<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
  <video class="video-fluid w-100 z-depth-1  shadow-1-strong rounded mb-4 "  controls>
  <source src="../sub-admin/uploads_video/<?= $row['video'];?>" type="video/mp4" />
 </video>

</div>
<!-- End  THE VIDEO  -->
<?php } 

}
}else { 


?>

<!-- When RESULT EMPTY  -->
<div class="alert alert-warning" role="alert">
 0 result .
</div>
<?php } ?>
 </div>
 </div>
</div>







   
   