<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="style3.css">
    
</head>
<body>
    <div class="container">
        <header>
            <div class="left-align">
                
                <a href="#"><img src="img/logo.png" alt="" width="80" height="80">
                </a>
            </div>
            <div class="text-center">
                <h1>ĐỒ ÁN IOT</h1>
            </div>
        </header>
        
        <nav>
            <div class="menu"> 
                <ul>
                    <li><a class="active" href="view.php" onclick="loadPage('view.php')">Trang Chính</a></li>
                    <li><a href="view2.php" onclick="loadPage('view2.php')">SQL</a></li>
                    <li><a href="#" onclick="loadPage('aboutus.html')">About us</a></li>
                    <li><a href="#" onclick="loadPage('profile.html')">Product </a></li>
                   
                </ul>
            </div>
        </nav>
        <section class="content">
            <div class="post">
                <div class="post-content">
                    <div class="post-detail">
                        <h2>GIỚI THIỆU VỀ ĐỒ ÁN </h2>
                        <p class ="description">
                            <h3>Lớp: DH20TD</h3>
                            <h3>MSSV: 20138138</h3>
                        </p>
                    </div>
                </div>
                <div class = "post-img">
                    <img src="img/khung.png" width="80%" height ="100%">
                </div>
            </div>
                
        </section>
        <footer>
            <p>@ 2023 - Được tạo bởi Hoàng Văn Trung - Thái Gia Hạnh</p>
        </footer>
</body>
</html>
