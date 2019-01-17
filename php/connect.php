<?php 
// $conn = new mysqli('localhost','brandnam_shop','M48jJUHRKd','brandnam_shop');
$conn = new mysqli('localhost','root','','brandname');
$conn->set_charset('utf8');
if ($conn->connect_errno){	
echo "Connect error".$conn->connect_error;
exit();
}
 ?>