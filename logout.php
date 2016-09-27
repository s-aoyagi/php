<?php
session_start();

  if (isset($_SESSION["USERID"])) {
    $errorMessage = "ログアウトしました。";
  } else {
    $errorMessage = "タイムアウトしました。";
  }
  // セッション変数クリア
  $_SESSION = array();
  // セッションクリア
  @session_destroy();
?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
  </head>
  <body>
    <h1>ログアウト画面</h1>
    <div><?php echo $errorMessage; ?></div>
    <ul>
      <li><a href="index.html">初めの画面に戻る</a></li>
    </ul>
  </body>
</html>