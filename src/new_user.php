<?php
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Neuer Benutzer Start -->
            <form action="new_user_cmd.php" method="post">
              <div class="panel panel-default" style="margin-right:15px">
                <div class="panel-heading">
                  <h3>Neuer Benutzer</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-6">
                    <div class="well well-sm" style="max-width: 600px">
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="vorname" placeholder="Vorname">
                        <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="nachname" placeholder="Nachname">
                        <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <span class="glyphicon glyphicon glyphicon-remove-circle form-control-feedback"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>
                <div class="panel-footer">
                  <button type="submit" class="btn btn-primary" style="width: 120px">Speichern</button>
                </div>
              </div>
            </form>
            <!-- Neues Benutzer Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>