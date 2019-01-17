<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- css -->
      <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet" />
                    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
                    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
                        <link href="assets/css/styles.css" rel="stylesheet"/>
    <title>order to admin</title>
</head>

<?php
require_once('php/connect.php');


$sql2 = "SELECT * FROM `tb_order_detail`ORDER BY `d_id` DESC LIMIT 20";
$result2 = $conn->query($sql2);
?>
<body>
<div class="container text-center">

<div class="row">
<?php while($row2 = $result2->fetch_assoc()){?>

    <div class="col-12 col-md-4 col-sm-6 my-3 h-100">
    <div class="card">
   
    <div class="card-body">
    <p>
                <h2>เลขที่บิล : <?php  echo $row2['order_id'];?></h2><br>
            รหัสสินค้า : <?php echo $row2['p_id'];?><br>
            จำนวนสินค้า : <?php echo $row2['p_qty'];?><br>
            จำนวนเงินทั้งหมด : <?php echo $row2['total'];?><br>
            <a class="btn btn-success"  href="orderContact.php">ที่อยู่ลูกค้า</a>

    </p>
    </div>
    </div>
    </div> 
<?php }?>
 

</div>
</div>
    
</body>
</html>