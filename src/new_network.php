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

            <!-- Neues Netzwerk Start -->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>Neues Netzwerk anlegen</h3>
              </div>

              <div class="panel-body">
                <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                  <div class="well well-sm" style="max-width: 600px">
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Name des Netzwerks">
                          <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="IP-Adresse">
                          <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Netzwerkmaske">
                          <span class="form-control-feedback"><span class="fa fa-times-circle"></span></span>
                      </div>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Kommentar">
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <button type="button" class="btn btn-primary" style="width: 120px">Speichern</button>
              </div>
            </div>
            <!-- Neues Netzwerk Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
