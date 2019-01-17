<?ob_start();?>

<?php

	error_reporting( error_reporting() & ~E_NOTICE );
    session_start();  
	
/*	
	echo "<pre>";
	print_r($_SESSION);
	echo "<hr>";
	print_r($_POST);
	echo "</pre>";
*/	 
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm</title>
</head>
<body>
<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php
   
require_once('php/connect.php');
   date_default_timezone_set('Asia/Bangkok');
	$name = $_POST["name"]; 
	$address = $_POST["address"];
	$email = $_POST["email"];
	$shipping = $_POST["shipping"];
	$phone = $_POST["phone"];
	if(isset($_POST["p_qty"]))
	{
	$p_qty = $_POST["p_qty"];
	}
	if(isset($_POST["total"]))
	{
	$total = $_POST['total'];
	}
	$order_date = date("d/m/y");
	$status = 1;
	//บันทึกการสั่งซื้อลงใน order_detail
	$conn->query("BEGIN"); 
	$sql1 = "INSERT  INTO tb_order (`order_id`, `name`, `address`, `email`,`shipping`,`phone`,`order_status`,`order_date`) VALUES 


	(NULL,  '$name','$address','$email','$shipping','$phone','$status','$order_date')";
	
	$query1	= $conn->query($sql1) or die ("Error in query: $sql1 " . mysql_error());
	

 
 
	$sql2 = "SELECT MAX(order_id) AS order_id FROM tb_order  WHERE phone='$phone'";
	$query2	= $conn->query($sql2);
	$row = $query2->fetch_array();
	$order_id = $row['order_id'];
	
	
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	 
	{
		$sql3	= "SELECT * FROM brandnameshop where id=$p_id";
		$query3 = $conn->query($sql3);
		$row3 = $query3->fetch_array();
		$total=$row3['price']*$p_qty;
		
		
		$sql4	= "INSERT INTO tb_order_detail
		values
		(null, '$order_id', '$p_id', '$p_qty', '$total')";
		$query4	= $conn->query($sql4);
	}
	
	if($query1 && $query4){
		$conn->query("COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว";
		foreach($_SESSION['shopping_cart'] as $p_id)
		{	
			unset($_SESSION['shopping_cart']);

			echo "<script>";
			echo "alert('บันทึกข้อมูลเรียบร้อยแล้ว');";
			echo "window.location ='index.php'; ";
			echo "</script>";
			
		}
	}
	else{
		$conn->query("ROLLBACK");
		echo "<script>";
			echo "alert('บันทึกข้อมูลไม่สำเร็จโปรดติดต่อผูดูเเลระบบ');";
			echo "window.location ='contact.php'; ";
			echo "</script>";
		
	}


	mysqli_close($conn);
?>


 
</body>
</html>