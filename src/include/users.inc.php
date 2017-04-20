<?php
// Datenbankverbindung
include 'db.inc.php';

// SQL-Abfrage aller Einträge der Tabelle "user"
$result = mysqli_query($db, "SELECT * FROM user");

// User zählen
$num = mysqli_num_rows($result);

// Arrays definieren
$usernamen = array();
$vornamen = array();
$nachnamen = array();

// Die Werte jeder Zeile in den Arrays speichern
while ($row = mysqli_fetch_assoc($result)){
  array_push($usernamen, $row["username"]);
  array_push($vornamen, $row["vorname"]);
  array_push($nachnamen, $row["nachname"]);
};

// Für jeden User einen Eintrag generieren
// Username, Vorname, Nachname, "Update"-Button, "Delete"-Button
for ($i = 0; $i < $num; $i++){
  echo "
  <div class='well well-sm users-inc3'>
    <div class='row'>
    <form method='post'>
      <div class='col-sm-12 col-md-4 col-lg-3 users-inc4'>
        <div class='input-group users-inc1'>
          <span class='input-group-addon width100'>Username</span>
          <input id='username' type='text' class='form-control' name='username' placeholder='Username' value='{$usernamen[$i]}'>
        </div>
      </div>
      <div class='col-sm-12 col-md-4 col-lg-3 users-inc5'>
        <div class='input-group users-inc1'>
          <span class='input-group-addon width100'>Vorname</span>
          <input id='vorname' type='text' class='form-control' name='vorname' placeholder='Vorname' value='{$vornamen[$i]}'>
        </div>
      </div>
      <div class='col-sm-12 col-md-4 col-lg-3 users-inc6'>
        <div class='input-group users-inc1'>
          <span class='input-group-addon width100'>Nachname</span>
          <input id='nachname' type='text' class='form-control' name='nachname' placeholder='Nachname' value='{$nachnamen[$i]}'>
        </div>
      </div>

      <div class='col-sm-12 col-md-12 col-lg-3'>
        <div class='btn-group pull-right users-inc2'>
          <button type='submit' formaction='include/edit_user.inc.php' class='btn btn-success width60' role='button' name='update' value='{$usernamen[$i]}'><span class='fa fa-pencil'></span></button>
          <button type='submit' formaction='resetpw.php' class='btn btn-primary width60' role='button' name='resetpw' value='{$usernamen[$i]}'><span class='fa fa-key'></span></button>
          <button type='submit' formaction='include/del_user.inc.php' class='btn btn-danger width60' role='button' name='delete' value='{$usernamen[$i]}'><span class='fa fa-trash'></span></button>
        </div>
      </form>
      </div>
    </form>
    </div>
  </div>";
};
 ?>
