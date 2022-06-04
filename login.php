<?php
session_start();
?>
<html>
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="login.css"> 
	<title>login form with session</title>
  </head>
  <body>
    <div class="container">
          <form  action="login.php" method="post" >
             <h5>Login Form</h5>
                <h6>Email address</h6>
                <input type="email" class="form-control" name="email_id"  placeholder="Enter Email">
				<h6>Password</h6>
                <input type="password" class="form-control" name="password" placeholder="Password">
         <div class="btn-box">
            <button type="submit" class="btn btn-primary" name="btnclick" >Login</button>
         </div>
		
	      </form>
	</div>

  </body>
</html>

<?php

if(isset($_POST["btnclick"])){

    $email_id = $_POST["email_id"];
    $password = $_POST["password"];

    $_SESSION["status"]=false;


    if ( $email_id == "bmoobdi@gmail.com" && $password == "12345" ){

        $_SESSION["email_id"] = $email_id;
        $_SESSION["status"]= true;
        header("Location: welcome.php");
    }
    else{
        echo "Incorrect Email or Password";
    }
    
}

?>