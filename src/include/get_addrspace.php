<?php

// Initilaize user session
session_start();

// Including Database functions
include 'db_functions.php';

// Database connection details
$host = "localhost";
$user = "sosbor_ipam";
$password = "sosbor";
$database = "sosbor_ipam";
$nwid = $_POST['nwid'];
$adrspace = "adrspace_";
$adrspace .= $_POST['nwid'];

// Database query
$query = "SELECT * FROM $adrspace;";

// Database set
$dataset_networks = dbquery($host, $user, $password, $database, $query);

	echo <<<EOL
              <h3>$_POST[nname]</h3>
              </div>
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="table-checkbox">
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
		  <form action="../bin/update_adrspace.php" method="POST">
		  <input name="adrspace" type="hidden" value="$adrspace">
EOL;

while($row = mysqli_fetch_array($dataset_networks)) {
// Echo the resulting address space entry	
	echo <<<EOL
                    <tr>
                      <td class="table-checkbox">
                        <input name"adr_$row[adid]" type="hidden" value="$row[address]">
                        <input name"type_$row[adid]" type="hidden" value="$row[typ]">
                        <input name"nw_$row[adid]" type="hidden" value="$row[nwid]">
                        <input name"id_$row[adid]" type="hidden" value="$row[adid]">
                      </td>
                      <td>
                        $row[address]
		      </td>
                      <td>
                        <input value="$row[host]" id="name" type="int" class="form-control" name="host_$row[adid]" placeholder="">
                        $row[host]
                      </td>
                      <td>
                        <input value="$row[comment]" id="name" type="int" class="form-control" name="comment_$row[adid]" placeholder="">
                      </td>
                    </tr>
EOL;
}
	echo <<<EOL
		</tbody>
                </table>
              </div>
              <div class="panel-footer">
                <input value="Update" type="submit" class="btn btn-primary">
	      </div>
	      </form>
            </div>
EOL
?>
