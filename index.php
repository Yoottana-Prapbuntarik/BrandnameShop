<?php 
require_once('php/connect.php');
$sql = "SELECT * FROM `brandnameshop` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result = $conn->query($sql);
 ?>

 
<!DOCTYPE html>
<html>
    <head>
                    <title>
                        Brandname-Number1
                    </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
               
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

       <?php include_once('includes/navbar.php');
        ?>
        <!-- Carousuel -->
       
        <div class="carousel slide" data-ride="carousel" id="Nextpage">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#Nextpage">
                </li>
                <li data-slide-to="1" data-target="#Nextpage">
                </li>
                <li data-slide-to="2" data-target="#Nextpage">
                </li>
                <li data-slide-to="3" data-target="#Nextpage">
                </li>
                <li data-slide-to="4" data-target="#Nextpage">
                </li>
              
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-img" style="background-image: url('assets/image/slider/img1.jpg');">
                        <div class="carousel-caption font-weight-bold">
                            <h1 class="display-4">
                                แบรนด์ เนม
                            </h1>
                            <p class="lead">
                                ลดมากกว่า 50 %  
                            </p>
                        </div>
                        <div class="backscreen">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('assets/image/slider/img4.jpg');">
                        <div class="carousel-caption font-weight-bold">
                            <h1 class="display-4">
                                สินค้าหลายรายการ 
                            </h1>
                            <p class="lead">
                                Brandname แท้ 100% 
                            </p>
                        </div>
                        <div class="backscreen">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('assets/image/slider/img5.jpg');">
                        <div class="carousel-caption font-weight-bold">
                            <h1 class="display-4">
                                เชิญเลือกซื้อเลือกชมได้เลยจ้า
                            </h1>
                            <p class="lead">
                                รับประกันคุณภาพ ^^
                            </p>
                        </div>
                        <div class="backscreen">
                        </div>
                    </div>
                </div>
                 <div class="carousel-item">
                    <div class="carousel-img" style="background-image: url('assets/image/slider/img2.jpg');">
                        <div class="carousel-caption font-weight-bold">
                            <h1 class="display-4">
                                แบรนด์ เนม
                            </h1>
                            <p class="lead">
                                ลดมากกว่า 50 %  
                            </p>
                        </div>
                        <div class="backscreen">
                        </div>
                    </div>
                </div>
                 <div class="carousel-item">
                    <div class="carousel-img" style="background-image:url('assets/image/slider/img3.jpg');">
                       <div class="carousel-caption font-weight-bold">
                            <h1 class="display-4">
                                สินค้าหลายรายการ 
                            </h1>
                            <p class="lead">
                                Brandname แท้ 100% 
                            </p>
                        </div>
                        <div class="backscreen">
                        </div>
                        
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" data-slide="prev" href="#Nextpage" role="button">
                <span aria-hidden="true" class="carousel-control-prev-icon">
                </span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" data-slide="next" href="#Nextpage" role="button">
                <span aria-hidden="true" class="carousel-control-next-icon">
                </span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
        <!-- jarallax -->
        <div class="jarallax my-2" 
        data-jarallax-video="mp4:./assets/video/jarallax.mp4">
            <div class="backscreen">
                <div class="container text-center text-white">
                		<div class="col-12 py-5">
                    <h3 class="border-short-bottom">
                        สินค้าแบรนด์เนม 
                    </h3>
                    <p class="lead">
                        แบรนด์เนมราคาถูก <i>ลดราคามากกว่า 50 %</i> ทุกรายการ

                    </p>
                    <h3>
                        เก็บเงินปลายทาง
                    </h3>
                    <h4>
                        10 ใบคิดราคาส่ง 
                        <a class="text-primary" href="https://fb.com/profile.php?id=100004159059946" target="_blank"> คลิกที่นี่ ติดต่อ Facebook
                        </a> 
                    </h4>
                     
                </div>
                </div>
            </div>
        </div>

            
                     
                      <div class="container text-center  mt-5">
                          <div class="row">
                              <div class="col-12">
                                  <img src="assets/image/data.jpg "width="60%"  class="img-responsive">   
                                  <br>
                                  <p class="text-white">กรณีโอนผ่านบัญชีติดต่อ <br>
                                    <a href="https://www.fb.com/profile.php?id=100004159059946" target="_blank"> <b>คลิก</b> >>งานแท้ ร้อยเปอร์เซ็นต์ <<</a>
                                   <br>
                                   <a href="http://line.me/ti/p/~0993507162" target="_blank"> <b>คลิก</b> >> Line <<</a>
                                </p> 

                              </div>
                          </div>
                      </div>

        <!-- article -->
     

        
        <article class="container ">
            <div class="row ">
                <div class="col-12 border-short-bottom text-white text-center">
                 <h1>สินค้า</h1>
                 <br>
                </div>
            <?php while ($row = $result->fetch_assoc()) {
             ?>
                 <section class="col-12 col-sm-6 col-md-4 my-3 wrap-crad-img">
                    <div class="card h-100">
                        <a class="wrap-card-img" href="product-detail.php?id=<?php echo $row['id']; ?>">
                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row['image']; ?>">
                            
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                            <?php echo $row['subject']; ?>
                            </h5>
                            <p class="card-text">
                            <?php echo $row['sub_title']; ?>

                             </p>
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
            <?php } ?>
                </div> 
        </article>
       
				         
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
