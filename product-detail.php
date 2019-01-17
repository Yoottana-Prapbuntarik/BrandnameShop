<?php  
require_once('php/connect.php');
 // ELECT * FROM TABLENAME  WHERE id =  $_GET['id']=เก็บ id และ ตวจสอบ status
$sql = "SELECT * FROM brandnameshop where id= '".$_GET['id']."' AND `status` = 'true'";
$result = $conn->query($sql) or die ($conn->error);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
}else{
  header('Location: product.php');

}

$sql_RAND = "SELECT * FROM `brandnameshop` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
$result_RAND = $conn->query($sql_RAND) or die ($conn->error);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <title>
                    Blog Detail

                    </title>
                    <meta property="description" content="แบรนด์เนมราคาถูก,เสื้อผ้า,ชุดชั้นใน,ของแบรนด์เนม,แบรนด์เนมแท้ ">
                <meta property="keywords" content="แบรนด์เนมราคาถูก,เสื้อผ้า,ชุดชั้นใน,ของแบรนด์เนม,แบรนด์เนมแท้ สินค้าราคาถูก">
                <meta property="image" content="https://brandnameno1.com/<?php echo $row['image'];?>">
                <meta property="robots" content="index, nofollow">
                <meta property="web_author" content="แบรนด์เนมเเท้ 100%">
                <meta property="language" content="ไทย">
                <!-- Schema.org for Google -->
                <meta itemprop="name" content="Brandname-Number1">
                <meta itemprop="description" content="แบรนด์เนมราคาถูก,เสื้อผ้า,ชุดชั้นใน,ของแบรนด์เนม,แบรนด์เนมแท้">
                <meta itemprop="image" content="https://scontent.fbkk8-3.fna.fbcdn.net/v/t1.0-9/40284563_265791967380385_6530545774122500096_o.jpg?_nc_cat=0&oh=8c969ce79f11abc79bfbc8c81c542b54&oe=5C385B0F">
                <!-- Open Graph general (Facebook, Pinterest & Google+) -->
                <meta property="fb:app_id" content="243920789635229"/>
                <meta property="og:title" content="Brandname-Number1">
                <meta property="og:description" content="แบรนด์เนมราคาถูก,เสื้อผ้า,ชุดชั้นใน,ของแบรนด์เนม,แบรนด์เนมแท้">
                <meta property="og:image" content="https://brandnameno1.com/<?php echo $row['image'];?>">
                <meta property="og:video" content="https://www.facebook.com/100004159059946/videos/vb.100004159059946/1003886519759974/?type=3">
                <meta property="og:type" content="website">

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

                    <link href="assets/css/styles.css" rel="stylesheet">
                   
                       <link href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet"></link>
                    <link href="node_modules/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet">
           
    </head>


        <!-- Navbar -->
        <?php 
        include_once('includes/navbar.php');
        ?>
         

        <!-- article -->
          <header class="position-relative jarallax" data-speed="0.5" style="background-image:url('<?php echo $row['image']; ?>');">
        <div class="backscreen">
                  <div class="blog-image">
                <h1 class="display-4 font-weight-bold">
                     <?php 
                  echo $row['subject'];
                   ?>
                </h1>
                <p class="lead">
                       <?php 
                  echo $row['sub_title'];
                   ?>
                </p>
                <h4>
                        10 ใบคิดราคาส่ง 
                        <a class="text-primary" href="https://fb.com/profile.php?id=100004159059946" target="_blank"> คลิกที่นี่ ติดต่อ Facebook
                        </a> 
                    </h4>
            </div>
        </header>
             
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
   
        <!--  -->
         <section class="container">
            <div class="row py-5">
                <div class="col-12">
                <div class="blog-content">           
                     
                 <?php 
                  echo $row['detail'];
                   ?>
                   <div class="row">
                       
                   <div class="col-12 col-md-4 my-2">
                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row['image-detail1']; ?>">
                  
                   </div>
                       <div class="col-12 col-md-4 my-2">
                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row['image-detail2']; ?>">
                       </div>
                       <div class="col-12 col-md-4 my-2">
                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row['image-detail3']; ?>">
                       </div>    
                   </div>

                        <div class="col-12 text-right">
                            <hr> 

                            
                                <p>
                                    <?php 
                                    echo date_format(new DateTime($row['updated_at']),"j/F/Y");

                                     ?>
                                </p>
                                <div class="pw-server-widget" data-id="wid-c3nbbmq0"></div>

                                        

                                <i class="fa fa-shopping-cart text-danger"></i>
                            <?php echo "<a href='cart.php?p_id=$row[id]&act=add'>เพิ่มลงตะกร้าสินค้า</a>";?>
                            <br>
                             <i class="fa fa-shopping-cart text-primary"></i> 
                            <a href="https://fb.com/brandnameno1" target="_blank">
                                    ติดต่อซื้อผ่าน Facebook
                                </a>
                                                    
                </div>       
            </div>
                                
              <div class="col-12 py-5">

                            <div class="owl-carousel owl-theme">
                                <?php while ($row_RAND = $result_RAND->fetch_assoc()) 
                                {
                                 ?>
                                <section class="col-12 p-2">
                                    <div class="card h-100">
                                        <a class="wrap-card-img" href="product-detail.php?id=<?php echo $row_RAND['id'] ?>">
                                            <img alt="Card image cap" class="card-img-top" src="<?php echo $row_RAND['image'] ?>">
                                            </img>
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                               <?php echo $row_RAND['subject'] ?>
                                            </h5>
                                            <p class="card-text">
                                                <?php echo $row_RAND['sub_title'] ?>
                                            </p>
                                        </div>
                                        <div class="p-3">
                                            <a class="btn btn-primary btn-block" href="product-detail.php?id=<?php echo $row_RAND['id']?>">
                                                อ่านเพิ่มเติม
                                            </a>
                                        </div>
                                    </div>
                                </section>
                             <?php } ?>
                            </div>
                        </div>   
                    </div>

                </div>
                           
    </section>


      <!-- section header -->
        <!-- Alternate: Background Image Parallax -->
            
        
        <header class="position-relative jarallax" data-speed="0.5" style="background-image:url('https://scontent.fbkk1-5.fna.fbcdn.net/v/t1.0-9/31655676_993601044121855_4957700021291057152_n.jpg?_nc_fx=fbkk1-4&_nc_cat=0&oh=68f3e15f09b0c085447611b198ce3915&oe=5BDC32D7');">
        <div class="backscreen">
                <div class="text-center  py-5 text-white">
                     <a class="navbar-brand" href="index.php">
                    <img  alt="" src="assets/image/logo/logo.png" width="200px">
                       
                    </img>
                    </a>
               </div>
            </div>
        </header>
   
        <!-- section header -->
                         
                <?php include_once('includes/footer.php');
                ?>
                <?php include_once('includes/cart.php');
                ?>
                <?php 
                        require_once('includes/onTotop.php');
                ?>

            <script src="node_modules/jquery/dist/jquery.min.js">
            </script>
            <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js">
            </script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            
            <script src="node_modules/jarallax/dist/jarallax.min.js">
            </script>
            <script src="node_modules/jarallax/dist/jarallax-video.min.js">
            </script>

            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOgU18_tVZdK-nJ0iDuutPnbUsTYwE_XA&callback=initMap">
            </script>
              <script src="assets/js/owl.js">
            </script>
            <script src="assets/js/main.js">
            </script>
            <script type="text/javascript">
  //              DO NOT IMPLEMENT                //
  //       this code through the following        //
  //                                              //
  //   Floodlight Pixel Manager                   //
  //   DCM Pixel Manager                          //
  //   Any system that places code in an iframe   //
    (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
          + '.po.st/static/v4/post-widget.js#publisherKey=3410aephl7c00j6aoqsh';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
     })();
</script>
      
    </body>
</html>
