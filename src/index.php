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

                <!-- Variante 3 -->
<!--                <div class="well well-sm">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                      <a href="netzwerk.php" type="button" class="btn btn-primary btn">Netzwerk A</a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-4 alignMiddle">
                      192.168.2.0 - 192.168.2.255
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Belegt: 133
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Frei: 122
                    </div>
                  </div>
                </div>
                <div class="well well-sm">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                      <a href="netzwerk.php" type="button" class="btn btn-primary btn">Netzwerk A</a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-4 alignMiddle">
                      192.168.2.0 - 192.168.2.255
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Belegt: 133
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Frei: 122
                    </div>
                  </div>
                </div>
-->
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
