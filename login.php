<?php
session_start();
// 接続情報
$dsn = 'mysql:dbname=receipt;host=localhost';
$user = 'root';
$password = 'root';
// インプット値
$id = $_POST["id"];
$userpass = $_POST["password"];

try {
  // DB接続
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  // SQL発行
  $stmt = $pdo->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
  $stmt->bindValue(1, $id);
  $stmt->bindValue(2, $userpass);
  $stmt->execute();
  // 結果の取得
  if($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
      $_SESSION["USERID"] = $row['username'];
      header("Location: Main.php");  // メイン画面へ遷移
  }else{
    echo "idもしくはパスワードが違います。";
  }
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// DB切断
$pdo = null;
?>