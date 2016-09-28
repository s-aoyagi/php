<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<body>
<?php

  $id = $_POST["id"]; // ここでlist.phpから渡ってきたcodeのデータを受け取る。

  $dsn = 'mysql:dbname=receipt;host=localhost';
  $user = 'root';
  $password = 'root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh -> query('SET NAMES utf8');

  $sql = "SELECT item, num, price FROM seikyu WHERE id = ?";
  $stmt = $dbh->prepare($sql);
  $stmt -> execute(array($id));

  $rec = $stmt -> fetch(PDO::FETCH_ASSOC);

  echo "<form action='complete_check.php' method='post'>";
  echo "商品名：<input type='text' name='item' value=" . $rec["item"] . "> ";
  echo "数量：<input type='text' name='num' value=" . $rec["num"] . "> ";
  echo "単価：<input type='text' name='price' value=" . $rec["price"] . "> ";
  echo "<input type='hidden' name='id' value=" . $id . ">";
  echo "<input type='submit' value='更新'>";
  echo "</form>";

  $dbh = null;

?>
</body>
</html>