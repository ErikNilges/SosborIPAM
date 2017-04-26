<!doctype html>
<html>
<head>
</head>
<body>

<?php
session_start();
// Including Database functions
include '../include/db_functions.php';

// Database connection details
$host = "localhost";
$user = "sosbor_ipam";
$password = "sosbor";
$database = "sosbor_ipam";
$adrspace = $_POST['adrspace'];

// Saving the adrspace id, to be able to jump back to the address space overview
// after finishing the alterations
$_SESSION['adrspace'] = $adrspace;

// Getting the current state of the address space and counting the number of rows
$query = "SELECT * from $adrspace;";
$dataset = dbquery($host, $user, $password, $database, $query);
$rownr = mysqli_num_rows($dataset);

// Initialize a new connection, to update the table
$conn = mysqli_connect($host, $user, $password, $database);
// If an connection error occurs, close the connection and echo a warning
if (mysqli_connect_errno()){
	echo "<p><b>Failed to establish a connection!</b></p>";
	mysqli_close($conn);
	} else {
		// Set a new counter to address the current row
		$counter = 0;
		while($row = mysqli_fetch_array($dataset)) {
			// Set the up to date information given by the user to
			// a temporary variable
			$thost = "host_";
			$thost .= $counter;
			$tcomment = "comment_";
			$tcomment .= $counter;
			// Set the query to update the current row the loop points to
			$query = <<<EOL
UPDATE $adrspace SET 
host = "$_POST[$thost]",
comment = "$_POST[$tcomment]"
WHERE adid = "$counter";
EOL;
			// Execute query and increase counter
			mysqli_query($conn, $query);
			$counter++; 
		}

	}
// Close connection and forward back to the address space overview
mysqli_close($conn);
header('Location: ../netzwerk.php');
?>

</body>
</html>
