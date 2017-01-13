<?php
// Header und Sidebar einbinden
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Neues Netzwerk Start -->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>Neues Netzwerk anlegen</h3>
              </div>

              <div class="panel-body">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                  <div class="well well-sm" style="max-width: 600px">
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Name des Netzwerks">
                          <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="IP-Adresse">
                          <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Netzwerkmaske">
                          <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Kommentar">
                  </div>
                </div>
                <div class="col-md-3">
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
