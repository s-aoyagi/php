<?php
session_start();
// ログイン状態チェック
if (!isset($_SESSION["USERID"])) {
  header("Location: Logout.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>請求コード入力ページ</title>
  <link rel="stylesheet" href="">
</head>
<body>
<form method="post" action="result.php">
  請求コードを入力してください。<br>
  <input name="id" type="text" style="width:100px"><br>
  <input type="submit" value="送信">
</form>
</body>
</html>