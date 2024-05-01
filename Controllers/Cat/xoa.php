<?php
require_once '../../Models/Cat/xoa.php';
require_once '../../connection.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $modelDelete = new ModelDelete();
    $success = $modelDelete->deleteProduct($conn, $id);

    if ($success) {
        // Redirect hoặc hiển thị thông báo xóa thành công
        header("Location: ../../Views/cat/v_cat.php");
        exit();
    } else {
        // Hiển thị thông báo lỗi
        echo "chưa xóa";
        // header("Location: ../../view/delete_error.php");
        exit();
    }
}
?>
