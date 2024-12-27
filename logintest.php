<?php
include 'libs/load.php';
//include 'libs/includes/user.class.php';
//include 'libs/includes/database.class.php';

$user = "testdata";
$pass = "tested";

$resultlog = user::login($user, $pass);
// print_r($resultlog);
if($resultlog)
{
  echo "login success, $resultlog[username]\n";
}
else
{
  echo "login failed \n";
}
?>
