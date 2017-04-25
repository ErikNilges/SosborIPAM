<!doctype html>
<html>
<head>
</head>
<body>

<?php
// Initilaize user session
session_start();

// Including Database functions
include '../include/db_functions.php';

// Database connection details
$host = "localhost";
$user = "sosbor_ipam";
$password = "sosbor";
$database = "sosbor_ipam";
$adrspace = "adrspace_";
$adrspace .= $_POST['nwid'];


// Database query
$drop_table = "DROP TABLE $adrspace;";
$drop_entry = "DELETE FROM networks WHERE nwid = $_POST[nwid];";

// Delete entries
dbquery($host, $user, $password, $database, $drop_table);
dbquery($host, $user, $password, $database, $drop_entry);

header('Location: ../index.php');
?>

</body>
</html>
