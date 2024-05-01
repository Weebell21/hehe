<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../../connection.php");
    
    if (isset($_POST['sid'], $_POST['soban'], $_POST['ngay'], $_POST['loai'], $_POST['mau'], $_POST['ksize'], $_POST['tsoluong'])){
        $soban = $_POST['soban'];
        $ngay = $_POST['ngay'];
        $loai = $_POST['loai'];
        $mau = $_POST['mau'];
        $size = $_POST['ksize'];    
        $tsoluong = $_POST['tsoluong'];
        $id = $_POST['sid'];

    $modelProduct = new ModelUpdate();
    $r = $modelProduct->UpdateProduct($conn,$id, $soban, $ngay, $loai, $mau, $size, $tsoluong);
    }
}

class ModelUpdate {
    public function UpdateProduct($conn, $id, $soban, $ngay, $loai, $mau, $size, $tsoluong) {
        // Thực hiện câu lệnh SQL để chèn dữ liệu vào cơ sở dữ liệu
        $sql = "UPDATE cathang SET so_ban = $soban, ngay = '$ngay', loai = '$loai', mau = '$mau', ksize = '$size', tongsl = $tsoluong WHERE id = $id";


        // Thực thi câu lệnh SQL
        if ($conn->query($sql) === TRUE) {
            return 1; // Trả về 1 nếu chèn thành công
        } else {
            return 0; // Trả về 0 nếu có lỗi
         }
        }
    }
    if($r == 1) {
        // thêm header về page
        header("location:../../Views/cat/V_cat.php");
    } else {
        echo "Loi con me no roi";
    }
?>