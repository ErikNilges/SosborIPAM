<?php
session_start();

include 'db.inc.php';

mysqli_query($db, "DELETE FROM user WHERE username='{$_POST['delete']}'");

header("Location: ../users.php");
 ?>
