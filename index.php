<?php
 include_once 'Admin/Controller.php';
 include_once 'Admin/specialitemController.php';
 $content= new Controller();
 $all_content=$content->alldata();

 $special=new specialitemController();
 $special_content=$special->alldata();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Spicy Bite a Restaurant Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Spicy Bite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <!--about-bottom -->
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <!--about-bottom -->
    <link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="agile-banner-main" id="home">
    <div class="banner-layer">
        <div class="header-main">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="scroll hvr-underline-from-center">
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a class="scroll hvr-underline-from-center" href="#about">About</a>
                            </li>
                            <li>
                                <a class="scroll hvr-underline-from-center" href="#menu">Menu</a>
                            </li>
                            <li>
                                <a class="scroll hvr-underline-from-center" href="#team">Team</a>
                            </li>
                            <li>
                                <a class="scroll hvr-underline-from-center" href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a class="scroll hvr-underline-from-center" href="#contact">Contact</a>
                            </li>
                        </ul>
                        <ul class="list-right">
                            <li>
                                <span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
                                <a href="www.gmail.com">shamsulhudaroni@gmail.com</a>
                            </li>
                            <li>
                                <span class="fa fa-phone list-icon" aria-hidden="true"></span>
                                <p> 01680019107 </p>
                            </li>
                            <li>
                                <span class="fa fa-user" aria-hidden="true"></span>
                                <a href="login/adminlogin.php">Login</a>

                            </li>

                        </ul>
                    </div>


                    <div class="clearfix"> </div>
                </nav>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //menu -->
        <!-- banner -->
        <div class="container">
            <div class="banner-top">
                <div class="banner-info">
                    <h1>
                        <a href="index.html">
                            <img src="images/logo.png" class="img-responsive" alt="" />Spicy Bite</a>
                    </h1>
                    <h2>Tasty experience in every bite!</h2>

                    <div class="about-p text-center">
                        <span class="sub-title"></span>
                        <span class="fa fa-cutlery" aria-hidden="true"></span>
                        <span class="sub-title"></span>
                    </div>
                    <p>make your kinda meal
                    <p>

                </div>
            </div>

        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner -->
<!-- about -->
<div class="section w3ls-banner-btm-main" id="about">
    <div class="container">
        <div class="banner-btm">
            <div class="col-md-6 banner-btm-g1">
                <img src="images/about.jpg" class="img-responsive" alt="" />
            </div>
            <div class="col-md-6 banner-btm-g2">
                <h3 class="title-main">welcome to spicy bite </h3>
                <h4 class="sub-title">Feel the flavour, feel the aroma, feel the taste in every bite.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae nunc auctor, malesuada est eu, pellentesque nisi.
                    Nam in enim lacinia, hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt
                    neque. Aliquam suscipit nisi erat, non ultricies ex aliquet a.

                </p>
                <div class="find-about">
                    <a href="#" data-toggle="modal" data-target="#myModal">Find out more</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="about-grid">
    <div class="col-md-6 about-sub-grid">
        <div class="col-md-6 about-right about-right-flex">
            <div class="about-bottom-text">
                <h4 class="title1">our story </h4>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit Nam libero tempore cum soluta nobis est eligendi</p>
            </div>
            <div class="about-bottom-grid about-img1">
            </div>
        </div>
        <div class="col-md-6 about-right about-right-flex">
            <div class="about-bottom-grid about-img2">
            </div>
            <div class="about-bottom-text ab1">
                <h4 class="title1">delicious food </h4>
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit Nam libero tempore cum soluta nobis est eligendi</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-6 about-bottom-grid about-bg"></div>
    <div class="clearfix"></div>
</div>
<!-- //about -->
<!-- //testimonials -->
<div class="section">
    <div class="container">
        <h3 class="w3layouts-title">Taste the best !</h3>
        <div class="about-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g6.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g7.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g7.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g1.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g2.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g3.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g4.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/g5.jpg" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--menu -->
<div class="section main-menu" id="menu">
    <div class="container">
        <div class="main-menu-bg">
            <h3 class="w3layouts-title text-center">our menu</h3>
            <div class="menu-info">

            </div>
             Tab panes

              <?php
                while($all_info= mysqli_fetch_assoc($all_content)){
                ?>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="testi">
                    <div class="col-md-4 agileinfo-tab-content1">
                        <div class="menu-text-right1">
                            <div class="menu-title">
                                <h4> <?php echo $all_info['Itemname'];?> </h4>

                            </div>
                            <div class="menu-price">
                                <h4 class="price-clr">$ <?php echo $all_info['Itemprice'];?></h4>
                            </div>

                                <img src="<?php echo ($all_info['Image']) ;?>" alt="">

                            <div class="clearfix"></div>
                            <p> <?php echo $all_info['Description'];?></p>
                        </div>
                    </div>
                </div>
            </div>
                
                   <?php  } ?>

<!--menu-->
<div class="menu-agileits_w3layouts section">
    <div class="container">

<h3 class="w3layouts-title" align="center">
                <img src="images/menu1.png" class="img-responsive" alt="" />special dishes</h3>
             <ul id="myList">

                <li>
                    <?php
                    while($all_info= mysqli_fetch_assoc($special_content)){
                    ?>                    <div class="l_g">

                        <div class="l_g_r">

                            <div class="col-md-6 menu-grids">

                                <div class="w3l-menu-text">
                                    <div class="menu-text-left">
                                        <img src="Admin/<?php echo $all_info['Image']?> " alt="hello " class="img-responsive" />
                                    </div>
                                    <div class="menu-text-right">
                                        <div class="menu-title">
                                            <h4><?php echo $all_info['Itemname'];?> </h4>

                                        </div>
                                        <div class="menu-price">
                                            <h4 class="price-clr">$ <?php echo $all_info['Itemprice'];?></h4>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p> <?php echo $all_info['Description'];?>.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                 <?php  }  ?>
            </ul>

                </div>
</div>

<!--//menu-->
<div class="section">
    <div class="w3_agileits-subscribe timings text-center">
        <h4>opening times</h4>
        <div class="about-p  text-center">
            <span class="sub-title p1"></span>
            <span class="fa fa-cutlery" aria-hidden="true"></span>
            <span class="sub-title p1"></span>

        </div>
        <div class="time">
            <h5>Monday – Friday </h5>
            <p>9:00 AM – 11:00 PM</p>
            <h5>Saturday – Sunday </h5>
            <p>8:00 AM – 00:00 AM</p>
        </div>
    </div>
</div>
<!--reservation-->
<div class="reservation book-right">
    <div class="container">
        <h3 class="w3layouts-title title-reserve">Make a Reservation</h3>
        <!--<div class="book-info">
            -->
        <div class="book-left1"></div>
        <div class="book-right1">
            <form action="reservation_handler.php" method="post" class="book-right2">
                <div class="date-field">
                    <label>Date :</label>
                    <input type="text" id="datepicker" name="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"
                           required="">
                </div>
                <div class="form-left">
                    <label>No.of People :</label>
                    <select required="" name="personno" aria-required="true">
                        <option value="" name="personno">1 Person</option>
                        <option value="1" name="personno">2 </option>
                        <option value="2" name="personno">3 </option>
                        <option value="3" name="personno">4 </option>
                        <option value="4" name="personno"> 5</option>
                        <option value="5" name="personno">More</option>
                    </select>
                </div>
                <div class="form-right">
                    <label>Time :</label>
                    <select required="" name="time" aria-required="true">
                        <option value="">Select Time</option>
                        <option value="1" name="time">10:00</option>
                        <option value="2"name="time">11:00</option>
                        <option value="3" name="time">12:00</option>
                        <option value="4" name="time">13:00</option>
                        <option value="4" name="time">14:00</option>
                        <option value="4" name="time">15:00</option>
                        <option value="4" name="time">16:00</option>
                        <option value="4" name="time">17:00</option>
                        <option value="4" name="time">18:00</option>
                        <option value="4" name="time">19:00</option>
                        <option value="4" name="time">20:00</option>
                        <option value="4" name="time">21:00</option>
                        <option value="4" name="time">22:00</option>


                    </select>

                </div>
                <div class="clearfix"> </div>
                <div class="phone-info">
                    <label>Contact Info :</label>
                    <input type="text" placeholder="Phone Number" name="phoneno" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}"
                           required="">
                </div>
                <div class="clearfix"> </div>
                <div class="name-info">
                    <label>Item Name :</label>
                    <input type="text" placeholder="Item Name" name="itemname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"
                           required="">
                </div>

                <input type="submit" name="itembook" value="Book The Item">
            </form>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!--//reservation-->
<!--chef-->
<div class="section chef" id="team">

    <div class="container">
        <h3 class="w3layouts-title">our cook</h3>
        <div class="col-sm-4 col-xs-4 chef-left">
            <img src="images/t1.jpg" alt="" />
        </div>
        <div class="col-sm-8 col-xs-8 chef-right">
            <h4>Executive Chef </h4>
            <p>Aenean sed euismod sem ac iaculis metus. Vestibulum velit dolor pulvinar ut tempus sit amet, congue eget velit. Cras
                vestibulum interdum elit, vel elementum diam interdum id. Nulla pharetra lacus sed ac iaculis metus auctor sollicitudin.
                Donec molestie augue a eros auctor aliquam. In vitae posuere massa. </p>
        </div>
        <div class="clearfix"> </div>
        <div class="col-md-7 chef-bottom-left">
            <img src="images/t3.jpg" alt="" />
            <h4>Sous Chef</h4>
            <p>Aenean sed euismod sem ac iaculis metus. Vestibulum velit dolor pulvinar ut tempus sit amet, congue eget velit. Cras
                vestibulum interdum elit, vel elementum diam interdum id. Nulla pharetra lacus sed ac iaculis metus auctor sollicitudin.
                Donec molestie augue a eros auctor aliquam. In vitae posuere massa. </p>
        </div>
        <div class="col-md-5 chef-bottom-right">
            <div class="chef-grid-left">
                <img src="images/t2.jpg" alt="" />
            </div>
            <div class="chef-grid-right">
                <h4>Head Chef</h4>
                <p>Aenean sed euismod sem ac iaculis metus. Vestibulum velit dolor pulvinar ut tempus sit amet, congue eget velit. Cras
                    vestibulum interdum elit, vel elementum diam interdum id. Nulla pharetra lacus sed ac iaculis metus auctor sollicitudin.
                    Donec molestie augue a eros auctor aliquam. In vitae posuere massa. </p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //chef -->
<!-- slid -->
<div class="slid">
    <div class="slid-text">
        <h4>Fresh ingredient, tasty meals.</h4>
        <p>Proin tincidunt sodales faucibus. Curabitur ut metus sed urna dignissim sodales ac a tellus. Sed varius justo tellus,
            at convallis libero cursus non. In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce
            sed vulputate dui, non consectetur felis. Etiam id enim sem. Suspendisse commodo tempor magna </p>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //slid -->



<!--.testimonials-->
<div class="section carousel-reviews broun-block" id="testimonials">
    <div class="container">
        <h3 class="w3layouts-title text-center">Testimonials</h3>
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-md-4 col-sm-6 view-testi">
                            <div class="block-text rel zmin">
                                <h6>lorem ipsum</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/f.png" alt="" />
                                <h5>Anna</h5>
                                <i>from Glasgow, Scotland</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>Nam libero</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star-empty"></span>
											<span data-value="3" class="fa fa-star-empty"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/f.png" alt="" />
                                <h5>Ella Mentree</h5>
                                <i>United States</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>tempore cume</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star"></span>
											<span data-value="5" class="fa fa-star"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/m.png" alt="" />
                                <h5>Rannynm</h5>
                                <i>Indonesia</i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                            <div class="block-text rel zmin">
                                <h6>Nam libero</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/f.png" alt="" />
                                <h5>Anna</h5>
                                <i>from Glasgow, Scotland</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>tempore cum</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star-empty"></span>
											<span data-value="3" class="fa fa-star-empty"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/m.png" alt="" />
                                <h5>Ella Mentree</h5>
                                <i>United States</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>tempore cum</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star"></span>
											<span data-value="5" class="fa fa-star"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/m.png" alt="" />
                                <h5>Rannynm</h5>
                                <i>Indonesia</i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                            <div class="block-text rel zmin">
                                <h6>Nam libero</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/f.png" alt="" />
                                <h5>Anna</h5>
                                <i>from Glasgow, Scotland</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>tempore cum</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star-empty"></span>
											<span data-value="3" class="fa fa-star-empty"></span>
											<span data-value="4" class="fa fa-star-empty"></span>
											<span data-value="5" class="fa fa-star-empty"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/m.png" alt="" />
                                <h5>Ella Mentree</h5>
                                <i>United States</i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                            <div class="block-text rel zmin">
                                <h6>PNam libero</h6>
                                <div class="mark">My rating:
                                    <span class="rating-input">
											<span data-value="0" class="fa fa-star"></span>
											<span data-value="1" class="fa fa-star"></span>
											<span data-value="2" class="fa fa-star"></span>
											<span data-value="3" class="fa fa-star"></span>
											<span data-value="4" class="fa fa-star"></span>
											<span data-value="5" class="fa fa-star"></span>
										</span>
                                </div>
                                <p>Hendrerit neque non, placerat quam.Mauris eu tortor congue purus congue iaculis sit amet tincidunt neque. ...</p>

                            </div>
                            <div class="person-text rel">
                                <img src="images/f.png" alt="" />
                                <h5>Rannynm</h5>
                                <i>Indonesia</i>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- contact -->
<div class="contact-bottom" id="contact">
    <div class="col-md-6  map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.3847536130365!2d90.41586482916823!3d23.834986225760492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDUwJzA2LjAiTiA5MMKwMjQnNTkuMSJF!5e0!3m2!1sen!2sbd!4v1517149180215" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-md-6 contact-right">
        <h3 class="title-contact">get in touch</h3>
        <form action="mail_handler.php" method="post">
            <div class="contact-input">
                <input type="text" class="name" name="firstname" placeholder="First Name" required="">
            </div>
            <div class="contact-input">
                <input type="text" class="name" name="lastname" placeholder="Last Name" required="">
            </div>
            <div class="contact-input">
                <input type="email" class="name" name="email" placeholder="Email" required="">
            </div>
            <div class="contact-input">
                <input type="text" class="name" name="subject" placeholder="Subject" required="">
            </div>
            <div class="contact-input"> 
                <textarea placeholder="Your Message" name="message"></textarea>
            </div>
            <input type="submit" value="SEND MESSAGE" name="submit">
        </form>
    </div>
    <!--<div class="clearfix"></div> -->
</div>
<!-- //contact -->
<!--footer-->
<div class="footer-grid">
    <div class="container">
        <div class="footer_grid_bottom contact">
            <ul>

                <li>
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    <a href="mailto:info@example.com">shamsulhudaroni@gmail.com</a>
                </li>
                <li>
                    <span class="fa fa-phone" aria-hidden="true"></span>
                    <p>01680019107</p>
                </li>
                <li>
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                    <p>Dhaka,Bangladesh.</p>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer-cpy text-center">
    <div class="social_banner">
        <ul class="social_list">
            <li>
                <a href="#" class="facebook">
                    <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="#" class="twitter">
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="#" class="dribble">
                    <span class="fa fa-dribbble" aria-hidden="true"></span>
                </a>
            </li>
            <li>
                <a href="#" class="vimeo">
                    <span class="fa fa-vimeo" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
    </div>
    <div class="footer-copy">
        <p>© 2018 Spicy Bite. All rights reserved | Created by
            <a href="#">Shamsul Huda Roni</a>
        </p>
    </div>
</div>
<!--//footer-->



<!-- Tooltip -->
<div class="tooltip-content">
    <div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">
                        <img src="images/logo.png" class="img-responsive img1" alt="" />Spicy Bite</h3>
                </div>
                <div class="modal-body">
                    <img src="images/modal.jpg" class="img-responsive" alt="image">
                    <h4>Tasty experience in every bite!</h4>
                    <p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum
                        felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam
                        egestas et mi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Tooltip -->

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!--/js-->
<!-- //gallery -->
<script src="js/jquery.tools.min.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>

<script>
    $(document).ready(function () {
        $('.cm-overlay').cmOverlay();
    });
</script>
<!-- //gallery -->
<!--start-date-piker-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1").datepicker();
    });
</script>
<!-- /End-date-piker -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!--//end-smooth-scrolling-->
<!-- smooth-scrolling-of-move-up  -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>


<script src="js/SmoothScroll.min.js"></script>

<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x = 1;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function () {
            x = (x + 1 <= size_li) ? x + 1 : size_li;
            $('#myList li:lt(' + x + ')').show();
        });
        $('#showLess').click(function () {
            x = (x - 1 < 0) ? 1 : x - 1;
            $('#myList li').not(':lt(' + x + ')').hide();
        });
    });
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>


</body>

</html>