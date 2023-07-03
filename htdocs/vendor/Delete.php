<?php

require_once('../db.php');

$id = $_GET['id'];

mysqli_query($conn, query:"DELETE FROM Services WHERE `Services`.`ID_Services` = '$id'");


?>