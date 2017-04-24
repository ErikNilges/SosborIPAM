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

            <!-- Netzwerkübersicht Start-->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>Netzwerkübersicht</h3>
              </div>
              <div class="panel-body">
		<?php
		include './include/get_networks.php';
		?>
              </div>
              <div class="panel-footer">

              </div>
            </div>
            <!-- Netzwerkübersicht Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
