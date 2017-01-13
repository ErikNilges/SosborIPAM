<?php
include 'db.php';

$sql = "SELECT COUNT(*) FROM user";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_row($result);

for ($i = 0; $i < $row[0]; $i++){
  $userdata = getUserdata($i);
  echo "
  <div class='panel panel-default'>
    <div class='panel-heading'>
      <form action='del_user.inc.php' method='post'>
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
  </div>
  ";
};

function blablub(){
  return "hallo";
};
function getUserdata($nummer){
  include 'db.php';
  $sql = "SELECT * FROM user LIMIT 1 OFFSET $nummer";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result);
  return $row;
};

function delUser($nummer){
  include 'db.php';
  $sql = "SELECT * FROM user LIMIT 1 OFFSET $nummer";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result);
  return $row;
};
 ?>
