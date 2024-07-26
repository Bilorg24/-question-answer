<?php
require_once '../db/connection.php';
$conn->prepare('delete from messages where id=?')->execute(array($_POST['messId']));
header('location:../userPage.php'); 
?>