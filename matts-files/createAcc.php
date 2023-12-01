<?php
echo "createAcc clicked"
function CheckIfUserAvail($user) {
    $lines = file("Leaderboard.txt");
    
    //key = index, val = line
    foreach ($lines as $index => $line) {
        $split = explode("::",$line);
        if ($user == $split[0]) {
          return False;
    }


    return True;
}


//https://www.php.net/manual/en/function.file-put-contents.php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST["user"];
  $password = $_POST["pass"];
  
  if (checkIfUserAvail($user)) {
    //if the user is available create an account
    $contentToAppend = $user . "::" . "0\n"; 

    $filePath = "Leaderboard.txt";
    
    file_put_contents($filePath, $contentToAppend, FILE_APPEND | LOCK_EX);

  }
  else {
    
  }


?>

