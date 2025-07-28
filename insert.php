<?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01;hos=localhost;", "root", "root");
  
  $sql = "INSERT INTO contactform(name, mail, age, comments) VALUES(?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  
  $stmt -> bindvalue(1, $_POST['name']);
  $stmt -> bindvalue(2, $_POST['mail']);
  $stmt -> bindvalue(3, $_POST['age']);
  $stmt -> bindvalue(4, $_POST['comments']);

  $stmt -> execute();
?>

<!doctype HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
  <body>
    <h1>お問合せ内容確認</h1>
    <div class="confirm">
      <p>
        お問合せありがとうございました<br>
        3営業日以内に担当者よりご連絡差し上げます。
      </p>
    </div>
  </body>
</html>