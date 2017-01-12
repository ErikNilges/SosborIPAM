<?php
session_start();

include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

//$passhash = password_hash('$password', PASSWORD_BCRYPT);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = mysqli_query($db, $sql);

if ($row = mysqli_fetch_assoc($result)){
  $_SESSION['username'] = $row['username'];
  $_SESSION['vorname'] = $row['vorname'];
  $_SESSION['nachname'] = $row['nachname'];
  header("Location: index.html");
} else {
  header("Location: login.php");
}
// header("Location: index.html")
 ?>
