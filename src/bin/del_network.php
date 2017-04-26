<!doctype html>
<html>
<head>
</head>
<body>

<?php
// Including Database functions
include '../include/db_functions.php';

// Database connection details
$host = "localhost";
$user = "sosbor_ipam";
$password = "sosbor";
$database = "sosbor_ipam";
$adrspace = "adrspace_";
$adrspace .= $_POST['nwid'];


// Database queries for droping the adrspace_ table and deleting the network meta table
// entry
$drop_table = "DROP TABLE $adrspace;";
$drop_entry = "DELETE FROM networks WHERE nwid = $_POST[nwid];";

// Execute both queries
dbquery($host, $user, $password, $database, $drop_table);
dbquery($host, $user, $password, $database, $drop_entry);

// Forward back to the main page
header('Location: ../index.php');
?>

</body>
</html>
