# 他によく使う関数

## strlen 関数

### 🔹 解説  

文字列の「バイト数」を取得する  
※日本語では要注意

### 🔹 サンプルコード

ファイル名 : chap5_1.php

```php
<?php
$password = "password";
echo strlen($password);
?>
```

### 🔹 出力結果

![](images/01.png)

---

## mb_strlen 関数

### 🔹 解説

日本語などのマルチバイト文字にはの文字数を取得する

### 🔹 サンプルコード

ファイル名 : chap5_2.php

```php
<?php
$word = "こんにちは";
echo mb_strlen($word);
?>
```

### 🔹 出力結果

![](images/02.png)

## trim 関数

### 🔹 解説

文字列の前後の空白を削除する

### 🔹 サンプルコード

ファイル名 : chap5_3.php

```php
<?php
$input = "  sample  ";
$clean = trim($input);
echo $clean;
?>
```

### 🔹 出力結果

![](images/03.png)
