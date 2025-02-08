<?php
    require 'conn.php';
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT username, password FROM users WHERE username = '$uname'";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error: ".mysqli_error($conn));
    }else{
        $userFound = false; 
        foreach ($result as $data){
            $realuname = $data['username'];
            $realpass = $data['password'];

            if ($pass == $realpass){
                header('Location: home.php?username=' .$realuname);
                exit();
            } else {
                $userFound = true;
            }
        }
        
        if ($userFound) {
            header('Location: login.php?error=per');
        } else {
            header('Location: login.php?error=uer');
        }
        exit();
    }
?>
