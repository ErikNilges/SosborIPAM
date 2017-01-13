<?php

 // Datenbankverbindung aufbauen (Server, User, Passwort, Datenbank)
$db = mysqli_connect("localhost", "root", "root", "login-test");

// Entfernen !!!
// Verbindung testen
if (!$db) {
  die("Connection failed: ".mysqli_connect_error());
}

 ?>
