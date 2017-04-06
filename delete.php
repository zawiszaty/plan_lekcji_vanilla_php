<?php

require('connect.php');
session_start();



if(!isset($_SESSION['plan_l_logged']))
{
	
	

}
else
{



$klass_delete =$_POST['klass_delete'];

echo $klass_delete;

$sth = $pdo->prepare('DELETE FROM `klasy` WHERE nazwa="'.$klass_delete.'" ' );
	 
		

		$sth->execute();

		$sth = $pdo->prepare('DROP TABLE '.$klass_delete );
	
		
 
		$sth->execute();
header('location:edit.php');


}
?>