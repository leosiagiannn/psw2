<?php
session_start();
if ($_SESSION['status'] != "masuk") {
    print "
            <script>
                alert('Anda harus melakukan login terlebih dahulu!!!');
                document.location.href = 'login.php'
            </script>
        ";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="lib/laser/laser.php">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="css/nivo-slider-theme.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>
    <!-- header-area start -->
    <header>
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll sticky-logo">
                                    <h1>
                                        <span>E</span>-Commerce UMKM
                                    </h1>
                                </a>
                            </div>
                            <!-- Brand -->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                                id="navbar-example">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active">
                                        <a class="page-scroll" href="dashboard.php">Dashboard</a>
                                    </li>
                                    <li>
                                        <?php
                                        if ($_SESSION['admin']) { ?>
                                        <a class="page-scroll" href="beli.php">Daftar Penjualan</a><?php
                                                                                                    } else { ?>
                                        <a class="page-scroll" href="beli.php">Beli</a><?php
                                                                                                    }
                                                                                            ?>
                                    </li>
                                    <li>
                                        <?php
                                        if ($_SESSION['admin']) { ?>
                                        <a class="page-scroll" href="produk.php">Produk & Pesanan</a><?php
                                                                                                        } else { ?>
                                        <a class="page-scroll" href="keranjang.php">Keranjang</a><?php
                                                                                                        }
                                                                                                        ?>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="pengumuman.php">Pengumuman</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="logout.php">
                                            Logout
                                            <?php $_SESSION['username'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides" style="">
                <img src="slider/slide3.png" alt="" title="#slider-direction-1" />
                <img src="slider/slide1.png" alt="" title="#slider-direction-2" />
                <img src="slider/slide2.png" alt="" title="#slider-direction-3" />
            </div>

            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s"
                                    data-wow-delay=".2s"></div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                    <h1 class="title2">
                                        Sekarang Telah Tersedia Produk-Produk Cantik di E-COMMERCE UMKM
                                    </h1>
                                </div>
                                <!-- layer 3 -->
                                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s"
                                    data-wow-delay=".2s"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright
                                <strong>
                                    E-commerce UKKM
                                </strong>
                            </p>
                        </div>
                        <div class="credits">
                            Designed by Kelompok PSW-IX
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer bottom Area -->

    <!-- Start Button up -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- End Button up -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/knob/jquery.knob.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="lib/appear/jquery.appear.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/main.js"></script>
</body>

</html>