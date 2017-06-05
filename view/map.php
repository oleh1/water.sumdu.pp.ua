<div>

  <div class="gg">
    <div><input class="gps" type="text" placeholder="Введите GPS - кординаты/адрес"><input type="submit" value="Получить результат"></div>
    <table class="ta">
    <tr>
      <th>Водопровод <input type="checkbox"></th>
      <th>Колодец <input type="checkbox"></th>
      <th>Скважена <input type="checkbox"></th>
      <th>Другие источники <input type="checkbox"></th>
    </tr>
    <tr>
      <th>Питьевая <input type="checkbox"></th>
      <th>Битовая <input type="checkbox"></th>
      <th>Промишленная <input type="checkbox"></th>
      <th>Другое <input type="checkbox"></th>
    </tr>
    </table>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559090.9136585207!2d32.06986143382524!3d51.21700834918434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41290220fc73a461%3A0x5037728c8c1aa5d0!2z0KHRg9C80YHRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1suk!2sua!4v1492259788591" width="450" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <div style="float: left;width: 50%;">
    <div class="po">
      <div>Показатели(%):</div>
      <div></div>
    </div>
    <div class="obw">
      <div>Общее состояние:</div>
      <div></div>
    </div>
  </div>

</div>

<style>
  .po{
    margin: 17px 0 0 0;
    width: 420px;
    height: 300px;
    border: 2px solid;
  }
  .obw{
    margin: 10px 0 0 0;
    width: 420px;
    height: 300px;
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