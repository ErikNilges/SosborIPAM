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
$adrspace = $_POST['adrspace'];

$dataset = dbquery($host, $user, $password, $database, $drop_table);

$query_count = "SELECT host FROM $addrspace;";
$dataset_count = dbquery($host, $user, $password, $database, $query_count);
$rownr = mysqli_num_rows($dataset_count);

$conn = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()){
	echo "<p><b>Failed to establish a connection!</b></p>";
	mysqli_close($conn);
	} else {
		while($row = mysqli_fetch_array($dataset)) {
			$thost = "host_";
			$thost .= $row;
			$tcomment = "comment_";
		 	$tcomment .= $row;
			$query = <<<EOL
UPDATE "$adrspace" SET 
host = "$_POST[$thost]",
comment = "$_POST[$tcomment]",
WHERE adid = "$row";
EOL;
		mysqli_query($conn, $query);
		}
	}

mysqli_close($conn);
header('Location: ../index.php');
?>

</body>
</html>
