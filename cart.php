<?php 
error_reporting( error_reporting() & ~E_NOTICE );

session_start();
$sum = 0;
$total = 0;
$i = 0;

require_once('php/connect.php');
	$p_id = (isset($_GET['p_id'])) ? $_GET['p_id'] : '';
    $act = (isset($_GET['act'])) ? $_GET['act'] : '';
  
  
 //    $p_id = $_REQUEST['p_id']; 
	// $act = $_REQUEST['act'];

	if($act=='add' && !empty($p_id))
	{
		if(@!isset(($_SESSION['shopping_cart'])))
		{
			$_SESSION['shopping_cart']=array();
		}else{
		 
		}
		if(isset($_SESSION['shopping_cart'][$p_id]))
		{
			$_SESSION['shopping_cart'][$p_id]++;
		}
		else
		{
			$_SESSION['shopping_cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  
	{
		unset($_SESSION['shopping_cart'][$p_id]);
	}

	if($act=='update')
	{
		if (isset($_POST['amount'])) {
			# code...
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{

			$_SESSION['shopping_cart'][$p_id]=$amount;
		}
		}else{
			$_POST['amount'] = null;
		}
		if (empty($_POST['amount'])) {
			echo('
				<script> 
				alert("ไม่พบสินค้าในตะกร้า");
				</script>');
		}
	}

	//ยกเลิกตระกร้าสินค้า
	if ($act=='Cancel-cart') {

		unset($_SESSION['shopping_cart']);
		header('Refresh:0; url=product.php');
		if(!isset($_SESSION['shopping_cart'])){	$_SESSION['shopping_cart'] = null;}
	}
	?>
 
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		 <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Shopping-Cart</title>
		<link rel="stylesheet" href="">
  <!-- css -->
                    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
                    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
                    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
                        <link href="assets/css/styles.css" rel="stylesheet"/>
                        <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                        </link>
                    </link>
                    <link href="assets/css/styles.css" rel="stylesheet">
                    </link>
	</head>
	<body>
		  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha text-center" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img alt=""  src="assets/image/logo/logo.png" width="40">
                    Brandname-Number1
                    </img>
                </a>
                <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    	<?php 
 					$file_name = basename($_SERVER['SCRIPT_FILENAME'],'.php');
 					?>
                        <li class="nav-item <?php echo $file_name == 'product' ?  'active' : ''; ?>">
                            <a class="nav-link" href="product.php">
                                หน้าสินค้า
                            </a>
                        </li>
                        <li class="nav-item <?php echo $file_name == 'cart' ?  'active' : ''; ?>">
                            <a class="nav-link" href="cart.php">
                                ตะกร้าสินค้า
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($file_name == 'contact')? 'active':'';?>">
                            <a class="nav-link" href="contact.php">
                                ติดต่อเรา
                            </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
			 
			 <div class="container table-responsive" style="margin-top: 100px;">
			 	<div class="row">
			 		<div class="col-12">
			 			
			 
		<form id="frmcart" name="frmcart" method="post" action="?act=update">
        <table width="100%" border="0" align="center" class="table table-hover ">
        <tr>
          <td height="40" colspan="7" align="center" bgcolor="#CCCCCC"><strong><b>ตะกร้าสินค้า</span></strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#EAEAEA"><strong>No.</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>image</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>สินค้า</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ราคา</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>จำนวน</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>รวม/รายการ</strong></td>
          <td align="center" bgcolor="#EAEAEA"><strong>ลบ</strong></td>
        </tr>
        <?php

if(!empty($_SESSION['shopping_cart']))
{
	foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)
	{	

		$sql = "select * from brandnameshop where id= $p_id";
		$query = $conn->query($sql);
		while($row = $query->fetch_array())
		{ 
		$sum = $row['price'] * $p_qty;
		
		$total += $sum;
		echo "<tr>";
		echo "<td>";
		
        echo $i += 1;
        echo ".";
		echo "</td>";
		echo "<td width='100'>"."<img src='$row[image]'  width='50'/>"."</td>";
		echo "<td width='334'>"." " . $row["subject"] . "</td>";
		echo "<td width='100' align='right'>" . number_format($row["price"],2) . "</td>";
		
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$p_qty' size='2'/></td>";
		
		echo "<td width='100' align='right'>" .number_format($sum,2)."</td>";
		echo "<td width='100' align='center'><a href='cart.php?p_id=$p_id&act=remove' class='btn btn-danger btn-xs'>ลบ</a></td>";
		
		echo "</tr>";
		}
 
	}
	echo "<tr>";
  	echo "<td colspan='5' bgcolor='#CEE7FF' align='right'>Total</td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>

       
      <p align="center"> <a href="product.php" class="btn btn-info">กลับไปเลือกสินค้า</a> </p>

</table>
</from>

			 		</div>
			 	</div>
			 </div>
			 	<div class="container my-3 text-center">
			<div class="row">
				<div class="col-12">
          <button type="submit" name="button" id="button" class="btn btn-warning my-2">คำนวณราคาอีกครั้ง</button>
            <button type="button" name="Submit2"  onclick="window.location='confirm.php';" class="btn btn-success"> 
            สั่งซื้อสินค้า
        </button>
					<a href="cart.php?act=Cancel-cart" class="btn btn-danger my-2">ยกเลิกตระกร้าสินค้า</a>
			</div>
        
				</div>
			</div>

		
		  <script src="node_modules/jquery/dist/jquery.min.js">
            </script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js">
            </script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="assets/js/main.js">
            </script>
	</body>
	</html>
