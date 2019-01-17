<?php 
require_once('php/connect.php');
$tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
$sql = "SELECT * FROM `brandnameshop` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
$result = $conn->query($sql);
 if(!$result){
     header('Location:product.php');  
 }

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <title>
                       Product 
                    </title>
                    <?php include_once('includes/seo.php'); 
            ?>      
                     <!-- favicons -->
                    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicons/apple-touch-icon.png">
                    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicons/favicon-32x32.png">
                    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicons/favicon-16x16.png">
                    <link rel="manifest" href="assets/image/favicons/site.webmanifest">
                    <link rel="mask-icon" href="assets/image/favicons/safari-pinned-tab.svg" color="#5bbad5">
                    <link rel="shortcut icon" href="assets/image/favicons/favicon.ico">
                    <meta name="msapplication-TileColor" content="#da532c">
                    <meta name="msapplication-config" content="assets/image/favicons/browserconfig.xml">
                    <meta name="theme-color" content="#ffffff">



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
                </meta>
            </meta>
        </meta>
    </head>
    <body>

        <!-- Navbar -->
        <?php 
        include_once('includes/navbar.php');
        ?>
   
        <!-- jarallax -->
        <div class="jarallax" 
        data-jarallax-video="mp4:./assets/video/jarallax.mp4">
            <div class="blog-image">
                <div class="container text-center text-white">
                        <div class="col-12 p-5">
                    <h1>
                        สินค้าราคาคุณภาพ
                    </h1>
                    <p class="lead">
                        "แบรนด์เนมแท้ 100% ในราคามิตรภาพสุดคุ้ม"
                      
                    </p>
                    <h4>
                        10 ใบคิดราคาส่ง 
                        <a class="text-primary" href="https://fb.com/profile.php?id=100004159059946" target="_blank"> คลิกที่นี่ ติดต่อ Facebook
                        </a> 
                    </h4>
                </div>
                </div>
            </div>
        </div>
       
                      
        <div class="container text-center mt-5">
                          <div class="row">
                              <div class="col-12">
                                  <img src="assets/image/data.jpg "width="60%"  class="img-responsive">   
                                  <br>
                                  <p class="">กรณีโอนผ่านบัญชีติดต่อ <br>
                                    <a href="https://www.fb.com/profile.php?id=100004159059946" target="_blank"> <b>คลิก</b> >>งานแท้ ร้อยเปอร์เซ็นต์ <<</a>
                                   <br>
                                   <a href="http://line.me/ti/p/~0993507162" target="_blank"> <b>คลิก</b> >> Line <<</a>
                                </p> 

                              </div>
                          </div>
                      </div>
        <!-- article -->
        <!-- section blog -->
        <section class="container py-3">
            <div class="row text-center">
            <div class="col-12">
                <div class="btn-group-custom">                    
                    <a href="product.php?tag=all">
                <button class="btn btn-primary <?php echo $tag == 'all' ? 'active' : '';?>">ทั้งหมด</button>
                    </a>
                     <a href="product.php?tag=menu1">
                <button class="btn btn-primary <?php echo $tag == 'menu1' ? 'active' : '';?>">
                    สุภาพสตรี
                </button>
                    </a>
                     <a href="product.php?tag=menu2">
                <button class="btn btn-primary <?php echo $tag == 'menu2' ? 'active' : '';?>">
                    สุภาพบุรุษ
                </button>
                    </a>
                     <a href="product.php?tag=menu3">
                <button class="btn btn-primary <?php echo $tag == 'menu3' ? 'active' : '';?>">
                    ครัวเรือน
                </button>
                    </a>
                 
            </div>
        </div>
    </div>
        <div class="row">
          <?php 
          if ($result->num_rows) {
        while ($row = $result->fetch_assoc()) {
            
           ?>

           <section class="col-12 col-sm-6 col-md-4 my-3 wrap-crad-img">
                    <div class="card h-100">
                        <a class="wrap-card-img" href="product-detail.php?id=<?php echo $row['id']; ?>">
                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row['image']; ?>">
                            
                        </a>
                        <div class="card-body text-warning text-center">
                            <h5 class="card-title">
                            <?php echo $row['subject']; ?>
                            </h5>
                            <div class="text-danger" style="font-size: 20px;">
                                
                            <p class="card-text">
                             <?php echo $row['sub_title']; ?>

                             </p>
                            </div>
                        </div>
                        <div class="card-footerII">

                             <i class="fa fa-shopping-cart text-danger"></i>
                            <?php echo "<a href='cart.php?p_id=$row[id]&act=add'>เพิ่มลงตะกร้าสินค้า</a>";?>
                            <br>
                             <i class="fa fa-shopping-cart text-primary"></i> 
                            <a href="https://fb.com/brandnameno1" target="_blank">
                                    ติดต่อซื้อผ่าน Facebook
                                </a>
                            <a class="btn btn-primary my-5" href="product-detail.php?id=<?php echo $row['id']; ?> ">
                            อ่านเพิ่มเติม
                            </a>
                        </div>
                    </div>
            </section>
                
                    <?php 
                    }
                    }else{


                    ?>
                    <section class="col-12 py-5">
                        <p class="text-center">
                            ไม่มีข้อมูล
                        </p>
                    </section>
                <?php } ?>
        </div>
</section>
                         
                <?php include_once('includes/footer.php');
                        ?>
                        
                          <?php include_once('includes/cart.php');
                        ?>

                 <?php 
                        require_once('includes/onTotop.php');
                        ?>
            <script src="node_modules/jquery/dist/jquery.min.js">
            </script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js">
            </script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            
            <script src="node_modules/jarallax/dist/jarallax.min.js">
            </script>
            <script src="node_modules/jarallax/dist/jarallax-video.min.js">
            </script>

            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap">
            </script>
            <script src="assets/js/main.js">
            </script>
    </body>
</html>
