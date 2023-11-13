<?php
require_once("connect.php");

$sql = "SELECT id, idchip, location, value1, value2, value3, time FROM trunghanh20td ORDER BY id DESC";

$data = [];

if ($result = $con->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'id' => $row['id'],
            'idchip' => $row['idchip'],
            'location' => $row['location'],
            'value1' => $row['value1'],
            'value2' => $row['value2'],
            'value3' => $row['value3'],
            'time' => $row['time'],
        ];
    }
    $result->free();
}

$con->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
