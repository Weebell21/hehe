<?php
    $user = 'root';
    $host = 'localhost';
    $pass = ''; 
    $dtb = 'mydtb'; 
    $conn = new mysqli($host, $user, $pass, $dtb);
    if ($conn->connect_error) {
        die('Kết nối không thành công: ' . $conn->connect_error);
    }
?>
