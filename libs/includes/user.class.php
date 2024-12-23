<?php
include 'database.clas.php';
// include '/includes/user.class.php';
class user{

    public static function signup($user, $phone, $emailid, $pass)
    {
        $conn=Database::getconnection();
        $sql = "INSERT INTO `signup` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$user', '$pass', '$emailid', '$phone', '0', '1');";
        //$result = false;
        $error = false;
        if ($conn->query($sql) === true) {
        $error = false;
        } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $conn->error;       // final work mean
    }

//$conn->close();
return $error;
    }
}


?>