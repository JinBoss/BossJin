<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{URL::asset('/front/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="{{URL::asset('/front/css/shop.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{URL::asset('/front/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{URL::asset('/front/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <!-- logo -->
    <link href="http://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- titles -->
    <link href="http://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <!-- body -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <!-- header -->
        <!-- navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="main-nav">
                <div class="container">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Chronicle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="index.html">Chronicle</a>
                        </h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
                        <ul class="nav navbar-nav navbar-left cl-effect-15">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden">
                                <a class="page-scroll" href="#page-top"></a>
                            </li>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">about us</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">shop
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="shop.html">product catalog</a>
                                    </li>
                                    <li>
                                        <a href="single_product.html">single product</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html">checkout</a>
                                    </li>
									<li>
                                        <a href="payment.html">Payment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">footers
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="footer.html">Default</a>
                                    </li>
                                    <li>
                                        <a href="footer1.html">variant1</a>
                                    </li>
                                    <li>
                                        <a href="footer2.html">variant2</a>
                                    </li>
                                    <li>
                                        <a href="footer3.html">variant3</a>
                                    </li>
                                    <li>
                                        <a href="footer4.html">variant4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact us</a>
                            </li>
                            <li>
                                <a href="login.html" title="SignIn & SignUp">
                                    <span class="fa fa-user nav-icon" aria-hidden="true"></span>
                                </a>
                            </li>

                        </ul>
                        <!-- search-bar -->
                        <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div>
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                        <div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_chr_cart" type="submit" name="submit" value="">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //shopping cart ends here -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.container -->
            </div>
        </nav>
        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                        world of reading
                    </h2>

                </div>
            </div>
            <!-- //banner-text -->
        </div>
        <!-- //banner -->
        <!-- breadcrumbs -->
        <div class="crumbs text-center">
            <div class="container">
                <div class="row">
                    <ul class="btn-group btn-breadcrumb bc-list">
                        <li class="btn btn1">
                            <a href="index.html">
                                <i class="glyphicon glyphicon-home"></i>
                            </a>
                        </li>
                        <li class="btn btn2">
                            <a href="contact.html">contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- contact -->
        <div class="section contact" id="contact">
            <div class="container">
                <h4 class="rad-txt text-center">
                    <span class="abtxt1">contact</span>
                    <span class="abtext">us</span>
                </h4>
                <div class="contact-form">
                    <div class="col-md-7">
                        <!-- contact form grid -->
                        <div class="contact-top1">
                            <h5>send us a note</h5>
                            <form action="#" class="form_w3layouts" method="post">
                                <input type="text" placeholder="First Name" required="">
                                <input type="text" placeholder="Last Name" required="">

                                <input class="email" type="email" placeholder="Email" required="">
                                <textarea placeholder="Message" required=""></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <!--  //contact form grid ends here -->
                    </div>
                    <!-- contact map grid -->
                    <div class="col-md-5 map contact-right">
                        <div class="contact-top1">
                            <h5>get directions</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <!--//contact map grid ends here-->
                    <div class="clearfix"></div>
                </div>
                <!-- contact details -->
                <div class="contact-bottom">
                    <h6>contact info</h6>
                    <!-- contact details left -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-left">
                            <div class="address">
                                <h5>Address:</h5>
                                <p>
                                    1185 Maria St
                                    <br> Burlington Canada.</p>
                            </div>
                            <div class="address address-mdl">
                                <h5>phone:</h5>
                                <p>
                                    +1 234 5678</p>
                                <p>
                                    +11 222 333</p>
                            </div>
                        </div>
                    </div>
                    <!-- //contact details left -->
                    <!-- contact details right -->
                    <div class="col-md-6 col-sm-6">
                        <div class="contact-right">
                            <div class="address">
                                <h5>Email:</h5>
                                <p>
                                    <a href="mailto:info@example.com">mail@library.com</a>
                                </p>
                                <p>
                                    <a href="mailto:info@example.com">mail@chronicle.com</a>
                                </p>
                            </div>
                            <div class="footer-social address  address-mdl">
                                <h5>let's get social</h5>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook icon_facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter icon_twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble icon_dribbble"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus icon_g_plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //contact-details right -->
                    <div class="clearfix"></div>
                </div>
                <!-- //contact details ends here -->
            </div>
        </div>
        <!-- //contact -->
   <!-- footer -->
   <div class="footer-bottom section">
    <div class="container">
        <!-- newsletter -->
        <div class="subscribe-main section-w3layouts text-center">
            <h4 class="rad-txt">
                <span class="abtxt1">keep yourself</span>
                <span class="abtext">updated</span>
            </h4>
            <h5>subscribe to our newsletter to stay up-to-date with our projects.</h5>
            <div class="subscribe-form">
                <form action="#" method="post" class="subscribe_form">
                    <div class="email-news">
                        <input type="email" placeholder="Email" required="">
                    </div>
                    <div class="sub-news">
                        <input type="submit" value="subscribe">
                    </div>
                </form>
                <div class="clearfix"> </div>
            </div>
            <p>We respect your privacy.No spam ever!</p>
        </div>
        <!-- //newsletter ends here -->
        <!-- footer grids-->
        <div class="footer-cpy">
            <!-- footer-grid1 -->
            <div class="col-md-3 col-sm-6 footer-logo">
                <h3>
                    <a href="index.html">Chronicle</a>
                </h3>
                <h4>about us</h4>
                <p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
            </div>
            <!-- //footer-grid1 -->
            <!-- footer-grid2 -->
            <div class="col-md-3 col-sm-6 footer-nav text-center">
                <h4>navigation</h4>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About us</a>
                    </li>
                    <li>
                        <a href="shop.html">shop</a>
                    </li>
                    <li>
                        <a href="contact.html">contact us</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid2 -->
            <!-- footer-grid3 -->
            <div class="col-md-3 col-sm-6 blog-footer">
                <h4>latest from blog</h4>
                <div class="blog1">
                    <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                        <a href="#">
                            <img src="{{URL::asset('/front/images/b1.jpg')}}" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                        <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                        <p>February 15, 2018</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="blog1">
                    <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                        <a href="#">
                            <img src="{{URL::asset('/front/images/b2.jpg')}}" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                        <a href="#">Dapibus Suscipit Ante Sit by instagram</a>
                        <p>February 20, 2018</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //footer-grid3 -->
            <!-- footer-grid4 -->
            <div class="col-md-3 col-sm-6 contact-foot text-right">
                <h4>contact us</h4>
                <ul>
                    <li>
                        <span class="fa fa-home"></span>
                        1185 Burlington
                        <br> Canada.
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        +12 345 678
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <a href="mailto:info@example.com">mail@chronicle.com</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid4 -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer-grids -->
        <!-- footer social -->
        <div class="footer-social text-center">
            <h4>stay connected</h4>
            <ul>
                <li>
                    <a href="#">
                        <span class="fa fa-facebook icon_facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-twitter icon_twitter"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-dribbble icon_dribbble"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-google-plus icon_g_plus"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- //footer social -->
    </div>
    <!-- //footer container -->
</div>
<!-- //footer -->
<div class="cpy-right">
    <p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
</div>
</div>
<!-- //home -->
    <!-- js -->
    <script src="{{URL::asset('/front/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!--search jQuery-->
    <script src="{{URL::asset('/front/js/main.js')}}"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="{{URL::asset('/front/js/minicart.js')}}"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- Scrolling Nav JavaScript -->
    <script src="{{URL::asset('/front/js/scrolling-nav.js')}}"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="{{URL::asset('/front/js/move-top.js')}}"></script>
    <script src="{{URL::asset('/front/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
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
    <script src="{{URL::asset('/front/js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('/front/js/bootstrap.js')}}"></script>
</body>

</html>