<?php
class ModelDelete {
    public function deleteProduct($conn, $id) {
        // Thực hiện câu lệnh SQL để xóa dữ liệu từ cơ sở dữ liệu
        $sql = "DELETE FROM cathang WHERE id = $id";

        // Thực thi câu lệnh SQL
        $result = $conn->query($sql);

        // Kiểm tra và trả về kết quả
        if ($result) {
            return true; // Trả về true nếu xóa thành công
        } else {
            return false; // Trả về false nếu có lỗi
        }
    }
}
?>
