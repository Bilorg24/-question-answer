<?php
require_once '../db/connection.php';

$checkUser = $conn->prepare('select * from users where login=? and password=?');
$checkUser->execute(array($_POST['login'], $_POST['password']));
$checkUser = $checkUser->fetch();
if ($checkUser) {
	session_start();
	$_SESSION['userId']=$checkUser['id'];
	$_SESSION['userRole']=$checkUser['role'];
	$_SESSION['userLogin']=$checkUser['login'];
	if ($checkUser['role']==1)
		header('location:../userPage.php');
	else if ($checkUser['role']==0)
		header('location:../adminPage.php');
}
else {
	session_start();
	$_SESSION['status'] = 'Неверные логин или пароль';
	header('location:../index.php');
}
?>