<?php
    //bắt đầu phiên ban
    session_start();



//tạo hằng số để lưu trữ các giá trị không lặp lại
define('SITEURL', 'http://localhost:8080/food-order/');
 define('LOCALHOST', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'food-oder');

 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //kết nối database
 $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());

?>