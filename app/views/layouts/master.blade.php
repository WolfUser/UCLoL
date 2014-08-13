<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>UC League of Legends</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- CSS -->
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/layerslider.css">
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
	</head>
	<body class="home page page-id-26 page-template page-template-tmp-no-title-php">
		<div id="main_wrapper">
		<div class="container logo">
			<!-- UCLOL LOGO GOES HERE -->
			<a class="brand" href="index.html">
			<img src="img/logo.png" alt="logo"  />
			</a>
			<!-- END LOGO -->
			<!-- SOCIAL LINKS, SEE SOURCE FILE FOR ALL OTHER LINKS THAT WERE DELETED -->
			<div class="social">
				<a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href=""><i class="fa fa-gamepad"></i></a>
				<a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href=""><i class="fa fa-twitter"></i></a>
				<a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href=""><i class="fa fa-facebook"></i></a>
			</div>
			<!-- END SOCIAL LINKS -->
			<div class="clear"></div>
		</div>
		<!-- ORANGE NAVIGATION BAR -->
		<div class="navbar navbar-inverse container">
				<div class="navbar-inner">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<div class="menu-main-container">
							<ul class="nav">
								<li><a href="/">Home</a></li>
								<li><a href="/announcements">Announcements</a></li>
                                                                <li class="dropdown">
									<a href="#">Our Community</a>
									<ul class="sub-menu dropdown-menu">
										<li><a href="/community/ranked-team">Ranked Team</a></li>
										<li><a href="/community/tryouts">Tryouts</a></li>
										<li><a href="/community/streamers">Streamers</a></li>
                                                                                <!-- Item below will have player List too -->
										<li><a href="/community/teamspeak">Teamspeak Info</a></li>
									</ul>
								</li>
                                <li><a href="/calendar">Calendar</a></li>
								<li><a href="/ourstaff">Our Staff</a></li>
                                <li><a href="/donations">Donations</a></li>
							</ul>
						</div>
					</div>
					<!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
			</div>
		<!-- TICKER NEWS IS HERE -->
		<div class="page normal-page container">
			<div class="row block">
				<div class="span12">
					<div class="template-wrapper">
						<ul id="js-news" class="js-hidden">
                                <li class="news-item">UCLoL Can have a <a href="#">link</a> in this area!</li>
                                <li class="news-item">LUCIAN IS A GOD! NUFF SAID</li>
                                <li class="news-item">BOOGER BOOGER BOOGER BOOGER, <a href="#">BOOGER YEA</a></li>
                        </ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Body -->
            @yield('content')
                
		</footer>
		<!-- JavaScript -->
		<script type="text/javascript" src="/js/jquery.js"></script>
		<script type="text/javascript" src="/js/jquery.cookie.pack.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="/js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="/js/jquery.elastic.source.js"></script>
		<script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script type="text/javascript" src="/js/jquery.ui.totop.js"></script>
		<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="/js/login-with-ajax.js"></script>
		<script type="text/javascript" src="/js/bootstrap-button.js"></script>
		<script type="text/javascript" src="/js/bootstrap-carousel.js"></script>
		<script type="text/javascript" src="/js/bootstrap-collapse.js"></script>
		<script type="text/javascript" src="/js/bootstrap-modal.js"></script>
		<script type="text/javascript" src="/js/bootstrap-tab.js"></script>
		<script type="text/javascript" src="/js/bootstrap-tooltip.js"></script>
		<script type="text/javascript" src="/js/bootstrap-transition.js"></script>
		<script type="text/javascript" src="/js/bootstrap-popover.js"></script>
		<script type="text/javascript" src="/js/easing.js"></script>
		<script type="text/javascript" src="/js/global.js"></script>
		<script type="text/javascript" src="/js/imagescale.js"></script>
		<script type="text/javascript" src="/js/login-with-ajax.source.js"></script>
		<script type="text/javascript" src="/js/main.js"></script>
	 	<script type="text/javascript" src="/js/theme.min.js"></script>
		<script type="text/javascript" src="/js/tinymce.min.js"></script>
		<script type="text/javascript" src="/js/transit.js"></script>
		<script type="text/javascript" src="/js/admin.js"></script>
		<script type="text/javascript" src="/js/greensock.js"></script>
		<script type="text/javascript" src="/js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="/js/layerslider.kreaturamedia.jquery.js"></script>
		<script type="text/javascript" src="/js/tabs.js"></script>
		<script type="text/javascript" src="/js/ticker.js"></script>
		<script>
			jQuery("#layerslider").layerSlider({
				pauseOnHover: false,
				autoPlayVideos: false,
				skinsPath: './layerslider/skins/',
				responsive : true,
				responsiveUnder : 1200,
				layersContainer : 1200,
				skin_name: 'fullwidth',
				navStartStop: false
			});
		</script>

	    <script type="text/javascript">
            jQuery(function () {
                jQuery('#js-news').ticker();
            });
        </script>
	   <!-- End JavaScript -->

	</body>
</html>