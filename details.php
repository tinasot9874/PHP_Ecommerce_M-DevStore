<?php
include("includes/header.php");
?>


<div id="content">
    <!-- #content Begin -->
    <div class="container">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->

            <ul class="breadcrumb">
                <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">JACKETS</a>
                </li>
                <li>
                    <a href="index.php">Lightweight Jacket</a>
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->
        <?php
        include("includes/sidebar.php");

        ?>
        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div class="carousel slide" id="myCarousel" data-ride="carousel">
                            <!-- carousel slide Begin -->
                            <ol class="carousel-indicators">
                                <!-- carousel-indicators Begin -->
                                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>

                            </ol> <!-- carousel-indicators End -->

                            <div class="carousel-inner">
                                <!-- carousel-inner Begin -->

                                <div class="item active">
                                    <img src="admin_area\product_images\product-detail-01.jpg" alt="slide-01">
                                </div>
                                <div class="item">
                                    <img src="admin_area\product_images\product-detail-02.jpg" alt="slide-02">
                                </div>
                                <div class="item">
                                    <img src="admin_area\product_images\product-detail-03.jpg" alt="slide-03">
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

                        </div>
                    </div>
                    <div class="row" id="thumbs">
                        <!-- row Begin -->

                        <div class="col-xs-4">
                            <!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                <!-- thumb Begin -->
                                <img src="admin_area\product_images\product-detail-01.jpg" alt="product 1" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4">
                            <!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <!-- thumb Begin -->
                                <img src="admin_area\product_images\product-detail-02.jpg" alt="product 2" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4">
                            <!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <!-- thumb Begin -->
                                <img src="admin_area\product_images\product-detail-03.jpg" alt="product 4" class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                    </div><!-- row Finish -->
                </div>
                <div class="col-sm-6">
                    <!-- col-sm-6 Begin -->
                    <div class="box">
                        <!-- box Begin -->
                        <h1 class="text-center">Lightweight Jacket</h1>
                        <h4 class="price">$50</h4> <br>
                        <p class="description ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> <br>
                        <form action="details.php" class="form-horizontal" method="post">
                            <!-- form-horizontal Begin -->
                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label for="" class="col-md-5 control-label">Products Quantity</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->
                                    <select name="product_qty" id="" class="form-control">
                                        <!-- select Begin -->
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select><!-- select Finish -->

                                </div><!-- col-md-7 Finish -->

                            </div><!-- form-group Finish -->

                            <div class="form-group">
                                <!-- form-group Begin -->
                                <label class="col-md-5 control-label">Product Size</label>

                                <div class="col-md-7">
                                    <!-- col-md-7 Begin -->

                                    <select name="product_size" class="form-control">
                                        <!-- form-control Begin -->

                                        <option>Select a Size</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select><!-- form-control Finish -->
                                </div><!-- col-md-7 Finish -->
                            </div><!-- form-group Finish -->
                            <p class="text-center"><a href="cart.php" style="text-align: text-center;" class="btn btn-success ">
                                <i class="fa fa-shopping-cart">
                                    Add To Cart
                                </i>
                            </a>
                            </p>
                        </form><!-- form-horizontal Finish -->
                    </div><!-- box Finish -->
                </div><!-- col-sm-6 Finish -->
            </div>
            <div class="row">
                <!-- box same-height headline Begin -->
                <h3 class="text-center">Products You Maybe Like</h3> <br>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <!-- col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="product same-height">
                        <!-- product same-height Begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\product-04.jpg" alt="Product 6">
                        </a>

                        <div class="text">
                            <!-- text Begin -->
                            <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                            <p class="price">$40</p>

                        </div><!-- text Finish -->

                    </div><!-- product same-height Finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                <div class="col-md-3 col-sm-6 center-responsive">
                    <!-- col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="product same-height">
                        <!-- product same-height Begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\product-05.jpg" alt="Product 6">
                        </a>

                        <div class="text">
                            <!-- text Begin -->
                            <h3><a href="details.php">M-Dev Street Shirt Women</a></h3>

                            <p class="price">$45</p>

                        </div><!-- text Finish -->

                    </div><!-- product same-height Finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                <div class="col-md-3 col-sm-6 center-responsive">
                    <!-- col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="product same-height">
                        <!-- product same-height Begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\product-06.jpg" alt="Product 6">
                        </a>

                        <div class="text">
                            <!-- text Begin -->
                            <h3><a href="details.php">M-Dev Polo T-Shirt Women</a></h3>

                            <p class="price">$50</p>

                        </div><!-- text Finish -->

                    </div><!-- product same-height Finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                <div class="col-md-3 col-sm-6 center-responsive">
                    <!-- col-md-3 col-sm-6 center-responsive Begin -->
                    <div class="product same-height">
                        <!-- product same-height Begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area\product_images\product-07.jpg" alt="Product 6">
                        </a>

                        <div class="text">
                            <!-- text Begin -->
                            <h3><a href="details.php">M-Dev Polo T-Shirt Women</a></h3>

                            <p class="price">$50</p>

                        </div><!-- text Finish -->

                    </div><!-- product same-height Finish -->
                </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
            </div>



        </div>

    </div>
</div>


<?php
include("includes/footer.php");

?>