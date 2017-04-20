<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// Übermittelte Eingaben in Variablen speichern
$username = $_POST['username'];
$password = $_POST['password'];

// Sind alle Pflichtfelder ausgefüllt?
// Existiert schon ein User mit dem gewünschten Username?
if ($password == NULL OR $password != $_POST['password2']){
  $_SESSION['falscheeingabe'] = 1;
  header("Location: ../resetpw.php");
} else {
  // Übermitteltes Passwort hashen
  $pwdhash = password_hash($password, PASSWORD_BCRYPT);

  // User in der Datenbank mit dem gehashten Passwort anlegen
  mysqli_query($db, "UPDATE user SET password='$pwdhash' WHERE username='$username'");

  // Aufruf der Benutzerübersicht
  header("Location: ../users.php");
}
 ?>
