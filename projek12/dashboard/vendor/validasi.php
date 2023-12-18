<?php

session_start(); 

include "konek.php";

$user = $_POST['usernamediweb'];
$pass = $_POST['passworddiweb'];

// echo "ini adalah username " .$user. " dan ini adalah password " .$pass;

if (empty($user)) { //kondisi untuk username kosong
    $_SESSION['info'] = 'user dan password tidak boleh kosong';
    header("location:../login.php");
    exit(); //mengakhiri sesi
} else {
    if (empty($pass)) { //kondisi untuk password kosong
        $_SESSION['info'] = 'user dan password tidak boleh kosong';
        header("location:../login.php");
        exit(); 
    } else { 
        $sql = "SELECT * FROM tb_akun WHERE username LIKE '$user' AND password LIKE '$pass'";
        $cek = mysqli_query($kon, $sql);
        $row = mysqli_fetch_assoc($cek);

        if($row['username'] === $user && $row['password'] === $pass){
            $_SESSION['login'] = true;
            // header ("location:../index.php");
            
        }else{
            $_SESSION['info'] = 'username atau password salah';
            header ("location:../login.php");
            
        } 

        if (isset($_SESSION['login'])) {
            header("location:../index.php"); 
        }else {
            header ("location:../login.php");
            exit();
        }
    } 
}






?>

