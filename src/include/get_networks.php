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

// Database query
$query_networks = "SELECT * FROM networks;";

// Database set
$dataset_networks = dbquery($host, $user, $password, $database, $query_networks);



while($row = mysqli_fetch_array($dataset_networks)) {
	
	// Count the number of rows
	$addrspace = "adrspace_";
	$addrspace .= $row['nwid'];
	$query_count = "SELECT host FROM $addrspace;";
	$dataset_count = dbquery($host, $user, $password, $database, $query_count);
	$rows = mysql_num_rows($dataset_count);

	// Count free rows
	$query_count = "SELECT host FROM $addrspace WHERE host = '' OR host = ' ';";
	$dataset_count = dbquery($host, $user, $password, $database, $query_count);
	$free = mysql_num_rows($dataset_count);

	// Used rows
	$used = $rows - $free;

	// Echo the resulting network entry	
	echo <<<EOL
         	<div class="well well-sm">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
                      <a href="netzwerk.php" type="button" class="btn btn-primary btn">Netzwerk A</a>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-4 alignMiddle">
                      $row[nwaddress]/$row[nwsm]
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Belegt: $used
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Frei: $free
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 alignMiddle">
                      Frei: $row[nwcomment]
                    </div>
                  </div>
                </div>
EOL;
}
?>
