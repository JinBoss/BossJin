<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Default</title>
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
    <!-- footer stylesheet -->
    <link href="{{URL::asset('/front/css/default.css')}}" type="text/css" rel="stylesheet" media="all">
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
                            <a href="footer.html">活动专区</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     
        <!--//breadcrumbs ends here-->
  <!-- footer-layouts -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>js+html5转盘抽奖代码下载 - 站长素材</title>
<link rel="stylesheet" type="text/css" href="{{URL::asset('/front/css/stylel.css')}}" />
</head>
<body>
<div style="width:620px;margin:20px auto 0 auto;">
  <input type="button" value="开始旋转" onClick="spin();" style="width:100px; height:30px;" />
  <canvas id="wheelcanvas" width="500" height="500"></canvas>
</div>
<script type="text/javascript">
var colors = ["#B8D430", "#3AB745", "#029990", "#3501CB","#2E2C75", "#673A7E", "#CC0071", "#F80120","#F35B20", "#FB9A00", "#FFCC00", "#FEF200"];  
var restaraunts = ["谢谢参与", "免费借阅", "1折借阅卡", "8折借阅卡","4折借阅卡", "6折借阅卡", "谢谢参与", "3折借阅卡","9折借阅卡", "7折借阅卡", "2折借阅卡", "5折借阅卡"];   
var startAngle = 0;
var arc = Math.PI / 6;
var spinTimeout = null;    
var spinArcStart = 10;  
var spinTime = 0;  
var spinTimeTotal = 0;    
var ctx;    
function draw() {    
  drawRouletteWheel();  
}    
function drawRouletteWheel() {    
  var canvas = document.getElementById("wheelcanvas");    
  if (canvas.getContext) {      
      var outsideRadius = 200;      
      var textRadius = 160;      
      var insideRadius = 125;            
      ctx = canvas.getContext("2d");      
      ctx.clearRect(0,0,500,500);
      ctx.strokeStyle = "black";      
      ctx.lineWidth = 2;            
      ctx.font = 'bold 12px sans-serif';            
      for(var i = 0; i < 12; i++) {       
          var angle = startAngle + i * arc;        
          ctx.fillStyle = colors[i];                
          ctx.beginPath();        
          ctx.arc(250, 250, outsideRadius, angle, angle + arc, false);        
          ctx.arc(250, 250, insideRadius, angle + arc, angle, true);        
          ctx.stroke();        
          ctx.fill();                
          ctx.save();       
          ctx.shadowOffsetX = -1;        
          ctx.shadowOffsetY = -1;        
          ctx.shadowBlur    = 0;        
          ctx.shadowColor   = "rgb(220,220,220)";        
          ctx.fillStyle = "black";        
          ctx.translate(250 + Math.cos(angle + arc / 2) * textRadius, 250 + Math.sin(angle + arc / 2) * textRadius);        
          ctx.rotate(angle + arc / 2 + Math.PI / 2);        
          var text = restaraunts[i];        
          ctx.fillText(text, -ctx.measureText(text).width / 2, 0);        
          ctx.restore();      
          }             
          //Arrow
          ctx.fillStyle = "black";      
          ctx.beginPath();      
          ctx.moveTo(250 - 4, 250 - (outsideRadius + 5));      
          ctx.lineTo(250 + 4, 250 - (outsideRadius + 5));      
          ctx.lineTo(250 + 4, 250 - (outsideRadius - 5)); 
          ctx.lineTo(250 + 9, 250 - (outsideRadius - 5));      
          ctx.lineTo(250 + 0, 250 - (outsideRadius - 13));     
          ctx.lineTo(250 - 9, 250 - (outsideRadius - 5));      
          ctx.lineTo(250 - 4, 250 - (outsideRadius - 5));      
          ctx.lineTo(250 - 4, 250 - (outsideRadius + 5));      
          ctx.fill();    
          } 
}    
function spin() {    
    spinAngleStart = Math.random() * 30 + 30;    
    spinTime = 0;    
    spinTimeTotal = Math.random() * 3 + 4 * 1000;   
    rotateWheel();  

}    
function rotateWheel() {    
    spinTime += 30;    
    if(spinTime >= spinTimeTotal) {      
        stopRotateWheel();      
        return;    
    }    
    var spinAngle = spinAngleStart - easeOut(spinTime, 0, spinAngleStart, spinTimeTotal);    
    startAngle += (spinAngle * Math.PI / 180);
    drawRouletteWheel();    spinTimeout = setTimeout('rotateWheel()', 30); 
}    
function stopRotateWheel() {    
    clearTimeout(spinTimeout);    
    var degrees = startAngle * 180 / Math.PI + 90;    
    var arcd = arc * 180 / Math.PI;    
    var index = Math.floor((360 - degrees % 360) / arcd);    ctx.save();
    ctx.font = 'bold 30px sans-serif';    
    var text = restaraunts[index]    
    ctx.fillText(text, 250 - ctx.measureText(text).width / 2, 250 + 10);    ctx.restore();  
}    
function easeOut(t, b, c, d) {    
    var ts = (t/=d)*t;    
    var tc = ts*t;    
    return b+c*(tc + -3*ts + 3*t);  
}   
draw();
</script>
</body>
</html>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗. </p>
<p>来源：<a href="http://sc.chinaz.com/" target="_blank">站长素材</a></p>
</div>
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
                            <img ="{{URL::asset('/front/images/b1.jpg')}}" alt="" class="img-responsive" />
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
    <!-- Scrolling Nav JavaScript -->
    <script src="{{URL::asset('/front/js/scrolling-nav.js')}}"></script>
    <!-- //fixed-scroll-nav-js -->
    <!--//scripts-->
    <!-- //gallery-js  -->
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