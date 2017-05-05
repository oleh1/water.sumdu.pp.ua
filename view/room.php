<?php echo $_SESSION['name']; ?> Вы зашли в свой личний кабинет.<br>
<form action="../base.php" method="POST">
  <input type="hidden" name="url" value="exit">
  <input type="submit" value="Войти">
</form>