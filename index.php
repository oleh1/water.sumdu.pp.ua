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
      </div>
      
      <div class="lr">
        <div class="l inl"><a href="login">Вход</a></div>
        <div class="r inl"><a href="registration">Регистрация</a></div>
      </div>
    </div>
    <hr>
    <div>
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