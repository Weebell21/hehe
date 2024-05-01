<?php
    $id = $_GET['sid'];
    require_once '../../connection.php';
    $edit_sql = "SELECT * FROM cathang WHERE id=$id";
    $result = mysqli_query($conn,$edit_sql);
    $row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa Dữ Liệu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 100px;">
    <div class="container">
        <a class="navbar-brand" href="#">Trang Chủ</a>
        <div class="collapse justify-content-end navbar-collapse navbar-nav" id="navbarNav">
            <div class="dropdown px-3">
                <button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Công Đoạn
                </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Cắt Hàng</a></li>
                        <li><a class="dropdown-item" href="homepage_mgc.php">May Gia Công</a></li>
                        <li><a class="dropdown-item" href="#">Kho Hàng</a></li>
                        <li><a class="dropdown-item" href="#">Xuất Hàng</a></li>
                    </ul>
            </div>
        </div>    
    </div>
</nav>

<!-- Content -->
<div class="container mt-4" >
    <div class="row">



    <!-- input -->
    <!-- <div class="col-md-4"> -->
        <div class="card" style="width:700px;">
            <div class="card-body">
                <h5 class="card-title">Sửa Cắt Hàng</h5>
                    <form action="../../Models/Cat/M_cat_Update.php" method="post">
                        <input type="hidden" class="form-control" id="sid" name="sid" value="<?php echo $row['id']?>">
                        <div class="row">
                            <div class=" mb-my-4">
                                <label for="input1" class="form-label">Số Bàn</label>
                                <input type="text" class="form-control" id="soban" name="soban" value="<?php echo $row['so_ban']?>" required>
                            </div>
                            <div class=" mb-my-4">
                                <label for="input2" class="form-label">Ngày</label>
                                <input type="date" class="form-control" id="ngay" name="ngay" value="<?php echo $row['ngay']?>" required>
                            </div>
                            <div class="mb-my-4">
                                <label for="input3" class="form-label">Loại</label>
                                <select type="text" class="form-control" id="loai" name="loai" value="<?php echo $row['loai']?>" required>
                                    <option></option>
                                    <option value="Kaki">Kaki</option>
                                    <option value="Jean">Jean</option>
                                    <option value="Kaki nhí">Kaki Nhí</option>
                                    <option value="Jean Nhí">Jean Nhí</option>
                                </select>
                            </div>
                            <div class=" mb-my-4">
                                <label for="input4" class="form-label">Mẫu</label>
                                <input type="text" class="form-control" id="mau" name="mau" value="<?php echo $row['mau']?>" required>
                            </div>
                            <div class=" mb-my-4">
                                <label for="input4" class="form-label">Size</label>
                                <input type="text" class="form-control" id="ksize" name="ksize" value="<?php echo $row['ksize']?>" required>
                            </div>
                            <div class=" mb-my-4">
                                <label for="input5" class="form-label">Số lượng</label>
                                <input type="text" class="form-control" id="tsoluong" name="tsoluong" value="<?php echo $row['tongsl']?>" required>
                            </div>
                        </div>
                            <div class="col-5 py-3 ">
                                <button type="submit" class="btn btn-primary btn-lg mb-my-4">Thêm</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>  
    </div>  
</div>
</body>
</html>
