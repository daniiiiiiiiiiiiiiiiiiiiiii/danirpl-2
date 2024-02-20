<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login | web galery foto</title>
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="username" class="input-control">
            <input type="password" name="pass" placholder="password" class="input-control">
            <input type="submit" name="submit" value="login" class="btn">
</form>
<?php
if(isset($post['submit']))
session_start();
include'koneksi.php';
$user = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$cek= mysqli_query $conn, "SELECT * FROM tb_admin WHERE username ='".$user."'AND password ='".$pass if(mysqli_num_rows($cek) >0){
    $d= mysqli_fetch_object($cek);
    $_SESSION['status_login'] = true;
    $_SESSION['a_global'] = $d;
    $_SESSION['id'] =$d->admin_id;
}
?><br/>
<p>belum punya akun? daftar <a style="color:#00C;" href="registrasi.php">DISINI</a></p>
<p>atau klik <a style="color:#00C;" href="index.php">kembali</a></p>
</div>
    
</body>
</html>
