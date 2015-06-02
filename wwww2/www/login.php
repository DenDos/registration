<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>	 
<?php include("control.php"); ?>	 


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Ошибка: ". $message . "</p>";} ?>

<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
        <form action="" id="loginform" method="post" name="loginform">
            <p>
                <label for="user_login">Имя опльзователя
                    <br>
                    <input class="input" id="username" name="username" size="20" type="text" value="">
                </label>
            </p>
            <p>
                <label for="user_pass">Пароль
                    <br>
                    <input class="input" id="password" name="password" size="20" type="password" value="">
                </label>
            </p>
            <p class="submit">
                <input class="button" name="login" type="submit" value="Log In">
            </p>
            <p class="regtext">Еще не зарегистрированы?<br><a href="register.php">Регистрация</a>!</p>
        </form>
    </div>
</div>
<?php include("includes/footer.php"); ?>
