<?php
$c = include 'config.php';
$h = $c['host'];
$db = $c['dbname'];
$u = $c['user'];
$p = $c['pass'];
$pdo = new PDO("mysql:host=$h;dbname=$db", $u, $p);

if($_POST['url'] == 'registration') {
  $url = $_POST['url'];
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $pass_r = $_POST['pass_r'];
  if ($pass && $pass_r) {
    if ($pass == $pass_r) {
      $password = $pass;
      $e = true;
    } else {
      header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=10');
    }
  }

  $r = $pdo->query("SELECT * FROM users WHERE user_name = $name OR mail = $mail");
  $r = $r->fetchAll();
  if ($r) {
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=2');
  } else {
    $pdo->query("INSERT INTO users (user_name, mail, pass)VALUES($name, $mail, $password)");
    if ($e) {
      header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=1');
    }
  }
}

if($_POST['url'] == 'login') {
  $url = $_POST['url'];
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  $r = $pdo->query("SELECT * FROM users WHERE user_name = $name OR pass = $pass");
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