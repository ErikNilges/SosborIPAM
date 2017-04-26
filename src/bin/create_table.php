<!doctype html>
<html>
<head>
</head>
<body>
<?php
// Set the posted form values as variables (for readability)
$nname = $_POST['nname'];
$naddress = $_POST['naddress'];
$nmask = $_POST['nmask'];
$comment = $_POST['comment'];

// Execute the Python script to create a new network entry
exec("./create_table.py -N \"$nname\" -c \"$comment\" -a \"$naddress\" -n $nmask");

// Forward back to the network creation page
header('Location: ../new_network.php');
?>
</body>
</html>

