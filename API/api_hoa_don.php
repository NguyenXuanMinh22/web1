<?php
include("db.php");
// test 
$date = $_GET['date'] ?? date('Y-m-d');
$query = "SELECT SUM(TongTien) AS DoanhThu 
          FROM HoaDon 
          WHERE NgayLap = '$date'";

$result = $conn->query($query);
$row = $result->fetch_assoc();

header('Content-Type: application/json');
echo json_encode($row);
?>
