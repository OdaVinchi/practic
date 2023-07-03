<?php

require_once('db.php');

$Name = $_POST['Name'];
$Surname = $_POST['Surname'];
$Otchestvo = $_POST['Otchestvo'];
$Number = $_POST['Number'];
$Pass = $_POST['Pass'];
$Repeat = $_POST['Repeat'];

if (empty($Name) || empty($Surname) || empty($Otchestvo)|| empty($Number) || empty($Pass) || empty($Repeat)){
    echo "Заполните все поля"; 
}else 
{
    if($Pass != $Repeat){
        echo "Пароли не совпадают";
    } else {

        $sql = "INSERT INTO `User` (Name,Surname,Otchestvo,Number,Password) VALUE ('$Name', '$Surname', '$Otchestvo', '$Number', '$Pass')";

        if ($conn -> query($sql) === TRUE){
            echo '<script>window.location.replace("/home.php");</script>';
        }
        else{
            echo "Ошибка: " . $conn->error;
        }

    }
}


