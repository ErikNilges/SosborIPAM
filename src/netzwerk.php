<?php
// Header und Sidebar einbinden
include 'header.php';

// Falls User nicht eingeloggt ist -> Weiterleitung zum Login
if (!isset($_SESSION['username'])){
  header("Location: login.php");
};
 ?>
    <!-- Content Start -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="col-lg-12">
	<!-- Include the processed results from get_addrspace.php -->
	<?php
	include "include/get_addrspace.php";
	?>

            <!-- Netzwerkübersicht Ende-->

          </div>
        </div>
      </div>
    </div>
    <!-- Content Ende -->
  </body>
</html>
