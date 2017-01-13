<?php
// Header und Sidebar einbinden
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Userübersicht Start-->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>Users</h3>
              </div>
              <div class="panel-body">
                <div class="panel-group">

                  <?php
                  include 'include/users.inc.php'
                   ?>

                </div>
              </div>
              <div class="panel-footer">
                <a href="new_user.php" role="button" class="btn btn-success">Neuer User</a>
              </div>
            </div>
            <!-- Userübersicht Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
