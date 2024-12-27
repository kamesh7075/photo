<?php
//include 'database.class.php';
// include '/includes/user.class.php';
class user
{
    private $conn;     
    public static function signup($user, $phone, $emailid, $pass)
    {
        $passsignup = md5(strrev(md5($pass)));
        $conn=Database::getconnection();
        $sql = "INSERT INTO `signup` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$user', '$passsignup', '$emailid', '$phone', '0', '1');";
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
    public static function login($user, $pass)
    {
        $passlg = md5(strrev(md5($pass)));
        $sql = "SELECT * FROM `signup` WHERE `username` = '$user'";
        $conn = Database::getconnection();
        $result = $conn->query($sql);
        if( $result-> num_rows == 1)
        {
           $row = $result->fetch_assoc();
           if($row['password'] == $passlg)
           {
             return $row;
           }
           else
           {
            return false;
           }
        }
        else
        {
          return false;
        }
    }
    public function __construct($username)
    {
      $this->conn =Database::getconnection(); 
      $this->conn->query;
    }
    public static function authenticate()
    {
      
    } 
    public static function setbio()
    {

    }
    public static function getbio()
    {

    }
    public static function setavatar()
    {

    }
    public static function getavatar()
    {
        
    }
}


?>