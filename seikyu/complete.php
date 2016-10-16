<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>更新完了ページ</title>
  <link rel="stylesheet" href="">
</head>
<body>
<?php
  $id = $_POST['id'];
  $item = $_POST["item"];
  $num = $_POST["num"];
  $price = $_POST["price"];

  $dsn = 'mysql:dbname=receipt;host=localhost';
  $user = 'root';
  $password = 'root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh -> query('SET NAMES utf8');

  $sql = 'UPDATE seikyu SET item=?, num=?, price=? WHERE id = ?'; // 追記します
  $stmt = $dbh -> prepare($sql); // 追記します
  $stmt -> execute(array($item, $num, $price, $id)); // 追記します

  $rec = $stmt -> fetch(PDO::FETCH_ASSOC);

  $dbh = null;
?>
<p>更新しました。</p>
<a href="main.php">メインページに戻る</a>
</body>
</html>