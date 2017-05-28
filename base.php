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

  $r = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name OR mail = :mail");
  $r->bindParam(':user_name', $name);
  $r->bindParam(':mail', $mail);
  $r->execute();
  $r = $r->fetchAll();

  if ($r) {
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=2');
  } else if($pass != $pass_r){
    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=3');
  }else{

    $pdo->query("INSERT INTO users VALUES(null, '{$name}', '{$mail}', '{$pass}')");

    header('Location: http://' . $_SERVER["HTTP_HOST"] . '/' . $url . '?n=1');
  }
}

if($_POST['url'] == 'login') {
  $url = $_POST['url'];
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  $r = $pdo->prepare("SELECT * FROM users WHERE user_name = :user_name AND pass = :pass");
  $r->bindParam(':user_name', $name);
  $r->bindParam(':pass', $pass);
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

if($_POST['room'] == 'exit') {
  session_start();
  unset( $_SESSION['name'] );
//  session_unregister('name');
//  session_destroy();
//  $_SESSION['name'] = '';
  header('Location: http://' . $_SERVER["HTTP_HOST"] . '?tt=1');
}

if ( $_POST['articles'] == 'contacts' ){

  $to = 'lyboleg@gmail.com';
  $subject = 'Обратная связь water.sumdu.pp.ua';
  $message = $_POST['text'] . "\r\n" . $_POST['phone'];
  $headers .= "From: ". $_POST['name'] ." <". $_POST['e-mail'] .">\r\n";
  $t = mail($to, $subject, $message, $headers);

  if($t){$r = 1;}else{$r = 0;}

  header('Location: http://' . $_SERVER["HTTP_HOST"] .'/'. $_POST['articles'] . '?' . $r);



}
?>