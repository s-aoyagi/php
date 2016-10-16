<?php
  $id = $_POST['id'];

  $dsn = 'mysql:dbname=receipt;host=localhost';
  $user = 'root';
  $password = 'root';
  $dbh = new PDO($dsn, $user, $password);
  $dbh -> query('SET NAMES utf8');

  $sql = 'UPDATE seikyu SET delete_flag = 1 WHERE id = ?';
  $stmt = $dbh -> prepare($sql);
  $stmt -> execute(array($id));

  $dbh = null;

  header('location: ./main.php');
  exit;
?>