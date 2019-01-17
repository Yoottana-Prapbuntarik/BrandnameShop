 
<?php 
 $file_name = basename($_SERVER['SCRIPT_FILENAME'],'.php');
 ?>
 <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha text-center" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img alt=""  src="assets/image/logo/logo.png" width="30">
                    Brandname-Number1
                    </img>
                </a>
                <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo $file_name == 'index' ?  'active' : ''; ?>">
                            <a class="nav-link" href="index.php">
                                หน้าแรก
                            </a>
                        </li>
                        <li class="nav-item <?php echo $file_name == 'about' ?  'active' : ''; ?>">
                            <a class="nav-link" href="about.php">
                                เกี่ยวกับเรา
                            </a>
                        </li>
                        <li class="nav-item <?php echo ($file_name == 'product'|| $file_name == 'product-detail')? 'active':'';?>">
                            <a class="nav-link" href="product.php">
                                สินค้า
                            </a>
                        </li>
                        <li class="nav-item <?php echo $file_name == 'contact' ?  'active' : ''; ?>">
                            <a class="nav-link" href="contact.php">
                                ติดต่อเรา
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        