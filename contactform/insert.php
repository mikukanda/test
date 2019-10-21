<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=miku;host=localhost;" ,"root" ,"mysql");

$pdo->exec("insert into contactform(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォームを作る</title>
  <link rel="stylesheet" href="style2.css"> 
</head>
<body>
<h1>お問合わせフォーム</h1>

<div class="confirm">
 <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
　</p>
  </div>

</body>

</html>