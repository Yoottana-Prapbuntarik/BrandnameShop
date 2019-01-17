<?php
  $total=0;
  $i = 0;
  error_reporting( error_reporting() & ~E_NOTICE );
    session_start();   
  require_once('php/connect.php');
    

?>
<!DOCTYPE html>
<html>
<head>
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Check-Out-Order</title>
<!-- Latest compiled and minified CSS -->
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
  
<div class="container table-responsive">
  <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">

  <p><a class="btn btn-info my-3" href="cart.php">กลับหน้าตะกร้าสินค้า</a>
    <button class="btn btn-primary w-50" onClick="window.print()"> print </button></p>
  <table width="700" border="1" align="center" class="table">
    <tr>
      <td width="1558" colspan="5" align="center">
      <strong>สั่งซื้อสินค้า</strong></td>
    </tr>
    <tr class="success">
    <td align="center">ลำดับ</td>
      <td align="center">สินค้า</td>
      <td align="center">ราคา</td>
      <td align="center">จำนวน</td>
      <td align="center">รวม/รายการ</td>
    </tr>
<?php
if (is_array(@$_SESSION['shopping_cart']) || is_object(@$_SESSION['shopping_cart']))
  foreach($_SESSION['shopping_cart'] as $p_id=>$p_qty)

  {
    $sql = "select * from brandnameshop where id= $p_id";
    $query = $conn->query($sql);
    $row  = ($query->fetch_array());
    $sum  = $row['price']*$p_qty;
    $total  += $sum;
    echo "<tr>";
  echo "<td align='center'>";
  $i += 1;
  echo $i;
  echo "</td>";
    echo "<td>" . $row["subject"] . "</td>";
    echo "<td align='right'>" .number_format($row['price'],2) ."</td>";
    echo "<td align='right'>$p_qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
  }
  echo "<tr>";
    echo "<td  align='right' colspan='4'><b>รวม</b></td>";
    echo "<td align='right'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-5" style="background-color:#f4f4f4">
      <h4 align="center" style="color:green">
      <span class="glyphicon glyphicon-shopping-cart"> </span>
         กรณีเก็บเงินปลายทางโปรดกรอกข้อมูล <br>
          <h5 style="color:red; text-align: center;">
           ค่าธรรมเนียม 50B
         </h5>

       </h4>
        
      <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="name" class="form-control" required placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <textarea name="address" class="form-control"  rows="3"  required placeholder="ที่อยู่ในการส่งสินค้า"></textarea> 
          </div>
 
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="email" class="form-control" required placeholder="facebook หรือ id line" />
          </div>
          <!--  <div class="col-sm-12 mt-3">
            <input type="text"  name="shipping" class="form-control" required placeholder="การจัดส่ง EMS. / ลทบ." />
          </div> -->
        </div>
        <div class="form-group mb-3">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-primary" id="btn">
             ยืนยันสั่งซื้อ </button>
          </div>
        </div>
      </form>
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