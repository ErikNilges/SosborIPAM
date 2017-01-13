<!-- Diese Datei beinhaltet Header-Informationen, wie Charset, Titel, Stylesheets, sowie Teile des Bodys (Sidebar-Navigation) -->
<!-- Sie wird in alle Hauptseiten eingebunden und erleichtert so Änderungen -->
<?php
// Usersession initialisieren
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SosborIPAM</title>
    <!-- Stylesheets (Bootstrap-Framework & eigenes) -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ipam.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navigation Start-->
    <div id="sidebar-wrapper">
      <nav>
        <ul class="sidebar-nav nav">
          <li class="sidebar-brand">
            <a href="index.php"><span>SosborIPAM</span></a>
          </li>
          <li>
            <a href="index.php"><span>Übersicht</span></a>
          </li>
          <li>
            <a href="new_network.php"><span>Netzwerk anlegen</span></a>
          </li>
          <li>
            <a href="users.php"><span>Users</span></a>
          </li>
          <hr>

          <?php
          // Falls eine Usersession existiert -> Logout-Button
          // Ansonsten -> Login-Button
          if (isset($_SESSION['username'])){
            echo "
            <li>
              <a href='/include/logout.inc.php'><span>Logout</span></a>
            </li>";
          } else {
            echo "
            <li>
              <a href='login.php'><span>Login</span></a>
            </li>";
          }
           ?>

        </ul>
      </nav>
    </div>
    <!-- Navigation Ende -->
