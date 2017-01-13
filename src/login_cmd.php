<?php
session_start();

include 'db.php';


$sql = "SELECT * FROM user WHERE username='{$_POST['username']}'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);


if (password_verify($_POST['password'], $row['password'])){
  $_SESSION['username'] = $row['username'];
  $_SESSION['vorname'] = $row['vorname'];
  $_SESSION['nachname'] = $row['nachname'];
  header("Location: index.php");
} else {
  header("Location: login.php");
}
 ?>
