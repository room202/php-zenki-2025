# 演習問題 : デバッグ編

`debug.php`は所々エラーが発生します。  
エラーを修正（デバッグ）して動くようにしてください。

## ファイル名 : `debug.php`

```php
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPエラーチェック練習</title>
</head>
<body>

<h2>フォーム1：名前入力</h2>

<form action="" method="post">
    <label>名前：<input type="text" name="name" placeholder="例：清風太郎"></label>
    <input type="submit" value="送信">
</form>

<?php
if(isset($_post['name'])) {
    $name = $_POST['name'];
    echo "<p>こんにちは、" . $_POST["name"] . "さん！</p>"
}

// 変数を定義して「1年」で初期化せよ
echo "<p>学年：$grade</p>";

$school = "清風情報工科学院";
echo "あなたの学校は " $school "<br>";


$score = 75;
if $score > 60 {
    echo "合格です<br>";
}

// yesを通してください。
$pass = "yes";
if ($pass = "no") {
    echo "noです<br>";
} else {
    echo "yesです<br>";
}

$age = 17; // この行は変更しないでください。
$Age = 19; // この変数「$Age」は今後使用しないこととします。

// $_POST['user']が存在する場合のみ$_POST['user']をechoで表示せよ。
echo $_POST['user']; 

//ファイルが存在する場合のみ以下を実行するように修正せよ。
include("notfound.php");

// $ageが18以上ならば、成人です。
// 成人ですを表示させてください。
if ($age >and 18) {
    echo "成人です<br>"; 
} else {
    echo "未成年です<br>";
}

// issetの戻り値で比較して、以下のif文を通せ
$_POST['comment'] = "コメント<br>";
if (isset($_POST['comment']) === "true") {
    echo $_POST['comment'];
} 

echo "<div>ようこそ</div>

// 合計が300になるように以下を変更せよ。
$total = 100 + 50 * 2; //数値の変更は不可
echo "合計: $total<br>";

$colors = ["red", "blue", "green"];
// greenを表示せよ。
echo $colors[3]."<br>"; 


$count = 0; //この行は変更不可とする。
// $countをグローバル変数として使用し、変数の値にプラス1せよ
function increment() {
    $count++;
}
increment();
// $countの値を表示する。
echo "カウント: $count<br>";
?>

<form method="post">
    <input type="text" name="email_address" placeholder="メールアドレス">
    <input type="submit" value="送信">
</form>

<?php
// メールアドレスのフォームから値を受け取れ。
if (isset($_POST['email'])) {
    echo "メール：" . $_POST['email'] . "<br>";
}

$price = "100"; // この行の変更は不可とする。
if ($price === 100) { // 比較演算子の変更は不可とする。
    echo "価格は100円です<br>"; 
}

//ファイルが存在する場合のみ以下を実行。
unlink("not_existing_file.txt");

//GETの内容を出力
$_GET['comment'] = 'GETの内容<br>';
$_POST['comment'] = 'POSTの内容<br>';
if (isset($_GET['comment'])) {
    echo $_POST['comment']  . "<br>";
}

$student = [
    "name" => "田中",
    "scores" => [80, 90, 70]
];
echo "名前：" . $student["name"][1] . "<br>スコア：" . $student["score"][0] . "<br>"; 

$amount = '50abc'; //この行の変更は不可とする
// 必ず$amount + 100をし、Warningが出ないようにせよ。
$total = $amount + 100; //150を以下で表示できるようにせよ
echo "合計金額： $total<br>";

// 大人です
// 保護者の同意は不要です
//上記の文字を表示させよ。
if ($age > 18)
    echo "大人です<br>";
    echo "保護者の同意は不要です<br>";
else 
    echo "子供です<br>";

$nums = [1, 2, 3];
for ($i = 0; $i <= count($nums); $i++) {
    echo $nums[$i] . "<br>";
}

$text = "こんにちは";
// 以下のif文を通してください。
if (strpos($text, "こ")) {
    echo "「こ」 が見つかりました";
}
?>

<form method="post">
    <input type="text" name="nickname" placeholder="ニックネーム">
    <input type="submit" value="送信">
</form>

<?php
echo $_GET['nickname'];
?>

</body>
</html>
```
