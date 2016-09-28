<?php
  $item = $_POST["item"];
  $num = $_POST["num"];
  $price = $_POST["price"];

  $item = htmlspecialchars($item);
  $num = htmlspecialchars($num);
  $price = htmlspecialchars($price);

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

  if($price == "") {
    echo "単価が入力されていません。<br>";
  } else {
    echo "単価";
    echo "$price";
    echo "<br>";
  }

  if($item == "" || $num == "" || $price == "") {
  echo "<form>";
  echo "<input type='button' onclick='history.back()' value='戻る'>";
  echo "</form>";
  } else {
  echo "<form method='post' action='sheet.php'>";

  echo "<input name='item' type='hidden' value='$item'>";
  echo "<input name='num' type='hidden' value='$num'>";
  echo "<input name='price' type='hidden' value='$price'>";

  echo "<input type='button' onclick='history.back()' value='戻る'>";
  echo "<input type='submit' value='OK'>";
  echo "</form>";
}
?>