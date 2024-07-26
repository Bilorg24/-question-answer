<?php
require_once '../db/connection.php';
$conn->prepare('update messages set status=? where id=?')->execute(array($_POST['mesStatus'], $_POST['messId']));
header('location:../adminPage.php'); 
?>