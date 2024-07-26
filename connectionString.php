<?php
$_SERVER="localhost";
$username="root";
$password="Shrish@2004";
$database="Student";
$con=mysqli_connect($_SERVER,$username,$password,$database);
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }

?>