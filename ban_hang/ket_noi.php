<?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="ban_hang";
 
// tạo kết nối
$conn = mysqli_connect($servername, $username, $password,$dbname);
 
// kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // mysqli_connect("localhost","root","");
    // mysqli_select_db($conn,"ban_hang");
    // mysqli_query($conn,'SET NAMES "UTF8"');
?>