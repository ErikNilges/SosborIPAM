<?php
session_start();

include 'db.php';

mysqli_query($db, "DELETE FROM user WHERE username='{$_POST['delete']}'");

header("Location: users.php");
 ?>
