<?php 

include_once 'navBar.php';

$id = $_GET['id']; 

$server ="localhost";$Dbuser="root";$Dbpass="";$Dbname="news";
$connection = mysqli_connect($server ,$Dbuser,$Dbpass,$Dbname); 
if(!$connection){ 
    echo "there is some problems . can you try again later !"."<br>"; 
}else { 

    $sql ="SELECT titlenews.id,type ,title ,image , details
    FROM titlenews
    INNER JOIN discreption ON titlenews.id=discreption.id WHERE $id=titlenews.id";
    $result=$connection->query($sql); 
    $row = $result->fetch_assoc(); 
    
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
</head>
<body>
    
<div class="container p-5 mt-5 " style="box-shadow:5px 5px 5px 5px ;">
    <h1> <?php 
    
    echo $row['title'] ;
    
    ?> </h1>

<img src="<?php 
    
    echo $row['image'] ;
    
    ?> "
     alt="image here" width=50% style="box-shadow:5px 5px 5px 5px " >

</div>
<p>

<div class="container w-75 font-monospace mt-5">
<?php 
    
    echo $row['details'] ;
    
    ?> 
</p>
</div>




<script src="newsPage_main.js"></script>

</body>
</html>