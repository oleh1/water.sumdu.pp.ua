<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="style.css" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body>

<div align="center">
  <div class="cen">

    <div>
      <div class="hmsc">
        <div class="h inl"><a href="home">О воде</a></div>
        <div class="m inl"><a href="map">Карта качества воды</a></div>
        <div class="s inl"><a href="standards">Санитарные нормы</a></div>
        <div class="inl"><a href="water_purification">Очистка воды</a></div>
        <div class="c inl"><a href="contacts">Контакты</a></div>
        <?php
        if( $_SESSION['name'] ){
          ?>
          <div class="inl"><a href="room">Личный кабинет</a></div>
          <?php
        }
        ?>
      </div>
      
      <div class="lr">

        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
        <div style="position: absolute;right: 286px;" class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,telegram" data-counter=""></div>

        <div style="position: absolute;right: 135px;">
          <div class="l inl"><a href="login">Вход</a></div>
          <div class="r inl"><a href="registration">Регистрация</a></div>
        </div>
      </div>
    </div><br>
    <hr>
    <div style="overflow-y: scroll;height: 530px">
      <?php
      $url = $_SERVER['REQUEST_URI'];
      $url = explode('/', $url);
      include 'controller/controller.php';
      $a = new General();
      $url = explode('?', $url[1]);
      $a->action($url[0]);
      ?>
    </div>

  </div>
</div>

</body>
</html>