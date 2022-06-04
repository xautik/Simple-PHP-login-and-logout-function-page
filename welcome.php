<?php
session_start();

if ($_SESSION["status"] != true){

    header("Location: login.php");
}

?>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="welcome.css">
    <title>Welcome Page</title>
  </head>

  <body>
  <div class="container">
    <h2>Welcome <?php echo $_SESSION["email_id"] ?></h2>
    <br>
    <form action="welcome.php" method="post">
	<div class="btn-box">	
    <button class="btn btn-primary" type="submit"  name="logout">Logout</button>
	</div>    
	</form>
</div>		
  </body>
</html>

<?php
if(isset($_POST["logout"])){
    header("Location: logout.php");
}
?>