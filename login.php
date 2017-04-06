<?php

require('connect.php');
session_start();

if(!isset($_SESSION['plan_l_logged']))
{
	header('location:index.php');
	

}
if( isset( $_POST['login'] )){
	$login = $_POST['login'];
	$users="users";
		$pass = $_POST['password'] ;


		$sth = $pdo->prepare( 'SELECT * FROM  '.$users.' WHERE login = :login AND pass = :pass' );
		$sth->bindParam( ':login', $login, PDO::PARAM_STR );
		$sth->bindParam( ':pass', $pass, PDO::PARAM_STR );

		$sth->execute();
		$result = $sth->fetch();
		print_r($result);


		if( $result && isSet( $result['id'] ) ) {

			$_SESSION['plan_l_logged'] = true;
			header('location:edit.php');

		} 
		else
		{
		
			
			header('location:index.php');
		}
}


?>