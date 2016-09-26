<?php
  $id = $_POST["id"];
  $password = $_POST["password"];
  $item = $_POST["item"];
  $num = $_POST["num"];
  $money = $_POST["money"];

  $id = htmlspecialchars($id);
  $password = htmlspecialchars($password);
  $item = htmlspecialchars($item);
  $num = htmlspecialchars($num);
  $money = htmlspecialchars($money);

  if($id == "") {
    echo "idが入力されていません。<br>";
  } else {
    echo "ようこそ";
    echo $id;
    echo "様";
    echo "<br>";
  }

  if($password == "") {
    echo "パスワードが入力されていません。<br>";
  } else {
    echo "パスワード：";
    echo "$password";
    echo "<br>";
  }

  if($item == "") {
    echo "品名が入力されていません。<br>";
  } else {
    echo "品名";
    echo "$item";
    echo "<br>";
  }

  if($num == "") {
    echo "個数が入力されていません。<br>";
  } else {
    echo "個数：";
    echo "$num";
    echo "<br>";
  }

  if($money == "") {
    echo "品名が入力されていません。<br>";
  } else {
    echo "単価";
    echo "$money";
    echo "<br>";
  }

  if($id == "" || $password == "" || $item == "" || $num == "" || $money == "") {
  echo "<form>";
  echo "<input type='button' onclick='history.back()' value='戻る'>";
  echo "</form>";
  } else {
  echo "<form method='post' action='sheet.php'>";

  echo "<input name='id' type='hidden' value='$id'>";
  echo "<input name='password' type='hidden' value='$password'>";
  echo "<input name='item' type='hidden' value='$item'>";
  echo "<input name='num' type='hidden' value='$num'>";
  echo "<input name='money' type='hidden' value='$money'>";

  echo "<input type='button' onclick='history.back()' value='戻る'>";
  echo "<input type='submit' value='OK'>";
  echo "</form>";
}
?>