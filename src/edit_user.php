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
        <div class="row-fluid">
          <div class="col-lg-12">

            <!-- Benutzer Einstellungen Start -->
            <form action="include/edit_user.inc.php" method="post">
              <div class="panel panel-default" style="margin-right:15px">
                <div class="panel-heading">
                  <h3>Benutzer Einstellungen</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm" style="max-width: 600px">
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
                        <input id='password' type='password' class='form-control' name='password' placeholder='Password'>
                      </div>
                      ";
                       ?>
                     </div>
                  </div>
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
