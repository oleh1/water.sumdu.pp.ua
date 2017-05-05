<?php echo $_SESSION['name']; ?> Вы зашли в свой личний кабинет.<br>
<form action="../base.php" method="POST">
  <input type="hidden" name="room" value="exit">
  <input type="submit" value="Выйти">
</form>