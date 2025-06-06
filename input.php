<form action="result.php" method="post">
  <!-- ニュース購読 -->
  <label><input type="checkbox" name="subscribe" value="yes"> ニュースを購読する</label><br><br>

  <!-- 性別 -->
  性別：<br>
  <label><input type="radio" name="gender" value="male"> 男性</label><br>
  <label><input type="radio" name="gender" value="female"> 女性</label><br>
  <label><input type="radio" name="gender" value="other"> その他</label><br><br>

  <!-- 誕生月 -->
  誕生月：<br>
  <select name="month">
    <?php for ($i = 1; $i <= 12; $i++): ?>
      <option value="<?= $i ?>"><?= $i ?>月</option>
    <?php endfor; ?>
  </select><br><br>

  <!-- 都道府県 -->
  都道府県：<br>
  <select name="pref">
    <?php
      $prefs = ['東京', '大阪', '福岡'];
      foreach ($prefs as $p) {
        echo "<option value=\\"$p\\">$p</option>";
      }
    ?>
  </select><br><br>

  <!-- 趣味 -->
  趣味：<br>
  <?php
    $hobbies = ['読書', '映画', '旅行', '音楽'];
    foreach ($hobbies as $hobby) {
      echo "<label><input type='checkbox' name='hobbies[]' value='$hobby'> $hobby</label><br>";
    }
  ?>
  <br>

  <input type="submit" value="送信">
</form>
