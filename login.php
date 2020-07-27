<?php
require "lib/dbconnect.php";
$dt = new Database;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="DangNhap" class="container" >
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="" method="post">
                    <h4>ĐĂNG NHẬP HỆ THỐNG</h4>
                    <div class="form-group">
                        <label for="UserName">UserName:</label>
                        <input type="text" class="form-control" name="UserName" placeholder="Nhập tên đăng nhập"/>
                    </div>
                    <div class="form-group">
                        <label for="PassWord">PassWord:</label>
                        <input type="password" class="form-control" name="PassWord" placeholder="Nhập mật khẩu"/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="Login">Đăng Nhập</button>
                    <button type="submit" class="btn btn-primary" name="Cancel">Thoát</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
        
    </div>
    <?php
        if(isset($_POST["Login"])){
            $username = $_POST["UserName"];
            $password = $_POST["PassWord"];
            
            $dt->Select("
                SELECT * FROM dangnhap
                WHERE UserName = '$username' 
                AND PassWord = '$password'
            ");

            if($dt->Fetch()>0){
                $_SESSION["username"] = $username;
                header('location:index.php');
            }
            else{
                echo "Dang nhap that bai";
            }
            

        }

    ?>
</body>
</html>