<?php
// Header und Sidebar einbinden
include 'header.php';

// Falls User nicht eingeloggt ist -> Weiterleitung zum Login
if (!isset($_SESSION['username'])){
  header("Location: login.php");
};
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

            <!-- Benutzer Einstellungen Start -->
            <form action="include/edit_user.inc.php" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Benutzer Einstellungen</h3>
                </div>
                <div class="panel-body">
                  <div class="well well-sm col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <?php
                    echo"
                    <div class='input-group bottom15'>
                      <span class='input-group-addon width100'>Vorname</span>
                      <input id='vorname' type='text' class='form-control' name='vorname' placeholder='Vorname' value='{$_SESSION['vorname']}'>
                    </div>
                    <div class='input-group bottom15'>
                      <span class='input-group-addon width100'>Nachname</span>
                      <input id='nachname' type='text' class='form-control' name='nachname' placeholder='Nachname' value='{$_SESSION['nachname']}'>
                    </div>
                    <div class='input-group bottom15'>
                      <span class='input-group-addon width100'>Username</span>
                      <input readonly id='update' type='text' class='form-control' name='update' placeholder='Username' value='{$_SESSION['username']}'>
                    </div>
                    <div class='input-group bottom15'>
                      <span class='input-group-addon width100'>Passwort</span>
                      <input id='password_old' type='password' class='form-control' name='password_old' placeholder='Password alt'>
                    </div>
                    <div class='input-group bottom15'>
                      <span class='input-group-addon width100'>Passwort</span>
                      <input id='password' type='password' class='form-control' name='password' placeholder='Password neu'>
                    </div>
                    ";
                    if ($_SESSION['falscheeingabe'] == 1){
                      echo "
                      <div class='alert alert-danger'>Bitte überprüfen Sie Ihre Eingabe!</div>";
                      unset($_SESSION['falscheeingabe']);
                    }
                    ?>
                   </div>
                 <?php

                  ?>
                </div>
                <div class="panel-footer">
                  <button type="submit" class="btn btn-primary width100">Speichern</button>
                </div>
              </div>
            </form>
            <!-- Benutzer Einstellungen Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
