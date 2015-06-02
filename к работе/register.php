<?php require_once("includes/connection.php"); ?>
<?php include( "includes/header.php"); ?>
<?php include( "control.php"); ?>



<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>


<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="post" name="registerform" enctype="multipart/form-data">



            <p class='tool'>
                <label for="FIO">Ваше ФИО: 
                    <br>
                    <input class="input" id="full_name" name="full_name" size="32" type="text" value="">
                </label>
            </p>


            <p>
                <label for="photo">Ваша фотография: 
                    <br>
                    <input type="file" name="userfile">
                </label>
            </p>

            <p>
                <label for="family">Семейное положение:
                    <br>
                    <input class="input" id="family" name="family" size="32" type="text" value="" >
                </label>

            </p>

            <p>
                <label for="family">Ваше образование:
                    <br>
                    <input type="radio" name="teach" value="Без образования"> Без образования<Br>
                    <input type="radio" name="teach" value="Высшее"> Высшее<Br>
                    <input type="radio" name="teach" value="Средне-специальное"> Средне-специальное<Br>
                 </label>
            </p>
           
            <p>
                <label for="date">Ваш год рождения:
                    <br>
                    <input class="input" id="date" name="date" type="date" value="">
                </label>
            </p>

            <p>
                <label for="about">Дополнительные сведения о себе:
                    <br>
                    <textarea class="input" id='about' name="about" cols="40" rows="3" type="text" value=""></textarea>
                </label>
            </p>



            <p class='tool'>
                <label for="user_pass">Ваш e-mail:
                    <br>
                    <input class="input" id="email" name="email" size="32" type="email" value="" required>
                </label>
            </p>

            <p class='tool'>
                <label for="user_pass">Имя пользователя(логин):
                    <br>
                    <input class="input" id="username" name="username" size="20" type="text" value="">
                </label>
            </p>
            <p class='tool'>
                <label for="user_pass">Пароль:
                    <br>
                    <input class="input" id="password" name="password" size="32" type="password" value="">
                </label>
            </p>

            <p class="submit">
                <input class="button" id="register" name="register" type="submit" value="Зарегистрироваться">
            </p>
            <p class="regtext">Уже зарегистрированы? <a href="login.php">Войти в систему</a>!</p>
        </form>
    </div>
</div>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "Сообщение: ". $message . "</p>";} ?>
<?php include("includes/footer.php"); ?>
