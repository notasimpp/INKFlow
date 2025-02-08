<?php
    require 'conn.php';

    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO users(username, password, email)
            VALUES ('$uname', '$pass', '$email')";
    $result = mysqli_query($conn, $sql);
    if (!$result){
        die ("Error: ".mysqli_error($conn));
    }
?>