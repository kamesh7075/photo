<?php

// use LDAP\Result;
include 'includes/session.class.php';
include_once 'includes/mic.class.php';
include 'includes/database.class.php';
include 'includes/user.class.php';

session::start();

function load_templates($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
}

function validate_credentials($username, $password)
{
    if($username == "logintry@gm.com" && $password == "password")
    {
        return true;
    } else
    {
        return false;
    }
}

// function signup($user, $phone, $emailid, $pass)
// {

// $conn=Database::getconnection();
// $sql = "INSERT INTO `signup` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
// VALUES ('$user', '$pass', '$emailid', '$phone', '0', '1');";
// //$result = false;
// $error = false;
// if ($conn->query($sql) === true) {
//     $error = true;
// } else {
//     // echo "Error: " . $sql . "<br>" . $conn->error;
//        $error = $conn->error;       // final work mean
// }

// $conn->close();
// return $error;
// }

// function signup($user, $phone, $emailid, $pass)
// {
//     $servername = "mysql.selfmade.ninja";
//         $username = "kameshviki";
//         $password = "createlogin#24";
//         $dbname = "kameshviki_login";
    
//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }
//     else {
//         echo "success...";
//     }
//     $sql = "INSERT INTO `signup` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
//         VALUES ('$user', '$pass', '$emailid', '$phone', '0', '1');";
// //$result = false;
//         $error = false;
//         if ($conn->query($sql) === true) {
//         $error = true;
//         } else {
//         //echo "Error: " . $sql . "<br>" . $conn->error;
//        //$error = $conn->error;       // final work mean
//        $error = false;
//     }

// //$conn->close();
// return $error;
//     }
//     // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     // VALUES ('John', 'Doe', 'john@example.com')";
    
//     // if ($conn->query($sql) === TRUE) {
//     //   echo "New record created successfully";
//     // } else {
//     //   echo "Error: " . $sql . "<br>" . $conn->error;
//     // }
    
//  //   $conn->close();
// //}

?>