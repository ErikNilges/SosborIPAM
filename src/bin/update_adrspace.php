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

$_SESSION['adrspace'] = $adrspace;

$query = "SELECT * from $adrspace;";
$dataset = dbquery($host, $user, $password, $database, $query);
$rownr = mysqli_num_rows($dataset);

$conn = mysqli_connect($server, $user, $password, $database);
if (mysqli_connect_errno()){
	echo "<p><b>Failed to establish a connection!</b></p>";
	mysqli_close($conn);
	} else {
		$counter = 0;
		while($row = mysqli_fetch_array($dataset)) {
			$thost = "host_";
			$thost .= $counter;
			$tcomment = "comment_";
		 	$tcomment .= $counter;
			$query = <<<EOL
UPDATE $adrspace SET 
host = "$_POST[$thost]",
comment = "$_POST[$tcomment]"
WHERE adid = "$counter";
EOL;
			mysqli_query($conn, $query);
			$counter++; 
		}

	}

mysqli_close($conn);
header('Location: ../netzwerk.php');
?>

</body>
</html>
