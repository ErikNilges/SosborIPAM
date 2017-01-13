<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// SQL-Abfrage des Users
$result = mysqli_query($db, "SELECT * FROM user WHERE username='{$_POST['username']}'");

// SQL-Abfrage als Associative Array speichern
$row = mysqli_fetch_assoc($result);

// Übermitteltes Passwort mit dem Gehashten aus der Datenbank vergleichen
// Falls korrekt -> Eindeutige Session (username) erstellen und zur Hauptseite weiterleiten
// Andernfalls die Loginseite erneut aufrufen
if (password_verify($_POST['password'], $row['password'])){
  $_SESSION['username'] = $row['username'];
  header("Location: ../index.php");
} else {
  header("Location: ../login.php");
}
 ?>
