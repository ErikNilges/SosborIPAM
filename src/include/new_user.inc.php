<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// Übermittelte Eingaben in Variablen speichern
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$username = $_POST['username'];
$password = $_POST['password'];

// Sind alle Pflichtfelder ausgefüllt?
// Existiert schon ein User mit dem gewünschten Username?
if ($vorname == NULL OR $nachname == NULL OR $username == NULL OR $password == NULL){
  $_SESSION['falscheeingabe'] = 1;
  header("Location: ../new_user.php");

} else {
  $result = mysqli_query($db, "SELECT * FROM user WHERE username='$username'");
  $row = mysqli_fetch_assoc($result);

  if ($row['username'] == $username){
    $_SESSION['falscheeingabe'] = 2;
    header("Location: ../new_user.php");

  } else {
    // Übermitteltes Passwort hashen
    $pwdhash = password_hash($password, PASSWORD_BCRYPT);

    // User in der Datenbank mit dem gehashten Passwort anlegen
    // $sql = "INSERT INTO user (vorname, nachname, username, password, role_id) VALUES ('$vorname', '$nachname', '$username', '$pwdhash', {$_POST['role']})";
    $sql = "INSERT INTO user (vorname, nachname, username, password) VALUES ('$vorname', '$nachname', '$username', '$pwdhash')";
    mysqli_query($db, $sql);

    // Aufruf der Benutzerübersicht
    header("Location: ../users.php");
  }
}
 ?>
