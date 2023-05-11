<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Пользователь уже существует'; 
   }else{
      if($pass != $cpass){
         $message[] = 'Подтверждение паролья не соответсвует!';
      }elseif($image_size > 2000000){
         $message[] = 'Размер изображения слишком велик!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Успешно зарегистрирован!';
            header('location:login.php');
         }else{
            $message[] = 'Регистрация не удалась!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style copy.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>ЗАРЕГИСТРИРУЙТЕСЬ СЕЙЧАС</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Введите имя пользователя" class="box" required>
      <input type="email" name="email" placeholder="Введите адрес электроной почты" class="box" required>
      <input type="password" name="password" placeholder="Введите пвроль" class="box" required>
      <input type="password" name="cpassword" placeholder="Подтвердите пароль" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Зарегистрируйтесь сейча"с class="btn">
      <p>уже есть аккаунт? <a href="login.php">войти сейчас</a></p>
   </form>

</div>

</body>
</html>