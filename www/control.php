<?php
if(isset($_POST["register"])){


    /*ОБРАБОТЧИК ЗАГРУЗКИ ИЗОБРАЖЕНИЙ*/

    if (empty($_FILES['userfile']['tmp_name']))
    {
        return $message ="Некорректное имя изображения";
    }else{
        $imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
    }

    if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        echo "Sorry, we only accept GIF and JPEG images\n";
        exit;
    }

    $uploaddir = 'css/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

        $message =  "Файл был успешно загружен на сервер";
    } else {
        return $message ="Ошибка загрузки изображения";
    }



    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name=$_POST['full_name'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $family=$_POST['family'];
        $date=$_POST['date'];
        $about=$_POST['about'];
        $teach=$_POST['teach'];
        $query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
        $numrows=mysql_num_rows($query);

        // Шифруем пароль 
        $hashed_password = sha1($password);


        if($numrows==0)
        {
            $sql="INSERT INTO usertbl
  (full_name, email, username,password,family,date,about,teach,photo)
	VALUES('$full_name','$email', '$username', '$hashed_password','$family','$date','$about','$teach','$uploadfile')";
            $result=mysql_query($sql);
            if($result){
                $message = "Ваш аккаунт успешно создан"."<a href = 'http://memo-books.ru/den/cgi-bin/login.php'>Войти!</a>";
                echo "<script>document.location.replace('index.php');</script>";
            } else {
                $message = "Ошибка записи данных в базу";
            }
        } else {
            $message = "Данное имя пользователя уже используется";
        }
    } else {
        $message = "Все поля формы обязательны к заполнению";
    }
}
?>


<?php
if(isset($_SESSION["session_username"])){
    // вывод "Session is set"; // в целях проверки
    // header("Location: intropage.php");
}
if(isset($_POST["login"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];


        // Шифруем пароль
        $hashed_password = sha1($password);

        $query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$hashed_password."'");
        $numrows=mysql_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysql_fetch_assoc($query))
            {
                $dbusername=$row['username'];
                $dbpassword=($row['password']);
                $dbemail=$row['email'];
                $dbfamily=$row['family'];
                $dbdate=$row['date'];
                $dbabout=$row['about'];
                $dbfull_name=$row['full_name'];
                $dbphpto=$row['photo'];
                $dbteach=$row['teach'];

            }
            if($username == $dbusername && $hashed_password == $dbpassword)
            {
                // старое место расположения
                //  session_start();
                $_SESSION['session_username']=$username;	 
                $_SESSION['session_demail']=$dbemail;	 
                $_SESSION['session_family']=$dbfamily;	 
                $_SESSION['session_date']=$dbdate;	 
                $_SESSION['session_about']=$dbabout;	 
                $_SESSION['session_full_name']=$dbfull_name;	 
                $_SESSION['session_photo']=$dbphpto;	 
                $_SESSION['session_teach']=$dbteach;	 
                /* Перенаправление браузера */
                // header("Location: intropage.php");
                echo "<script>document.location.replace('index.php');</script>";
            }
        } else {
            $message = "Неверное имя пользователя или пароль".$hashed_password;

            // echo  "Invalid username or password!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>