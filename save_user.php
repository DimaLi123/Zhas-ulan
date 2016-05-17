<?php


echo "<body bgcolor=#00BFFF>";

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} }
    if (isset($_POST['age'])) { $age = $_POST['age']; if ($age == '') { unset($age);} }

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($name) or empty($surname) or empty($age) or empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);

    $age = stripslashes($age);
    $age = htmlspecialchars($age);

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы    
    $name = trim($name);
    $surname = trim($surname);
    $age = trim($age);
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT id FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<a href='index.php'>Главная страница</a><br>");

    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query($link,"INSERT INTO users (name,surname,age,login,password) VALUES('$name','$surname','$age','$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index2.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?=Page::GetCssVersion();?>" /> 
