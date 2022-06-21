
<?php
$mysqli = new mysqli("localhost","root","","webhoa04");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối Mysql lỗi" . $mysqli->connect_error;
  exit();
}
?>