<div class="form_login">
  <div>Вход</div>
  <?php if($_GET['n'] == 10){ ?>
    <div style="color: red;">Неверный логин или пароль</div>
  <?php }else if($_GET['n'] == 1){ ?>
    <div style="color: green;"><?php echo $_SESSION['name']; ?> Вы вошли в свой акаунт</div>
  <?php } ?>
  <div>
    <form action="../base.php" method="POST">
      <input type="hidden" name="url" value="login">
      <input type="text" name="name" placeholder="Логин" required><br>
      <input type="password" name="pass" placeholder="Пароль" required><br>
      <input type="submit" value="Войти">
    </form>
  </div>
</div>