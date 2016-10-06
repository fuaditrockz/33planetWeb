<?php
   session_start();
   require_once("dbase_conn.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM users WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='../index.php?#small-dialog1'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='../index.php#small-dialog'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:../user.php');
     }
   }
?>