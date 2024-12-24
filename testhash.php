<?php

$pass = isset($_GET['pass']) ? $_GET['pass'] : "Randompasswordisstrong";
echo(md5($pass));

?>