<?php
// ニュース購読
if (isset($_POST['subscribe']) && $_POST['subscribe'] === 'yes') {
  echo "ニュースを購読しました。<br>";
}

// 性別
switch ($_POST['gender'] ?? '') {
  case 'male':
    echo "ようこそ、男性の方<br>";
    break;
  case 'female':
    echo "ようこそ、女性の方<br>";
    break;
  case 'other':
    echo "ようこそ、その他の方<br>";
    break;
  default:
    echo "性別が選択されていません。<br>";
}

// 誕生月
$month = $_POST['month'] ?? '';
if ($month) {
  echo "{$month}月が選ばれました。<br>";
}

// 都道府県
$pref = $_POST['pref'] ?? '';
if ($pref) {
  echo "選択された都道府県：{$pref}<br>";
}

// 趣味
if (!empty($_POST['hobbies'])) {
  $selectedHobbies = implode(', ', $_POST['hobbies']);
  echo "選ばれた趣味：{$selectedHobbies}<br>";
} else {
  echo "趣味は選択されていません。<br>";
}
?>
