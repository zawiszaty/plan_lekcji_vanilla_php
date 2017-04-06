<?php

require('connect.php');
session_start();



if(!isset($_SESSION['plan_l_logged']))
{
	header('location:index.php');
	

}
else
{

$new_klass="nie ma takiej klasy";
$new_type="a";
	if(isset($_POST['new_klass']))
	{
		$new_klass=$_POST['new_klass'];
		$new_klass =str_replace(" ","_",$new_klass);
		
		
 
		$new_type=$_POST['wybor'];

		$sth = $pdo->prepare( 'INSERT INTO `klasy`(`typ`, `nazwa`) VALUES (:typ,:nazwa)' );
		$sth->bindParam( ':typ', $new_type, PDO::PARAM_STR );
		$sth->bindParam( ':nazwa', $new_klass, PDO::PARAM_STR );

		$sth->execute();

		$sth = $pdo->prepare( '
CREATE TABLE '.$new_klass.'
(ID integer PRIMARY KEY AUTO_INCREMENT, 
poniedzialek varchar(30), 
klasap varchar(30),
wtorek varchar(30), 
klasaw varchar(30), 
sroda varchar(30), 
klasas varchar(30), 
czwartek varchar(30), 
klasacz varchar(30), 
piatek varchar(30), 
klasapi varchar(30))

			' );
		$sth->bindParam( ':typ', $new_type, PDO::PARAM_STR );
		

		$sth->execute();

$i=0;
for ($i=0; $i < 10; $i++) { 
	

		$sth = $pdo->prepare( '
INSERT INTO `'.$new_klass.'`(`poniedzialek`, `klasap`, `wtorek`, `klasaw`, `sroda`, `klasas`, `czwartek`, `klasacz`, `piatek`, `klasapi`, `id`) VALUES ("","","","","","","","","","",":id")
			' );
		$sth->bindParam( ':id', $i, PDO::PARAM_STR );
		

		$sth->execute();
		header('location:edit.php');
	}
}
}
?>