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
// "Delete"-Button, Username, Vorname, Nachname
for ($i = 0; $i < $num; $i++){
  echo "
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <form action='include/del_user.inc.php' method='post'>
        <button type='submit' class='btn btn-danger' role='button' name='delete' value='{$usernamen[$i]}'>Delete</button>
      </form>
    </div>
    <div class='panel-body'>
      <div class='row'>
        <div class='col-sm-4'>
          {$usernamen[$i]}
        </div>
        <div class='col-sm-4'>
          {$vornamen[$i]}
        </div>
        <div class='col-sm-4'>
          {$nachnamen[$i]}
        </div>
      </div>
    </div>
  </div>";
};
 ?>
