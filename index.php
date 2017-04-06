<?php

require('connect.php');


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
			echo "<a href='plan_view.php?view_klas={$value['nazwa']}' class='btn-danger btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
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
			echo "<a href='plan_view.php?view_klas={$value['nazwa']}' class='btn-success btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
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
			echo "<a href='plan_view.php?view_klas={$value['nazwa']}' class='btn-info btn' style='margin-top: 10px;''>{$value['nazwa']}</a>";
			
		}
?>

</div>





  </div>






</div>
</div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>