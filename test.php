<pre>
<?php
include '/libs/load.php';
include 'libs/includes/session.class.php';
// include 'libs/includes/mic.class.php';
// include 'libs/includes/database.class.php';

session::start();
// setcookie('testcookie','cookieval',time()+(86400*30),"/");


print("Server\n");
print_r($_SERVER);
// print("GET\n");
// print_r($_GET);
// print("POST\n");
// print_r($_POST);
// print("FILES\n");
// print_r($_FILES);
print("COOKIE ARRAY\n");
print_r($_COOKIE);


// if($a)
// {
//    printf("A already exist.... value:$a");
// }
// else
// {
//    $a=time();
//    printf("assigning value of A: $a");
// }


if(isset($_GET['clear']))
{
   printf("clearing....");
   session::clear();
}



if(session::isset('a'))
{
   printf("A already exist.... value:".session::get('a')."\n");
}
else
{
   session::set('a',time());
   printf("assigning value of A: $_SESSION[a]\n");
}

if(isset($_GET['destroy']))
{
   printf("destroying....");
   session::destroy();
}


















// $mic1 = new mic();
// $mic2 = new mic();

// $mic1->brand ="roar";
// $mic2->brand ="hyder";

// printf($mic1->brand);
// echo "<br>";
// printf($mic2->brand);
// echo "<br>";
// $mic1->light = "rgb";
// $mic1->setlight('yellow');
// //echo "\n";
// printf($mic1->light);
// echo "<br>";
// $mic1->setmodel("hyper visor");
// printf("the model name is:".$mic1->getmodel());
// echo "<br>";
// $mic1->setcolor("black");
// printf("the color of mic is: ".$mic1->getcolor());
// echo "<br>";
// $conn=Database::getconnection();
// $conn=Database::getconnection();

// if(signup("pikkapi1","9876543102","pikkapi1@gm.com","paspikka"))
// {
//   print("success..");
// }
// else
// {
//   print("fail");
// }
?>
</pre>