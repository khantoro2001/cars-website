<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style copy.css">

</head>
<body>
      
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn">обновить профиль</a>
      <a href="index.php?logout=<?php echo $user_id; ?>" class="delete-btn">выйти</a>
      <p>новый <a href="login.php">логин</a> или <a href="register.php">регистрация</a></p>
   </div>

</div>


<div class="data-outpute">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>имя пользователя :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>ваш адрес электронной почты:</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>обнови свою картинку:</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>старый пароль :</span>
            <input type="password" name="update_pass" placeholder="введите предыдущий пароль" class="box">
            <span>новый пароль :</span>
            <input type="password" name="new_pass" placeholder="введите новый пароль" class="box">
            <span>подтвердите пароль :</span>
            <input type="password" name="confirm_pass" placeholder="Подтвердить новый пароль" class="box">
         </div>
      </div>
      <input type="submit" value="Обновить профиль" name="update profile" class="btn">
      <a href="home.php" class="delete-btn">Возвращаться</a>
   </form>

</div>




</body>
</html>


