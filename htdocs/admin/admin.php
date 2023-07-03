<?php

require_once('../db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/adminPanel/admin.css">

</head>
<body>
    <table>
        <tr>
            <th>ID_Services</th>
            <th>Name_services</th>
            <th>Price</th>
            <th>Img_serv</th>
        </tr>
        <?php
            $product = mysqli_query($conn, query:"SELECT * FROM `Services`");
            $product = mysqli_fetch_all($product);
            foreach($product as $product){
            ?>

             <tr>
                <td><?= $product[0] ?></td>
                <td><?= $product[1] ?></td>
                <td><?= $product[2] ?></td>
                <td><?= $product[3] ?></td>
                <td><a href="/Update.php?id=<?= $product[0] ?>">Изменить</a></td>
                <td><a class="del" href="/vendor/Delete.php?id=<?= $product[0] ?>">Удалить</a></td>
            </tr>

            <?php
            }
            ?>    
            <div class="add_usl">
                <h1>ДОБАВИТЬ УСЛУГУ</h1> 
                <form action="/vendor/Create.php" method="post">
                    <p>Наименование</p>
                    <input type="text" name="Name_services">
                    <p>Цена</p>
                    <input type="number" name="Price">
                    <p>Фото</p>
                    <input type="text" name="Img_serv"> <br> <br>
                    <button type="submit">Add New</button>
                </form>
            </div>
    </table>
</body>
</html>

