<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../../connection.php");
    
    if (isset($_POST['soban'], $_POST['ngay'], $_POST['loai'], $_POST['mau'], $_POST['ksize'], $_POST['tsoluong'])){
        $soban = $_POST['soban'];
        $ngay = $_POST['ngay'];
        $loai = $_POST['loai'];
        $mau = $_POST['mau'];
        $size = $_POST['ksize'];    
        $tsoluong = $_POST['tsoluong'];
        
    require_once("../../Models/Cat/M_Insert.php");
    
    $modelProduct = new ModelInsert();
    $r = $modelProduct->insertProduct($conn, $soban, $ngay, $loai, $mau, $size, $tsoluong);
        
        if($r == 1) {
            // thêm header về page
            header("location:../../Views/cat/V_cat.php");
        } else {
            echo "Loi con me no roi";
        }
    }
}


?>
