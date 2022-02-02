<?php 

include_once 'navBar.php';

$server ="localhost";$Dbuser="root";$Dbpass="";$Dbname="news";
$connection = mysqli_connect($server ,$Dbuser,$Dbpass,$Dbname); 
if(!$connection){ 
    echo "there is some problems . can you try again later !"."<br>"; 
}else { 

    $sql ="SELECT titlenews.id,type ,title ,image , details
    FROM titlenews
    INNER JOIN discreption ON titlenews.id=discreption.id WHERE type='sport'";
    $result=$connection->query($sql); 
    $row =$result->fetch_assoc();
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sport</title>
</head>
<body>
    


<div id="BBCTitle">
      <div class="center-content title-text">Welcome to the BBC SPORT ! </div>
    </div>
    <hr >
    <!--START OF ACTUAL DOCUMENT-->


         <div class="document-container" style="margin-top: 20px">
      <div class="center-content opening-cards">
        <a class="first-card" href="mainPage.php?id=<?php   echo $row['id']; ?>">
          <div class="card-img-container">
            <img
              src="<?php  echo $row['image']; ?>"
              
            />
          </div>
          <p>   <?php echo $row['title'] ?>  </p>
        </a>
        



        <?php 
        
        if($result->num_rows > 0){ 
            while($row= $result->fetch_assoc()){ 
                
        echo  '<a href=mainPage.php?id='.$row['id'].'>'  ;
            echo '<div class="card-img-container">';
              echo "<img
                       src='".$row['image']."'
                
                     />";
    
            echo '</div>';
            echo '<p>'.$row['title'].'</p>' ;
        echo '</a>';
      
            }
        }
        




        ?>

      </div>
    </div>




    <script src="newsPage_main.js"></script>

</body>
</html>