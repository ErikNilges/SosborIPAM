<?php
// Header und Sidebar einbinden
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Login Start-->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>Login</h3>
              </div>
              <form class="form-horizontal" action="include/login.inc.php" method="post">
                <div class="panel-body">
                  <div class="col-md-3">
                  </div>
                  <div class="col-md-6">
                    <div class="well well-sm" style="max-width: 600px">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <br>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>
                <div class="panel-footer">
                  <button type="submit" class="btn btn-success" style="width: 120px">Login</button>
                </div>
              </form>
            </div>
            <!-- Login Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
