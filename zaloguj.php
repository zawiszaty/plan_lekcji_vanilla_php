<?php
session_start();

if(isset($_SESSION['plan_l_logged']))
{
  header('location:edit.php');
  

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>sql_injecton test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="row">
  
  <div class="col-md-4 col-md-offset-4 well">
  	
<form role="form" action="login.php" method="post">
  <div class="form-group">
    <label >Login</label>
    <input type="text" class="form-control" id="login" placeholder="Podaj adres Login" name="login">
    <label >Hasło</label>
    <input type="password" class="form-control" id="password" placeholder="Podaj adres hasło" name="password">
    <input type="submit" class="btn btn-default btn-block" style="margin-top: 10px;">
</div>
</form>


  </div>
</div>
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>