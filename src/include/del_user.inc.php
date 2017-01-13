<?php
// Usersession initialisieren
session_start();

// Datenbankverbindung
include 'db.inc.php';

// Ausgewählten User aus der Datenbanktabelle löschen
mysqli_query($db, "DELETE FROM user WHERE username='{$_POST['delete']}'");

// Weiterleitung zur Userübersicht
header("Location: ../users.php");
 ?>
