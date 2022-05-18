<?php
    include "myconnection.php";

    $username = $_POST["Uername"];
    $password = md5($_POST["Password"]);

    $query = "SELECT * FROM admin WHERE Uername='$username' && Password='$password'";
    $result = mysqli_query($connect,$query);
    $check = mysqli_num_rows($result);

    if($check>0){
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "Administrator";
        header("location:halamanAdmin.php");
    }else{
        echo "Username atau Password tidak sesuai <br>";
        echo '<a href="HalamanLogin.php">Kembali ke halaman Login</a>';
    }
?>