<form action="save_user.php" method="post">
   <body bgcolor=#00BFFF>
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<h2>Регистрация</h2>
<p>
    <label>Ваше имя:<br></label><br> 
    <input name="name" type="text" size="15" >
        </p>

<p>
    <label>Ваша фамилия:<br></label><br>
    <input name="surname" type="text" size="15">
    </p>

<p>
    <label>Ваш возраст:<br></label><br>
    <input name="age" type="text" size="15" maxlength="3">
    </p>

<p>
    <label>Ваш логин:<br></label><br>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label><br>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>