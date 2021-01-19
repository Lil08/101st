<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Контакты </title>
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
 </head>
<body>
   <div class="preloader">
 <div class='cssload-loader'>
  <div class='cssload-inner cssload-one'></div>
  <div class='cssload-inner cssload-two'></div>
  <div class='cssload-inner cssload-three'></div>
</div></div>
    <header> 
   <!-- ВАРИАНТ 1 -->
<div class="logo"> 
        <img src="./img/logo.png" >
        </div>
        <nav class="menu"> <ul> 
        <li><a href="we.html">Мы</a></li>
        <li><a href="index.html">Портфолио </a></li>
        <li><a href="contact.php">Контакты</a></li>
        </ul>
        </nav> 
    </header> 
    <section class="block">
    <div class="contact-info">
     <div>
    <div><p class='center'>Заполните <b>форму обратной связи</b> и мы в скором времени с Вами свяжемся<br> или используйте наши контактные данные.</p> </div>
     <div> <p><b>Телефон:</b> +79806850686 ; +79109847764 <br>
      <b>Почта:</b> 101studios@mail.ru <br>
      <b>Мы в социальных сетях:</b></p></div>
      <div class="socicon"> <a href='https://vk.com/archstudio101'><img src='img/icon/vk.png'></a> <a href="https://www.instagram.com/arch_studio101/"><img src="img/icon/instagram.png"> </a>
        </div>
     </div>   
    </div>
    <div class="call container"> 
    <form id="contactForm" action="handler.php" method='post'>
        <div class="field-block">
            <label for="name">Ваше имя:</label>
            <input id="name" class="field" name="name" required type="text" placeholder="Введите свое имя">
        </div>
        <div class="field-block">
            <label for="email">Ваша почта:</label>
            <input id="email" class="field" name="email" required type="email" placeholder="Введите свой электронный адрес">
        </div>
        <div class="field-block">
            <label for="phone">Ваш телефон:</label>
            <input id="phone" class="field" name="phone" required type="text" placeholder="Введите свой телефон">
        </div>
        <div class="field-block">
            <label for="message">Сообщение:</label><br>
            <textarea id="message" class="field" required name="message" rows='5' placeholder="Введите сообщение"></textarea>
        </div>
        <div class="field-block check">
            <input id="check" name="check" checked type="checkbox">
            <span class="check-text">Я добровольно отправляю свои данные</span>
        </div>
        <button id="button" class="button" type="submit">Отправить cообщение</button>
        <div class="result">
            <span id="answer"></span>
            <span id="loader"><img src="./img/loader.gif" alt=""></span></div>
    </form>       
       </div>    </section>
        
    <footer> <hr> <div><p>© Архитектурная студия 101, 2018</p></div>
    </footer>
         <script type="text/javascript" src='js/jquery-3.3.1.js'></script>
     <script type="text/javascript" src='js/myanimate.js'></script>  
     <script src="js/jquery.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/main.js"></script>       
    </body> </html>