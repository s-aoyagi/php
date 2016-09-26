<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<body>
<?php

  $id = $_POST["id"];
  $password = $_POST["password"];
  $item = $_POST["item"];
  $num = $_POST["num"];
  $money = $_POST["money"];

  echo $id;
  echo "様<br>";
  echo "品名";
  echo $item;
  echo "<br>";
  echo "個数";
  echo $num;
  echo "<br>";
  echo "単価";
  echo $money;
  echo "<br>";
  echo "合計金額";
  echo $money * $num;

?>
</body>
</html>