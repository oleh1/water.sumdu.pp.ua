<div>

  <form action="" method="post">
    <input type="hidden" name="map" value="map">
  <div class="gg">
    <div><input class="gps" type="text" name="gps" placeholder="Введите адрес"><input type="submit" value="Получить результат"></div>
    <table class="ta">
    <tr>
      <th>Водопровод <input name="a1" value="a1" type="checkbox"></th>
      <th>Колодец <input name="a2" value="a2" type="checkbox"></th>
      <th>Скважена <input name="a3" value="a3" type="checkbox"></th>
      <th>Другие источники <input name="a4" value="a4" type="checkbox"></th>
    </tr>
    <tr>
      <th>Питьевая <input name="b1" value="b1" type="checkbox"></th>
      <th>Битовая <input name="b2" value="b2" type="checkbox"></th>
      <th>Промишленная <input name="b3" value="b3" type="checkbox"></th>
      <th>Другое <input name="b4" value="b4" type="checkbox"></th>
    </tr>
    </table>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559090.9136585207!2d32.06986143382524!3d51.21700834918434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41290220fc73a461%3A0x5037728c8c1aa5d0!2z0KHRg9C80YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1suk!2sua!4v1492259788591" width="500" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  </form>

  <?php

  if ( $_POST['map'] == 'map' ){

    $c = include 'config.php';
    $h = $c['host'];
    $db = $c['dbname'];
    $u = $c['user'];
    $p = $c['pass'];

    $gps =  $_POST['gps'];
    $a1 =  $_POST['a1'];
    $a2 =  $_POST['a2'];
    $a3 =  $_POST['a3'];
    $a4 =  $_POST['a4'];

    $b1 =  $_POST['b1'];
    $b2 =  $_POST['b2'];
    $b3 =  $_POST['b3'];
    $b4 =  $_POST['b4'];


    $r = preg_match_all('#'.$gps.'#i', 'г. Сумы', $r);

    if($r == 1 && $a1 == 'a1'){
      $z1 = '83%';
      $z2 = '0%';
      $z3 = '17%';
      $x1 = '83%';
      $x2 = '0%';
      $x3 = '17%';
      $c1 = '67%';
      $c2 = '0%';
      $c3 = '33%';
      $v1 = '50%';
      $v2 = '33%';
      $v3 = '17%';
      $n1 = '33%';
      $n2 = '17%';
      $n3 = '50%';
      $m1 = '67%';
      $m2 = '0%';
      $m3 = '33%';
      $k1 = '0%';
      $k2 = '67%';
      $k3 = '33%';

      $ooo = 'Хорошая';
    }

//    var_dump($r);
//    $pdo = new PDO("mysql:host=$h;dbname=$db", $u, $p);
//    $r = $pdo->query("SELECT * FROM `city` `c` JOIN `kind` `k`ON `c`.`kind_id` = `k`.`id_k` JOIN `result` `r` ON `k`.`result_id` = `r`.`id_r` WHERE `name_city` LIKE '%{$gps}%'");

//    $r = $pdo->query("SELECT * FROM `city` WHERE `name_city` LIKE '%{$gps}%'");

//    $rr = $r->fetch();

//    var_dump($rr);

//    $pdo = new PDO('mysql:host=127.0.0.1;dbname=water', 'root', '1');
//    $db = $pdo->query("SELECT * FROM `city` WHERE `name_city` LIKE '%сумы%'");
//    $result = $db->fetchAll();

//    var_dump($result);

//    $r = mysqli_query($mysqli, "SELECT * FROM `city` `c` JOIN `kind` `k`ON `c`.`kind_id` = `k`.`id_k` JOIN `result` `r` ON `k`.`result_id` = `r`.`id_r` WHERE `name_city` LIKE '%{$gps}%'");



  }

  ?>

  <div style="float: left;width: 50%;">
    <div class="po">
      <div>Показатели(%):</div>
      <table>
        <tr>
          <th></th>
          <th>Чистая</th>
          <th>Умеренная</th>
          <th>Грязная</th>
        </tr>
        <tr>
          <th>Сухой остаток</th>
          <th><?php echo $z1; ?></th>
          <th><?php echo $z2; ?></th>
          <th><?php echo $z3; ?></th>
        </tr>
        <tr>
          <th>Нитраты</th>
          <th><?php echo $x1; ?></th>
          <th><?php echo $x2; ?></th>
          <th><?php echo $x3; ?></th>
        </tr>
        <tr>
          <th>Железо общее</th>
          <th><?php echo $c1; ?></th>
          <th><?php echo $c2; ?></th>
          <th><?php echo $c3; ?></th>
        </tr>
        <tr>
          <th>Жесткость</th>
          <th><?php echo $v1; ?></th>
          <th><?php echo $v2; ?></th>
          <th><?php echo $v3; ?></th>
        </tr>
        <tr>
          <th>Мутность</th>
          <th><?php echo $n1; ?></th>
          <th><?php echo $n2; ?></th>
          <th><?php echo $n3; ?></th>
        </tr>
        <tr>
          <th>Цветность</th>
          <th><?php echo $m1; ?></th>
          <th><?php echo $m2; ?></th>
          <th><?php echo $m3; ?></th>
        </tr>
        <tr>
          <th>Запах</th>
          <th><?php echo $k1; ?></th>
          <th><?php echo $k2; ?></th>
          <th><?php echo $k3; ?></th>
        </tr>
      </table>
    </div>
    <div class="obw">
      <div>Общее состояние:</div>
      <div><strong><?php echo $ooo; ?></strong></div>
    </div>
  </div>

</div>

<style>
  .po{
    margin: 17px 0 0 0;
    width: 420px;
    height: 200px;
    border: 2px solid;
  }
  .obw{
    margin: 10px 0 0 0;
    width: 420px;
    height: 45px;
    border: 2px solid;
  }
  .gg{
    margin: 20px 0 0 0;
    float: left;
    width: 50%;
  }
  .gg input{
    cursor: pointer;
  }
  .map{
    margin: 40px 0 0 0;
  }
  .ta{
    margin: 20px 0 0 0;
  }
  .ta th{
    width: 170px;
  }
  .gps{
    width: 200px;
  }
</style>