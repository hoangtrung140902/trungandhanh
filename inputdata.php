<?php
require_once("connect.php");
$id = isset($_POST['id']) ? $_POST['id'] : "";
$location = isset($_POST['location']) ? $_POST['location'] : "";
$Temperature = isset($_POST['Temperature']) ? $_POST['Temperature'] : "";
$Humidity = isset($_POST['Humidity']) ? $_POST['Humidity'] : "";
$Pressure = isset($_POST['Pressure']) ? $_POST['Pressure'] : "";


date_default_timezone_set('Asia/Ho_Chi_Minh');

$date = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO trunghanh20td (idchip,location,value1,value2,value3,time) VALUES ('" . $id . "','" . $location . "','" . $Temperature . "','" . $Humidity . "','" . $Pressure . "','" . $date . "')";
    $result = mysqli_query($con, $sql);
} else {
    echo "fill all details! Thanks";
}

if (!$result) {
    $result = mysqli_error($con);
}
echo $result;
?>
