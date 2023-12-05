<?php
//echo "createAcc clicked"
function CheckIfUserAvail($user) {
    $lines = file("Leaderboard.txt");
    
    //key = index, val = line
    foreach ($lines as $index => $line) {
        echo "$line";
        $split = explode("::",$line);
        if ($user == $split[0]) {
          echo "$user and $split[0]";
          return False;
      }
    }


    return True;
}


//https://www.php.net/manual/en/function.file-put-contents.php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["user"];
  $password = $_POST["pass"];

  echo "$user and $password";
  
  if (checkIfUserAvail($user)) {
    //user available. add it
    //grab a hash of the password
    $hashPass = password_hash($password, PASSWORD_BCRYPT);

    $addLine = $user . "::" . $hashPass . "::" . "0\n"; 

    $filePath = "Leaderboard.txt";
    
    file_put_contents($filePath, $addLine, FILE_APPEND | LOCK_EX);

    session_start();
    $_SESSION['user'] = $user;

    header("Location: ./bruce.php");
    exit();
  }
  else {
    echo "Username already in use!";
    
  }

}
?>