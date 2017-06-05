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
<style>
  .ss{
    border-radius: 4px;
    padding: 5px 10px;
    background: deepskyblue;
    position: absolute;
    top: 40%;
    left: 20px;
    font-size: 25px;
    font-weight: bold;
  }
  .vv{
    border-radius: 4px;
    padding: 5px 10px;
    background: deepskyblue;
    position: absolute;
    top: 60%;
    left: 20px;
    font-size: 25px;
    font-weight: bold;
  }
</style>
<div align="center">
  <div class="ss"><a href="articles">Cтатьи</a></div>
  <div class="vv"><a href="video">Видео</a></div>
  <div class="cen">

    <div>
      <div class="hmsc">
        <div class="h inl"><a href="/">Главная</a></div>
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

      <div style="position: absolute;right: 141px;">
        <div class="l inl"><a href="login">Вход</a></div>
        <div class="r inl"><a href="registration">Регистрация</a></div>
      </div>

      <!--<div class="lr">

        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="//yastatic.net/share2/share.js"></script>
        <div style="position: absolute;right: 144px;" class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter,telegram" data-counter=""></div>

      </div>-->
    </div><br>
    <hr>
    <div>
      <?php
      $url = $_SERVER['REQUEST_URI'];
      $url = explode('/', $url);
      include 'controller/controller.php';
      $a = new General();
      $url = explode('?', $url[1]);
      if( $url[0] == ''){
      ?>
      <div style="font-size: 20px">
        <h4>ВОДА – важнейшее вещество на планете Земля!</h4>

        <div style="float: right;text-align: right;font-style: oblique">
          <div>«Вода! У тебя нет ни вкуса, ни цвета, ни запаха,</div>
          <div>тебя не описать, тобой наслаждаются, не понимая,</div>
          <div>что ты такое. Ты не только нужна, ты и есть жизнь!»</div>
          <div>Антуан де Сент-Экзюпери</div>
        </div>
        <div style="clear: both;"></div><br>
        <div class="textt">Вода - самое распространенное, самое уникальное и удивительное вещество в природе. Среди всех веществ, присутствующих на Земле, вода благодаря особым своим физическим, химическим и квантово-механическим свойствам занимает исключительное положение в природе и играет особую роль в существовании органической жизни. Покрывая около 3/4 поверхности нашей планеты, вода является не только колыбелью всех живых существ, но и постоянно поддерживает жизнь уже миллиарды лет.</div><br>

        <h3>Интересные факты о воде</h3>
        <ol class="textt1">
          <li>22 марта - День мировых водных ресурсов. Этот малоизвестный праздник был установлен Генеральной Ассамблеей ООН для того, что бы напомнить всем людям о важности этого вещества.</li>

          <li>Вода – основа жизни. Все живые животные и растительные существа состоят из воды: животные – на 75%, рыбы – на 75%, медузы – на 99%, картофель - на 76%, яблоки - на 85%, помидоры - на 90%, огурцы - на 95%, арбузы - на 96%. Даже человек состоит из воды. 86% воды содержится в теле у новорожденного и до 50% у пожилых людей</li>

          <li>Вода не только дарит жизнь, но может и отнимать ее. 85% всех заболеваний в мире передается с помощью воды. Ежегодно 25 млн. человек умирает от этих заболеваний.</li>

          <li>По данным ЮНЕСКО, самая чистая вода находится в Финляндии. Всего в исследовании свежей природной воды принимало участие 122 страны. При этом 1 млрд людей по всему миру вообще не имеет доступа к безопасной воде.</li>

          <li>Существует и опасная вода. Так, например, в Азербайджане есть вода, в которой много метана, поэтому она может загореться, если поднести к ней спичку. А в Сицилии в одном из озер есть подводные источники кислоты, которые отравляют всю воду в этом водоеме.</li>
        </ol>
      </div>

      <?php }else{
        $a->action($url[0]);
      } ?>

    </div>

  </div>
</div>

</body>
</html>