<?php
echo "login clicked";

function getUserAndHash($Arr, $id) {
    $lines = files("LOG.txt");
    
}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["user"];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Checking a password
    $enteredPassword = "user_entered_password";

    if (password_verify($enteredPassword, $hashedPassword)) {
        echo "Password is valid!";
    } else {
        echo "Invalid password";
    }
?>