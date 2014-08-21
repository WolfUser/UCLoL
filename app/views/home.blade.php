@extends('layouts.master')

@section('content')
<div class="container">
		<div class="row">
				<div class="span12">
					<div class="template-wrapper">
						<div class="block span8 first cf">
							<div id="block-2" class="block block-news_blog_style_block span8 first cf">
								@foreach($news as $post)
								<div class="blog-post">
									<div class="blog-image">
										<a href="blog-post.html"><img src="{{{ $post->img_url }}}"></a>
										<div class="blog-date">
											<span class="date">{{{ $post->created_at->format('M') }}} <br> {{ $post->created_at->format('d') }}</span>
											<div class="plove"></div>
										</div>
										<!-- blog-rating -->
									</div>
									<!-- blog-image -->
									<div class="blog-content">
										<h2><a href="blog-post.html"> {{{ $post->title }}} </a></h2>
										<p>{{{ $post->text }}}</p>
									</div>
									<!-- blog-content -->
									<div class="blog-info">
										<div class="post-pinfo">
											<span class="icon-user"></span> <a data-original-title="View" all="" posts="" by="" admin="" data-toggle="tooltip" href="#">{{{ $post->author }}}</a> &nbsp;
										</div>
										<!-- post-pinfo -->
										<a href="#" class="button-small">Read more</a>
										<div class="clear"></div>
									</div>
									<!-- blog-info -->
								</div>
								@endforeach
						</div>
					</div>
						<!-- Sidebar -->
						<div class="block span4 cf">
							<div>
								<div class="widget">
									<div class="nextmatch_widget">
										<div class="title-wrapper">
											<h3 class="widget-title">Next Team Match</h3>
											<div class="clear"></div>
										</div>
										<div class="wcontainer">
											<a href="#" title="Game Addict vs Fnatic - Friendly">
												<div class="nextmatch_wrap">
													<img src="./img/defaults/140x102.jpg" class="clan1">
													<img src="./img/defaults/140x102.jpg" class="clan2">
													<div class="clear"></div>
													<div class="nm-clans navbar-inverse">
														<div class="r-home-team">
															<span>TBD</span>
														</div>
														<div class="versus">VS</div>
														<div class="r-opponent-team">
															<span>TBD</span>
														</div>
														<div class="clear"></div>
													</div>
													<div class="nm-date">
														September 13th, 2014, <span>TBD</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>

								<div class="widget">
									<div class="title-wrapper">
										<h3 class="widget-title">Latest matches</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<ul class="clanwar-list">
											<li>
												<ul class="tabs">
													<li class="selected">
														<a href="#game-4" title="League of Legends">LoL</a>
														<div class="clear"></div>
													</li>
												</ul>
												<div class="clear"></div>
											</li>
											<li class="clanwar-item game-4">
												<a href="#" title="League of Legends - Sunday fun">
													<div class="wrap">
														<div class="upcoming">Upcoming</div>
														<div class="match-wrap">
															<div class="home-team">TBD</div>
															<span class="vs">vs.</span>
															<div class="opponent-team">
																TBD
															</div>
															<div class="clear"></div>
														</div>
														<div class="date">LoL - September 13, 2014, TBD</div>
														<div class="clear"></div>
													</div>
												</a>
											</li>
					
										</ul>
									</div>
								</div>
								<!-- This is to be used to get our page on here :D!
								<div class="widget">
									<div class="title-wrapper">
										<h3 class="widget-title">Find us on facebook!</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<div class="textwidget">
											<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fthemeforest&width=330&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true&appId=178829182171244" style="border:none; overflow:hidden; width:100%; height:290px;" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
										</div>
									</div>
								</div> -->
							</div>
							<!-- Sidebar -->
						</div>
					</div>
				</div>
			</div>
		</div>

</div>

@stop