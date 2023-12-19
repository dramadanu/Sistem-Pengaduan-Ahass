<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "sistem-service");

// if (!$connect) {
//     die("Conection failed: " . mysqli_connect_error());
// }

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$usercheck = mysqli_query($connect, "select * from user where username='$username' and password='$password'");
$count = mysqli_num_rows($usercheck);


if($count>0){
    $getroledata = mysqli_fetch_array($usercheck);
    $role = $getroledata['role'];

    if($role == 'admin'){
        $_SESSION['log'] = 'logged';
        $_SESSION['role'] = 'Admin';
        header('location:admin');

    } else if ($role == 'user') {
        $_SESSION['log'] = 'logged';
        $_SESSION['role'] = 'User';
        header('location:user/user.php');
        
    } else if ($role == 'owner') {
        $_SESSION['log'] = 'logged';
        $_SESSION['role'] = 'Owner';
        header('location:owner');
    }

    } else {
        echo 'Anda tidak terdaftar';
    }
};

?>