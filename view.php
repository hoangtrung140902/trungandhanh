<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề trang</title>
   
    <link rel="stylesheet" href="style.css">
    
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
                    <li><a class="active" href="#" onclick="loadPage('view1.php')">Trang Chính</a></li>
                    <li><a href="view2.php" onclick="loadPage('view2.php')">SQL</a></li>
                    <li><a href="view3.php" onclick="loadPage('view3.php')">About us</a></li>
                    <li><a href="view4.php" onclick="loadPage('view4.php')">Product </a></li>
                   
                </ul>
            </div>
        </nav>
        <br>
            <section class="content">
                   <body>
                  

                    <div class ="valuehigh">
                        <div class="valuehigh value">
                            <div class="valuehigh value box">
                                <h2 style="font-size: 1rem;">Value 1</h2>
                            </div>
                            <p id="value1"></p>
                        </div>   
                        <div class="valuehigh value">
                            <div class="valuehigh value box">
                                <h2 style="font-size: 1rem;">Value 2</h2>
                            </div>
                            
                            <p id="value2"></p>
                        </div> 
                        <div>
                            <div class="valuehigh value">
                            <div class="valuehigh value box">

                                <h2 style="font-size: 1rem;">Value 3</h2>
                            </div>
                            
                            <p id="value3"></p>
                        </div> 
                        </div>
                        
                    </div> 
                      
                    
                    <div class="card" >
                        <div class="card header">
                            <h3 style="font-size: 1rem;">Biểu đồ tròn</h3>
                        </div>
                        
                        <canvas id="chart" ></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
                        <script src="vebieudo.js"></script>
                    </div>
                   </body>
                
            </section>
        
    
            <footer>
            <p>@ 2023 - Được tạo bởi Hoàng Văn Trung - Thái Gia Hạnh</p>
        </footer>
</body>
</html>
