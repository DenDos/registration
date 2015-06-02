<?php
session_start();
if(!isset($_SESSION["session_username"])) {
    header("location:login.php");
} else {
?>

<?php include("includes/header.php"); ?>
<div id="welcome">
    <h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
    <hr>

    <div class="img"><img src="<?php echo $_SESSION['session_photo'];?>" alt="ваше фото"></div>

    <h4>Ваше имя: <span><?php echo $_SESSION['session_full_name'];?> </span></h4>
    <h4>Ваш год рождения:<span><?php echo $_SESSION['session_date'];?> </span></h4>
    <h4>Ваш e-mail:<span><?php echo $_SESSION['session_demail'];?> </span></h4>
    <h4>Ваше семейное положение:<span><?php echo $_SESSION['session_family'];?> </span></h4>
    <h4>Ваше образование:<span><?php echo $_SESSION['session_teach'];?> </span></h4>
    <h4>Дополнительная информация о вас:<span class="span_about" ><?php echo $_SESSION['session_about'];?><hr></span></h4>
    <p class="logout"><a href="logout.php">Выйти</a> из системы</p>
</div>

<?php include("includes/footer.php"); ?>

<?php
       }
?>