<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['userName'];
        $message = $_POST['message'];
        $date = date('r');
        $comment = $userName."|||||".$message."|||||".$date."\r\n";
        
        $file = fopen("support.txt", "a");
        fwrite($file, $comment);
        fclose($file);
        
        require "support.php";
    }
?>