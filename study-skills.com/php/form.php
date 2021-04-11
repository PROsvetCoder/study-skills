<?php

include 'connection.php';

#Данные формы
$login = $_POST['login'];
$password = $_POST['password'];

#Шифрование пароля
$password = md5($password);

$sql = "INSERT INTO users (user_login,user_password) VALUES('$login', '$password')";

#Добавление пользователя на БД
mysqli_query($connection,$sql);
?>