<?php

require('connect.php');
session_start();



if(!isset($_SESSION['plan_l_logged']))
{
	header('location:index.php');
	

}
else
{

echo $_SESSION['klass'];
$poniedzialek;
$klasap;
$wtorek;
$klasaw;
$sroda;
$klasas;
$czwartek;
$klasacz;
$piatek;
$klasapi;
$i=1;
for ($i=1; $i <10 ; $i++) { 

	if (isset($_POST['poniedzialek'.$i])) {
	
	
	$poniedzialek = $_POST['poniedzialek'.$i];

	if(strlen($poniedzialek)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `poniedzialek`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $poniedzialek, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}

	echo $poniedzialek;
}

if (isset($_POST['klasap'.$i])) {
	
	
	$klasap = $_POST['klasap'.$i];

	if(strlen($klasap)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `klasap`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $klasap, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $klasap;
}
if (isset($_POST['wtorek'.$i])) {
	
	
	$wtorek = $_POST['wtorek'.$i];

	if(strlen($wtorek)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `wtorek`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $wtorek, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $wtorek;
}

if (isset($_POST['klasaw'.$i])) {
	
	
	$klasaw = $_POST['klasaw'.$i];
		if(strlen($klasaw)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `klasaw`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $klasaw, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $klasaw;
}

if (isset($_POST['sroda'.$i])) {
	
	
	$sroda = $_POST['sroda'.$i];
		if(strlen($sroda)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `sroda`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $sroda, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $sroda;
}
if (isset($_POST['klasas'.$i])) {
	
	
	$klasas = $_POST['klasas'.$i];
		if(strlen($klasas)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `klasas`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $klasas, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $klasas;
}

if (isset($_POST['czwartek'.$i])) {
	
	
	$czwartek = $_POST['czwartek'.$i];
	if(strlen($czwartek)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `czwartek`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $czwartek, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $czwartek;
}
if (isset($_POST['klasacz'.$i])) {
	
	
	$klasacz = $_POST['klasacz'.$i];
	if(strlen($klasacz)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `klasacz`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $klasacz, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $klasacz;
}
if (isset($_POST['piatek'.$i])) {
	
	
	$piatek = $_POST['piatek'.$i];
	if(strlen($piatek)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `piatek`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $piatek, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $piatek;
}
if (isset($_POST['klasapi'.$i])) {
	
	
	$klasapi = $_POST['klasapi'.$i];
		if(strlen($klasapi)>0)
	{
		$sth2 = $pdo->prepare(" UPDATE ".$_SESSION['klass']." SET `klasapi`=:pon WHERE id= :id ");


		$sth2->bindParam( ':pon', $klasapi, PDO::PARAM_STR );
		$sth2->bindParam( ':id', $i, PDO::PARAM_STR );

		 
		
		
		
		

		$sth2->execute();
	}
	echo $klasapi;
}




	
}









header('location:plan_edit.php?edit_klas='.$_SESSION['klass']);
}

?>