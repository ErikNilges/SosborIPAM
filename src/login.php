<?php
// Header und Sidebar einbinden
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

          <!-- Login Start-->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Login</h3>
            </div>
            <form class="form-horizontal" action="include/login.inc.php" method="post">
              <div class="panel-body">
                <div class="well well-sm col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
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
              <div class="panel-footer">
                <button type="submit" class="btn btn-success width100">Login</button>
              </div>
            </form>
          </div>
          <!-- Login Ende-->

        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
