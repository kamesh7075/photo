<?

include 'lib/load.php';

if(signup("kameshvi","9876543223","sqltryfuck@gm.com","passset"))
{
  echo "data stored";
}
else{
   echo "failed";
}


?>