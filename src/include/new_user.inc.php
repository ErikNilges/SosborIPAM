<?php
session_start();

include 'db.inc.php';

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$username = $_POST['username'];
$password = $_POST['password'];

$pwdhash = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO user (vorname, nachname, username, password) VALUES ('$vorname', '$nachname', '$username', '$pwdhash')";

$result = mysqli_query($db, $sql);

header("Location: ../new_user.php");
 ?>
