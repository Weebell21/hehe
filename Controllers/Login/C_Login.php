<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        $acc = $_POST['username']; 
        $password = $_POST['password']; 

        require_once("../../connection.php");
        require_once("../../Models/Login/Model_Login.php");

        $modelLogin = new Model_Login();
        $result = $modelLogin->login($conn, $acc, $password);

        if($result) {
           header('location:../../Views/cat/V_cat.php');
        } else {
           echo "lỗi";
            // $alert = '<div class="alert alert-danger" role="alert">Con cac</div>';
            // echo $alert;
        }
    }
?>