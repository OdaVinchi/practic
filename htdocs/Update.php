<?php 

    require_once('db.php');

    $product_id = $_GET['id'];
    $product = mysqli_query($conn, query:"SELECT * FROM `Services` WHERE `ID_Services` = '$product_id'");
    $product = mysqli_fetch_assoc($product); 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/adminPanel/admin.css">
    <title>Update</title>
</head>
<body>   
    <div>
    <h1>ИЗМЕНИТЬ УСЛУГУ</h1>
            <form action="/vendor/Update.php" method="post">
                <input type="hidden" name="id" value="<?= $product['ID_Services']?>">
                <p>Наименование</p>
                <input type="text" name="Name_services" value="<?= $product['Name_services']?>">
                <p>Цена</p>
                <input type="number" name="Price" value="<?= $product['Price']?>">
                <p>Фото</p>
                <input type="text" name="Img_serv" value="<?= $product['Img_serv']?>"> <br> <br>
                <button type="submit">Update</button>
            </form>
    </div>

</body>
</html>