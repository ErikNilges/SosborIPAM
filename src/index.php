<?php
// Header und Sidebar einbinden
include 'header.php';
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Netzwerkübersicht Start-->
            <div class="panel panel-default" style="margin-right:15px">
              <div class="panel-heading">
                <h3>x3 Netzwerke</h3>
              </div>
              <div class="panel-body">

                <!-- Variante 1 -->
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <a href="new_network.php" class="btn btn-primary" role="button">Netzwerk A</a>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-4">
                          192.168.2.0 - 192.168.2.255
                        </div>
                        <div class="col-sm-4">
                          Belegt: 133
                        </div>
                        <div class="col-sm-4">
                          Frei: 122
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <button type="button" class="btn btn-primary">Netzwerk A</button>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-4">
                          192.168.2.0 - 192.168.2.255
                        </div>
                        <div class="col-sm-4">
                          Belegt: 133
                        </div>
                        <div class="col-sm-4">
                          Frei: 122
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Variante 2 -->
                <div>
                  <h4><span class="label label-default">Netzwerk A</span></h4>
                  <div class="well well-sm">
                    <div class="row">
                      <div class="col-sm-4">
                        192.168.2.0 - 192.168.2.255
                      </div>
                      <div class="col-sm-4">
                        Belegt: 133
                      </div>
                      <div class="col-sm-4">
                        Frei: 122
                      </div>
                    </div>
                  </div>
                  <h4><span class="label label-default">Netzwerk A</span></h4>
                  <div class="well well-sm">
                    <div class="row">
                      <div class="col-sm-4">
                        192.168.2.0 - 192.168.2.255
                      </div>
                      <div class="col-sm-4">
                        Belegt: 133
                      </div>
                      <div class="col-sm-4">
                        Frei: 122
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Variante 3 -->
                <div>
                  <div class="row">
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-primary btn" style="margin-bottom: 5px;">Netzwerk A</button>
                    </div>
                  </div>
                  <div class="well well-sm">
                    <div class="row">
                      <div class="col-sm-4">
                        192.168.2.0 - 192.168.2.255
                      </div>
                      <div class="col-sm-4">
                        Belegt: 133
                      </div>
                      <div class="col-sm-4">
                        Frei: 122
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-1">
                      <button type="button" class="btn btn-primary btn" style="margin-bottom: 5px;">Netzwerk A</button>
                    </div>
                  </div>
                  <div class="well well-sm">
                    <div class="row">
                      <div class="col-sm-4">
                        192.168.2.0 - 192.168.2.255
                      </div>
                      <div class="col-sm-4">
                        Belegt: 133
                      </div>
                      <div class="col-sm-4">
                        Frei: 122
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="panel-footer">
                <button type="button" class="btn btn-danger">Delete</button>
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
