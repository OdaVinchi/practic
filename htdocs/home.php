<?php 

require_once('db.php');

// $sql = "SELECT  Name_services, Img_serv FROM  Services WHERE Name_services = '$Name_services' AND Img_serv = '$Img_serv'";

// $sql = mysqli_query($conn, 'SELECT Name_services, Img_serv FROM `Services`');
// while ($result = mysqli_fetch_array($sql)) {
//   echo "{$result['Name_services']}<br>";
// }
$sql = [];
if ($query = $conn->query("SELECT * FROM Services")){
$sql = $query->fetch_all(MYSQLI_ASSOC);

// print_r(11);

}
else{
    print_r(12312);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGLAGE</title>
    <link rel="stylesheet" href="Home/home.css">
    <script
			  src="https://code.jquery.com/jquery-3.7.0.js"
			  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
			  crossorigin="anonymous"></script>
</head>
<body>
    <!-- шапка -->
    <script>
        const sendTask = (id) => {
            $.post('LK/sendTask.php', {id}, function(data){
                alert(data);
            });
        }
    </script>
    <header>
        <div class="title">
            <p>+7(999)868-55-92</p>
            <a href="/home.html"><img src="img/лого2 1.png" alt=""></a> 
            <a href="/Reg.php">Вход</a>
        </div>
    </header>
    <img class="lamba-header" src="img/lamba.png" alt="">
    <section>
            <!-- О нас -->
        <div class="about-usl">
            <div>
                <hr>
                <h1>«REGLAGE» ОБЪЕДИНИЛ ФИЛИАЛЫ ВЕДУЩИХ ПО ВСЕМУ <br> МИРУ ТЮНИНГ-АТЕЛЬЕ ПОД ОДНОЙ КРЫШЕЙ</h1>
            </div>
            <p>«REGLAGE» – это гигант в мире премиального автомобильного тюнинга <br> и дооснащения. Крупнейший в Европе тюнинг-сервис на площади более 6000 тысяч <br> квадратных метров объединил филиалы лучших тюнинг-ателье Москвы под одной <br>крышей.</p>
        </div>
<!-- Наши услуги  -->
        <div>
            <div class="about-usl">
                <div>
                    <hr>
                    <h1>ВЫБЕРИТЕ УСЛУГУ</h1>
                </div>
                <p>В стенах центра лидеры отрасли выполняют 126 видов работ по 23 направлениям <br>современного тюнинга и дооснащения.</p>
            </div>
            <div class="container">
                <div class="center">
                    <?php foreach ($sql as $img_serv): ?>
                        <div class="big-usl">
                    <p> <?= $img_serv['Name_services'] ?></p>
                    <button onclick="sendTask(<?= $img_serv['ID_Services'] ?>);">Заказать услугу</button> 
                    <img src="<?=$img_serv['Img_serv'] ?>" alt=""> 
                    </div> 
                    <?php endforeach; ?>
                    </div>
            </div>
        </div>
<!-- Последние работы -->
        <div>
            <div class="about-usl">
                <div>
                    <hr>
                    <h1>НАШИ ПОСЛЕДНИЕ РАБОТЫ</h1>
                </div>
            </div>
            <div class="last-worl">
                <div>
                    <img src="img/порш.png" alt="">
                    <h2>ОКЛЕЙКА КУЗОВА PORSHE <br> MACAN S В ЧЕРНЫЙ САТИН</h2>
                    <p>Главный объект сегодняшней статьи Porsche  <br> Macan S. Посмотрим, насколько сложным  <br>будет процесс изменения, а также как будет  <br> выглядеть после всех работ.</p>
                </div>
                <div>
                    <img src="img/инфинити.png" alt="">
                    <h2>ИЗГОТОВЛЕНИЕ ВЫХЛОПНОЙ <br>СИСТЕМЫ НА INFINITY Q60S</h2>
                    <p>Какой может быть тюнинг без изготовления <br>выхлопной системы? Автомобили<br> приводятся в движение двигателями <br>внутреннего сгорания, беспрепятственное <br>прохождение отработанных газов должно<br> быть максимально эффективно. От этого <br>напрямую зависит мощность, например, при <br> чип тюнинге. Сегодня расскажем о работе с <br>Infinity Q60S.</p>
                </div>
            </div>
        </div>
<!-- Почему мы -->
        <div>
            <div class="about-usl">
                <div>
                    <hr>
                    <h1>ПОЧЕМУ МЫ</h1>
                </div>
            </div>
            <div class="why-we">
                <div>
                    <img src="img/время.png" alt="">
                    <h2>ЭКОНОМИЯ ВРЕМЕНИ</h2>
                    <p>Не выезжая за пределы, <br>сразу в одном месте вы<br> можете получить<br> широчайший спектр услуг по<br> тюнингу и дооснащению.</p>
                </div>
                <div>
                    <img src="img/комфорт.png" alt="">
                    <h2>УРОВЕНЬ КОМФОРТА</h2>
                    <p>Для клиентов работает <br>комфортабельная зона ожидания и кафе<br> с напитками и легкими <br>блюдами.</p>
                </div>
                <div>
                    <img src="img/подход.png" alt="">
                    <h2>ИНДИВИДУАЛЬНЫЙ ПОДХОД</h2>
                    <p>Каждый клиент и его машина – это <br>уникальная судьба и история. Поэтому<br> для команды «GEGLAGE»<br> не существует стандартных решений <br>или типичных ситуаций.</p>
                </div>
            </div>
        </div>
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
        <a href="/lk.php">ЛИЧНЫЙ КАБИНЕТ</a>
        <img src="img/лого подвал.png" alt="">
        <a href="/home.html">ГЛАВНАЯ СТРАНИЦА</a>
    </footer>
</body>
</html>