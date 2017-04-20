<?php
// Header und Sidebar einbinden
include 'header.php';

// Falls User nicht eingeloggt ist -> Weiterleitung zum Login
if (!isset($_SESSION['username'])){
  header("Location: login.php");
};

$username = $_POST['username'];
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

          <!-- Neuer Benutzer Start -->
          <form action="include/resetpw.inc.php" method="post">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3>Neues Passwort</h3>
              </div>
              <div class="panel-body">
                <div class="well well-sm col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password2" placeholder="Password">
                    <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <?php
                   if ($_SESSION['falscheeingabe'] == 1){
                     echo "
                     <div class='alert alert-danger'>Bitte überprüfen Sie Ihre Eingabe!</div>";
                     unset($_SESSION['falscheeingabe']);
                   }
                   ?>
                 </div>
              </div>
              <div class="panel-footer">
                <?php echo "
                <button name='username' value='{$_POST['username']}' type='submit' class='btn btn-primary width100'>Speichern</button>
                ";
                ?>
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
