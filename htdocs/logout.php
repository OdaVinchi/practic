<?php
session_start();
unset($_SESSION['user']);
header('Location: ../aut.php');
echo "Вы вышли";