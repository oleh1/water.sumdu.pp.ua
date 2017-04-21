<div class="form_regi">
  <div>Новый пользователь</div>
  <?php if($_GET['n'] == 3){ ?>
    <div style="color: red;">Повтор пароля введен неправильно</div>
  <?php }else if($_GET['n'] == 1){ ?>
    <div style="color: green;">Вы успешно зарегестрировались</div>
  <?php }else if($_GET['n'] == 2){ ?>
  <div style="color: red;">Такой логин или E-mail уже существует</div>
  <?php } ?>
  <div>
    <form action="../base.php" method="POST">
      <input type="hidden" name="url" value="registration">
      <input type="text" name="name" placeholder="Логин" required><br>
      <input type="text" name="mail" placeholder="E-mail" required><br>
      <input type="password" name="pass" placeholder="Пароль" required><br>
      <input type="password" name="pass_r" placeholder="Повтор пароля" required><br>
      <input type="submit" value="Зарегестрироваться">
    </form>
  </div>
</div>