<?php

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

// Fecht the information from the network meta table
while($row = mysqli_fetch_array($dataset_networks)) {
	
	// Count the number of rows
	$addrspace = "adrspace_";
	$addrspace .= $row['nwid'];
	$query_count = "SELECT host FROM $addrspace;";
	$dataset_count = dbquery($host, $user, $password, $database, $query_count);
	$rows = mysqli_num_rows($dataset_count);

	// Count free rows
	$query_count = "SELECT host FROM $addrspace WHERE host = '' OR host = ' ';";
	$dataset_count = dbquery($host, $user, $password, $database, $query_count);
	$free = mysqli_num_rows($dataset_count);

	// Rows already in use (host attribute defined)
	$used = $rows - $free;

	// Echo the resulting network entry, including the determined number of used
	// and free addresses	
	echo <<<EOL
         	<div class="well well-sm">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-2">
		    <form action="../netzwerk.php" method="POST">
			<input name="nwid" type="hidden" value="$row[nwid]">
		    	<input name="nname" value="$row[nwname]" placeholder="$row[nwname]" type="submit" class="btn btn-primary" style="width: 120px"> 
		    </form>	
		    <div class="col-xs-12 col-sm-3 col-md-2">
		    <form action="../bin/del_network.php" method="POST">
		      <input name="nwid" type="hidden" value="$row[nwid]">			 
		      <input name="nname" value="Löschen" placeholder="$row[nwname]" type="submit" class="btn btn-danger" style="width: 120px"> 
		    </form>
		    </div>
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
                      $row[nwcomment]
                    </div>

                  </div>
                </div>
EOL;
}
?>
