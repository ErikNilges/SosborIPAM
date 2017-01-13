<?php
// Usersession initialisieren
session_start();
// Usersession beenden
session_destroy();

// Weiterleitung zum Login
header("Location: ../login.php");
 ?>
