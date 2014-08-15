<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>UC League of Legends</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="img/favicon1.png">
		<!-- CSS -->
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/layerslider.css">
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
	</head>
	<body class="home page page-id-26 page-template page-template-tmp-no-title-php">
		<div id="main_wrapper">
		<div class="container logo">
			<!-- UCLOL LOGO GOES HERE -->
			<a class="brand" href="/">
			<img src="/img/logo2.png" alt="logo"  />
			</a>
			<!-- END LOGO -->
			<!-- SOCIAL LINKS, SEE SOURCE FILE FOR ALL OTHER LINKS THAT WERE DELETED -->
			<div class="social">
				<a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href="http://www.twitch.tv/uofcincilol"><i class="fa fa-gamepad"></i></a>
				<a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="https://twitter.com/UCLoL"><i class="fa fa-twitter"></i></a>
				<a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="https://www.facebook.com/groups/236661509804176/"><i class="fa fa-facebook"></i></a>
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
                                <li class="news-item">Don't forget to visit our <a href="#">Facebook Page</a> by clicking this link!</li>
                                <li class="news-item">Tryouts will be held in September, look for updates on the specific date here.</li>
                                <li class="news-item">Direct any questions and concerns you have with the website to Ryan Finley</li>
                        </ul>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Body -->
            @yield('content')

            <div id="myModalL" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Login</h3>
			</div>
			<div class="modal-body">
				<div id="LoginWithAjax" class="default">
					<span id="LoginWithAjax_Status"></span>
					<form name="LoginWithAjax_Form" id="LoginWithAjax_Form" action="http://skywarriorthemes.com/gameaddict/wp-login.php?callback=?&amp;template=" method="post">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr id="LoginWithAjax_Username">
									<td class="username_input">
										<input name="log" placeholder="Username" id="lwa_user_login" class="input" value="" type="text">
									</td>
								</tr>
								<tr id="LoginWithAjax_Password">
									<td class="password_input">
										<input placeholder="Password" name="pwd" id="lwa_user_pass" class="input" value="" type="password">
									</td>
								</tr>
								<tr>
									<td colspan="2"></td>
								</tr>
								<tr id="LoginWithAjax_Submit">
									<td id="LoginWithAjax_SubmitButton">
										<input name="rememberme" id="lwa_rememberme" value="forever" type="checkbox"> <label>Remember Me</label>
										<a href="#" title="Password Lost and Found">Lost your password?</a>
										<br><br>
										<input class="button-small"value="Log In" type="submit">
										<a class="reg-btn button-small" href="#">Register</a>
										<input name="redirect_to" value="#" type="hidden">
										<input name="testcookie" value="1" type="hidden">
										<input name="lwa_profile_link" value="" type="hidden">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>

		<!-- Slider -->
		<div id="sliderhome" class="container">
			<div id="layerslider" class="ls-wp-container ls-container ls-fullwidth" style="height: 300px; margin: 0px auto; width:100%;">
				<div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">
					<img src="./img/defaults/1170x203.jpg" class="ls-bg" alt="Slide background"/>
					<h1 class="ls-l" style=" color: rgba(255, 90, 90, 0.901961); text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 30px; background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto;  margin-left: 0px; margin-top: 0px;top: 76px; left: 52px; display:block; "  data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:600;offsetxout:-50;durationout:1000;"  > The perfect theme for gaming </h1>
					<h1 class="ls-l" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:500;offsetxout:-50;durationout:1000;" style="position: absolute; top: 164px; left: 52px; text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 18px; color: rgb(218, 213, 206); background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: -209.1291058540763px; display: block; visibility: visible; background-position: initial initial; background-repeat: initial initial;"> For gamers by gamers </h1>
				</div>


				<div class="ls-slide" data-ls="slidedelay:9500;transition2d:5;timeshift:-3000;">
					<img src="./img/defaults/1170x203.jpg" class="ls-bg" alt="Slide background" >
					<p class="ls-l" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:200;offsetxout:-50;durationout:1000;"  style="top: 52px; left: 31px; color: rgba(255, 90, 90, 0.901961); text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 30px; background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto;   margin-left: 0px; margin-top: 0px; display: block; "> create and manage clan wars </p>
					<p class="ls-l" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:0;offsetxout:-50;durationout:1000;"   style="top: 136px; left: 32px; text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 18px; color: rgb(218, 213, 206); background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; margin-left: 0px; margin-top: 0px; display: block; "> including different maps ,teams and games </p>
					<a href="/matches.html" target="_blank" class="ls-l button-medium" data-ls="offsetxin:0;offsetyin:300px;durationin:2000;delayin:700;offsetxout:-50;durationout:1000;"  style=" top: 216px; left: 35px; display: block; opacity: 1;  margin-left: 0px; margin-top: 0px; ">
					Check out the matches page! </a>
				</div>
				<div class="ls-slide" data-ls="slidedelay:9500;transition2d:5;timeshift:-3000;">
					<img src="./img/defaults/1170x203.jpg" class="ls-bg" alt="Slide background" style="padding: 0px; border-width: 0px; width: 1170px; height: 301px; margin-left: -585px; margin-top: -150.5px; visibility: visible; opacity: 1;">
					<img class="ls-s-1" src="http://skywarriorthemes.com/oblivion/wp-content/uploads/2013/08/b_transparent.png" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:500;offsetxout:-50;durationout:1000;"  style="position: absolute; top: 0px; left: 0px; opacity: 0.4; width: 1509px; height: 521px; padding: 0px; border-width: 0px; -webkit-transform: rotate(0deg) scale(1, 1); visibility: hidden; margin-left: 0px; margin-top: 0px;">
					<h1 class="ls-s-1" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:200;offsetxout:-50;durationout:1000;"  style="position: absolute; top: 80px; left: 50px; color: rgba(255, 90, 90, 0.901961); text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 28px; background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: hidden; background-position: initial initial; background-repeat: initial initial;"> super easy to use page builder </h1>
					<h1 class="ls-s-1" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:0;offsetxout:-50;durationout:1000;"  style="position: absolute; top: 155px; left: 50px; text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 18px; color: rgb(218, 213, 206); background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: hidden; background-position: initial initial; background-repeat: initial initial;"> create pages as simple as drag and drop </h1>
					<img class="ls-s-1" data-ls="offsetxin:0;offsetyin:300px;durationin:2000;delayin:1200;offsetxout:-50;durationout:1000;"  src="./img/defaults/305x305.jpg" style="position: absolute; top: 40px; left: 595px; width: 342px; height: 268px; padding: 0px; border-width: 0px; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: hidden;">
					<img class="ls-s-1" data-ls="offsetxin:0;offsetyin:0px;durationin:2000;delayin:4000;offsetxout:-50;durationout:1000;"  src="./img/defaults/305x305.jpg" style="position: absolute; top: 40px; left: 596px; width: 342px; height: 268px; padding: 0px; border-width: 0px; -webkit-transform: rotate(0deg) scale(1, 1); opacity: 1; visibility: hidden; margin-left: 0px; margin-top: 0px;">
				</div>

				<div class="ls-slide" data-ls="slidedelay:9500;transition2d:5,6,2,3;timeshift:-3000;">
					<img src="./img/defaults/1170x203.jpg" class="ls-bg" alt="Slide background" style="padding: 0px; border-width: 0px; width: 1170px; height: 301px; margin-left: -585px; margin-top: -150.5px; visibility: visible;">
					<img class="ls-s-1" src="./img/defaults/1170x203.jpg" data-ls="offsetxin:-300;offsetyin:0px;durationin:2000;delayin:2000;offsetxout:-50;durationout:1000;" style="position: absolute; top: 0px; left: 0px; width: 543px; height: 301px; padding: 0px; border-width: 0px; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: visible;">
					<img class="ls-s-1" src="./img/defaults/1170x203.jpg" data-ls="offsetxin:-300;offsetyin:0px;durationin:2000;delayin:4000;offsetxout:-50;durationout:1000;" style="position: absolute; top: 0px; left: 0px; width: 535px; height: 301px; padding: 0px; border-width: 0px; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: visible;">
					<h1 class="ls-s-1" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:200;offsetxout:-50;durationout:1000;" style="position: absolute; top: 60px; left: 500px; color: rgba(255, 90, 90, 0.901961); text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 28px; background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: visible; background-position: initial initial; background-repeat: initial initial;"> bbpress forum and rating system </h1>
					<h1 class="ls-s-1" data-ls="offsetxin:0;offsetyin:-300px;durationin:2000;delayin:0;offsetxout:-50;durationout:1000;" style="position: absolute; top: 135px; left: 500px; text-transform: uppercase; font-weight: bold; font-family: 'Open Sans'; padding: 15px; border: 0px; font-size: 18px; color: rgb(218, 213, 206); background-color: rgb(21, 22, 29); white-space: nowrap; width: auto; height: auto; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; display: block; visibility: visible; background-position: initial initial; background-repeat: initial initial;"> MAKE KICK-ASS REVIEWS AND CREATE AN AWESOME COMMUNITY </h1>
					<a href="/forums.html" data-ls="offsetxin:0;offsetyin:300px;durationin:2000;delayin:500;offsetxout:-50;durationout:1000;" target="_self" class="ls-s-1 button-medium" style="position: absolute; top: 213px; left: 502px; display: block; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; visibility: visible;">
					Visit the forums</a>
					<a href="/blog-isotope.html" target="_self"  data-ls="offsetxin:0;offsetyin:300px;durationin:2000;delayin:500;offsetxout:-50;durationout:1000;" class="ls-s-1 button-medium" style="position: absolute; top: 214px; left: 720px; display: block; opacity: 1; -webkit-transform: rotate(0deg) scale(1, 1); margin-left: 0px; margin-top: 0px; visibility: visible;">See the review post</a>
				</div>
			</div>
		</div>
		<!-- End Slider -->

		<div class=" container  normal-page sliderhome">
	    <div class="row">
	        <div class="span12">
	        	<div>
					<div class="template-wrapper">
						<div class="block span6 first">
							<div class="title-wrapper">
								<h3 class="widget-title">About game addict</h3>
								<div class="clear"></div>
							</div>
							<div class="wcontainer">
								<p><iframe src="//player.vimeo.com/video/80209061" frameborder="0" height="281" width="100%"></iframe></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis diam nec risus ultrices iaculis. Pellentesque non vulputate leo, eu dictum arcu. Donec interdum vulputate vulputate. Sed sodales elementum ipsum ut sagittis. Integer posuere lorem mattis, luctus nisi at, tristique quam.</p>
								<p>Integer aliquet tellus non nisi lacinia pretium. Phasellus a nulla ac metus tincidunt vulputate. Nullam quis diam at urna blandit dictum sed a lectus. Nunc ut tincidunt velit. Vivamus eleifend purus sit amet elit lacinia, ut venenatis quam rutrum. Aliquam et adipiscing felis. Aenean consequat scelerisque lectus, eget pellentesque urna sodales nec. In urna orci, faucibus vitae enim eget, ornare commodo nisi. Etiam tempor facilisis luctus. Quisque eleifend ante et lobortis aliquam. Nulla facilisi. Morbi volutpat, eros vitae faucibus ornare, neque mi imperdiet quam, viverra convallis turpis massa dapibus sapien. Vestibulum eu odio ultricies, facilisis odio vitae, consectetur enim. Aliquam facilisis ultricies lacus, id ultricies elit. Curabitur et sollicitudin metus. Cras adipiscing justo tristique posuere ornare. Aenean sit amet feugiat odio, a ultrices nunc. Donec diam nisi, vulputate id enim et, rutrum sagittis mi. Sed vitae justo ac eros convallis convallis at sit amet neque. Nam eu purus vehicula, dapibus quam quis, molestie libero. Nulla id tincidunt arcu.</p>
							</div>
						</div>
						<div class="block span6">
							<div class="title-wrapper">
								<h3 class="widget-title">Latest updates</h3>
								<div class="clear"></div>
							</div>
	            			<div class="wcontainer">
				   				<ul class="newsbv">
									<li class="newsbv-item-first">
										<div class="newsb-thumbnail">
									 		<a rel="bookmark" href="#">
												<img src="./img/defaults/305x305.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Fermentum sit amet congue sit amet</a></h4>
										<p class="post-meta"><i class="icon-calendar"></i> August 31, 2013 - <i class="icon-comment"></i> No comments</p>
										<p>Sed commodo, libero ut dignissim imperdiet, lorem nibh bibendum nisi, vel blandit est eros sit amet elit. Mauris nec arcu vel tellus aliquam congue. Mauris fermentum sem ut tortor ultricies dictum. Praesent at porttitor mauris. Curabitur pulvinar suscipit tortor venenatis […]</p>
										<div class="clear"></div>
									</li>

									<li class="newsbv-item">
										<div class="newsb-thumbnail">
									 		<a rel="bookmark" href="#">
												<img src="./img/defaults/75x75.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Etiam massa mauris fermentum a congue id</a></h4>
										<p class="post-meta">
										<i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 3 Comments</p>
										<div class="clear"></div>
									</li>

									<li class="newsbv-item">
										<div class="newsb-thumbnail">
											<a rel="bookmark" href="#">
												<img src="./img/defaults/75x75.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Curabitur lorem mauris dictum et tempus</a></h4>
										<p class="post-meta"><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 2 Comments</p>
										<div class="clear"></div>
									</li>

									<li class="newsbv-item">
										<div class="newsb-thumbnail">
											<a rel="bookmark" href="#">
												<img src="./img/defaults/75x75.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Morbi vel ipsum vel augue mattis ultricies non et mauris</a></h4>
										<p class="post-meta"><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 2 Comments</p>
										<div class="clear"></div>
									</li>

									<li class="newsbv-item">
										<div class="newsb-thumbnail">
											<a rel="bookmark" href="#">
												<img src="./img/defaults/75x75.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Duis lacinia nisi vel lorem scelerisque interdum</a></h4>
										<p class="post-meta"><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 2 Comments</p>
										<div class="clear"></div>
									</li>

									<li class="newsbv-item">
										<div class="newsb-thumbnail">
											<a rel="bookmark" href="#">
												<img src="./img/defaults/75x75.jpg">
												<span class="overlay-link"></span>
												<div class="clear"></div>
											</a>
										</div>
										<h4 class="newsb-title"><a rel="bookmark" href="#">Eget ultrices mauris rhoncus non</a></h4>
										<p class="post-meta"><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 5 Comments</p>
										<div class="clear"></div>
									</li>
				   				</ul>
								<div class="clear"></div>
							</div>
						</div>

						<div class="block span12 first">
							<div class="boxed full-width-section parallax_section">
						        <video autoplay="true" loop="true" preload="auto" class="slider-video" src="ADD-YOUR-VIDEO-HERE.webm">
	        						<source src="ADD-YOUR-VIDEO-HERE.webm" type="video/webm">
							        <source src="ADD-YOUR-VIDEO-HERE.mp4" type="video/mp4">
						        </video>
					        	<div class="light">
		        					<div class="block span12 first block-text_block ">
		        						<div class="mcontainer">
			        						<p><i class="icon-rocket"></i>&nbsp;Awesome Parallax and video backgrounds</p>
											<p>&nbsp;</p>
											<p><a href="#">Unleash your passion</a></p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>

						<div class="block block-carousel_block span12 first cf">
							<h3>Our sponsors</h3>
							<div class="list_carousel responsive wcontainer ">
								<div class="caroufredsel_wrapper">
									<ul id="foo5">
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
										<li><img alt="Alt text" src="./img/defaults/140x102.jpg"></li>
									</ul>
								</div>
								<div class="clear"></div>
	            				<a id="prev3" class="prev" href="#">&nbsp;</a>
	            				<a id="next3" class="next" href="#">&nbsp;</a>
	        				</div>
	            		</div>

	            		<div id="block-6" class="block block-text_block span12 first cf">
	            			<div class="title-wrapper">
		            			<h3 class="widget-title">Some of the game images</h3>
		            			<div class="clear"></div>
	            			</div>
	            			<div class="highlight-no-margin"></div>
	            		</div>

	            		<div class="clear"></div>
	            	</div>
                
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