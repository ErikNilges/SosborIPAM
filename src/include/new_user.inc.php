<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// Übermitteltes Passwort hashen
$pwdhash = password_hash($_POST['password'], PASSWORD_BCRYPT);

// User in der Datenbank mit dem gehashten Passwort anlegen
$sql = "INSERT INTO user (vorname, nachname, username, password) VALUES ('{$_POST['vorname']}', '{$_POST['nachname']}', '{$_POST['username']}', '$pwdhash')";
mysqli_query($db, $sql);

// Erneuter Aufruf der "Neuer Benutzer"-Seite
header("Location: ../new_user.php");
 ?>
