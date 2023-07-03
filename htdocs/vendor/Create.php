<?php 
    require_once('../db.php');

    $Name_services = $_POST['Name_services']; 
    $Price = $_POST['Price'];
    $Img_serv = $_POST['Img_serv'];

    mysqli_query($conn, query:"INSERT INTO `Services` (`ID_Services`, `Name_services`, `Price`, `Img_serv`) VALUES (NULL, '$Name_services', '$Price', '$Img_serv')");

    // header('Location: /');
?>