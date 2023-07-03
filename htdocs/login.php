<?php
session_start();
require_once('db.php');

$Number = $_POST['Number']; 
$Pass = $_POST['Pass']; 

if(empty($Number) || empty($Pass))
{
    echo "Заполните все поля";

} else {

    $sql = mysqli_query($conn, "SELECT * FROM User;");

     $sql = "SELECT * FROM  User WHERE Number = '$Number' AND Password = '$Pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        $user = mysqli_fetch_assoc($result);
        
        $_SESSION['user'] = [
        "ID_User" => $user['ID_User'],
        "Name" => $user['Name'],
        "Surname" => $user['Surname'],
        "Otchestvo" => $user['Otchestvo'],
        "Number" => $user['Number'],
    ];
        echo '<script>window.location.replace("http://praktik.local.dvl.to/lk.php");</script>';
        exit();
    }else {
        echo "Нет аккаунта";
    }
}