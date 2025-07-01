# 他によく使う関数

## mb_strlen 関数

### 🔹 解説

日本語などのマルチバイト文字にはの文字数を取得する

### 🔹 サンプルコード

ファイル名 : chap5_1.php

```php
<?php
$word = "こんにちは";
echo mb_strlen($word);
?>
```

### 🔹 出力結果

![](images/01.png)



## trim 関数

### 🔹 解説

文字列の前後の空白を削除する

### 🔹 サンプルコード

ファイル名 : chap5_2.php

```php
<?php
$input = "  sample  ";
$clean = trim($input);
echo $clean;
?>
```

### 🔹 出力結果

![](images/02.png)



## explode 関数

### 🔹 解説

区切り文字を基準に文字列を分割して配列にします。

### 🔹 サンプルコード

ファイル名 : chap5_3.php

```php
<?php
$str = "りんご,バナナ,みかん";
$fruits = explode(",", $str);
print_r($fruits);
?>
```

### 🔹 出力結果

![](images/03.png)



## implode 関数

### 🔹 解説
配列を文字列に連結します。  
区切り文字の指定が可能。

### 🔹 サンプルコード

ファイル名 : chap5_4.php

```php
<?php
$items = ["パン", "牛乳", "卵"];
echo implode("・", $items);
?>
```

### 🔹 出力結果

![](images/04.png)



## htmlspecialchars 関数

### 🔹 解説

HTMLタグの無効化・無害化をしてくれる

### 🔹 サンプルコード

ファイル名 : chap5_5.php

```php
<?php
$text = "<script>alert('警告！！');</script>";
echo htmlspecialchars($text);
?>
```

### 🔹 出力結果

![](images/05.png)



## number_format 関数

### 🔹 解説
数値にカンマを付ける  
金額などを人が読みやすくするようにカンマ区切りにしてくれる

### 🔹 サンプルコード

ファイル名 : chap5_6.php

```php
<?php
$price = 1234567;
echo number_format($price);
?>
```

### 🔹 出力結果

![](images/06.png)



## count 関数

### 🔹 解説
配列に何個要素があるかを調べるための関数

### 🔹 サンプルコード

ファイル名 : chap5_7.php

```php
<?php
$colors = ["赤", "青", "緑"];
echo count($colors);
?>
```

### 🔹 出力結果

![](images/07.png)
