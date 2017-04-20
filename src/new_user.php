<?php
// Header und Sidebar einbinden
include 'header.php';

// Falls User nicht eingeloggt ist -> Weiterleitung zum Login
if (!isset($_SESSION['username'])){
  header("Location: login.php");
}
//  elseif ($_SESSION['role'] != 'Admin'){
//   header("Location: index.php");
// };
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

          <!-- Neuer Benutzer Start -->
          <form action="include/new_user.inc.php" method="post">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Neuer Benutzer</h3>
              </div>
              <div class="panel-body">
                <div class="well well-sm col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="vorname" placeholder="Vorname">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="nachname" placeholder="Nachname">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <label class="radio-inline"><input type="radio" name="role" value="0">Admin</label>
                  <label class="radio-inline"><input type="radio" name="role" value="1" checked="checked">User</label>
                  <?php
                   if ($_SESSION['falscheeingabe'] == 1){
                     echo "
                     <div class='alert alert-danger'>Bitte überprüfen Sie Ihre Eingabe!</div>";
                     unset($_SESSION['falscheeingabe']);
                   } elseif ($_SESSION['falscheeingabe'] == 2) {
                     echo "
                     <div class='alert alert-danger'>Dieser Username ist bereits vergeben!</div>";
                     unset($_SESSION['falscheeingabe']);
                   }
                   ?>
                </div>
              </div>
              <div class="panel-footer">
                <button type="submit" class="btn btn-primary width100">Speichern</button>
              </div>
            </div>
          </form>
          <!-- Neues Benutzer Ende-->

        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
