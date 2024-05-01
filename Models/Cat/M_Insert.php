<!-- INSERT DATA -->
<?PHP
class ModelInsert {
    public function insertProduct($conn, $soban, $ngay, $loai, $mau, $size, $tsoluong) {
        // Thực hiện câu lệnh SQL để chèn dữ liệu vào cơ sở dữ liệu
        $sql = "INSERT INTO cathang (so_ban, ngay, loai, mau, ksize, tongsl) 
            VALUES ($soban,'$ngay', '$loai', '$mau', '$size', $tsoluong)";


        // Thực thi câu lệnh SQL
        if ($conn->query($sql) === TRUE) {
            return 1; // Trả về 1 nếu chèn thành công
        } else {
            return 0; // Trả về 0 nếu có lỗi
         }
        }
    }
//         $result =  $conn->query($sql);

//         // Kiểm tra và trả về kết quả
//         if ($result) {
//             return 1; // Trả về 1 nếu chèn thành công
//         } else {
//             return 0; // Trả về 0 nếu có lỗi
//         }
//     }
// }
?>