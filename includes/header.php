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