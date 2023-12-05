<?php

function getUserAndHash($Arr, $id) {
    $lines = file("LOG.txt");
    
    //key = index, val = line
    foreach ($lines as $index => $line) {
        $split = explode("::",$line);
    }
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["user"];
    $password = $_POST["pass"];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    
    // Checking a password
    $enteredPassword = $password;

    if (password_verify($enteredPassword, $hashedPassword)) {
        echo "Password is valid!";
        header("Location: ./bruce.html");
        exit();
        
        
    } else {
        echo "Invalid password";
    }
}
?>