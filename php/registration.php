<?php
require_once '../db/connection.php';

$checkUser = $conn->prepare('select * from users where login=? or email=?');
$checkUser->execute(array($_POST['login'], $_POST['email']));
$checkUser = $checkUser->fetch();

if (!$checkUser){
	$conn->prepare('insert into users (fio, login, password, tel, email) values (?,?,?,?,?)')->execute(array($_POST['fio'], $_POST['login'], $_POST['password'], $_POST['tel'], $_POST['email']));
	session_start();
	$_SESSION['status'] = 'Регистрация успешна!';
	header('location:../index.php');
}
else { 
	session_start();
	$_SESSION['status'] = 'Логин или email заняты';
	header('location:../regPage.php');
}
?>