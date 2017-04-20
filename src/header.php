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
    <!-- Stylesheets (Bootstrap-Framework, Font Awesome Icons & eigenes) -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/ipam.css" rel="stylesheet">
  </head>
  <body>

    <!-- Navigation Start-->
    <div id="sidebar-wrapper">
      <nav>
        <ul class="sidebar-nav nav">
          <li class="sidebar-brand">
            <a href="impressum.php"><span>SosborIPAM</span></a>
          </li>
          <?php
          // Falls eine Usersession existiert -> Zeige alle Links & Logout-Button
          // Ansonsten -> Zeige nur den Login-Button
          // if (isset($_SESSION['username']) AND $_SESSION['role'] == 'Admin'){
          if (isset($_SESSION['username'])){
            echo "
            <li>
              <a href='index.php'><span class='fa fa-list'></span> Übersicht</a>
            </li>
            <li>
              <a href='new_network.php'><span class='fa fa-plus-circle'></span> Netzwerk anlegen</a>
            </li>
            <li>
              <a href='users.php'><span class='fa fa-users'></span> Users</a>
            </li>
            <li class='navUser'>
              <a href='edit_user.php'><span class='fa fa-user-circle-o'></span> {$_SESSION['username']}</a>
            </li>
            <li class='navLogin'>
              <a href='/include/logout.inc.php'><span class='fa fa-sign-out'></span> Logout</a>
            </li>";
          // } elseif (isset($_SESSION['username']) AND $_SESSION['role'] == 'User'){
          } elseif (isset($_SESSION['username'])){
            echo "
            <li>
              <a href='index.php'><span class='fa fa-list'></span> Übersicht</a>
            </li>
            <li>
              <a href='new_network.php'><span class='fa fa-plus-circle'></span> Netzwerk anlegen</a>
            </li>
            <li class='navUser'>
              <a href='edit_user.php'><span class='fa fa-user-circle-o'></span> {$_SESSION['username']}</a>
            </li>
            <li class='navLogin'>
              <a href='/include/logout.inc.php'><span class='fa fa-sign-out'></span> Logout</a>
            </li>";
          } else {
            echo "
            <li class='navLogin'>
              <a href='login.php'><span class='fa fa-sign-in'></span> Login</a>
            </li>";
          };
            echo "
            <li class='navImpressum'>
              <a href='impressum.php'><span class='fa fa-address-book-o'></span> Impressum</a>
            </li>";
           ?>
        </ul>
      </nav>
    </div>
    <!-- Navigation Ende -->
