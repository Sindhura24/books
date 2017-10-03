<?php

include('DBConnection.php');

$res=mysql_query("INSERT INTO `cust_comments`(`Name`, `e-mail`, `subject`, `message`) VALUES ('$_GET[name]','$_GET[email]','$_GET[subject]','$_GET[comment]')");

if($res)
	header('Location:contact.php?status=Registration Successful');	
else
	header('Location:contact.php?status=Registration Failure');	
	
?>