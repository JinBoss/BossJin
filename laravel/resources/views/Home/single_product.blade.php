<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Single Product</title>
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
	<!-- flexslider-css -->
	<link rel="stylesheet" href="{{URL::asset('/front/css/flexslider.css')}}" type="text/css" media="screen" />
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
							<a href="{{ url('/Home/home/shop') }}">图书目录</a>
						</li>
						<li class="btn btn3">
							<a href="{{ url('/Home/home/BorrowBooks') }}">借书详情</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Single -->
		<!--foreach循环展示数据-->
		@foreach($BookData['BookData'] as $key => $val)
		<div class="innerf-pages section">
			<div class="container">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image">
										<img src="{{URL::asset($val['b_img'])}}" data-imagezoom="true" alt=" " class="img-responsive" alt="">
										<!-- <img src="{{URL::asset('/front/images/lib8.jpg')}}" data-imagezoom="true" alt=" " class="img-responsive"> -->
									</div> 
								</li>
							<!-- 	<li data-thumb="images/s2.jpg">
									<div class="thumb-image">
										<img src="{{URL::asset('/front/images/s2.jpg')}}" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li>
								<li data-thumb="images/s3.png">
									<div class="thumb-image">
										<img src="{{URL::asset('/front/images/s3.png')}}" data-imagezoom="true" alt=" " class="img-responsive"> </div>
								</li> -->
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
			
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3>{{$val['b_name']}}
						
					</h3>
					<p>
						作者：<a href="#">{{$val['b_auther']}}</a>
					</p>
					<span>精装书 – {{ date("Y-m-d",$val['adtime'])}}</span>
					<div class="caption">

						<ul class="rating-single">星级：
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
						<h6>最新、最热or最全：
							<!-- if判断是否最新 -->
							@if($val['is_hot'] == '1' AND $val['is_new'] == '1' )
								<p>最热+最新</p>
							@elseif($val['is_hot'] == '1')
								<p>最热</p>
							@elseif($val['is_new'] == '1')
								<p>最新</p>
							@else
								<p>最全</p>
							@endif 
						</h6>
					</div>
					<div class="desc_single">
						<h5>内容简介</h5>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;{{$val['b_desc']}}</p>
					</div>
					<div class="occasional">
						<h5>图书相关</h5>
						<ul class="single_specific">
							<li>
								<span>语言 :</span> 英语</li>
							<li>
								<span>格式 :</span> 精装的</li>
							<li>
								<span>出版社 :</span> 中国人民出版社</li>
							<li>
								<span>出版时间 :</span>{{ date("Y-m-d",$val['adtime'])}}</li>
							<li>
								<span>总页数 :</span> 765页</li>
						</ul>

					</div>
					<!-- <div class="color-quality">
						<div class="color-quality-right">
							<h5>Also Formats avaiable in:</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">paper back &nbsp;$90.00</option>
								<option value="null">Audio Book &nbsp;$200.00</option>
							</select>
						</div>
					</div> -->
					<!-- <div class="clearfix"></div> -->
					<!-- <div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						<form action="#" method="post">
							<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
							    required="">
							<input type="submit" value="Check">
						</form>
					</div> -->
					<div class="occasion-cart">
						<div class="chr single-item single_page_b">
							<form action="{{ url('/Home/home/UserBorrowBooks') }}" method="post">
							{{csrf_field()}} 
								<!-- <input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="chr_item" value="Single book">
								<input type="hidden" name="amount" value="100.00">
								<button type="submit" class="chr-cart pchr-cart">
									<i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								<a href="#" data-toggle="modal" data-target="#myModal1"></a> -->
								<button type="submit" class="chr-cart pchr-cart">借书</button>
								<input type="hidden" name="b_id" value="{{$val['b_id']}}">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		@endforeach
		<!-- /new_arrivals -->
		<div class="section singlep_btm">
			<div class="container">
				<div class="new_arrivals">
					<h4 class="rad-txt">
						<span class="abtxt1">推荐</span>
						<span class="abtext"> 借阅</span>
					</h4>
					@foreach($BookHotData['BookData'] as $key => $val)
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.html">
											<img src="{{URL::asset($val['b_img'])}}" width="300" height="300" alt="">
										</a>
									</div>
									<div class="caption">
										<h4>{{$val['b_name']}}</h4>
										<p>{{$val['b_auther']}}</p>
										<div class="matrlf-mid">
											<ul class="rating">
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star yellow-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="fa fa-star gray-star" aria-hidden="true"></span>
													</a>
												</li>
											</ul>
											<ul class="price-list">
											<!-- if判断是否最新 -->
											@if($val['is_hot'] == '1' AND $val['is_new'] == '1' )
												<p>最热+最新</p>
											@elseif($val['is_hot'] == '1')
												<p>最热</p>
											@elseif($val['is_new'] == '1')
												<p>最新</p>
											@else
												<p>请查看</p>
											@endif 
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="{{ url('/Home/home/BorrowBooks') }}" method="post">
										{{csrf_field()}} 
											<!-- <input type="hidden" name="cmd" value="_cart"> -->
											<!-- <input type="hidden" name="add" value="1"> -->
											<!-- <input type="hidden" name="chr_item" value="Book1"> -->
											<!-- <input type="hidden" name="amount" value="100.00"> -->
											<button type="submit" class="chr-cart pchr-cart">去借书
											<!-- <button type="submit">去借书</button> -->
												<!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> -->
											</button>
											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
											<input type="hidden" name="b_id" value="{{$val['b_id']}}">
										</form>
									</div>
								</div>
							</div>
							@endforeach
					<!-- row3 -->
					<!-- <div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="{{URL::asset('/front/images/lib7.jpg')}}" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>Marketing</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 180.00</li>
										<li>
											$220.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book1">
									<input type="hidden" name="amount" value="180.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div> -->
					<!-- <div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="{{URL::asset('/front/images/lib1.jpg')}}" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>online business</h4>
								<p>Scott Harris</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 330.00</li>
										<li>
											$560.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book2">
									<input type="hidden" name="amount" value="330.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="{{URL::asset('/front/images/lib2.jpg')}}" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>kids</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star gray-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 280.00</li>
										<li>
											$500.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book3">
									<input type="hidden" name="amount" value="280.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-men">
						<div class="product-chr-info chr">
							<div class="thumbnail">
								<a href="single_product.html">
									<img src="{{URL::asset('/front/images/lib3.jpg')}}" alt="">
								</a>
							</div>
							<div class="caption">
								<h4>work from home</h4>
								<p>Cordebard</p>
								<div class="matrlf-mid">
									<ul class="rating">
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="fa fa-star yellow-star" aria-hidden="true"></span>
											</a>
										</li>
									</ul>
									<ul class="price-list">
										<li>$ 140.00</li>
										<li>
											$200.00
										</li>
									</ul>

									<div class="clearfix"> </div>
								</div>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="chr_item" value="Book4">
									<input type="hidden" name="amount" value="140.00">
									<button type="submit" class="chr-cart pchr-cart">Add to cart
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
									</button>
									<a href="#" data-toggle="modal" data-target="#myModal1"></a>
								</form>
							</div>
						</div>
					</div> -->
					<!-- //row3 -->
					<div class="clearfix"></div>
				</div>
				<!--//new_arrivals-->
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Single -->
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
	<!-- Common js -->
	<script src="{{URL::asset('/front/js/jquery-2.2.3.min.js')}}"></script>
	<!--// Common js -->
	<!-- cart-js -->
	<script src="{{URL::asset('/front/js/minicart.js')}}"></script>
	<script>
		chr.render();

		chr.cart.on('chr_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- zoom -->
	<script src="{{URL::asset('/front/js/imagezoom.js')}}"></script>
	<!-- zoom-->
	<!-- single -->
	<!-- FlexSlider -->
	<script src="{{URL::asset('/front/js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

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
	<script src="{{URL::asset('/front/js/bootstrap.js')}}"></script>
	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="{{URL::asset('/front/js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

</body>

</html>