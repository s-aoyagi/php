<?php
  $item = $_POST["item"];
  $num = $_POST["num"];
  $price = $_POST["price"];

  $item = htmlspecialchars($item);
  $num = htmlspecialchars($num);
  $price = htmlspecialchars($price);

  if(!preg_match('/^[0-9]+$/', $num)) {
    echo "数字が入力されていません。<br>";
    echo "<form>";
    echo "<input type='button' onclick='history.back()' value='戻る'>";
    echo "</form>";
  }else if(!preg_match('/^[0-9]+$/', $price)) {
    echo "数字が入力されていません。<br>";
    echo "<form>";
    echo "<input type='button' onclick='history.back()' value='戻る'>";
    echo "</form>";
  } else {
    echo "<form method='post' action='complete.php'>";

    echo "<input name='item' type='hidden' value='$item'>";
    echo "<input name='num' type='hidden' value='$num'>";
    echo "<input name='price' type='hidden' value='$price'>";

    echo "<input type='submit' value='チェックOK'>";
    echo "</form>";
  }
?>