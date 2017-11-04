<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $productName = $_POST['productName'];
        $quantity = $_POST['quantity'];
        $userName = $_POST['userName'];
        $address = str_replace(",", " ", $_POST['address']);
        
        $order = $productName.", ".$quantity.", ".$userName.", ".$address."\r\n";
        
        $file = fopen("order.txt", "a");
        fwrite($file, $order);
        fclose($file);
        
        require "order.php";
    }
?>