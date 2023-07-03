<?php 
session_start();
require_once('../db.php');

if (!isset($_POST['id'])){
    die("Не передан ID записи");
}

$id = $_POST['id'];

// var_dump($_SESSION);

$idUser = $_SESSION['user']['ID_User'];

$sql = "INSERT INTO `Order_Klient` (ID_User,ID_Services,ID_Status,ID_Pay) VALUE ('$idUser', '$id', '2', '2')";

if ($conn -> query($sql) === TRUE){
    echo 'Заявка отправлена';
}

?>