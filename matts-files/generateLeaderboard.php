<?php 
    session_start();
    if (isset($_SESSION['user'])) {
        //echo "logged in";
        $UserAndScoreArr = [];
        $lines = file("Leaderboard.txt");
    
        //key = index, val = line
        foreach ($lines as $index => $line) {
            $split = explode("::",$line);
            echo "$split[0]\t$split[2]";
        }
            


    }
    else {
        echo "please login\n";
        echo "<a href=\"./login.html\">login page</a>";
    }

?>