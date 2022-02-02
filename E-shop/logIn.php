<?php 
if ($_SERVER['REQUEST_METHOD']=="POST"){
session_start(); 
    $_SESSION['email']=$_POST['email'] ;
    $_SESSION['pass']=$_POST['pswd'] ;

include_once "DbConn.php";
$sql ="SELECT email , pass FROM admin";
$result=$connection->query($sql);

if($result->num_rows >0){ 
    while($row=$result->fetch_assoc()) { 
        if($row['email']==$_SESSION['email'] and $row['pass']==$_SESSION['pass']){ 
            header("REFRESH:1;URL='Admin.php'");
        }else {
            echo "<script>"."alert('your email or password is wrong ! try again.')"."</script>";
            
        }
    }
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Register_style.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="logIn_style.css">
</head>
<body>

	<div class="main">  	
		<!-- <input type="checkbox" id="chk" aria-hidden="true"> -->

			<!-- <div class="signup">
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign up</button>
                   
				</form>
			</div> -->

			<div class="login">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>