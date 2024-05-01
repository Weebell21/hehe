<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg">
        <div class="d-flex row justify-content-center" style="padding-top: 80px;">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class=" text-center" style="background-color: #FAFAFA;color: Black;">
                        <h3 class="card-header" style="background-color: #5E72EB;color: white;">Đăng Nhập</h3>
                        <div class="card-body form-control-lg">
                            <form action="../../Controllers/Login/C_Login.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label" for="username">Số điện thoại</label>
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password">Mật Khẩu</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-bubble">Đăng Nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>