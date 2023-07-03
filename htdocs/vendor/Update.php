<?php

require_once('../db.php');


$id = $_POST['id'];
$Name_services = $_POST['Name_services']; 
$Price = $_POST['Price'];
$Img_serv = $_POST['Img_serv'];

mysqli_query($conn, query:"UPDATE `Services` SET `Name_services` = '$Name_services', `Price` = '$Price', `Img_serv` = '$Img_serv' WHERE `Services`.`ID_Services` = '$id'");

//  header('Location: /');