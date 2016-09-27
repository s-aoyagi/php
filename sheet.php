<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<body>
<?php
  session_start();

  // ログイン状態チェック
  if (!isset($_SESSION["USERID"])) {
    header("Location: Logout.php");
    exit;
  }

  $dsn = 'mysql:dbname=receipt;host=localhost';
  $user = 'root';
  $password = 'root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh -> query('SET NAMES utf8');

  $item = $_POST["item"];
  $num = $_POST["num"];
  $money = $_POST["money"];
  $total = $money * $num;

  echo "品名：";
  echo $item;
  echo "<br>";
  echo "個数：";
  echo $num;
  echo "<br>";
  echo "単価：";
  echo $money;
  echo "<br>";
  echo "請求合計金額：";
  echo $total;

  $sql = 'INSERT INTO seikyu (item,num,money) VALUES("'.$item.' "," '.$num.' "," '.$total.' ")';
  $stmt = $dbh -> prepare($sql);
  $stmt -> execute(); // データベースにSQL文で命令を出す

  $dbh = null; // データベースから切断する
  echo "<br>";
  echo "以上のデータを保管しました"
?>
  <ul>
    <li><a href="Logout.php">ログアウト</a></li>
  </ul>
</body>
</html>