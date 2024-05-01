<?php
class ModelInsert {
    public function insertProduct($conn, $soban, $nhamay, $ngay, $loai, $model, $total, $stat, $cq) {
    

    }
}
?>



// class ModelInsert {
//     public function insertProduct($conn, $soban, $nhamay, $ngay, $loai, $model, $total, $stat, $cq) {

//         // Chuẩn bị câu truy vấn SQL
//         $query = "INSERT INTO mgc_giao (soban, nhamay, ngay, loai, model, color, quant, total, stat) 
//                   VALUES ('$soban', '$nhamay', '$ngay', '$loai', '$model', '$cq', '$total', '$stat')";

//         // Thực thi truy vấn
//         if ($conn->query($query) === TRUE) {
//             return 1; // Trả về 1 nếu insert thành công
//         } else {
//             return 0; // Trả về 0 nếu có lỗi xảy ra
//         }
//     }
// }

?>
