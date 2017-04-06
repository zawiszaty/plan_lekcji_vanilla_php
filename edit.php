<?php 
session_start();
require('connect.php');
if(isset($_GET['logaut']))
{
	unset( $_SESSION['plan_l_logged']);
}

if(!isset($_SESSION['plan_l_logged']))
{
	header('location:index.php');
	

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
<div class="container">
<div class="row">

  <div class="col-md-12 well">
  	<div class="row">
<button class="btn-block btn-danger btn ">Szkoła Zawodowa</button>
</div>

<div class="row" >



<?php
$sth = $pdo->prepare( 'SELECT * FROM `klasy` WHERE typ="szkola_zawodowa"' );
		

		$sth->execute();
		$klasy=$sth->fetchall();
		foreach ($klasy as $key => $value) {
			echo "<a href='plan_edit.php?edit_klas={$value['nazwa']}' class='btn-danger btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
		}
?>

</div>
<div class="row" >
<button class="btn-block btn-success btn " style="margin-top: 10px;">Technikum</button>
</div>

<div class="row" >



<?php
$sth = $pdo->prepare( 'SELECT * FROM `klasy` WHERE typ="technikum"' );
		

		$sth->execute();
		$klasy=$sth->fetchall();
		foreach ($klasy as $key => $value) {
			echo "<a href='plan_edit.php?edit_klas={$value['nazwa']}' class='btn-success btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
		}
?>

</div>





<div class="row" >
<button class="btn-block btn-info btn " style="margin-top: 10px;">Liceum</button>
</div>

<div class="row" >



<?php
$sth = $pdo->prepare( 'SELECT * FROM `klasy` WHERE typ="liceum"' );
		

		$sth->execute();
		$klasy=$sth->fetchall();
		foreach ($klasy as $key => $value) {
			echo "<a href='plan_edit.php?edit_klas={$value['nazwa']}' class='btn-info btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
		}
?>

</div>





  </div>






</div>
  


<div class="row">


<div class="col-md-2">
	<a href="edit.php?logaut" class="btn-warning btn-block btn btn-big">Wyloguj</a>

</div>




		<div class="col-md-5 ">
		<form class="form-inline" method="post" action="send_new.php">
			
		<input type="text" name="new_klass" placeholder="Wpisz nazwe nowej klasy " class="form-control ">
	
<select class="form-control" name="wybor">
	<option value="szkola_zawodowa">Szkoła zawodowa</option>
	<option value="technikum">Technikum</option>
	<option value="liceum">Liceum</option>

</select>
<input type="submit" value="dodaj" class="btn btn-default">

		</form>


	



</div>
<div class="col-md-5 ">
		<form class="form-inline" method="post" action="delete.php">
			Wybierz klase do usuniecia:
	<select class="form-control" name="klass_delete">
	</option>
<?php
	$sth = $pdo->prepare( 'SELECT * FROM `klasy` ' );
		

		$sth->execute();
		$klasy=$sth->fetchall();
		foreach ($klasy as $key => $value) {
			echo "<option value='{$value['nazwa']}''>{$value['nazwa']}</option>";
			
		}
	
?>
</select>
<input type="submit" value="usun" class="btn btn-danger">
		</form>
		</div>

</div>
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>