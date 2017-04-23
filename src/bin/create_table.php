<!doctype html>
<html>
<head>
</head>
<body>
<?php
$nname = $_POST['nname'];
$naddress = $_POST['naddress'];
$nmask = $_POST['nmask'];
$comment = $_POST['comment'];

exec("./create_table.py -N \"$nname\" -c \"$comment\" -a \"$naddress\" -n $nmask");

header('Location: ../new_network.php');
?>
</body>
</html>

