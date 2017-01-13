<?php
// Datenbankverbindung
include 'db.inc.php';

// SQL-Abfrage der Anzahl der eingetragenen User
$result = mysqli_query($db, "SELECT COUNT(*) FROM user");

// SQL-Abfrage als Array speichern
$row = mysqli_fetch_row($result);

// Für jeden User einen Eintrag generieren
// "Delete"-Button, Vorname, Nachname, Username
for ($i = 0; $i < $row[0]; $i++){
  $userdata = getUserdata($i);
  echo "
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <form action='include/del_user.inc.php' method='post'>
        <button type='submit' class='btn btn-danger' role='button' name='delete' value='{$userdata['username']}'>Delete</button>
      </form>
    </div>
    <div class='panel-body'>
      <div class='row'>
        <div class='col-sm-4'>
          {$userdata['vorname']}
        </div>
        <div class='col-sm-4'>
          {$userdata['nachname']}
        </div>
        <div class='col-sm-4'>
          {$userdata['username']}
        </div>
      </div>
    </div>
  </div>";
};

// Funktion, welche als Parameter die Eintragsnummer des Users benötigt und für diesen
// einen Associative Array anlegt, welcher zugleich die Ausgabe der Funktion ist
function getUserdata($nummer){
  include 'db.inc.php';
  $result = mysqli_query($db, "SELECT * FROM user LIMIT 1 OFFSET $nummer");
  $row = mysqli_fetch_assoc($result);
  return $row;
};
 ?>
