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
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

          <!-- Neues Netzwerk Start -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Neues Netzwerk anlegen</h3>
            </div>
            <div class="panel-body">
              <div class="well well-sm col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                  <div class="form-group has-feedback">
                    <input name="name" type="text" class="form-control" placeholder="Name des Netzwerks">
                      <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input name="address" type="text" class="form-control" placeholder="IP-Adresse">
                      <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input name="nwmask" type="text" class="form-control" placeholder="Netzwerkmaske">
                      <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                  </div>
                  <input name="comment" type="text" class="form-control" placeholder="Kommentar">
              </div>
            </div>

            <div class="panel-footer">
              <button type="button" class="btn btn-primary width100">Speichern</button>
            </div>
          </div>
          <!-- Neues Netzwerk Ende-->

        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
