<!DOCTYPE html>
<html lang="en">

	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />

		<title>Activity | Nadhif - Responsive Admin Template</title>
		
		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
		<!-- Import google fonts -->
        <link href="http://fonts.useso.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />
        
		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="assets/ico/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="assets/ico/apple-touch-icon-152x152.png" />
		
	    <!-- start: CSS file-->
		
		<!-- Vendor CSS-->
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
		<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		
		<!-- Plugins CSS-->		
		<link href="assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />	
		<link href="assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
		<link href="assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />					
		
		<!-- Theme CSS -->
		<link href="assets/css/jquery.mmenu.css" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/add-ons.min.css" rel="stylesheet" />
		
		<!-- end: CSS file-->	
	    
		
		<!-- Head Libs -->
		<script src="assets/plugins/modernizr/js/modernizr.js"></script>
		
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
					<li class="visible-md visible-lg"><a href="page-activity.html#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
					<li class="visible-xs visible-sm"><a href="page-activity.html#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>			
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
										<img class="avatar" src="assets/img/avatar1.jpg" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>1 minute ago</small></span>							
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="assets/img/avatar2.jpg" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>3 minute ago</small></span>								
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="assets/img/avatar3.jpg" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>4 minute ago</small></span>								
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="assets/img/avatar4.jpg" alt="" />
										<div><div class="point point-primary point-lg"></div>New message</div>
										<span><small>30 minute ago</small></span>
									</a>
								</li>
								<li class="avatar">
									<a href="page-inbox.html">
										<img class="avatar" src="assets/img/avatar5.jpg" alt="" />
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
		
		<!-- Start: Content -->
		<div class="container-fluid content">	
			<div class="row">
			
				<!-- Sidebar -->
				<div class="sidebar">
					<div class="sidebar-collapse">
						<!-- Sidebar Header Logo-->
						<div class="sidebar-header">
							<img src="assets/img/logo.png" class="img-responsive" alt="" />
						</div>
						<!-- Sidebar Menu-->
						<div class="sidebar-menu">						
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-sidebar">
									<div class="panel-body text-center">								
										<div class="bk-avatar">
											<img src="assets/img/avatar.jpg" class="img-circle bk-img-60" alt="" />
										</div>
										<div class="bk-padding-top-10">
											<i class="fa fa-circle text-success"></i> <small>Administrator</small>
										</div>
									</div>
									<div class="divider2"></div>
									<li>
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
									<li class="nav-parent nav-expanded active">
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
											<li><a href="page-lockscreen.html"><span class="text"> LockScreen1</span></a></li>
											<li><a href="page-lockscreen2.html"><span class="text"> LockScreen2</span></a></li>
											<li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
											<li><a href="page-register.html"><span class="text"> Register Page</span></a></li>											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i><span>Forms</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="form-elements.html"><span class="text"> Form elements</span></a></li>
											<li><a href="form-wizard.html"><span class="text"> Wizard</span></a></li>
											<li><a href="form-dropzone.html"><span class="text"> Dropzone Upload</span></a></li>
											<li><a href="form-x-editable.html"><span class="text"> X-editable</span></a></li>
											<li><a href="form-editors.html"><span class="text"> Editors</span></a></li>
										</ul>
									</li>
									<li>
										<a href="table.html">
											<i class="fa fa-table" aria-hidden="true"></i><span>Tables</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-random" aria-hidden="true"></i><span>Visual Chart</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="chart-flot.html"><span class="text"> Flot Chart</span></a></li>
											<li><a href="chart-xchart.html"><span class="text"> xChart</span></a></li>
											<li><a href="chart-other.html"><span class="text"> Other</span></a></li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>UI Elements</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="ui-progress-bars.html"><span class="text"> Progress bars</span></a></li>
											<li><a href="ui-nestable-list.html"><span class="text"> Nestable Lists</span></a></li>
											<li><a href="ui-elements.html"><span class="text"> Elements</span></a></li>
											<li><a href="ui-panels.html"><span class="text"> Panels</span></a></li>
											<li><a href="ui-buttons.html"><span class="text"> Buttons</span></a></li>
										</ul>
									</li>
									<li>
										<a href="widgets.html">
											<i class="fa fa-life-bouy" aria-hidden="true"></i><span>Widgets</span>
										</a>
									</li>
									<li>
										<a href="typography.html">
											<i class="fa fa-font" aria-hidden="true"></i><span>Typography</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-bolt" aria-hidden="true"></i><span>Icons</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="icons-font-awesome.html"><span class="text"> Font Awesome</span></a></li>
											<li><a href="icons-weathericons.html"><span class="text"> Weather Icons</span></a></li>
											<li><a href="icons-glyphicons.html"><span class="text"> Glyphicons</span></a></li>
										</ul>
									</li>
									<li>
										<a href="gallery.html">
											<i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span>
										</a>
									</li>
									<li>
										<a href="calendar.html">
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
							<small>Nadhif <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></small>
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
								<li><a href="#"><i class="fa fa-file-text"></i>Pages</a></li>
								<li class="active"><i class="fa fa-car"></i>Activity</li>
							</ol>						
						</div>
						<div class="pull-right">
							<h2>Activity</h2>
						</div>					
					</div>
					<!-- End Page Header -->					
					<div class="row">
						<div class="col-md-6">							
							<div class="panel bk-bg-white">
								<div class="panel-body">
									<div class="bk-bg-white bk-margin-15">
										<form role="form" action="javascript:">                           
											<textarea type="email" class="form-control bk-noradius" placeholder="What's on your mind?" ></textarea>
										</form>
									</div>					  	
									<div class="bk-bg-white bk-margin-15">
										<div class="btn-group">
											<button type="button" class="btn btn-link"><i class="fa fa-map-marker"></i></button>
											<button type="button" class="btn btn-link"><i class="fa fa-camera"></i></button>
											<button type="button" class="btn btn-link"><i class="fa fa-video-camera"></i></button>						
										</div>									
										<div class="pull-right">
											<button type="button" class="btn btn-primary"><i class="fa fa-lightbulb-o"></i> Post</button>
										</div>							
									</div>
								</div>
							</div>				
					
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-xs-4">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-info bk-border-3x" />
											</div>
										</div>
										<div class="col-xs-8 text-right">
											<h4 class="bk-margin-off bk-fg-primary">Robert Diego</h4>
											<small>CHIEF EXECUTIVE OFFICER</small>
											<div>
												<div class="btn-group">
													<a href="#" class="btn btn-info btn-xs">profile</a>
													<a href="#" class="btn btn-info btn-xs">contact</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white">
									<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p></blockquote>
									<div class="actions">
										<div class="btn-group">
											<button type="button" class="btn btn-link"><small>Like</small></button>
											<button type="button" class="btn btn-link"><small>Comment</small></button>
											<button type="button" class="btn btn-link"><small>Share</small></button>									
										</div>
										<div class="pull-right bk-fg-primary"><strong>2.596</strong> People liked this</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bk-docs-scroll-hidden">
									<div class="panel-body bk-bg-white">									
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>																
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>									
											</div>
										</div>							
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
									</div>
								</div>									
								<div class="panel-body bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<form role="form" action="javascript:">
										<div class="input-group">
											<input type="text" class="form-control bk-noradius" />
											<span class="input-group-btn">
												<button class="btn btn-default bk-noradius" type="button"><i class="fa fa-send-o"></i></button>
											</span>
										</div>
									</form>
								</div>							
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body text-left bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<div class="row">
										<div class="col-xs-4">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-info bk-border-3x" />
											</div>
										</div>
										<div class="col-xs-8 text-right">
											<h4 class="bk-margin-off bk-fg-primary">Robert Diego</h4>
											<small>CHIEF EXECUTIVE OFFICER</small>
											<div>
												<div class="btn-group">
													<a href="javascript:" class="btn btn-info btn-xs">profile</a>
													<a href="javascript:" class="btn btn-info btn-xs">contact</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<a class="panel-body bk-bg-white bk-ltr bk-opacity bk-padding-top-15">
									<div class="row">											
										<div class="col-lg-4 col-md-4 col-xs-4">
											<img class="img-responsive" src="assets/img/gallery/photo1.jpg" alt="" />
										</div>
										<div class="col-lg-4 col-md-4 col-xs-4">
											<img class="img-responsive" src="assets/img/gallery/photo2.jpg" alt="" />
										</div>
										<div class="col-lg-4 col-md-4 col-xs-4">
											<img class="img-responsive" src="assets/img/gallery/photo3.jpg" alt="" />
										</div>											
									</div>
								</a>
								<div class="panel-body bk-bg-white">					   
									<div class="actions">
										<div class="btn-group">
											<button type="button" class="btn btn-link"><small>Like</small></button>
											<button type="button" class="btn btn-link"><small>Comment</small></button>
											<button type="button" class="btn btn-link"><small>Share</small></button>									
										</div>
										<div class="pull-right bk-fg-primary"><strong>2.596</strong> People liked this</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bk-docs-scroll-hidden">
									<div class="panel-body bk-bg-white">
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>																
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>									
											</div>
										</div>							
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
										<div class="media">
											<a class="pull-left bk-avatar" href="page-activity.html#">
												<img src="assets/img/avatar7.jpg" alt="" class="img-circle bk-img-40 bk-border-info bk-border-1x" />
											</a>
											<div class="media-body">
												<div class="pull-right small">30 minutes ago</div>
												<a href="page-activity.html#">
													<div class="media-heading bk-fg-primary">
														<strong>Sharon Rose</strong>
													</div>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, suscipit, autem sit natus deserunt officia error odit ea minima soluta ratione maxime molestias fugit explicabo aspernatur praesentium quisquam voluptatum fuga.</p>
												<a href="page-activity.html#">Like</a><small><strong> 2.596</strong> People liked this</small>
											</div>
										</div>										
									</div>
								</div>									
								<div class="panel-body bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<form role="form" action="javascript:">
										<div class="input-group">
											<input type="text" class="form-control bk-noradius" />
											  <span class="input-group-btn">
												<button class="btn btn-default bk-noradius" type="button"><i class="fa fa-send-o"></i></button>
											  </span>
										</div>
									</form>
								</div>						
							</div>				
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body bk-ltr">
									<div class="row text-center">
										<a class="col-xs-12 bk-bg-primary bk-bg-darken bk-padding-top-10 bk-padding-bottom-10">
											<h6>VIEW MORE POST</h6>
										</a>                            
									</div>
								</div>
							</div>		
						</div>
						
						<div class="col-md-6">
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-body bk-bg-white text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">LIVE CHAT</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-comments-o"></i>
										</div>
									</div>
								</div>
								<hr class="bk-margin-off" />
								<div class="bk-docs-scroll-hidden">
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> just now</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 3' ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
										</div>
										<p>
										   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-left bk-margin-top-10 bk-margin-right-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar1.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="bk-fg-primary"><div class="point point-success point-lg"></div>John Doe</strong>
											<span class="pull-right"><i class="fa fa-clock-o"></i><small> 6' ago</small></span>
										</div>
										<p>
											Cum sociis natoque pen ibus Mauris pede arcuats moles tied Aliquam or Mauris pede arcuats
										</p>
									</a>
									<hr class="bk-margin-off" />
									<a class="panel-body bk-bg-very-light-gray bk-bg-lighten bk-padding-off-top bk-padding-off-bottom">
										<div class="pull-right bk-margin-top-10 bk-margin-left-10">
											<div class="bk-avatar">
												<img src="assets/img/avatar.jpg" alt="" class="img-circle bk-img-60 bk-border-off" />
											</div>
										</div>
										<div class="bk-fg-inverse bk-margin-top-10">
											<strong class="pull-right bk-fg-primary"><div class="point point-success point-lg"></div>Robert</strong>
											<span><i class="fa fa-clock-o"></i><small> 11' ago</small></span>
										</div>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget turpis pulvinar, tempor odio sed, adipiscing dolor.
										</p>
									</a>
								</div>
								<hr class="bk-margin-off" />
								<div class="panel-body bk-bg-white bk-padding-top-15 bk-padding-bottom-15">
									<form role="form" action="javascript:">
										<div class="input-group">
											<input type="text" class="form-control bk-noradius" />
											  <span class="input-group-btn">
												<button class="btn btn-default bk-noradius" type="button"><i class="fa fa-send-o"></i></button>
											  </span>
										</div>
									</form>
								</div>
							</div>				
							<div class="panel bk-widget bk-border-off bk-noradius">
								<div class="panel-body bk-bg-white bk-fg-inverse text-center bk-padding-15">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<div class="">
												<h1 class="bk-margin-off">123K</h1>
												 DOWNLOAD
											</div>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-thumbs-o-up fa-3x"></i>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table text-left bk-margin-off-bottom">
											<thead>
												<tr>
													<th>Theme</th>
													<th>Bounce rate</th>
													<th>Last month</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Wordpress</td>
													<td>80,8%</td>
													<td>75,265</td>
													<td class="bk-padding-off-right">
														<ul class="list-inline bk-margin-off-bottom text-right">
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
																	<i class="fa fa-cogs"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="fa fa-pencil"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
																	<i class="fa fa-eye"></i>
																</a>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td>HTML</td>
													<td>71,5%</td>
													<td>60,269</td>
													<td class="bk-padding-off-right">
														<ul class="list-inline bk-margin-off-bottom text-right">
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
																	<i class="fa fa-cogs"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="fa fa-pencil"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
																	<i class="fa fa-eye"></i>
																</a>
															</li>
														</ul>
													</td>
												</tr>
												<tr>
													<td>CMS</td>
													<td>69,3%</td>
													<td>53,026</td>
													<td class="bk-padding-off-right">
														<ul class="list-inline bk-margin-off-bottom text-right">
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
																	<i class="fa fa-cogs"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="fa fa-pencil"></i>
																</a>
															</li>
															<li class="bk-padding-off-right">
																<a class="bk-round bk-border-info bk-border-darken bk-bg-lighten bk-border-3x bk-icon bk-icon-default bk-bg-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
																	<i class="fa fa-eye"></i>
																</a>
															</li>
														</ul>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="panel bk-widget bk-border-off">
								<div class="panel-body bk-bg-white text-center bk-padding-top-10 bk-padding-bottom-10">
									<div class="row">
										<div class="col-xs-8 text-left bk-vcenter">
											<h6 class="bk-margin-off">UPDATE ITEMS</h6>
										</div>
										<div class="col-xs-4 bk-vcenter text-right">
											<i class="fa fa-file-text-o"></i>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-white bk-padding-off-top bk-padding-off-bottom">
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-top-10 bk-padding-bottom-10">
											<a class="bk-round bk-border-off bk-bg-danger bk-bg-lighten bk-icon bk-icon-2x bk-icon-default">
												<i class="fa fa-trophy fa-2x"></i>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-danger bk-margin-off-bottom"><strong>ONE PAGE</strong></h6>
											<p>
												<small>Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac amel hendrerit nunc luctus.</small>
											</p>
										</div>
										<hr class="bk-margin-off" />
									</div>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-top-10 bk-padding-bottom-10">
											<a class="bk-round bk-border-off bk-bg-primary bk-bg-lighten bk-icon bk-icon-2x bk-icon-default">
												<i class="fa fa-star fa-2x"></i>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-primary bk-margin-off-bottom"><strong>MULTIPURPOSE</strong></h6>
											<p>
												<small><a href="javascript:" class="bk-fg-primary bk-fg-lighten">Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac amel hendrerit nunc luctus.</small>
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-top-10 bk-padding-bottom-10">
											<a class="bk-round bk-border-off bk-bg-lighten bk-icon bk-icon-2x bk-icon-default bk-bg-info">
												<i class="fa fa-picture-o fa-2x"></i>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-info bk-margin-off-bottom"><strong>PORTFOLIO</strong></h6>
											<p>
												<small>Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac amel hendrerit nunc luctus.</small>
											</p>
										</div>
									</div>
									<div class="row">
										<hr class="bk-margin-off" />
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 bk-vcenter bk-padding-top-10 bk-padding-bottom-10">
											<a class="bk-round bk-border-off bk-bg-lighten bk-icon bk-icon-2x bk-icon-default bk-bg-warning">
												<i class="fa fa-signal fa-2x"></i>
											</a>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 bk-vcenter">
											<h6 class="bk-fg-warning bk-margin-off-bottom"><strong>ADMIN TEMPLATE</strong></h6>
											<p>
												<small>Donec nisi velit, malesuada id dolor non, elementum auctor arcu. Cras consectetur sapien et purus posuere, ac amel hendrerit nunc luctus.</small>
											</p>
										</div>
									</div>
								</div>
								<div class="panel-body bk-bg-very-light-gray bk-padding-top-5 bk-padding-bottom-5 ">
									<div class="row">
										<div class="col-xs-6">
											<a href="#" class="bk-fg-textcolor"><small><i class="fa fa-angle-left"></i> PREVIOUS</small></a>
										</div>
										<div class="col-xs-6 text-right">
											<a href="#" class="bk-fg-textcolor"><small>NEXT <i class="fa fa-angle-right"></i></small></a>
										</div>
									</div>
								</div>
							</div>					
						</div>						
					</div>
				</div>
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
		<script src="assets/vendor/js/jquery.min.js"></script>
		<script src="assets/vendor/js/jquery-2.1.1.min.js"></script>
		<script src="assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/skycons/js/skycons.js"></script>		
		
		<!-- Plugins JS-->
		<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
		<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="assets/plugins/bootkit/js/bootkit.js"></script>
		
		
		<!-- Theme JS -->		
		<script src="assets/js/jquery.mmenu.min.js"></script>
		<script src="assets/js/core.min.js"></script>
		
		<!-- Pages JS -->
		<script src="assets/js/pages/activity.js"></script>
		
		<!-- end: JavaScript-->
		
	</body>
	
</html>