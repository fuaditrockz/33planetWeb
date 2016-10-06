<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "dblogin";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>