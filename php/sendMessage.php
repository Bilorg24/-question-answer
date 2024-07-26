<?php
session_start();
require_once "../db/connection.php";

$userId = $_SESSION["userId"];
if ($conn->prepare("select * from messages where request=? and status=?")->execute(array($_POST["request"], "Подтверждено"))) {
    if ($conn->prepare("insert into messages (user_id, message, number, request) values (?, ?, ?, ?)")->execute(array($userId, $_POST["message"], $_POST["number"], $_POST["request"]))) {
        $_SESSION["status"] = "Сообщение отправлено";
        header("location:../userPage.php");
    } else {
        $_SESSION["status"] = "Error";
        header("location:../userPage.php");
    }
} else {
    $_SESSION["status"] = "Данное время уже занято! Выберите другое!";
    header("location:../userPage.php");
}
?>

