<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Checkout</title>
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
    <!-- checkout css -->
    <link href="{{URL::asset('/front/css/checkout.css')}}" type="text/css" rel="stylesheet" media="all">
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
                            <a class="navbar-brand" href="{{ url('/Home/home/index') }}">未来图书馆</a>
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
                                <a href="{{ url('/Home/home/index') }}">首页</a>
                            </li>
                            <li>
                                <a href="{{ url('/Home/home/about') }}">关于我们</a>
                            </li>
                            <li class="dropdown">
                                <a href="{{ url('/Home/home/shop') }}">图书目录</a>
                                <!-- <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">图书目录
                                    <b class="caret"></b>
                                </a> -->
                              <!--   <ul class="dropdown-menu">
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
                                </ul> -->
                            </li>
                            <li class="dropdown">
                                <a href="{{ url('/Home/home/footer') }}">活动专区</a>
                                <!-- <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">footers
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
                                </ul> -->
                            </li>
                            <li>
                                <a href="{{ url('/Home/home/contact') }}">联系我们</a>
                            </li>
                            <li>
                                @if(session('UserData') != "")
                                <a href="{{ url('/user/usershow') }}?id={{session('UserData')['u_id']}}" title="我的资料"><img src="{{URL::asset(session('UserData')['u_img'])}}" width="30" height="30"></a>
                                @else
                                    <a href="{{ url('/login/') }}" title="去登录"><span class="fa fa-user nav-icon" aria-hidden="true"></span></a>
                                @endif
                                    <!-- <img src="{{URL::asset(session('UserData')['u_img'])}}" width="30" height="30"> -->
                            </li>
                        </ul>
                        <!-- search-bar -->
                       <!--  <div class="search-bar-agileits">
                            <div class="cd-main-header">
                                <ul class="cd-header-buttons">
                                    <li>
                                        <a class="cd-search-trigger" href="#cd-search">
                                            <span></span>
                                        </a>
                                    </li>
                                </ul> -->
                                <!-- cd-header-buttons -->
                            <!-- </div>
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Type and Hit Enter...">
                                </form>
                            </div>
                        </div> -->
                        <!-- //search-bar ends here -->
                        <!-- shopping cart -->
                       <!--  <div class="cart-mainf">
                            <div class="chrcart chrcart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_chr_cart" type="submit" name="submit" value="">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div> -->
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
                        阅读的世界
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
                            <a href="shop.html">Product Catalogue</a>
                        </li>
                        <li class="btn btn3 btn3a">
                            <a href="single_product.html">Single product</a>
                        </li>
                        <li class="btn btn4">
                            <a href="checkout.html">Checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!--checkout-->
        <div class="innerf-pages section">
            <div class="container">
                <div class="privacy about">
                    <h4 class="rad-txt">
                        <span class="abtxt1">review</span>
                        <span class="abtext">your order</span>
                    </h4>

                    <div class="checkout-right">
                        <h4>Your shopping cart contains:
                            <span>3 Products</span>
                        </h4>
                        <table class="timetable_sub table-responsive">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Product Name</th>

                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="rem1">
                                    <td class="invert">1</td>
                                    <td class="invert-image">
                                        <a href="single_product.html">
                                            <img src="{{URL::asset('/front/images/lib8.jpg')}}" alt=" " class="img-responsive">
                                        </a>
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value">
                                                    <span>1</span>
                                                </div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">Be Creative</td>

                                    <td class="invert">$100.00</td>
                                    <td class="invert">
                                        <div class="rem">
                                            <div class="close1"> </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="rem2">
                                    <td class="invert">2</td>
                                    <td class="invert-image">
                                        <a href="single_product.html">
                                            <img src="{{URL::asset('/front/images/lib3.jpg')}}" alt=" " class="img-responsive">
                                        </a>
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value">
                                                    <span>1</span>
                                                </div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">Work From Home</td>

                                    <td class="invert">$80.00</td>
                                    <td class="invert">
                                        <div class="rem">
                                            <div class="close2"> </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="rem3">
                                    <td class="invert">3</td>
                                    <td class="invert-image">
                                        <a href="single_product.html">
                                            <img src="{{URL::asset('/front/images/lib6.jpg')}}" alt=" " class="img-responsive">
                                        </a>
                                    </td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value">
                                                    <span>1</span>
                                                </div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">E-Commerce</td>

                                    <td class="invert">$120.00</td>
                                    <td class="invert">
                                        <div class="rem">
                                            <div class="close3"> </div>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                            <h4>Continue to basket</h4>
                            <ul>
                                <li>Be Creative
                                    <i>-</i>
                                    <span>$100.00 </span>
                                </li>
                                <li>Work From Home
                                    <i>-</i>
                                    <span>$80.00 </span>
                                </li>
                                <li>E-Commerce
                                    <i>-</i>
                                    <span>$120.00 </span>
                                </li>
                                <li>Total Service Charges
                                    <i>-</i>
                                    <span>$55.00</span>
                                </li>
                                <li>Total
                                    <i>-</i>
                                    <span>$355.00</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 address_form">
                            <h4>Billing Address</h4>
                            <form action="payment.html" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                                <div class="creditly-wrapper wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Full name: </label>
                                                <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                            </div>
                                            <div class="card_number_grids">
                                                <div class="card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Mobile number:</label>
                                                        <input class="form-control" type="text" placeholder="Mobile number">
                                                    </div>
                                                </div>
                                                <div class="card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">Landmark: </label>
                                                        <input class="form-control" type="text" placeholder="Landmark">
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Town/City: </label>
                                                <input class="form-control" type="text" placeholder="Town/City">
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Address type: </label>
                                                <select class="form-control option-fieldf">
                                                    <option>Office</option>
                                                    <option>Home</option>
                                                    <option>Commercial</option>

                                                </select>
                                            </div>
                                        </div>
                                        <button class="submit check_out">place order</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="clearfix"> </div>

                    </div>

                </div>

            </div>
        </div>
        <!--//checkout-->
        <div class="footer-bottom section">
    <div class="container">
        <!-- newsletter -->
        <div class="subscribe-main section-w3layouts text-center">
            <h4 class="rad-txt">
                <span class="abtxt1">时刻保持</span>
                <span class="abtext">更新自己</span>
            </h4>
            <h5>订阅我们的通讯，以保持最新的项目。</h5>
            <div class="subscribe-form">
                <form action="#" method="post" class="subscribe_form">
                    <div class="email-news">
                        <input type="email" placeholder="邮箱" required="">
                    </div>
                    <div class="sub-news">
                        <input type="submit" value="订阅">
                    </div>
                </form>
                <div class="clearfix"> </div>
            </div>
            <p>我们尊重你的隐私。没有垃圾邮件!</p>
        </div>
        <!-- //newsletter ends here -->
        <!-- footer grids-->
        <div class="footer-cpy">
            <!-- footer-grid1 -->
            <div class="col-md-3 col-sm-6 footer-logo">
                <h3>
                    <a href="index.html">未来图书馆</a>
                </h3>
                <h4>关于我们</h4>
                <p>希望您加入我们,未来图书馆会给您创造奇迹</p>
            </div>
            <!-- //footer-grid1 -->
            <!-- footer-grid2 -->
            <div class="col-md-3 col-sm-6 footer-nav text-center">
                <h4>导航栏</h4>
                <ul>
                    <li>
                        <a href="index.html">首页</a>
                    </li>
                    <li>
                        <a href="about.html">关于我们</a>
                    </li>
                    <li>
                        <a href="shop.html">图书目录</a>
                    </li>
                    <li>
                        <a href="footer.html">图书活动</a>
                    </li>
                    <li>
                        <a href="contact.html">联系我们</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid2 -->
            <!-- footer-grid3 -->
            <div class="col-md-3 col-sm-6 blog-footer">
                <h4>最新的书籍</h4>
                <div class="blog1">
                    <div class="col-md-3 col-sm-3 col-xs-2 bl1">
                        <a href="#">
                            <img src="{{URL::asset('/front/images/b1.jpg')}}" alt="" class="img-responsive" />
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-10 bl2">
                        <a href="#">mysql高效编程</a>
                        <p>2018年2月15日</p>
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
                        <a href="#">哈弗心理学</a>
                        <p>2018年2月20日</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //footer-grid3 -->
            <!-- footer-grid4 -->
            <div class="col-md-3 col-sm-6 contact-foot text-right">
                <h4>联系我们</h4>
                <ul>
                    <li>
                        <span class="fa fa-home"></span>
                        中国传媒大学内
                        <br> 琳达.
                    </li>
                    <li>
                        <span class="fa fa-phone"></span>
                        +86 182 3576 1589
                    </li>
                    <li>
                        <span class="fa fa-envelope"></span>
                        <a href="mailto:info@example.com">2323881993@qq.com</a>
                    </li>
                </ul>
            </div>
            <!-- //footer-grid4 -->
            <div class="clearfix"></div>
        </div>
        <!-- //footer-grids -->
        <!-- footer social -->
        <div class="footer-social text-center">
            <h4>保持联系</h4>
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
    <p>版权： @ 2018年。最终版权归未来图书馆所有。</p>
</div>
    </div>
    <!-- //home -->

    <!-- Common js -->
    <script src="{{URL::asset('/front/js/jquery-2.2.3.min.js')}}"></script>
    <!--// Common js -->
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
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function () {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>
    <!--quantity-->
    <!-- FadeOut-Script -->
    <script>
        $(document).ready(function (c) {
            $('.close1').on('click', function (c) {
                $('.rem1').fadeOut('slow', function (c) {
                    $('.rem1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close2').on('click', function (c) {
                $('.rem2').fadeOut('slow', function (c) {
                    $('.rem2').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function (c) {
            $('.close3').on('click', function (c) {
                $('.rem3').fadeOut('slow', function (c) {
                    $('.rem3').remove();
                });
            });
        });
    </script>
    <!--// FadeOut-Script -->

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

    <!-- Scrolling Nav JavaScript -->
    <script src="{{URL::asset('/front/js/scrolling-nav.js')}}"></script>
    <!-- //fixed-scroll-nav-js -->
    <!--//scripts-->
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