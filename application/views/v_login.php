<!DOCTYPE html>
<html>
<head>
  <title>Login CodeIgniter </title>
</head>
<body>
  <h1>Membuat Login Dengan CodeIgniter <br/> </h1>
  <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post"> 
    <table>
     <tr>
       <td>Username</td>
       <td><input type="text" name="username"></td>
     </tr>
     <tr>
       <td>Password</td>
       <td><input type="password" name="password"></td>
     </tr>
     <tr>
       <td></td>
       <td><input type="submit" value="Masuk"></td>
     </tr>
     <tr><a href="<?php echo base_url('index.php/login/login2'); ?>">  Dashboar login 2   </tr>
   </table>
 </form>
</body>
</html>