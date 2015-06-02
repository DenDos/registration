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

   
   <div class="row">
      <div class="col-md-5 col-xs-12 title_info">Ваше имя:</div>
      <div class="col-md-7 col-xs-12 info"><span><?php echo $_SESSION['session_full_name'];?> </span></div>
      <div class="col-md-7 col-xs-12 title_info">Ваш год рождения:</div>
      <div class="col-md-5 col-xs-12 info"><span><?php echo $_SESSION['session_date'];?> </span></div>
      <div class="col-md-7 col-xs-12 title_info">Ваш e-mail:</div>
      <div class="col-md-5 col-xs-12 info"><span><?php echo $_SESSION['session_demail'];?></div>
      <div class="col-md-7 col-xs-12 title_info">Ваше семейное положение:</div>
      <div class="col-md-5 col-xs-12 info"><span><?php echo $_SESSION['session_family'];?></div>
      <div class="col-md-7 col-xs-12 title_info">Ваше образование:</div>
      <div class="col-md-5 col-xs-12 info"><span><?php echo $_SESSION['session_teach'];?></div>
      <div class="col-md-12 col-xs-12 title_info">Дополнительная информация о вас:</div>
      <div class="col-md-12 col-xs-12 info"><span class="span_about" ><?php echo $_SESSION['session_about'];?></span></div>
    </div>
    <hr>
    <p class="logout"><a href="logout.php">Выйти</a> из системы</p>
</div>

<?php include("includes/footer.php"); ?>

<?php
       }
?>