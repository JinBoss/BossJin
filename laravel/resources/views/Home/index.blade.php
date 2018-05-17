<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
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
        <div class="banner-bg-agileits">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="container">
                    <p class="b-txt">the</p>
                    <h2 class="title">
                        图书馆
                    </h2>
                    <ul class="banner-txt">
                        <li>分享.</li>
                        <li> 探索. </li>
                        <li>扩大.</li>
                    </ul>     
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
                            <a href="{{ url('/Home/home/index') }}">首页</a>
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
                                        <a href="{{ url('/Home/home/index') }}">进入</a>
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
        <div class="about-bottom section" style="margin-left: 70px;">

            <div class="container-fluid">
                <h4 class="rad-txt">
                    <span class="abtxt1">All</span>
                    <span class="abtext">全部分类</span>
                    <span class="abtxt1">精彩的</span>
                    <span class="abtext">阅读的世界</span>
                </h4>
                <!-- about-bottom grid1 -->
                <div class="col-md-6 about-bottom-right">
                    <p class="abt-p">分类信息是WEB 2的衍生物，是新一代互联网应用模式，它让网络变得跟老百姓更普及更贴近生活方便生活。分类信息又称分类广告，我们日常在电视、报刊上所看到的广告，往往是不管你愿不愿意，它都会强加给你，我们称这类广告为被动广告；而人们主动去查询招聘、租房、旅游等方面的信息，对这些信息，我们称它为主动广告。在信息社会逐步发展的今天，被动广告越来越引起人们的反感，而主动广告却受到人们的广泛青睐。几乎每个地方的晚报、日报、生活娱乐报都少不了分类信息的身影，而且办得越好的报纸，分类信息的篇幅往往越大。
                    </p>
                @foreach($BookTypeData as $val)
                    <div class="col-md-6 col-sm-6 col-xs-6 services-w3ls">
                        <div class="ab1">
                            <div class="col-md-3 col-sm-3 col-xs-3 ab1-icon">
                                <span class="fa fa-book" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9 ab1-text">
                                <h5>{{$val['type_name']}}</h5>
                                <p>{{$val['type_desc']}}</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- <div class="ab1">
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
                         </div> -->
                    </div>
                @endforeach
                    <div class="clearfix"></div>
                </div>
                <!-- //about-bottom grid1 ends here -->

                <div class="col-md-6 home-about2" style=" width: 500px; height: 750px; float: left;">
                    <canvas id="canvas" width="650" height="750" >cccc</canvas>
                </div>

        <!--//about bottom ends here-->
        <!-- team -->
        <div id="team" class="team section">
                <h4 class="rad-txt" style="margin-top: 580px; margin-right: 200px;">
                    <span class="abtxt1">我们的</span>
                    <span class="abtext">团队</span>
                </h4>
            <div class="team-container">
            
                <div class="team-row">
                    <!-- team grid1 -->
                    <div class="col-md-5 team-grid-left">
                        <!-- team individual grid -->
                        <!--foreach循环展示数据-->
                        @foreach($AllData['UserDataOne'] as $val)
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids" style="float: left;">
                            <div class="team-effect">
                                <img src="{{URL::asset($val['team_u_img'])}}" alt="img" class="img-responsive" style="width: 400px;height: 196px;">
                               <!--  <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> -->
                            </div>
                            <div class="team-text">
                                <h4>{{$val['team_u_name']}}</h4>
                                <span>{{$val['team_u_position']}}</span>
                                <p>{{$val['team_u_desc']}}</p>
                            </div>
                        </div>
                         @endforeach
                        <!-- team individual grid -->
                        @foreach($AllData['UserDataTwo'] as $val)
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>{{$val['team_u_name']}}</h4>
                                <span>{{$val['team_u_position']}}</span>
                                <p>{{$val['team_u_desc']}}</p>
                            </div>
                            <div class="team-effect">
                                <img src="{{URL::asset($val['team_u_img'])}}" alt="img" class="img-responsive"  style="width: 400px;height: 208px;">
                                <!-- <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> -->
                            </div>
                            <!-- //team individual grid -->
                        </div>
                        @endforeach
                    </div>
                    <!-- //team-grid1 ends here-->
                    <!--team-grid2 -->
                    <div class="col-md-2 col-sm-2 team-mid-txt text-center">
                        <span>our</span>
                        <h5>t</h5>
                        <h5>e</h5>
                        <h5>a</h5>
                        <h5>m</h5>
                    </div>
                    <!--//team-grid2 ends here-->
                    <!-- team grid3 -->
                    <!-- team individual grid -->
                    <div class="col-md-5 team-grid-right">
                       <!--foreach循环展示数据-->
                        @foreach($AllData['UserDataThree'] as $val)
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-text">
                                <h4>{{$val['team_u_name']}}</h4>
                                <span>{{$val['team_u_position']}}</span>
                                <p>{{$val['team_u_desc']}}</p>
                            </div>
                            <div class="team-effect">
                                <img src="{{URL::asset($val['team_u_img'])}}" alt="img" class="img-responsive" style="width: 400px;height: 196px;">
                               <!--  <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                         @endforeach
                        <!-- //team individual grid -->
                        <!-- team individual grid -->
                        @foreach($AllData['UserDataFour'] as $val)
                        <div class="col-md-6 col-sm-6 col-xs-6 team-grids">
                            <div class="team-effect">
                                <img src="{{URL::asset($val['team_u_img'])}}" alt="img" class="img-responsive" style="width: 400px;height: 208px;">
                               <!--  <div class="social-icon">
                                    <a href="#" class="social-button twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-button facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-button google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div> -->
                            </div>
                            <div class="team-text">
                                <h4>{{$val['team_u_name']}}</h4>
                                <span>{{$val['team_u_position']}}</span>
                                <p>{{$val['team_u_desc']}}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- //team individual grid -->
                        <div class="clearfix"> </div>
                    </div>
                    <!-- //team grid3 -->
                    <div class="clearfix"> </div>
                </div>

                <!-- //team-row ends here -->
            </div>
           
            <!-- // team container ends here -->
        </div>
        <!-- //team -->
        <!--testimonials -->
       <!--  <div class="reviews section" id="testimonials">
            <div class="container">
                <h4 class="rad-txt">
                    <span class="abtxt1">visitors</span>
                    <span class="abtext">testimonials</span>
                </h4>
                <div id="Carousel" class="slide carousel">
                     //Carousel items 
                    <div class="carousel-inner">
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
                                            <img class="img-responsive" src="{{URL::asset('/front/css/bootstrap.css')}}images/c2.jpg" alt="">
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
                       <!--  </div> -->
                        <!--.item-->
                      <!--   <div class="item">
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
                     <!--    </div>
                    </div> -->
                    <!--.carousel-inner-->
                   <!--  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a> -->
                <!-- </div> -->
                <!--.Carousel-->
               <!--  <div class="clearfix"> </div>
            </div>
        </div>  -->
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
    <!-- about bottom grid Numscroller -->
    <script src="{{URL::asset('/front/js/numscroller-1.0.js')}}"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('/front/js/bootstrap.js')}}"></script>
    <script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

ctx.strokeStyle = '#00ffff';
ctx.lineWidth = 17;
ctx.shadowBlur = 15;
ctx.shadowColor = '#00ffff'

function degToRad(degree) {
    var factor = Math.PI / 180;
    return degree * factor;
}

function renderTime() {
    var now = new Date();
    var today = now.toDateString();
    var time = now.toLocaleTimeString();
    var hrs = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();
    var mil = now.getMilliseconds();
    var smoothsec = sec + (mil / 1000);
    var smoothmin = min + (smoothsec / 60);

    //Background
    gradient = ctx.createRadialGradient(250, 250, 5, 250, 250, 300);
    gradient.addColorStop(0, "#03303a");
    gradient.addColorStop(1, "black");
    ctx.fillStyle = gradient;
    //ctx.fillStyle = 'rgba(00 ,00 , 00, 1)';
    ctx.fillRect(0, 0, 500, 500);
    //Hours
    ctx.beginPath();
    ctx.arc(250, 250, 200, degToRad(270), degToRad((hrs * 30) - 90));
    ctx.stroke();
    //Minutes
    ctx.beginPath();
    ctx.arc(250, 250, 170, degToRad(270), degToRad((smoothmin * 6) - 90));
    ctx.stroke();
    //Seconds
    ctx.beginPath();
    ctx.arc(250, 250, 140, degToRad(270), degToRad((smoothsec * 6) - 90));
    ctx.stroke();
    //Date
    ctx.font = "25px Helvetica";
    ctx.fillStyle = 'rgba(00, 255, 255, 1)'
    ctx.fillText(today, 175, 250);
    //Time
    ctx.font = "25px Helvetica Bold";
    ctx.fillStyle = 'rgba(00, 255, 255, 1)';
    ctx.fillText(time + ":" + mil, 175, 280);

}
setInterval(renderTime, 40);
</script>
</body>

</html>