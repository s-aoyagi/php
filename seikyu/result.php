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
  <title></title>
</head>
<body>
  <?php
    $id = $_POST['id']; // 追加します。
    if($id == "") {
      echo "コードが入力されていません。<br>";
    }
    else{
      $dsn = 'mysql:dbname=receipt;host=localhost';
      $user = 'root';
      $password = 'root';
      $dbh = new PDO($dsn, $user, $password);
      $dbh -> query('SET NAMES utf8');

      $sql = 'SELECT * FROM seikyu WHERE delete_flag = 0 AND id = '.$id; // 編集します。
      $stmt = $dbh -> prepare($sql);
      $data[] = $code; // 追加
      $stmt -> execute($data); // executeの引数に$dataを追加
      while(1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec == false) {
          break;
        }

        echo "品名：";
        echo $rec['item'];
        echo "<br>";
        echo "個数：";
        echo $rec['num'];
        echo "<br>";
        echo "単価：";
        echo $rec['price'];
        echo "<br>";

        echo "<form action='edit.php' method='post'>";
        echo "<input type='hidden' name='id' value=" . $rec["id"] . ">";
        echo "<input type='submit' value='編集'>";
        echo "</form>";

        echo "<form action='delete.php' method='post'>";
        echo "<input type='hidden' name='id' value=" . $rec["id"] . ">";
        echo "<input type='submit' value='削除'>";
        echo "</form>";
      }
      $dbh = null;
      echo "<input type='button' onclick='history.back()' value='戻る'>";
    }
  ?>
</body>
</html>