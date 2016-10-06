<?php
   require_once("dbase_conn.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $email = $_POST['email']; 
   $query = $db->prepare("SELECT * FROM users WHERE username = ?");
   $query->execute(array($username));   
   if($query->rowCount() != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='../index.php?#small-dialog1'>Back</a></div>";
   } else {
     if(!$username || !$pass || !$email) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='../index.php?#small-dialog1'>Back</a>";
     } else {       
       $sql = $db->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
       $simpan = $sql->execute(array($username, $pass, $email));
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='../index.php?#small-dialog'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>