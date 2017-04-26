<?php

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

// If the request was forwarded by the update_adrspace.php site, set the
// posted session variable for the address space id, then unset the session variable
if ($adrspace == "adrspace_"){
	$adrspace = $_SESSION['adrspace'];
	unset($_SESSION['adrspace']);
}

// Database query
$query = "SELECT * FROM $adrspace;";

// Database set
$dataset_networks = dbquery($host, $user, $password, $database, $query);

// With the selected results from the database, create the address space overview
// header
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

// For all rows (adid) in the address space database table, create a corresponding
// entry in a form with text input fields
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
                      </td>
                      <td>
                        <input value="$row[comment]" id="name" type="int" class="form-control" name="comment_$row[adid]" placeholder="">
                      </td>
                    </tr>
EOL;
}	
// Create the footer containing an update button, that sends updates to 
// update_adrspace.php
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
