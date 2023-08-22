<?php
    include "../koneksi.php";

    $pass = sha1($_POST['password']);
    $username = mysqli_escape_string($connection, $_POST['username']);
    $password = mysqli_escape_string($connection, $pass);

    $cek_user = mysqli_query($connection, "SELECT * FROM login WHERE username = '$username'");
    $user_valid = mysqli_fetch_array($cek_user);

    if($user_valid){
        if($password == $user_valid['password']){
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['name'] = $user_valid['name'];

            // Perbarui last_login untuk pengguna yang berhasil login
            $sqlUpdate = "UPDATE login SET last_login = NOW() WHERE username = '$username'";
            mysqli_query($connection, $sqlUpdate);

            header('location:../admin/index.php');
        }else{
            echo "<script>alert('Password yang kamu masukkan salah.'); document.location='login.php';</script>";
        }
    }else{
        echo "<script>alert('Username yang kamu masukkan salah.'); document.location='login.php';</script>";
    }
?>