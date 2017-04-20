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
        <div class="col-xs-12">

          <!-- Userübersicht Start-->
          <div class="panel panel-default">
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
              <a href="new_user.php" role="button" class="btn btn-success width100">Neuer User</a>
            </div>
          </div>
          <!-- Userübersicht Ende-->

        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
