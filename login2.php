<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Wedding hairaccessories</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/crown.png">

    <!-- jQuery -->
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- plugin: slickslider -->
    <link href="plugins/slickslider/slick.css" rel="stylesheet" type="text/css" />
    <link href="plugins/slickslider/slick-theme.css" rel="stylesheet" type="text/css" />
    <script src="plugins/slickslider/slick.min.js"></script>

    <!-- custom style -->
    <link href="css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!--My styles-->
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>

    <!-- custom javascript -->
    <script src="js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>


</head>
<body>
<header class="section-header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary fixed-top">
        <div class="container">
            <div class="row" style="width:100%;">
                <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav py-1">
                            <li class="nav-item active"><a class="nav-link" href="Index.html"> Home </a></li><span class="sr-only">(current)</span></a></li>
                            <li class="nav-item "><a class="nav-link" href="categories/Crowns.html"> Crowns </a></li>
                            <li class="nav-item "><a class="nav-link" href="categories/Twig.html"> Twig </a></li>
                            <li class="nav-item "><a class="nav-link" href="categories/Earrings.html"> Earrings </a></li>
                            <li class="nav-item "><a class="nav-link" href="pages/contacts.html"> Contacts </a></li>
                            <li class="nav-item "><a class="nav-link" href="./brand.php">Accesorii</a></li>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <div class="widgets-wrap float-right row no-gutters py-1">
                        <div class="col-auto">
                            <div class="widget-header dropdown">
                                <a href="#" data-toggle="dropdown" data-offset="20,10">
                                    <div class="icontext">
                                        <a href="./login.php"><div class="icon-wrap"><i class="text-light icon-sm fa fa-user"></i></div>
                                        </a>
                                        <?php  if (isset($_SESSION['username'])) : ?>
                                            <p> <a href="index.php" style="color: red;">Logout</a> </p>
                                        <?php endif ?>
                                    </div>
                                </a>
                            </div>  <!-- widget-header .// -->
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="pages/cart.html" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-light icon-sm fa fa-shopping-cart"></i></div>
                                    <div class="text-wrap text-dark">
                                        Cart
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                        <div class="col-auto">
                            <a href="#" class="widget-header">
                                <div class="icontext">
                                    <div class="icon-wrap"><i class="text-light icon-sm  fa fa-heart"></i></div>
                                    <div class="text-wrap text-dark">
                                        <div>Favorites</div>
                                    </div>
                                </div>
                            </a>
                        </div> <!-- col.// -->
                    </div> <!-- widgets-wrap.// row.// -->
                </div> <!-- col.// -->
            </div>
        </div>
    </nav>

    <section class="header-main bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="brand-wrap">
                        <img class="logo" src="images/logo.png">
                        <h2 class="logo-text">Wedding hairaccessories</h2>
                        <script>
                            var date=new Date();
                            var day=date.getDate();
                            var month=date.getMonth()+1;
                            var year=date.getFullYear();
                            document.write("<br> "+day+"/"+month+"/"+year);
                        </script>
                        &nbsp;
                        <span id="txt"></span>
                        <script>
                            window.onload=function(){getTime();}
                            function getTime(){
                                var today=new Date();
                                var h=today.getHours();
                                var m=today.getMinutes();
                                var s=today.getSeconds();

                                m=checkTime(m);
                                s=checkTime(s);
                                document.getElementById('txt').innerHTML=h+":"+m+":"+s;
                                setTimeout(function(){getTime()},1000);
                            }

                            function checkTime(i){
                                if (i<10){
                                    i="0" + i;
                                }
                                return i;
                            }
                        </script>
                    </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-md-4">

                </div> <!-- col.// -->
                <div class="col-md-4">
                    <form action="#" class="widget-header float-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->

            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->

<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro pt-0 pb-1">
    <div class="container intro">
        <div class="row d-flex" style="min-height:600px;">
            <div class="col-8 d-flex align-items-end">
                <header class="intro-wrap text-white">
                    <h2 class="display-3" > Hi! </h2>
                    <p class="lead"><i>Here you can find the accessory that will highlight your outfit perfectly on this special day!</i></p><a href="#" class="btn btn-warning">Order now!</i></a>
                </header>  <!-- intro-wrap .// -->
            </div> <!-- col.// -->

        </div> <!-- row.// -->
    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<hr />
<!-- ================== 1-carousel bootstrap  ==================  -->
<div class="container">
    <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1_indicator" data-slide-to="1"></li>
            <li data-target="#carousel1_indicator" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banners/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banners/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banners/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<hr />
<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-secondary">
    <div class="container">
        <section class="footer-top padding-top">
            <div class="row">
                <aside class="col-sm-3 col-md-3 white">
                    <h5 class="title">Customer Services</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#">Help center</a></li>
                        <li> <a href="#">Money refund</a></li>
                        <li> <a href="#">Terms and Policy</a></li>
                        <li> <a href="#">Open dispute</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">My Account</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#"> User Login </a></li>
                        <li> <a href="#"> User register </a></li>
                        <li> <a href="#"> Account Setting </a></li>
                        <li> <a href="#"> My Orders </a></li>
                        <li> <a href="#"> My Wishlist </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3  col-md-3 white">
                    <h5 class="title">About</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#"> Our history </a></li>
                        <li> <a href="#"> How to buy </a></li>
                        <li> <a href="#"> Delivery and payment </a></li>
                        <li> <a href="#"> Advertice </a></li>
                        <li> <a href="#"> Partnership </a></li>
                    </ul>
                </aside>
                <aside class="col-sm-3">
                    <article class="white">
                        <h5 class="title">Contacts</h5>
                        <p>
                            <strong>Phone: </strong> +37369648127 <br>
                        </p>

                        <div class="btn-group white">
                            <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                            <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                            <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
                            <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                        </div>
                    </article>
                </aside>
            </div> <!-- row.// -->
            <br>
        </section>
        <section class="footer-bottom row border-top-white">
            <div class="col-sm-6">
                <p class="text-white-50"> Made with <3 <br>  Guranda Valeria.</p>
            </div>
            <div class="col-sm-6">
                <p class="text-md-right text-white-50">
                    Copyright &copy  <br>
                    <a href="http://bootstrap-ecommerce.com" class="text-white-50">G&V</a>
                </p>
            </div>
        </section> <!-- //footer-top -->
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>