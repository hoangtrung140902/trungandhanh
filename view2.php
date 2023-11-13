<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề trang</title>
    <link rel="stylesheet" href="style2.css">
    
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
                    <li><a href="#" onclick="loadPage('view2.php')">SQL</a></li>
                    <li><a href="view3.php" onclick="loadPage('aboutus.html')">About us</a></li>
                    <li><a href="#" onclick="loadPage('profile.html')">Product </a></li>
                   
                </ul>
            </div>
        </nav>
       <table class="styled-table" id= "table_id">
            <thead>
                <tr> 
                    <th>STT</th> 
                    <th>IDCHIP</th> 
                    <th>Location</th> 
                    <th>value1</th> 
                    <th>value2</th>
                    <th>value3</th>
                    <th>Time</th> 
                </tr>';
            </thead>
            <tbody id="tbody_table_record">
                <?php
                    require_once("connect.php");

                    $results_per_page = 50; 
                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    $sql = "SELECT id, idchip, location, value1, value2, value3, time FROM trunghanh20td ORDER BY id DESC LIMIT " . (($page - 1) * $results_per_page) . "," . $results_per_page;

                   if ($result = $con->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $row_i = $row["id"];
                            $row_id = $row["idchip"];
                            $row_location = $row["location"];
                            $row_value1 = $row["value1"];
                            $row_value2 = $row["value2"];
                            $row_value3 = $row["value3"];
                            $row_time = $row["time"];

                            echo '<tr> 
                                    <td>' . $row_i . '</td> 
                                    <td>' . $row_id . '</td> 
                                    <td>' . $row_location . '</td> 
                                    <td>' . $row_value1 . '</td> 
                                    <td>' . $row_value2 . '</td>
                                    <td>' . $row_value3 . '</td>
                                    <td>' . $row_time . '</td> 
                                </tr>';
                        }
                        $result->free();
                    }

                
                    $sql_total_records = "SELECT COUNT(*) FROM trunghanh20td";
                    $result_total_records = $con->query($sql_total_records);
                    $row_total_records = $result_total_records->fetch_row();
                    $total_records = $row_total_records[0];

                    $con->close();
                ?>
                 
            </tbody>
       </table>
       <br>
    
        <div class="btn-group">
        <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
        <button class="button" id="btn_next" onclick="nextPage()">Next</button>
        <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
            <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
        </div>
        <select name="number_of_rows" id="number_of_rows">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
        </div>

        <br>
        
        <script>
        
        var current_page = 1;
        var records_per_page = 10;
        var l = document.getElementById("table_id").rows.length
        function apply_Number_of_Rows() {
            var x = document.getElementById("number_of_rows").value;
            records_per_page = x;
            changePage(current_page);
        }    
        function prevPage() {
            if (current_page > 1) {
                current_page--;
                changePage(current_page);
            }
        }
        
        
        
        function nextPage() {
            if (current_page < numPages()) {
                current_page++;
                changePage(current_page);
            }
        }
        
        
        function changePage(page) {
            var btn_next = document.getElementById("btn_next");
            var btn_prev = document.getElementById("btn_prev");
            var listing_table = document.getElementById("table_id");
            var page_span = document.getElementById("page");
        
        
            if (page < 1) page = 1;
            if (page > numPages()) page = numPages();

            [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
                tr.style.display='none'; 
            });
            listing_table.rows[0].style.display = ""; 

            for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
            if (listing_table.rows[i]) {
                listing_table.rows[i].style.display = ""
            } else {
                continue;
            }
            }
            
            page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
            
            if (page == 0 && numPages() == 0) {
            btn_prev.disabled = true;
            btn_next.disabled = true;
            return;
            }

            if (page == 1) {
            btn_prev.disabled = true;
            } else {
            btn_prev.disabled = false;
            }

            if (page == numPages()) {
            btn_next.disabled = true;
            } else {
            btn_next.disabled = false;
            }
        }
        
        
        
        function numPages() {
            return Math.ceil((l - 1) / records_per_page);
        }
        
        
        
        window.onload = function() {
            var x = document.getElementById("number_of_rows").value;
            records_per_page = x;
            changePage(current_page);
        };
        
        </script>
        <footer>
            <p>@ 2023 - Được tạo bởi Hoàng Văn Trung - Thái Gia Hạnh</p>
        </footer>
</body>
</html>
