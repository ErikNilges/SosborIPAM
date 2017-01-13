<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SosborIPAM</title>
    <!-- Style -->
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
            <a href="anlegen.php"><span>Netzwerk anlegen</span></a>
          </li>
          <li>
            <a href="users.php"><span>Users</span></a>
          </li>
          <hr>
          <?php
          if (isset($_SESSION['username'])){
            echo "<li>
              <a href='logout.php'><span>Logout</span></a>
            </li>";
          } else {
            echo "<li>
              <a href='login.php'><span>Login</span></a>
            </li>";
          }
           ?>

        </ul>
      </nav>
    </div>
    <!-- Navigation Ende -->
