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
    <title>order to admmin</title>
</head>

<?php
require_once('php/connect.php');
$sql = "SELECT * FROM `tb_order` ORDER BY `order_id` DESC LIMIT 20";
$result = $conn->query($sql);

?>
<body>
<div class="container text-center">

<div class="row">
<?php while($row = $result->fetch_assoc()){?>

    <div class="col-12 col-md-4 col-sm-6 my-3 h-100">
    <div class="card">
   
    <div class="card-body">
    <p>
            <h2>เลขที่บิล : <?php  echo $row['order_id'];?></h2><br>
            ที่อยู่ : <?php echo $row['address'];?><br>
            facebook / line : <?php echo $row['email'];?><br>
            เบอร์โทรศัพท์ : <?php echo $row['phone'];?>
            <br>
            <a class="btn btn-success"  href="orderlist.php">รายการสั่งสินค้า</a>

    </p>
    </div>
    </div>
    </div> 
<?php }?>
 

</div>
</div>
    
</body>
</html>