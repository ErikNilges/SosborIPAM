<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// Übermittelte Eingaben in Variablen speichern
$update = $_POST['update'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$username = $_POST['username'];
$check = $username;
$password = $_POST['password'];

// SQL-Abfrage des zu bearbeitenden Users
$result = mysqli_query($db, "SELECT * FROM user WHERE username='$update'");
$row = mysqli_fetch_assoc($result);

// Falls ein Feld leergelassen wird, soll der alte Wert behalten werden
// if (password_verify($_POST['password_old'], $row['password'])){
  if ($username == NULL){
    $username = $row['username'];
  }
  if ($vorname == NULL){
    $vorname = $row['vorname'];
  }
  if ($nachname == NULL){
    $nachname = $row['nachname'];
  }
  if ($password == NULL){
    $pwdhash = $row['password'];
  } else {
    $pwdhash = password_hash($password, PASSWORD_BCRYPT);
  }

  // Überschreibt die vorhandenen Einträge in der Datenbank
  mysqli_query($db, "UPDATE user SET username='$username', vorname='$vorname', nachname='$nachname', password='$pwdhash' WHERE username='$update'");

  // Falls sich der User selbst bearbeitet, wird dessen Session angepasst
  if ($_SESSION['username'] == $update){
    $_SESSION['username'] = $username;
    $_SESSION['vorname'] = $vorname;
    $_SESSION['nachname'] = $nachname;

    // Weiterleitung auf diejenige Seite, von welcher der User bearbeitet wurde
    if ($check != ''){
      header("Location: ../users.php");
    } else {
      header("Location: ../edit_user.php");
    }
  } else {
    header("Location: ../users.php");
  }
// } else {
//   $_SESSION['falscheeingabe'] = 1;
//   header("Location: ../edit_user.php");
// }
 ?>
