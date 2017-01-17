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
                <h3>Netzwerk 1</h3>
              </div>
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="table-checkbox">
                        <input type="checkbox" value="">
                      </th>
                      <th>
                        IP-Adresse
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Kommentar
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="table-checkbox">
                        <input type="checkbox" value="">
                      </td>
                      <td>
                        192.168.2.101
                      </td>
                      <td>
                        PC-001
                      </td>
                      <td>
                        Kein Kommentar!
                      </td>
                    </tr>
                    <tr>
                      <td class="table-checkbox">
                        <input type="checkbox" value="">
                      </td>
                      <td>
                        192.168.2.102
                      </td>
                      <td>
                        PC-002
                      </td>
                      <td>
                        Kein Kommentar!
                      </td>
                    </tr>
                    <tr>
                      <td class="table-checkbox">
                        <input type="checkbox" value="">
                      </td>
                      <td>
                        192.168.2.103
                      </td>
                      <td>
                        PC-003
                      </td>
                      <td>
                        Kein Kommentar!
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="panel-footer">
                <button type="button" class="btn btn-danger">Eintrag löschen</button>
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
