<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once("../../../connection.php");
    
    if (isset($_POST['soban'], $_POST['nhamay'], $_POST['ngay'], $_POST['loai'], $_POST['model'],
              $_POST['color'], $_POST['quant'], $_POST['total'], $_POST['stat'])){

        $soban = $_POST['soban'];
        $nhamay = $_POST['nhamay'];
        $ngay = $_POST['ngay'];
        $loai = $_POST['loai'];
        $model = $_POST['model'];
        $total = $_POST['total'];
        $stat = $_POST['stat'];  
        
        // cặp dữ liệu cần cho vào mảng $cq

        $colors = $_POST['color'];
        $quantities = $_POST['quant'];

        // Kiểm tra xem màu và số lượng có phù hợp hay không
            if (count($colors) != count($quantities)) {
                echo "lượng màu và số lượng không khớp";
                exit();
            }else{
            // Tạo một mảng để lưu trữ các cặp dữ liệu màu và số lượng
            $cq = array();
            }

            // Duyệt qua mảng màu và số lượng và tạo các cặp dữ liệu
            foreach ($colors as $index => $color) {
                $cq[] = array(
                    'color' => $color,
                    'quant' => $quantities[$index]
                );
            }
        } 
        
    require_once("../../../Models/MGC/M_Insert.php");
    
    $modelProduct = new ModelInsert();
    $r = $modelProduct->insertProduct($conn, $soban, $nhamay, $ngay, $loai, $model, $total, $stat, $cq);
        // kiểm tra sau khi thực thi câu lệnh và trả về trang nhập
        if($r == 1) {
            // thêm header về page
            // header("location:../../Views/mgc/mgc.php");
            echo "thêm rồi nha ml";
        } else {
            echo "Loi con me no roi";
        }
    }
?>

