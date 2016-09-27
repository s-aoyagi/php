<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["USERID"])) {
  header("Location: Logout.php");
  exit;
}
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>メイン</title>
  </head>
  <body>
    <p>ようこそ<u>
      <?php echo htmlspecialchars($_SESSION["USERID"], ENT_QUOTES); ?>
    </u>さん</p>

    <form method="post" action="check.php">
      請求内容を入力してください<br>商品名
      <input name="item" type="text">
      <br>個数
      <input name="num" type="text">
      <br>単価
      <input name="money" type="text">
      <input type="submit" value="送信">
    </form>

    <ul>
      <li><a href="Logout.php">ログアウト</a></li>
    </ul>
  </body>
</html>