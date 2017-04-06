<?php
require('connect.php');

$klasa="nie ma takiej klasy";
if(isset($_GET['view_klas']))
{
	$klasa=$_GET['view_klas'];

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
echo "<big>Widzisz plan na klasy: ".str_replace("_", " ", $klasa)."</big>";


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
<a href ="index.php" class="btn btn-block btn-default"> Powrót na strone główna</a>
</form>
</div>
</div>
  



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>