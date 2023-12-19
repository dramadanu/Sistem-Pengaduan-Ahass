<?php

require 'database.php';

function insertUser($conn, $name, $email, $password, $telephone, $address){
    mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$name', '$email', '$password', '$telephone', '$address')");
    return mysqli_affected_rows($conn);
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';


// $query = "INSERT INTO tb_user (id, name, email, password, telephone, address) VALUES ('$existingIdInKeluhan', '$name', '$email', '$password', '$telephone', '$address')";
// mysqli_query($conn, $query);    


// $conn = mysqli_connect("localhost", "root", "", "sistem-service-ahass");

function registrasi($data) {
    global $conn;

    $name = strtolower(stripslashes($data["name"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $telephone = $data["telephone"];
    $alamat = $data["alamat"];
}

// mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$name', '$email', '$password', '$telephone', '$address')");
// return mysqli_affected_rows($conn);

?>