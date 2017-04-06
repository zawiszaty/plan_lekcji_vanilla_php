<?php

require('connect.php');
session_start();



if(!isset($_SESSION['plan_l_logged']))
{
	header('location:index.php');
	

}
$klasa="błąd nie ma takiej klasy";
if(isset($_GET['edit_klas']))
{
$klasa=$_GET['edit_klas'];


$klasa= str_replace(";", "", $klasa);
$klasa= str_replace("=", "", $klasa);
$klasa= str_replace("(", "", $klasa);
$klasa= str_replace("or", "", $klasa);
$klasa= str_replace("DELETE", "", $klasa);

  


}
else
{
echo $klasa;

die;
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
  
<div class="col-lg-12">
<table class="table table-bordered" style="overflow: auto;">
  <thead>
    <tr>
      <th>Godzina</th>
      <th>Poniedziałek</th>
      <th>Sala</th>
       <th>Wtorek</th>
        <th>Sala</th>
         <th>Środa</th>
          <th>Sala</th>
           <th>Czwartek</th>
            <th>Sala</th>
             <th>Piątek</th>
              <th>Sala</th>
    </tr>
    <form action="send_edit.php" method="post">
  </thead>
  <tbody>
    
  

<?php
//klasa_1_ti
$_SESSION['klass']=$klasa;
echo "<big>Edytujesz klase: ".str_replace("_", " ", $klasa)."</big>";


$this_klas= $pdo->prepare( 'SELECT * FROM '.$klasa );
    
  

    $this_klas->execute();


$d= $this_klas->fetchall();

if( count($d)==0)
{
  echo "nie ma takiej klasy ERROR";

}
else
{


$id=1;
foreach($d as$key => $value)
      {

      echo "
<tr>
<td>8:00</td>
<td><input type='text' class='btn btn-block' name='poniedzialek".$id."' placeholder='{$value['poniedzialek']}''></td>
<td><input type='text' class='btn btn-block' name='klasap".$id."' placeholder='{$value['klasap']}'></td>
<td><input type='text' class='btn btn-block' name='wtorek".$id."' placeholder='{$value['wtorek']}'></td>
<td><input type='text' class='btn btn-block' name='klasaw".$id."' placeholder='{$value['klasaw']}'></td>
<td><input type='text' class='btn btn-block' name='sroda".$id."' placeholder='{$value['sroda']}'></td>
<td><input type='text' class='btn btn-block' name='klasas".$id."' placeholder='{$value['klasas']}'></td>
<td><input type='text' class='btn btn-block' name='czwartek".$id."' placeholder='{$value['czwartek']}'></td>
<td><input type='text' class='btn btn-block' name='klasacz".$id."' placeholder='{$value['klasacz']}'></td>
<td><input type='text' class='btn btn-block' name='piatek".$id."' placeholder='{$value['piatek']}'></td>
<td><input type='text' class='btn btn-block' name='klasapi".$id."' placeholder='{$value['klasapi']}'></td>
</tr>
";
$id++;
}


/*
foreach($d as$key => $value)
      {
      echo "
<tr>

      <td>{$value['poniedzialek']}</td>
      <td>{$value['klasap']}</td>
      <td>{$value['wtorek']}</td>
       <td>{$value['klasaw']}</td>
        <td>{$value['sroda']}</td>
         <td>{$value['klasas']}</td>
          <td>{$value['czwartek']}</td>
           <td>{$value['klasacz']}</td>
            <td>{$value['piatek']}</td>
             <td>{$value['klasapi']}</td>
             
    </tr>
      ";
      }

*/


}
     


    

?>


</table>
<input type="submit" value="zmien" class="btn btn-block btn-default">
</form>
</div>
</div>
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>