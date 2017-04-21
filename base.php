<?php
$c = include 'config.php';
$h = $c['host'];
$db = $c['dbname'];
$u = $c['user'];
$p = $c['pass'];
$pdo = new PDO("mysql:host=$h;dbname=$db", $u, $p);
$m = new mysqli($h, $u, $p, $db);

if($_POST['url'] == 'registration') {
  $url = $_POST['url'];
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $pass_r = $_POST['pass_r'];
  if ($pass && $pass_r) {
    if ($pass == $pass_r) {
      $pas = $pass;
    } else {
      header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=10');
    }
  }

  $r = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name OR mail = :mail");
  $r->bindParam(':user_name', $user_name);
  $r->bindParam(':mail', $mail);
  $r->execute();
  $r = $r->fetchAll();
  var_dump($r);

  if ($r) {
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=2');
  } else {

    $pdo->query("INSERT INTO users VALUES('aaa', 'aaa', 'aaa')");

    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=1');
  }
}

if($_POST['url'] == 'login') {
  $url = $_POST['url'];
  $name = $_POST['name'];
  $pas = $_POST['pass'];

  $r = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name OR pass = :pass");
  $r->bindParam(':user_name', $name);
  $r->bindParam(':pass', $pas);
  $r->execute();
  $r = $r->fetchAll();
  if ($r) {
    session_start();
    $_SESSION['name'] = $name;
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=1');
  } else {
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=10');
  }
}
?>