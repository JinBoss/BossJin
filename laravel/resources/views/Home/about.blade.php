<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>About</title>
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
    <!-- gallery desoslide -->
    <link rel="stylesheet" href="{{URL::asset('/front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/front/css/jquery.desoslide.css')}}">
    <!-- gallery desoslide -->
    <link href="{{URL::asset('/front/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{URL::asset('/front/css/font-awesome.css')}}" rel="stylesheet">
    <!-- font-awesome icons -->
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
        </nav>        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-inner">
            <!-- banner-text -->
            <div class="banner-text-inner">
                <div class="container">
                    <h2 class="title-inner">
                        信任  始于了解 
                    </h2>
                    <h3 style="color: red">About As</h3>
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
                            <a href="{{ url('/Home/home/about') }}">关于我们</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//breadcrumbs ends here-->
        <!-- about -->
        <div class="about-sec section" id="about">
            <div class="container">
                <!-- about-left-grid -->
                <div class="col-md-7 about-left-grid">
                    @foreach($LibraryData['LibraryData'] as $key => $val)
                        <div class="inner-about2">
                            <h4>{{$val['library_name']}}</h4>
                            <p>{{$val['library_desc']}}</p>
                            <h5>相关标签</h5>
                            <ul class="about-list">
                            @foreach($LibraryData['LableData'] as $key => $val)
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>{{$val['lable_name']}}</li>
                            @endforeach
                              <!--   <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>ebooks</li>
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>Manuscripts</li>
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>scientific and Technical Information</li>
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>Comic Books</li>
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>Cartography</li>
                                <li>
                                    <i class="fa fa-play-circle-o" aria-hidden="true"></i>Journals</li>
 -->
                            </ul>
                            <a href="{{ url('/Home/home/about') }}">进入图书馆</a>
                        </div>
                    @endforeach
                    <!-- about left bottom - services -->
                    <div class="principles-grids principles-grids1">
                        <div class="abt-btm agileits w3layouts aos-init aos-animate">
                            <div class="col-md-6 col-sm-6 agileits elite-services1 w3layouts bottom-gds" data-aos="fade-up">
                                <div class="bott-img agileits w3layouts">
                                    <div class="icon-holder agileits w3layouts">
                                        <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                    </div>
                                    <h4 class="mission agileits w3layouts">{{$LibraryData['LibraryData'][0]['library_name']}}</h4>
                                    <div class="description agileits w3layouts">
                                        <a href="{{ url('/Home/home/about') }}">进入</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 agileits elite-services2 w3layouts bottom-gds" data-aos="fade-down">
                                <div class="bott-img bott-img1 agileits w3layouts">
                                    <div class="icon-holder agileits w3layouts">
                                        <span class="fa fa-book agileits w3layouts service-icon" aria-hidden="true"></span>
                                    </div>
                                    <h4 class="mission agileits w3layouts">全部书籍</h4>
                                    <div class="description agileits w3layouts">
                                        <a href="{{ url('/Home/home/shop') }}">进入</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- //about left bottom - services ends here -->
                </div>
                <!-- //about-left-grid ends here-->
                <!-- about-right-grid -->
                <div class="col-md-5 about-right-grid"></div>
                <!-- //about-right-grid ends here -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //about ends here -->
        <!-- about bottom -->
      <div class="about-bottom section" style="margin-left: 85px;">
            <div class="container-fluid">
                <h4 class="rad-txt">
                    <span class="abtxt1">关于我们</span>
                    <span class="abtext">服务理念</span>
                </h4>
                 <!-- about-bottom grid1 -->
                <div class="col-md-6 about-bottom-right">
                <img src="http://2017.xinaoyun.com/template/default/_themes/2017/images/about_07.png" alt="">
                   <!--  <p class="abt-p">Etiam massa quam, efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus suscipit ante,
                        sit efficitur eu ante vestibulum, convallis molestie arcu. Morbi dapibus suscipit an amet pulvinar
                        risus.
                    </p>
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>e-books</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>magazines</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>Fiction</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>audio books</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls service2">
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>Journals</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>e-library</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>magazines</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>Comic Books</h5>
                                <p>loremipsum is a dummy text</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
                <!-- //about-bottom grid1 ends here -->
                <!-- <div class="col-md-6 home-about2"> -->
                <!-- about-bottom grid2 -->
                <!-- <div class="col-md-6 col-sm-6 col-xs-6 bg-right"></div> -->
                <!-- //about-bottom grid2 ends here -->
                <!-- about-bottom grid3 -->
               <!--  <div class="col-md-6 col-sm-6 col-xs-6 w3ls-section  stats">
                    <div class="stats-aboutinfo services-main">
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>volumes</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='221073' data-delay='.5' data-increment="300">221073</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-university" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>branches</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='780' data-delay='.5' data-increment="50">980</div>

                            </div>
                            <div class="clearfix"></div>


                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>e-books</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9800' data-delay='.5' data-increment="50">9800</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="agileits_w3layouts-stats-grids text-center">
                            <div class="stats-icon">
                                <span class="fa fa-users" aria-hidden="true"></span>
                            </div>
                            <div class="stats-right">
                                <h6>visitors</h6>
                                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='123623' data-delay='.5' data-increment="300">123623</div>

                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div> -->
                <div class="clearfix"></div>
               </div>
                <!-- //about-bottom grid3 ends here -->
                <!-- //Numscroller -->
                <div class="clearfix"></div>
            </div>
            <!-- //about container ends here-->
        </div>
        <!--//about bottom ends here-->
        <!-- team -->
       <!--  <div id="team" class="team section">
            <div class="team-container">
                <div class="team-row">
                    team grid1 -->
                    <!-- <div class="col-md-5 team-grid-left"> -->
                        <!-- team individual grid -->
                      <!--   <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-effect">
                                <img src="{{URL::asset('/front/images/t3.jpg')}}" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>John Smith</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>

                            </div>
                        </div> -->
                        <!-- //team individual grid -->
                        <!-- team individual grid -->
                        <!-- <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>Thomson Doe</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                            <div class="team-effect">
                                <img src="{{URL::asset('/front/images/t1.jpg')}}" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div> -->
                            <!-- //team individual grid -->
                  <!--       </div>
                    </div> -->
                    <!-- //team-grid1 ends here-->
                    <!--team-grid2 -->
                <!--     <div class="col-md-2 col-sm-2 team-mid-txt text-center">
                        <span>our</span>
                        <h5>t</h5>
                        <h5>e</h5>
                        <h5>a</h5>
                        <h5>m</h5>
                    </div> -->
                    <!--//team-grid2 ends here-->
                    <!-- team grid3 -->
                    <!-- team individual grid -->
                    <!-- <div class="col-md-5 team-grid-right">
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>Smith Kevin</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                            <div class="team-effect">
                                <img src="{{URL::asset('/front/images/t2.jpg')}}" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- //team individual grid -->
                        <!-- team individual grid -->
                  <!--       <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-effect">
                                <img src="{{URL::asset('/front/images/t4.jpg')}}" alt="img" class="img-responsive">
                                <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4>Laura Hill</h4>
                                <span>Designation</span>
                                <p>vallis molestie arcu morbi dapibus suscipit ante sit efficitur eu ante vesti.</p>
                            </div>
                        </div>  -->
                        <!-- //team individual grid -->
                        <!-- <div class="clearfix"> </div> -->
                    <!-- </div> -->
                    <!-- //team grid3 -->
                    <!-- <div class="clearfix"> </div> -->
                <!-- </div> -->
                <!-- //team-row ends here -->
            <!-- </div> -->
            <!-- // team container ends here -->
        <!-- </div> -->
        <!-- //team -->
        <!-- gallery -->
        <div id="section_demo" class="section">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">未来图书馆</span>
                    <span class="abtext">风景线</span>
                </h4>
                <div class="row">
                    <!-- Result 1 -->
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                        
                            <div id="slideshow_1_thumbs_1" class="col-lg-2 col-md-2">
                                <ul class="slideshow1_thumbs desoslide-thumbs-vertical list-inline text-center">
                                @foreach($LibraryImgData['LibraryDataOne'] as $val)
                                    <li>
                                        <a href="images/l3.jpg">
                                            <img src="{{URL::asset($val['library_img_img'])}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                @endforeach
                                    <!-- <li>
                                        <a href="images/l2.jpg">
                                            <img src="{{URL::asset('/front/images/lt2.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/l5.jpg">
                                            <img src="{{URL::asset('/front/images/lt5.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/l4.jpg">
                                            <img src="{{URL::asset('/front/images/lt4.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                            
                            <div id="slideshow1" class="col-lg-8 col-md-8"></div>
                            
                            <div id="slideshow_1_thumbs_2" class="col-lg-2 col-md-2">
                                <ul class="slideshow1_thumbs desoslide-thumbs-vertical list-inline">
                                @foreach($LibraryImgData['LibraryDataTwo'] as $val)
                                    <li>
                                        <a href="">
                                            <img src="{{URL::asset($val['library_img_img'])}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                @endforeach
                                   <!--  <li>
                                        <a href="images/l6.jpg">
                                            <img src="{{URL::asset('/front/images/lt6.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/l7.jpg">
                                            <img src="{{URL::asset('/front/images/lt7.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="images/l8.jpg">
                                            <img src="{{URL::asset('/front/images/lt8.jpg')}}" alt="chronicle_image"  data-desoslide-caption-title="Library Gallery" class="img-responsive">
                                        </a>
                                    </li> -->
                                </ul>
                            </div> 
                            
                        </div>
                    </div>
                </div>
                <br />
                <br />
            </div>
        </div>
        <!-- //gallery -->
        <!--testimonials -->
        <!-- <div class="reviews section" id="testimonials">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">visitors</span>
                    <span class="abtext">testimonials</span>
                </h4>
                <div id="Carousel" class="slide carousel"> -->
                    <!-- Carousel items -->
                   <!--  <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3  img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c3.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c2.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c4.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--.row-->
                        <!-- </div> -->
                        <!--.item-->
                        <!-- <div class="item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c3.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c2.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids">
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c4.jpg')}}" alt="">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-responsive" src="{{URL::asset('/front/images/c1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 team-w3ls-txt">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Clifford</h5>
                                        </div>

                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--.row-->
                        <!-- </div> -->
                    <!-- </div> -->
                    <!--.carousel-inner-->
                <!--     <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div> -->
                <!--.Carousel-->
             <!--    <div class="clearfix"> </div>
            </div>
        </div> -->
        <!-- //testimonials-->
        <!-- footer-layouts -->
       <!--  <div class="addon-sec section">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">footer</span>
                    <span class="abtext">layouts</span>
                </h4>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer1.html">
                        <img src="{{URL::asset('/front/images/f1.png')}}" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer2.html">
                        <img src="{{URL::asset('/front/images/f2.png')}}" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer3.html">
                        <img src="{{URL::asset('/front/images/f3.png')}}" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3 fimg1">
                    <a href="footer4.html">
                        <img src="{{URL::asset('/front/images/f4.png')}}" class="img-responsive" alt="chronicle-image">
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div> -->
        <!-- //footer-layouts -->
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
                        <a href="{{ url('/Home/home/index') }}">首页</a>
                    </li>
                    <li>
                        <a href="{{ url('/Home/home/about') }}">关于我们</a>
                    </li>
                    <li>
                        <a href="{{ url('/Home/home/shop') }}">图书目录</a>
                    </li>
                    <li>
                        <a href="{{ url('/Home/home/footer') }}">图书活动</a>
                    </li>
                    <li>
                        <a href="{{ url('/Home/home/contact') }}">联系我们</a>
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
        <!-- <div class="footer-social text-center">
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
        </div> -->
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
    <script src="{URL::asset('/front/js/main.js')}}"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="{URL::asset('/front/js/minicart.js')}}"></script>
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
    <!-- gallery desoslide -->
    <script src="{URL::asset('/front/js/jquery.desoslide.min.js')}}"></script>
    <script src="{URL::asset('/front/js/demo.js')}}"></script>
    <!-- gallery desoslide -->
    <!-- Scrolling Nav JavaScript -->
    <script src="{URL::asset('/front/js/scrolling-nav.js')}}"></script>
    <!-- //fixed-scroll-nav-js -->
    <!-- start-smooth-scrolling -->
    <script src="{URL::asset('/front/js/move-top.js')}}"></script>
    <script src="{URL::asset('/front/js/easing.js')}}"></script>
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
    <script src="{URL::asset('/front/js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="{URL::asset('/front/js/numscroller-1.0.js')}}"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{URL::asset('/front/js/bootstrap.js')}}"></script>
</body>

</html>