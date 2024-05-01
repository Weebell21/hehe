<?PHP
class ModelSearch {
    public function SearchProduct($search) {
        // Thực hiện câu lệnh SQL để chèn dữ liệu vào cơ sở dữ liệu
        require_once("../../connection.php");
        $sql = "SELECT * FROM cathang WHERE so_ban = '$search'";


        // Thực thi câu lệnh SQL
        $result = $conn->query($sql);

        // Kiểm tra và trả về kết quả
        if ($result->num_rows > 0) {
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            return array();
        }
        // mysqli_close($conn);
    }
}

class ModelRead{
    public function ReadProduct(){
        require_once("../../connection.php");
        $sql = "SELECT * FROM cathang";

        // Thực thi câu lệnh SQL
        $result = $conn->query($sql);

        // Kiểm tra và trả về kết quả
        if ($result->num_rows > 0) {
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        } else {
            return array();
        }
    }
}
?>