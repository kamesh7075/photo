<?php
include 'libs/load.php';
//include 'libs/includes/user.class.php';
//include 'libs/includes/database.class.php';

$user = "testdata";
$pass = "tested";
$resultlog = null;
if(isset($_GET['logout']))
{
  session_destroy();
  die("session destroyed, <a href='logintest.php'>Login Again</a>");
}
if(session::get('is_loggedin'))
{
  $userdata = session::get('session_user'); 
  printf("welcome back, $userdata[username]");
  $resultlog = $userdata;
}
else
{
  printf("no session found, trying to login now.");
  $resultlog = user::login($user, $pass);
  if($resultlog)
  {
    echo "login success, $resultlog[username]\n";
    session::set('is_loggedin', true);
    session::set('session_user', $resultlog);
  }
  else
  {
    echo "login failed \n";
  }
}
echo <<<EOL
<br><br><a href = "logintest.php?logout">Logout</a>
EOL;
?>
