<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /');
    exit();
} 
require_once 'db.php';
$currentUserId = $_SESSION['user']['ID_User'];
$queryCars = "SELECT `Marka`, `Model`, `Year_car`, `Img_car`
                   FROM Car 
                   WHERE Car.ID_User = $currentUserId";


if ($resultCars = mysqli_query($conn, $queryCars)) {
    $cars = mysqli_fetch_all($resultCars, MYSQLI_ASSOC);
} else {
    print_r(12312);
}


// Заказы
$queryOrders = "SELECT Order_Klient.Date_order, Services.Name_services, Services.Price, Status.Name_status, Status_pay.Name_pay
                FROM Order_Klient 
                JOIN Services ON Order_Klient.ID_Services = Services.ID_Services
                JOIN Status ON Order_Klient.ID_Status = Status.ID_Status
                JOIN Status_pay ON Order_Klient.ID_Pay = Status_pay.ID_Status_pay
                WHERE Order_Klient.ID_User = $currentUserId";


if ($resultOrders = mysqli_query($conn, $queryOrders)) {
    $Orders = mysqli_fetch_all($resultOrders, MYSQLI_ASSOC);
} else {
    print_r(12312);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LK</title>
    <link rel="stylesheet" href="Lk/lk.css">
</head>
<body>
        <!-- шапка -->
    <header>
            <div class="title">
                <p>+7(999)868-55-92</p>
                <a href="/home.php"><img src="img/лого2 1.png" alt=""></a>           
                <a href="/logout.php">Выход</a>
            </div>
    </header>
    <section>
<!-- Инфа о узере -->
        <div class="lk-info-big">
            <img src="img/ava.png" alt="">
            <div class="info-title">
                <p>Фамилия:</p>
                <p>Имя:</p>
                <p>Отчество:</p>
                <p>Номер телефона:</p>
            </div>
            <div class="info-user">
                <p><?= $_SESSION['user']['Surname']?></p>
                <p><?= $_SESSION['user']['Name']?></p>
                <p><?= $_SESSION['user']['Otchestvo']?></p>
                <p><?= $_SESSION['user']['Number']?></p>
            </div>
        </div>
<!-- автомобиль юзера -->
        <div>
            
            <div class="car-user">
                <div>
                    <hr>
                    <h1>АВТОМОБИЛИ</h1>
                </div>
            </div>
            <div class="lk-car">
            <?php foreach ($cars as $car): ?>

                <img class="car-user-img" src="<?= $car['Img_car']; ?>" alt="">
                <div class="info-title-car">
                    <p>Марка:</p>
                    <p>Модель:</p>
                    <p>Год выпуска:</p>
                    <p>Тип КПП:</p>
                </div>
                <div class="info-car">


<p><?= $car['Marka']; ?></p>
                    <p><?= $car['Model']; ?></p>
                    <p><?= $car['Year_car']; ?></p>
                    <p>Автоматическая</p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Выполненные заказы -->
        <div>
            <div class="complite">
                <div>
                    <hr>
                    <h1>ЗАКАЗЫ</h1>
                </div>
            </div>
            <div class="big-comlite">
                <div class="info-title-comlite">
                    <p>Тип услуги:</p>
                    <p>Дата:</p>
                    <p>Цена:</p>
                    <p>Статус:</p>
                    <p>Статус оплаты:</p>
                </div>
                <?php foreach ($Orders as $Order_Klient): ?>
                <div class="info-comlite">
                    <p><?= $Order_Klient['Name_services']; ?></p>
                    <p><?= $Order_Klient['Date_order']; ?></p>
                    <p><?= $Order_Klient['Price']; ?></p>
                    <p><?= $Order_Klient['Name_status']; ?></p>
                    <p><?= $Order_Klient['Name_pay']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
<!-- записи
        <div>
            <div class="complite">
                <div>
                    <hr>
                    <h1>Записи</h1>
                </div>
            </div>
            <div class="big-comlite">
                <div class="info-title-comlite">
                    <p>Тип услуги:</p>
                    <p>Дата:</p>
                    <p>Цена:</p>
                    <p>Статус:</p>
                </div>
                <div class="info-comlite">
                    <p>Покраска с крышей</p>
                    <p>12.06.2023</p>
                    <p>70.000Р</p>
                    <p>Ожидание/Не оплачено</p>
                </div>
            </div>
            <div class="big-comlite">
                <div class="info-title-comlite">
                    <p>Тип услуги:</p>
                    <p>Дата:</p>
                    <p>Цена:</p>
                    <p>Статус:</p>
                </div>
                <div class="info-comlite">
                    <p>Защита/Оклейка авто защитной пленкой(капот)</p>
                    <p>13.06.2023</p>
                    <p>20.000Р</p>
                    <p>Ожидание/Не оплачено</p>
                </div>
            </div>
        </div> -->
        <!-- Карта -->
        <div class="map">
            <div>
                <img src="img/карта.png" alt="">
                <div>
                    <p class="text-map">АДРЕС:</p>
                    <p class="text-map">119049 г. Москва, ул. Донская, д. 8 стр. </p>
                    <p class="text-map-big">НОМЕР ТЕЛЕФОНА:</p>
                    <p class="text-map">+7(281)520-61-81</p>
                    <p class="text-map">+7(6751)175-51-55</p>
                </div>
            </div>
        </div>
    </section>
<!-- Подвал -->
    <footer>
        <a href="">АВТОРИЗАЦИЯ</a>
        <img src="img/лого подвал.png" alt="">
        <a href="/home.php">ГЛАВНАЯ СТРАНИЦА</a>
    </footer>
</body>
</html>