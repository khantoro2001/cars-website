<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>
<?php

$conn = mysqli_connect('localhost','root','','cardb1') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Сообщение уже отправлено!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Сообщение успешно отправлено!';
   }

}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="image/car.ico.png" type="image/x-icon">
    <title>Продажа авто</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style(1).css">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="css/style(2).css">
    
</head>
<body>

<?php


if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Авто</span>продажа </a>

    <nav class="navbar">
        <a href="#home">Главная </a>
        <a href="#vehicles">Автомобили</a>
        <a href="#services">Услуги</a>
        <a href="#featured">Популярные</a>
        <a href="#reviews">Отзывы</a>
        <a href="#contact">Контакты</a>
    </nav>
    <div id="login-btn">
        <button class="btn">авторизоваться</button>
        <i class="far fa-user"></i>
    </div>
    <!--<li></li><div id="login-btn">-->
        <!--<button class="btn">авторизоваться</button>-->
   <!--    <a href="http://localhost/master/login.php" class="far fa-user"></a>
    </div>-->

</header> 



<div></div>
<div class="shadow-title parallax-top-shadow">work</div>
<div class="section-parallax parallax-00" style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-0.png');"></div>
<div class="section-parallax parallax-01" style="background-image: url('http://www.ivang-design.com/svg-load/parallax/parallax-01.png');"></div>

<div class="section full-height">
<div class="section-title-wrap">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center parallax-fade-top">
        <p>we do magic</p>	
        <h1>Машина <br>твоей мечты</h1>
      </div>
    </div>	
  </div>
</div>
</div>

<div class="section full-height z-bigger">
<ul class="case-study-wrapper">
  <li class="case-study-name">                            	
    <a href="#" class="hover-target">Bentley</a>
  </li>
  <li class="case-study-name">                                         	
    <a href="#" class="hover-target">Camry</a>
  </li>
  <li class="case-study-name">                                        	
    <a href="#" class="hover-target">MERCEDES CLS</a>
  </li>
  <li class="case-study-name">                                         	
    <a href="#" class="hover-target">BMW M5</a>
  </li>
</ul>
<ul class="case-study-images">
  <li>
    <div class="img-hero-background">
      <img src="https://wallpapers-fenix.eu/full/210520/140019386.jpg" alt="">
    </div>  
    <div class="hero-number-back">01</div> 
    <div class="hero-number">01</div> 
    <div class="hero-number-fixed">04</div> 
    
  </li>
  <li>
    <div class="img-hero-background">
      <img src="https://abrakadabra.fun/uploads/posts/2022-02/1644679842_16-abrakadabra-fun-p-toiota-kamri-oboi-na-telefon-22.jpg" alt="">
    </div> 
    <div class="hero-number-back">02</div> 
    <div class="hero-number">02</div>  
   
  </li>
  <li>
    <div class="img-hero-background">
      <img src="https://mobimg.b-cdn.net/v3/fetch/1a/1a9ab34e6478ab01b1bb5abcee5857b5.jpeg" alt="">
    </div>
    <div class="hero-number-back">03</div>  
    <div class="hero-number">03</div> 
   
  </li>
  <li>
    <div class="img-hero-background">
      <img src="https://oboi-download.ru/files/wallpapers/1279/28980.jpg" alt="">
    </div> 
    <div class="hero-number-back">04</div> 
    <div class="hero-number">04</div> 
    
</ul>	
</div>

<div class="section padding-top-bottom over-hide background-dark z-bigger-2">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 text-center">
      <a href="#" class="hover-target">
        <div class="project-link-wrap">
          <p>let's go </p>
        </div>
      </a>
    </div>
  </div>	
</div>			
</div>

<!-- Scroll back to top
================================================== -->

<div class="scroll-to-top hover-target"></div>

<!-- Page cursor
================================================== -->

<div class='cursor' id="cursor"></div>
<div class='cursor2' id="cursor2"></div>
<div class='cursor3' id="cursor3"></div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="./script.js"></script>

<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="" method="post" enctype="multipart/form-data">
        <h3>Логин пользователя</h3>
        <?php
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
         ?>
        <input type="email" name="email" placeholder="email" class="box" required>
        <input type="password" name="password" placeholder="password" class="box"required>
        <p> Забыли свой пароль <a href="#">кликните сюда   </a> </p>
        <input type="submit" name="submit"  value="Авторизоаться" class="btn">
        <p>Или войдите с помощью</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> Нет учетной записи,  <a href="register.php">Создайте её.</a> </p>
    </form>

</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">НАЙТИ СВОЙ АВТОМОБИЛЬ</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>Филиалы</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>Продаюшие автомобили</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>Счастливые клиенты</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>Новые автомобили</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> Популярные <span>автомобили</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>Porshe 911</h3>
                    <div class="price"> <span>цена : </span> $17,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 330км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>Porshe Panamera</h3>
                    <div class="price"> <span>цена : </span> $47,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 240км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>Porshe Panamera</h3>
                    <div class="price"> <span>цена : </span> $50,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 280км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>Porshe Cayman GTS</h3>
                    <div class="price"> <span>цена : </span> $60,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 275км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>Porshe Boxster</h3>
                    <div class="price"> <span>цена : </span> $54,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2020
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 288км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>Porshe Cayenne</h3>
                    <div class="price"> <span>цена : </span> $56,000/- </div>
                    <p>
                        новый
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> автомат
                        <span class="fas fa-circle"></span> Бензин
                        <span class="fas fa-circle"></span> 278км/ч
                    </p>
                    <a href="#" class="btn">проверить</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> 
        Наши  <span>услуги</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>Продажа автомобилей</h3>
            <p>Продать и купить авто в Бишкеке и Кыргызстане. Онлайн "Продажа авто" с легкостью может продать, обменять и купить авто во всех регионах Кыргызстана.</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>Ремонт запчастей</h3>
            <p>Гарантии на запчасти и ремонт
                Почему с нами удобно?
                
                - Большой ассортимент товара – есть возможность подбора, как оригинальных запчастей, так и китайских их аналогов.</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>Страхование автомобиля</h3>
            <p>Страховые компании Кыргызстана предоставляют услуги по автострахованию в Бишкеке и по всей стране на выгодных условиях.</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>Замена батареи</h3>
            <p>Ремонт электромобилей в Бишкеке. Предлагаем качественный ремонт электромобилей любой марки. Опытные специалисты нашего центра работают в этой сфере с 2010 .</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>Замена масла</h3>
            <p>Экспесс замена масла, аппаратная замена, замена фильтров и расходников. Бесплатная диагностика автомобиля. Гарантия на работу.</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>Круглосуточная поддержка</h3>
            <p>24/7 круглосуточная поддержка клиентов.</p>
            <a href="#" class="btn"> читать далее</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>Рекомендуемые </span> автомобили </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>Mercedes-Benz SL</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$65,000/-</div>
                    <a href="#" class="btn">Проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>MG ZS</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$23,000/-</div>
                    <a href="#" class="btn">Проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>Ford Focus ST</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$13,000/-</div>
                    <a href="#" class="btn">Проверить</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>Audi e-tron</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$45,000/-</div>
                    <a href="#" class="btn">Проверить</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>Kia Sportage</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$42,000/-</div>
                     <a href="#" class="btn">Проверить</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>Honda Civic</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$19,000/-</div>
                     <a href="#" class="btn">Проверить</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>Kia Sorento</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$40,000/-</div>
                     <a href="#" class="btn">Проверить</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-8.png" alt="">
                 <div class="content">
                     <h3>Chevrolet Equinox</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">$30,000/-</div>
                     <a href="#" class="btn">Проверить</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter">
    
    <h3>Подпишитесь на последние обновления</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> Отзыв <span> клиента </span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image\333186984_909924083653850_4603249500449414060_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Абдылдаева Мырзайым</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\340316922_1640935329688163_3064690433501529641_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Эсенова Айза</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\44884218_345707102882519_2446069589734326272_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Табалдиев Таир</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\317778002_688391689451387_5833956808192079963_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Мусанипов Арсен</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\334614799_553446209955975_4234763379540687229_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Турсун уулу Нургазы</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image\44884218_345707102882519_2446069589734326272_n.jpg" alt="">
                <div class="content">
                    <p>Сама компания очень успешная. Они падают на то же самое, что мы можем предположить, что с настоящим только, но так же часто.</p>
                    <h3>Асанов Актилек</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading" data-aos="fade-up"><span>Свяжитесь с </span> нами </h1>

    <div class="row" >

        <iframe class="map" iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69633.31275872211!2d78.33225926360693!3d42.486181077235415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38865b91e1f04c0b%3A0xeb5bfe3900e7ecfa!2z0JrQsNGA0LDQutC-0Ls!5e1!3m2!1sky!2skg!4v1671908167051!5m2!1sky!2skg"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </iframe>

        <form action=""  method="post">
            <h3>Связаться</h3>
            <input data-aos="fade-right" type="text" name="name" placeholder="Ваше имя" class="box"required>
            <input data-aos="fade-left" type="email" name="email" placeholder="ваш email" class="box"required>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="ваш номер" class="box"required>
            <textarea data-aos="fade-up" name="message"  placeholder="Ваше сообщение" class="box" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="Отправить сообщение" name="send" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>Рынки в регионах</h3>
           <a href="https://goo.gl/maps/Jz79LGmrc2smHhKu8"> <i class="fas fa-map-marker-alt"></i> Бишкек </a>
            <a href="https://goo.gl/maps/3QqLFnvkKhmqPvC58"> <i class="fas fa-map-marker-alt"></i> Чүй </a>
            <a href="https://goo.gl/maps/P6ExZB4Q2yW9ou776"> <i class="fas fa-map-marker-alt"></i> Нарын </a>
            <a href="https://goo.gl/maps/jW2mg6mSaL2fVjhh7"> <i class="fas fa-map-marker-alt"></i> Ысык-Көл </a>
            <a href="https://goo.gl/maps/pDsCNGRTdg18aXLP9"> <i class="fas fa-map-marker-alt"></i> Талас </a>
            <a href="https://goo.gl/maps/irGC6WnQ916oyLRp8"> <i class="fas fa-map-marker-alt"></i> Жалал-Абад </a>
            <a href="https://goo.gl/maps/rHz7mpyDqGyEWxzGA"> <i class="fas fa-map-marker-alt"></i> Ош </a>
            <a href="https://goo.gl/maps/5ptBHfq4YjKA3uKV6"> <i class="fas fa-map-marker-alt"></i> Баткен </a>
        </div>

        <div class="box">
            <h3>Быстрые ссылки</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Главная </a>
            <a href="#vehicles"> <i class="fas fa-arrow-right"></i> Автомобили </a>
            <a href="#services"> <i class="fas fa-arrow-right"></i> Услуги </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> Популярные </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> Отзывы </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> Контакты </a>
        </div>

        <div class="box">
            <h3>контактная информация</h3>
            <a href="#"> <i class="fas fa-phone"></i> 0 312-999-999 </a>
            <a href="#"> <i class="fas fa-phone"></i> 0 3922-999-999 </a>
            <a href="https://www.google.com/intl/ru/gmail/about/"> <i class="fas fa-envelope"></i> hantoromusuraliev@gmail.com </a>
            <a href="https://goo.gl/maps/x2dqTWyTvbYzZ1RL8"> <i class="fas fa-map-marker-alt"></i> Кыргызстан , Каракол - 722200 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://www.pinterest.com/"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit">  Машина должна быть частью тебя, твоей плотью, а ты — её составной частью. Только так можно стать единственным в своем роде.</div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
