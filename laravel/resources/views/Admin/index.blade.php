<!DOCTYPE html>
<html lang="en">

	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />

		<title>Dashboard | Nadhif - Responsive Admin Template</title>
		
		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<!-- Import google fonts -->
        <link href="http://fonts.useso.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />
        
		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="{{ URL::asset('/back/assets/ico/favicon.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ URL::asset('/back/assets/ico/apple-touch-icon.png') }}" />
		<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-57x57.png') }}" />
		<link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-72x72.png') }}" />
		<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-76x76.png') }}" />
		<link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-114x114.png') }}" />
		<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-120x120.png') }}" />
		<link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-144x144.png') }}" />
		<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('/back/assets/ico/apple-touch-icon-152x152.png') }}" />
		
	    <!-- start: CSS file-->
		
		<!-- Vendor CSS-->
		<link href="{{ URL::asset('/back/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/vendor/skycons/css/skycons.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
		
		<!-- Plugins CSS-->		
		<link href="{{ URL::asset('/back/assets/plugins/bootkit/css/bootkit.css') }}" rel="stylesheet" />	
		<link href="{{ URL::asset('/back/assets/plugins/scrollbar/css/mCustomScrollbar.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/plugins/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/plugins/xcharts/css/xcharts.min.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/plugins/morris/css/morris.css') }}" rel="stylesheet" />
		
		<!-- Theme CSS -->
		<link href="{{ URL::asset('/back/assets/css/jquery.mmenu.css') }}" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="{{ URL::asset('/back/assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ URL::asset('/back/assets/css/add-ons.min.css') }}" rel="stylesheet" />
		
		<!-- end: CSS file-->	
	    
		
		<!-- Head Libs -->
		<script src="{{ URL::asset('/back/assets/plugins/modernizr/js/modernizr.js') }}"></script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->		
		
	</head>
	
	<body>
	
		<!-- Start: Header -->
		<div class="navbar" role="navigation">
			<div class="container-fluid container-nav">				
				<!-- Navbar Action -->
				<ul class="nav navbar-nav navbar-actions navbar-left">
					<li class="visible-md visible-lg"><a href="index.html#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
					<li class="visible-xs visible-sm"><a href="index.html#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
				</ul>
				<!-- Navbar Left -->
				<div class="navbar-left">
					<!-- Search Form -->					
					<form class="search navbar-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>						
					</form>
				</div>
				<!-- Navbar Right -->
				<div class="navbar-right">
					<!-- Notifications -->
					<ul class="notifications hidden-sm hidden-xs">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">10</span>
							</a>
							<ul class="dropdown-menu update-menu" role="menu">
								<li><a href="#"><i class="fa fa-database bk-fg-primary"></i> Database </a></li>
								<li><a href="#"><i class="fa fa-bar-chart-o bk-fg-primary"></i> Connection </a></li>
								<li><a href="#"><i class="fa fa-bell bk-fg-primary"></i> Notification </a></li>
								<li><a href="#"><i class="fa fa-envelope bk-fg-primary"></i> Message </a></li>
								<li><a href="#"><i class="fa fa-flash bk-fg-primary"></i> Traffic </a></li>
								<li><a href="#"><i class="fa fa-credit-card bk-fg-primary"></i> Invoices </a></li>
								<li><a href="#"><i class="fa fa-dollar bk-fg-primary"></i> Finances </a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up bk-fg-primary"></i> Orders </a></li>
								<li><a href="#"><i class="fa fa-folder bk-fg-primary"></i> Directories </a></li>
								<li><a href="#"><i class="fa fa-users bk-fg-primary"></i> Users </a></li>		
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">5</span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-header">
									<strong>Messages</strong>
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="{{ URL::asset('/back/assets/img/avatar1.jpg') }}" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>1 minute ago</small></span>							
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="{{ URL::asset('/back/assets/img/avatar2.jpg') }}" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>3 minute ago</small></span>								
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="{{ URL::asset('/back/assets/img/avatar3.jpg') }}" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>4 minute ago</small></span>								
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="{{ URL::asset('/back/assets/img/avatar4.jpg') }}" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>30 minute ago</small></span>
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="{{ URL::asset('/back/assets/img/avatar5.jpg') }}" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>1 hours ago</small></span>
									</a>
								</li>						
								<li class="dropdown-menu-footer text-center">
									<a href="page-inbox.html">View all messages</a>
								</li>	
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
							<ul class="dropdown-menu list-group">
								<li class="dropdown-menu-header">
									<strong>Notifications</strong>
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>
								</li>
								<li class="list-item">
									<a href="page-inbox.html">
										<div class="pull-left">
										   <i class="fa fa-envelope-o bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>Unread Message</div>
											<h6>You have 10 unread message</h6>
										</div>								
									</a>
								</li>
								<li class="list-item">
									<a href="#">
										<div class="pull-left">
										   <i class="fa fa-cogs bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>New Settings</div>
											<h6>There are new settings available</h6>
										</div>								
									</a>
								</li>
								<li class="list-item">
									<a href="#">
										<div class="pull-left">
										   <i class="fa fa-fire bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>Update</div>
											<h6>There are new updates available</h6>
										</div>								
									</a>
								</li>
								<li class="list-item-last">
									<a href="#">
									  <h6>Unread notifications</h6>
									  <span class="badge">15</span>
								   </a>
								</li>
							</ul>
						</li>
					</ul>
					<!-- End Notifications -->
					<!-- Userbox -->
					<div class="userbox">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<div class="profile-info">
								<span class="name">John Smith Doe</span>
								<span class="role">Developer</span>
							</div>			
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="dropdown-menu-header bk-bg-white bk-margin-top-15">						
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>							
								</li>	
								<li>
									<a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-wrench"></i> Settings</a>
								</li>
								<li>
									<a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-file"></i> File</a>
								</li>
								<li>
									<a href="page-login.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>						
					</div>
					<!-- End Userbox -->
				</div>
				<!-- End Navbar Right -->
			</div>		
		</div>
		<!-- End: Header -->
		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
			
				<!-- Sidebar -->
				<div class="sidebar">
					<div class="sidebar-collapse">
						<!-- Sidebar Header Logo-->
						<div class="sidebar-header">
							<img src="{{ URL::asset('/back/assets/img/logo.png') }}" class="img-responsive" alt="" />
						</div>
						<!-- Sidebar Menu-->
						<div class="sidebar-menu">						
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-sidebar">
									<div class="panel-body text-center">								
										<div class="bk-avatar">
											<img src="{{ URL::asset('/back/assets/img/avatar.jpg') }}" class="img-circle bk-img-60" alt="" />
										</div>
										<div class="bk-padding-top-10">
											<i class="fa fa-circle text-success"></i> <small>Administrator</small>
										</div>
									</div>
									<div class="divider2"></div>
									<li class="active">
										<a href="index.html">
											<i class="fa fa-laptop" aria-hidden="true"></i><span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="page-inbox.html">
											<span class="pull-right label label-primary">165</span>
											<i class="fa fa-envelope" aria-hidden="true"></i><span>Mail</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i><span>Pages</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="page-activity.html"><span class="text"> Activity</span></a></li>
											<li><a href="page-invoice.html"><span class="text"> Invoice</span></a></li>						
											<li><a href="page-profile.html"><span class="text"> Profile</span></a></li>
											<li><a href="page-pricing-tables.html"><span class="text"> Pricing Tables</span></a></li>
											<li><a href="page-404.html"><span class="text"> 404</span></a></li>
											<li><a href="page-500.html"><span class="text"> 500</span></a></li>

											<li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
											<li><a href="page-register.html"><span class="text"> Register Page</span></a></li>											
										</ul>
									</li>
									<li>
										<a href="{{ url('admin/calendar/')}}">
											<i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- End Sidebar Menu-->
					</div>
					<!-- Sidebar Footer-->
					<div class="sidebar-footer">	
						<ul class="sidebar-terms">
							<li><a href="index.html#">Terms</a></li>
							<li><a href="index.html#">Privacy</a></li>
							<li><a href="index.html#">Help</a></li>
							<li><a href="index.html#">About</a></li>
						</ul>
						<div class="copyright text-center">
							<small>Nadhif <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">ZZH</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="未来图书馆">ZZH图书馆</a></small>
						</div>					
					</div>
					<!-- End Sidebar Footer-->
				</div>
				<!-- End Sidebar -->
		
				<!-- Main Page -->
				<div class="main ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">								
								<li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
								<li class="active"><i class="fa fa-laptop"></i>Dashboard</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Dashboard</h2>
						</div>					
					</div>
					<!-- End Page Header -->								
					
				<!-- End Main Page -->			
		
				<!-- Usage -->
				<div id="usage">
					<ul>
						<li>
							<div class="title">Memory</div>
							<div class="bar">
								<div class="progress progress-md  progress-striped active">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
								</div>
							</div>			
							<div class="desc">4GB of 8GB</div>
						</li>
						<li>
							<div class="title">HDD</div>
							<div class="bar">
								<div class="progress progress-md  progress-striped active">
									<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
								</div>
							</div>			
							<div class="desc">250GB of 1TB</div>
						</li>
						<li>
							<div class="title">SSD</div>
							<div class="bar">
								<div class="progress progress-md  progress-striped active">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
								</div>
							</div>			
							<div class="desc">700GB of 1TB</div>
						</li>
						<li>
							<div class="title">Bandwidth</div>
							<div class="bar">
								<div class="progress progress-md  progress-striped active">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
								</div>
							</div>			
							<div class="desc">90TB of 100TB</div>
						</li>				
					</ul>	
				</div>
				<!-- End Usage -->
			
			</div>
		</div><!--/container-->
		
		
		<!-- Modal Dialog -->
		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title bk-fg-primary">Modal title</h4>
					</div>
					<div class="modal-body">
						<p class="bk-fg-danger">Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div><!-- End Modal Dialog -->		
		
		<div class="clearfix"></div>		
		
		
		<!-- start: JavaScript-->
		
		<!-- Vendor JS-->				
		<script src="{{ URL::asset('/back/assets/vendor/js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/vendor/js/jquery-2.1.1.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/vendor/js/jquery-migrate-1.2.1.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/vendor/skycons/js/skycons.js') }}"></script>		
		
		<!-- Plugins JS-->		
		<script src="{{ URL::asset('/back/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/bootkit/js/bootkit.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/moment/js/moment.min.js') }}"></script>	
		<script src="{{ URL::asset('/back/assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/touchpunch/js/jquery.ui.touch-punch.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/flot/js/jquery.flot.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/flot/js/jquery.flot.pie.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/flot/js/jquery.flot.resize.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/flot/js/jquery.flot.stack.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/flot/js/jquery.flot.time.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/xcharts/js/xcharts.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/autosize/jquery.autosize.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/placeholder/js/jquery.placeholder.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/datatables/js/dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/raphael/js/raphael.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/morris/js/morris.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/plugins/gauge/js/gauge.min.js') }}"></script>		
		<script src="{{ URL::asset('/back/assets/plugins/d3/js/d3.min.js') }}"></script>		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		
		<!-- Theme JS -->		
		<script src="{{ URL::asset('/back/assets/js/jquery.mmenu.min.js') }}"></script>
		<script src="{{ URL::asset('/back/assets/js/core.min.js') }}"></script>
		
		<!-- Pages JS -->
		<script src="{{ URL::asset('/back/assets/ico/favicon.ico') }}"></script>
		
		<!-- end: JavaScript-->
		
	</body>
	
</html>