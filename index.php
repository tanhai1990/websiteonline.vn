<?php
require "./lib/dbconnect.php";
$dt = new Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
        <!-- Menu -->
        <nav class="navbar navbar-expand-sm">
                <div class="container">
                    <a class="navbar-brand" href="#">Trang chủ 123</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kênh YouTuBe |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gmail |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facebook |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i> Đăng Nhập</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- End Menu -->
        <!-- Phần Content -->
        <div id="MainContent">
            <div class="container">
                <h4>TRANG THÔNG TIN TỔNG HỢP VỀ CÔNG NGHỆ THÔNG TIN</h4>
                <div class="row">
                    <div id="content-left" class="col-sm-9">
                        <div class="TinTuc">
                        Tin Mới Nhất</div> 
                        <!-- Tin Tức Mới -->
                        <div class="content">
                            <h5 class="TieuDe"><a href=""><i class="fas fa-newspaper"></i> Những sáng chế công nghệ kỳ cục nhất năm 2013...</a></h5>
                            <p>tom tắt</p>
                        </div>
                        
                        
                        <!-- End Tin Tức Mới -->
                    </div>
                    <div id="menu-right" class="col-sm-3">
                        <div class="TieuDe">Menu Chính</div>
                        <ul>
                        <!-- Menu chính -->
                        <?php
                        $dt->Select("SELECT * FROM nhomtin");
                        while($rowsNhomTin = $dt->Fetch()){
                        ?>
                            <li><a href="news.php?IDNhom=<?php echo $rowsNhomTin['IDNhom']; ?>">
                            <?php echo $rowsNhomTin['TenNhom']; ?></a></li>
                        <?php
                        }
                        ?>
                        <!-- Menu chính -->
                        <br>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Phần Content -->

        <!-- Phần Footer -->
        <div id="footer">
            <div class="container">
                <p>CopyRight: Đỗ Trung Thành, Tổ Lý Tin, Khoa Tự Nhiên, Trường Cao Đẳng Sư Phạm Yên Bái<br>
                Email: dotrungthanh@gmail.com, facebook: www.facebook.com/thanh.dotrung.
                </p>
            </div>
        </div>

        <!-- End Phần Footer -->
</body>
</html>