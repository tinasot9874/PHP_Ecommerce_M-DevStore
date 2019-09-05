<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Online</title>

    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome\css\font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>

    <div id="top">
        <!-- Top Begin -->

        <div class="container">
            <!-- Top Container Begin -->

            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <a href="checkout.php"> 4 Items In Your Cart | Total Price: $300</a>

            </div>

            <div class="col-md-6">

                <ul class="menu">
                    <!-- Top Menu Begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>

                </ul> <!-- Top Menu End -->

            </div>


        </div> <!-- Top Container End -->

    </div> <!-- Top End  -->

    <div id="navbar" class="navbar navbar-default">
        <!-- navbar navbar-default Begin -->

        <div class="container">
            <!-- Navbar container Begin -->

            <div class="navbar-header">
                <!-- Navbar-Header Begin -->

                <a href="index.php" class="navbar-brand home">
                    <!-- Navbar-brand home Begin -->
                    <img src="images\ecom-store-logo.png" alt="M-dev Logo-Deskop" class="hidden-xs">
                    <img src="images\ecom-store-logo-mobile.png" alt="M-dev Logo-Mobile" class="visible-xs">
                </a> <!-- Navbar-brand home End   -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify">


                    </i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search">


                    </i>

                </button>



            </div> <!-- Navbar-Header End -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- Navbar-collapse Begin -->

                <div class="padding-nav">
                    <!-- Padding-nav Begin -->

                    <ul class="nav navbar-nav left">
                        <!-- nav navbar-nav left Begin -->

                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>

                    </ul> <!-- nav navbar-nav left End -->

                </div> <!-- Padding-nav End -->

                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <!-- btn navbar-btn bn-primary right Begin -->
                    <i class="fa fa-shopping-cart"></i> <!-- icon Search -->
                    <span> 4 Items In Your Cart</span>

                </a> <!-- btn navbar-btn bn-primary right End -->

                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right Begin -->
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search">


                        </i>

                    </button> <!-- btn btn-primary navbar-btn End -->
                </div> <!-- navbar-collapse collapse right End -->

                <div class="collapse clearfix" id="search">
                    <!-- collapse clearfix Begin -->

                    <form method="get" action="result.php" class="navbar-form">
                        <!-- navbar-form Begin -->

                        <div class="input-group">
                            <!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn">
                                <button type="submit" name="searh" value="Search" class="btn btn-primary">
                                    <!-- btn btn-primary Begin -->
                                    <i class="fa fa-search"></i>

                                </button> <!-- btn btn-primary Begin -->
                            </span>

                        </div> <!-- input-group End -->

                    </form> <!-- navbar-form End -->

                </div> <!-- "collapse clearfix End -->
            </div> <!-- Navbar-collapse End -->

        </div> <!-- Navbar container End -->


    </div> <!-- navbar navbar-default End -->
    <div class="container" id="slider">
        <!-- container Begin -->

        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <!-- carousel slide Begin -->
                <ol class="carousel-indicators">
                    <!-- carousel-indicators Begin -->
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol> <!-- carousel-indicators End -->

                <div class="carousel-inner">
                    <!-- carousel-inner Begin -->

                    <div class="item active">
                        <img src="admin_area\slides_images\slide-01.jpg" alt="slide-01">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-02.jpg" alt="slide-02">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-03.jpg" alt="slide-03">
                    </div>
                    <div class="item">
                        <img src="admin_area\slides_images\slide-04.jpg" alt="slide-04">
                    </div>

                </div> <!-- carousel-inner End -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <!-- left carousel-control Begin -->
                    <span class="glyphicon glyphicon-chevron-left">
                        <!-- glyphicon glyphicon-chevron-left Begin-->

                    </span> <!-- glyphicon glyphicon-chevron-left End-->
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <!-- left carousel-control Begin -->
                    <span class="glyphicon glyphicon-chevron-right">
                        <!-- glyphicon glyphicon-chevron-left Begin-->

                    </span> <!-- glyphicon glyphicon-chevron-left End-->
                    <span class="sr-only">Next</span>
                </a> <!-- left carousel-control End -->
                <!-- left carousel-control End -->

            </div> <!-- carousel slide End -->


        </div> <!-- col-md-12 End -->

    </div> <!-- container End -->

    <div id="advantages">
        <!-- advantages Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="same-height-row">
                <!-- same-height-row Begin -->

                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-heigt Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-heart"></i>

                        </div>
                        <!--icon End -->
                        <h3>
                            <a href="#">

                                Make yourself at home!

                            </a>
                        </h3>
                        <p>We know to provide the best posible service ever</p>

                    </div> <!-- box same-heigt End -->

                </div> <!-- col-sm-4 End -->
                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-heigt Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-tag"></i>

                        </div>
                        <!--icon End -->
                        <h3>
                            <a href="#">

                                Best Price

                            </a>
                        </h3>
                        <p>Compare us with another site, who have the best price</p>

                    </div> <!-- box same-heigt End -->

                </div> <!-- col-sm-4 End -->
                <div class="col-sm-4">
                    <!-- col-sm-4 Begin -->

                    <div class="box same-height">
                        <!-- box same-heigt Begin -->

                        <div class="icon">
                            <!-- icon Begin -->

                            <i class="fa fa-thumbs-up"></i>

                        </div>
                        <!--icon End -->
                        <h3>
                            <a href="#">

                                100% Original Products!

                            </a>
                        </h3>
                        <p>We just offer you the best and original products</p>

                    </div> <!-- box same-heigt End -->

                </div> <!-- col-sm-4 End -->
            </div> <!-- same-height-row End -->

        </div> <!-- container End -->

    </div> <!-- advantages End -->

    <div class="hot-product">
        <!-- hot-product Begin -->
        <div class="box">
            <!-- box Begin -->
            <div class="container">
                <!-- container Begin -->

                <div class="col-md-12">
                    <!-- col-md-12 Begin -->

                    <h2>Our Best Seller Products</h2>

                </div> <!-- col-md-12 End -->

            </div> <!-- container End -->
        </div> <!-- box End -->
    </div> <!-- hot-product End -->

    <div id="content" class="container">
        <!-- container Begin -->

        <div class="row">
            <!-- row Begin -->

            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-01.jpg" alt="product-01">
                    </a>
                    <div class="text">
                        <!-- text Begin -->
                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">
                
                        <img class="img-responsive" src="admin_area\product_images\product-02.jpg" alt="product-02">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-03.jpg" alt="product-03">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-04.jpg" alt="product-04">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-05.jpg" alt="product-05">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-06.jpg" alt="product-06">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-07.jpg" alt="product-07">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-default">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product">
                    <!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="admin_area\product_images\product-08.jpg" alt="product-08">
                    </a>
                    <div class="text">
                        <!-- text Begin -->

                        <div class="name-product">
                            <a href="details.php">Esprit Ruffle Shirt</a>
                        </div>
                        <p class="stext-105 cl3">350$</p>
                        <p class="button">
                            <a href="details.php" class="col-sm-6 btn btn-default">View Details</a>
                            <a href="details.php" class="col-sm-6 btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                        </p>

                    </div> <!-- text End -->

                </div> <!-- product End -->


            </div> <!-- col-sm-4 col-sm-6 single End -->

        </div> <!-- row End -->

    </div> <!-- container End -->

    <?php
    include("includes/footer.php");
    ?>



    <script src="js\jquery-3.4.1.min.js"></script>
    <script src="js\bootstrap-337.min.js"></script>

</body>

</html>