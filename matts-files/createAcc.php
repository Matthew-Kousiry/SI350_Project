<?php
echo "createAcc clicked"
function CheckIfUserAvail($user) {
    $lines = files("LOG.txt");
    

    //key = index, val = line
    foreach ($lines as $index => $line) {
        $split = explode("::",$line);
        if ($user)
    }


}


//https://www.php.net/manual/en/function.file-put-contents.php



?>

