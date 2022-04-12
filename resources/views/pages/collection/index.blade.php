@extends('layout.master')
@section('content')
    <div class="loader blue">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000.svg xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
			<rect x="0" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="10" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0.2s" dur="0.6s" repeatCount="indefinite" />
			</rect>
			<rect x="20" y="0" width="4" height="10" fill="#333">
				<animateTransform attributeType="xml"
				attributeName="transform" type="translate"
				values="0 0; 0 20; 0 0"
				begin="0.4s" dur="0.6s" repeatCount="indefinite" />
			</rect>
		</svg>	
	</div>
						

	
	<!-- Nav and Logo
	================================================== -->
	
	<div id="menu-wrap" class="menu-back cbp-af-header dark">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light mx-lg-0">
						<a class="navbar-brand" href="{{ route('app.index') }}"><img src="{{ asset('storage/images/f_vectorial222.png') }}" alt="" width="65" height="44">Fehu NFT</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<span class="menu-icon__line menu-icon__line-left"></span>
								<span class="menu-icon__line"></span>
								<span class="menu-icon__line menu-icon__line-right"></span>
							</span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="#buy">Buy Tokens</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#concept">Concept</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#roadmap">Roadmap</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#team">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#faq">FAQ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link no-line" href="#">Variants</a>
									<ul class="background-gradient-dark sub-shadow">
										<li><a href="index.html">From developers</a></li>
										<li><a href="index-11.html">Countdown gradient</a></li>
										<li><a href="index-2.html">Crowdsale</a></li>
										<li><a href="index-9.html">Azure blockchain - animated</a></li>
										<li><a href="index-3.html">From developers - dark</a></li>
										<li><a href="index-4.html">Crowdsale - dark</a></li>
										<li><a href="index-5.html">From developers - animated</a></li>
										<li><a href="index-10.html" class="active-subnav">Countdown gradient anime</a></li>
										<li><a href="index-6.html">Crowdsale - animated</a></li>
										<li><a href="index-7.html">From developers - anime dark</a></li>
										<li><a href="index-8.html">Crowdsale - animated dark</a></li>
									</ul>
								</li>
								<li class="nav-item mt-2">
									<a class="btn btn-primary btn-gradient" href="#app" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>ICO Wallet</span></a>
								</li>
							</ul>
						</div>
					</nav>				
				</div>
			</div>
		</div>
	</div>

	
	<!-- Primary Page Layout
	================================================== -->

	<div class="section full-height hide-over background-light-green-1 background-image-cover" style="background-image: url({{ asset('storage/images/background-blue.png') }});">
		<div class="section full-height hide-over background-image-cover-bottom" style="background-image: url({{ asset('storage/images/background-home.png') }});">
			<div class="hero-center-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center align-self-center z-bigger parallax-fade-top">
							<div class="countdown gradient-ver">
								<div class="section">
									<ul>
										<li><span id="days"></span>days</li>
										<li><span id="hours"></span>hours</li>
										<li><span id="minutes"></span>minutes</li>
										<li><span id="seconds"></span>seconds</li>
									</ul>
								</div>
							</div>
							<p class="mt-3 mb-4 pb-3 font-weight-normal text-white">The time of great changes.</p>
							<a class="btn btn-primary btn-gradient mx-0 js-tilt" href="#buy" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24" data-gal="m_PageScroll2id" data-ps2id-offset="68" ><span>Buy Tokens</span></a>
						</div>
					</div>
				</div>
			</div>
			<div id="particles-js" class="min-height-snd"></div>
		</div>	
	</div>

	<div class="section z-bigger padding-top background-gradient-green" id="buy">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center mt-4" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<a class="btn btn-primary btn-gradient js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Buy Tokens 35% Off</span></a>
				</div>
				<div class="col-md-12 mt-5" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<p class="text-center text-white">payment methods</p>
				</div>
				<div class="col-md-12 mt-1" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<ul class="payment-methods text-white">
						<li><img src="{{ asset('storage/images/bitcoin.png') }}" alt=""><p>bitcoin</p></li>
						<li><img src="{{ asset('storage/images/etherium-light.png') }}" alt=""><p>ethereum</p></li>
						<li><img src="{{ asset('storage/images/litecoin.png') }}" alt=""><p>litecoin</p></li>
						<li><img src="{{ asset('storage/images/usd-light.png') }}" alt=""><p>US Dollars</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section padding-top-big">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="logo-wrap">
							<li><img src="{{ asset('storage/images/logos/1-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/2-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/3-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/4-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/5-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/6-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/7-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/8-light.png') }}" alt=""></li>
							<li><img src="{{ asset('storage/images/logos/9-light.png') }}" alt=""></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</div> 

	<div class="section padding-top-big background-gradient-green-re" id="concept">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">concept</div>
						<h3 class="text-white">We are the only global<br>mining operation.</h3>
						<p class="color-pr">Lend your digital assets to others for trading and earn an interest through margin trading loans.</p>
					</div>
				</div>
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/con-1.svg') }}" alt="">
						<h5 class="text-white">Independent</h5>
						<p class="text-grey">Our mobility concept enables super-simple transportation and worldwide deployment.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/con-2.svg') }}" alt="">
						<h5 class="text-white">Fully Scalable</h5>
						<p class="text-grey">Mobile and efficient low-cost hardware and optimized propietary management.</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/con-3.svg') }}" alt="">
						<h5 class="text-white">High Growth</h5>
						<p class="text-grey">Our reinvestment strategy enables us to quickly grow our fleet of mobile units.</p>
					</div>
				</div>
				<div class="col-md-12 padding-top-bottom" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="line-sep"></div>
				</div>
			</div>	
		</div>
		<div class="section background-image-cover" style="background-image: url({{ asset('storage/images/background-blue-1.png') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-self-center" data-scroll-reveal="enter left move 50px over 0.6s after 0.3s">
						<h4 class="text-white">Creating a win-win<br>for everyone</h4>
						<p class="lead text-grey">An exciting business opportunity should come with equally exciting rewards.</p>
						<p class="text-grey">Early adopters can earn up to a 200% bonus based on the final token value should we reach our 100 mil tokens hardcap during our planned token sale event.</p>
						<a class="btn btn-primary btn-gradient mt-4 mx-0 js-tilt" href="#roadmap" data-gal="m_PageScroll2id" data-ps2id-offset="68" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Roadmap</span></a>
					</div>
					<div class="col-md-5 offset-md-1 order-first order-md-last mb-4 mb-md-0">
						<div class="img-wrap">
							<img src="{{ asset('storage/images/1.svg') }}" alt="">
						</div>
					</div>
				</div>	
			</div>	
			<div class="container">
				<div class="row">
					<div class="col-md-12 my-4"></div>
				</div>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-5 mb-4 mb-md-0">
						<div class="img-wrap">
							<img src="{{ asset('storage/images/2.svg') }}" alt="">
						</div>
					</div>
					<div class="col-md-6 offset-md-1 align-self-center" data-scroll-reveal="enter right move 50px over 0.6s after 0.3s">
						<h4 class="text-white">More than just a price jump</h4>
						<p class="text-grey">The Coeus token sale events are unique as they offer tiered bonuses which include not only an increasing token price but also lifetime discounts, a commitment from us to support our tokens liquidity and future value, as well as access to future pre-pre-Token sale events.</p>
						<a class="btn btn-primary btn-gradient mt-4 mx-0 js-tilt" href="#buy" data-gal="m_PageScroll2id" data-ps2id-offset="120" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Buy Tokens</span></a>
					</div>
				</div>	
			</div>	
		</div>	
	</div>

	<div class="section padding-top-big pb-4 background-gradient-green" id="roadmap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">roadmap</div>
						<h3 class="text-white">Making the most<br>out of unused.</h3>
						<p class="color-pr">The Coeus token sale events are unique as they offer tiered bonuses which include increasing token price and lifetime discounts.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="customNavigation">
						<a class="prev-roadmap dark"><i class="fa fa-angle-left"></i></a>
						<a class="next-roadmap dark"><i class="fa fa-angle-right"></i></a>
					</div>
					<div id="owl-roadmap" class="owl-carousel owl-theme">											
						<div class="item blue-gradient">						 
							<div class="roadmap-box background-light-green-1">
								<p class="mb-4 achieved"><span>Achieved</span></p>
								<h6 class="text-white">Dec 2017.</h6>
								<p class="text-grey">Start of Development</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box current-road background-light-green-1 roadmap-shadow">
								<p class="mb-4"><span>Current</span></p>
								<h6 class="text-white">Apr 2018.</h6>
								<p class="text-grey">Token Sale Start</p>
							</div>	
						</div>												
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-white">May 2018.</h6>
								<p class="text-grey">Blockchain Dev Starts</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-white">Oct 2018.</h6>
								<p class="text-grey">Exchange Beta Launch</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-white">Jan 2019.</h6>
								<p class="text-grey">Expanded Licensing</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-white">Mar 2019.</h6>
								<p class="text-grey">Debit Card Launch</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-white">May 2019.</h6>
								<p class="text-grey">Partnership For Future</p>
							</div>	
						</div>							
					</div>
				</div>
				<div class="col-md-12 padding-top">
					<div class="title-wrap text-center">
						<h5 class="text-white">How it works:</h5>
					</div>
				</div>
				<div class="col-md-8 offset-md-2" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="video-section video-shadow">
						<figure class="vimeo"> 
							<a href="https://player.vimeo.com/video/239566739">
								<img src="{{ asset('storage/images/video-green.jpg') }}"" alt="image"/>
							</a>
						</figure>
					</div>
				</div>
			</div>	
		</div>
	
	</div>

	<div class="section padding-top-big pb-4 background-gradient-green-re" id="app">
		<div class="section background-image-cover" style="background-image: url({{ asset('storage/images/background-blue-2.png') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-wrap text-center">
							<div class="back-title">wallet</div>
							<h3 class="text-white">Control your future<br>wealth.</h3>
							<p class="color-pr">All-in-one app to secure, manage and exchange blockchain assets.</p>
						</div>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-self-center" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
						<h4 class="text-white">It begins with total security.</h4>
						<p class="lead text-grey">View, manage and sort all your tokens easily. Providing fast coin management in your local currency.</p>
						<ul class="app-list mb-5 mt-4">
							<li class="text-grey">Smart by design</li>
							<li class="text-grey">Easy Coin Management</li>
							<li class="text-grey">Instantly import your wallet</li>
							<li class="text-grey">Detailed transaction info</li>
							<li class="text-grey">Custom fees and limits</li>
						</ul>
						<a class="btn btn-primary btn-gradient mx-0 js-tilt" href="#" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Download App</span></a>
						<a class="app-btn ml-4" href="#"><i class="fa fa-apple"></i></a>
						<a class="app-btn ml-2" href="#"><i class="fa fa-android"></i></a>
						<a class="app-btn ml-2" href="#"><i class="fa fa-windows"></i></a>
					</div>
					<div class="col-md-6 order-first order-md-last mb-4 mb-md-0">
						<div class="img-wrap">
							<img src="{{ asset('storage/images/app-blue.png') }}" alt="">
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</div>

	<div class="section padding-top-big pb-4 background-gradient-green" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">team</div>
						<h3 class="text-white">Established since<br>2009 (Belgrade)</h3>
						<p class="color-pr">We're a close team of creatives, designers & developers who work together.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-1">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t5.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Alex Andrews</h6>
						<p>Officer & Founder</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-2">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t6.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Marco Kulis</h6>
						<p>Development manager</p>
						<a class="app-btn" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-3">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t7.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Anna Furius</h6>
						<p>Senior Developer</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-md-12 padding-top-small">
					<div class="title-wrap text-center mb-5">
						<h5 class="text-white">Advisory team</h5>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-4">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t1.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Frank Furius</h6>
						<p>Managing Director</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-5">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t2.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Aca Pesic</h6>
						<p>Founder & CEO</p>
						<a class="app-btn" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-6">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t3.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Ela Dobric</h6>
						<p>Executive Director</p>
						<a class="app-btn" href="#"><i class="fa fa-git"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
				<div class="col-xl-3 col-md-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.9s">
					<div class="team-wrap dark">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-7">
							<div class="team-img-wrap rounded dark js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{ asset('storage/images/t4.jpg') }}"" alt="">
							</div>
						</a>
						<h6>Milena Dobric</h6>
						<p>Founder & CEO</p>
						<a class="app-btn" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn ml-3" href="#"><i class="fa fa-git"></i></a>
					</div>
				</div>
			</div>	
		</div>
	</div>

	<!-- Modal Team 1-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-1" tabindex="-1" role="dialog" aria-labelledby="team-modal-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t5-modal.jpg') }}))></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Alex Andrews</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Team 2-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-2" tabindex="-1" role="dialog" aria-labelledby="team-modal-2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t6-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Marco Kulis</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 3-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-3" tabindex="-1" role="dialog" aria-labelledby="team-modal-3" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t7-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Anna Furius</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 4-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-4" tabindex="-1" role="dialog" aria-labelledby="team-modal-4" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t1-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Frank Furius</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 5-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-5" tabindex="-1" role="dialog" aria-labelledby="team-modal-5" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t2-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Aca Pesic</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 6-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-6" tabindex="-1" role="dialog" aria-labelledby="team-modal-6" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t3-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Ela Dobric</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	

	<!-- Modal Team 7-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-7" tabindex="-1" role="dialog" aria-labelledby="team-modal-7" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{ asset('storage/images/t4-modal.jpg') }})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">Milena Dobric</h3>
								<p class="lead">Officer & Founder</p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people.</p>
								<ul class="app-list mt-4">
									<li>Lead marketing</li>
									<li>Run logistics strategy</li>
									<li>Advised software</li>
								</ul>
								<p class="mt-4 mb-0"><small>html</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 83%" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>css</small></p>
								<div class="progress mt-1 mb-2">
									<div class="progress-bar" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<p class="mb-0"><small>php</small></p>
								<div class="progress mt-1 mb-4">
									<div class="progress-bar" style="width: 93%" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>		
	

	<div class="section padding-top-big pb-4  background-gradient-green-re" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">faq</div>
						<h3 class="text-white">Questions and Answers</h3>
						<p class="color-pr">Listed questions and answers, all supposed to be commonly asked in some context, and pertaining to a particular topic.</p>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div id="accordion" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingOne">
								<a class="text-white background-light-green-1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What exactly is your token?
								</a>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-white">What exactly is your token?</h6>
									<p class="text-grey">Token is a community of people who want to mine cryptocurrency profitably by combining resources to achieve savings on equipment and ultra-low-cost electricity.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingTwo">
								<a class="collapsed text-white background-light-green-1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									What’s your overall strategy?
								</a>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-white">What’s your overall strategy?</h6>
									<p class="text-grey">Our strategy is very straightforward: 1) raise funds, 2) leverage those funds to procure the best mining equipment and other necessities at the lowest possible prices, 3) set up the hardware in a suitable facility; 4) start mining; 5) distribute what we mine.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingThree">
								<a class="collapsed text-white background-light-green-1" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is bitcoin?
								</a>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-white">What is bitcoin?</h6>
									<p class="text-grey">Bitcoin is a cryptocurrency and worldwide payment system. It is the first decentralised digital currency, as the system works without a central bank or single administrator.</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-6 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div id="accordion-snd" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingFour">
								<a class="text-white background-light-green-1" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
									What is blockchain?
								</a>
							</div>

							<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-white">What is blockchain?</h6>
									<p class="text-grey">A blockchain is the technology on which cryptocurrency is based. A blockchain is basically a continuously growing list of records called blocks that are linked and secured using cryptography. </p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingFive">
								<a class="collapsed text-white background-light-green-1" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What is cryptocurrency?
								</a>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-white">What is cryptocurrency?</h6>
									<p class="text-grey">A cryptocurrency is a digital asset designed to work as a medium of exchange that uses cryptography to secure its transactions, to control the creation of additional units, and to verify the transfer of assets.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingSix">
								<a class="collapsed text-white background-light-green-1" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How much should I invest?
								</a>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-white">How much should I invest?</h6>
									<p class="text-grey">Cryptocurrency mining is not without risk, and we are open and candid about those risks in our White Paper.</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>	
		</div>
	</div>
	
	
	<div class="section background-gradient-green" id="contact">
		<div class="section padding-top-bottom-big background-image-cover" style="background-image: url({{ asset('storage/images/background-3.png') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-wrap text-center">
							<div class="back-title">contact</div>
							<h3 class="text-white">Always ready to work</h3>
							<p class="color-pr">Get in touch.</p>
						</div>
					</div>
				</div>	
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-3" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
						<div class="contact-det text-center">
							<img src="{{ asset('storage/images/contact-1.svg') }}" alt="">
							<h6 class="text-white">Phone</h6>
							<p class="text-grey">+54 12 346 7826</p>
						</div>
					</div>
					<div class="col-md-3 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
						<div class="contact-det text-center">
							<img src="{{ asset('storage/images/contact-2.svg') }}" alt="">
							<h6 class="text-white">Email</h6>
							<p class="text-grey">office@coeus.ico</p>
						</div>
					</div>
					<div class="col-md-3 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
						<div class="contact-det text-center">
							<img src="{{ asset('storage/images/contact-3.svg') }}" alt="">
							<h6 class="text-white">Address</h6>
							<p class="text-grey">1093 Flushing Ave, NY</p>
						</div>
					</div>
				</div>
				<form id="contact-form" class="mt-5" method="post" action="contact.php" role="form" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<div class="messages text-center"></div>
						</div>
					</div>
					<div class="controls form-on-blue">
						<div class="row justify-content-center">
							<div class="col-md-4">
								<div class="form-group text-center">
									<input id="form_name" type="text" name="name" class="form-control text-center" placeholder="Enter your first name *" required="required" data-error="First name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-4 mt-3 mt-md-0">
								<div class="form-group text-center">
									<input id="form_lastname" type="text" name="surname" class="form-control text-center" placeholder="Enter your last name *" required="required" data-error="Last name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-4 mt-3">
								<div class="form-group text-center">
									<input id="form_email" type="email" name="email" class="form-control text-center" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-4 mt-3">
								<div class="form-group text-center">
									<input id="form_phone" type="tel" name="phone" class="form-control text-center" placeholder="Enter your phone">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-md-8 mt-3">
								<div class="form-group text-center">
									<textarea id="form_message" name="message" class="form-control text-center" placeholder="Your message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
									<div class="help-block with-errors textarea-error"></div>
								</div>
							</div>
							<div class="col-md-8 mt-3 text-center">
								<input type="submit" class="btn btn-primary btn-send text-center" value="Send message">
							</div>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
	
	<div class="section background-light-green-1">
		<div class="section padding-top-big background-image-cover" style="background-image: url({{ asset('storage/images/background-footer-blue.png') }});">
			<div class="container padding-bottom-big">
				<div class="row justify-content-between">
					<div class="col-lg-4">
						<h6 class="text-white mb-4">Stay tunned:</h6>
						<div class="suscribe form-on-blue">
							<input class="form-control text-left" placeholder="Enter your email" type="text" name="name" />
							<button type="submit" class="btn btn-primary btn-gradient m-0 js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>subscribe</span></button>
						</div>
						<p class="text-left text-white mb-0"><small>* we promise that we won´t spam you, never.</small></p>
					</div>
					<div class="col-lg-5 mt-4">
						<ul class="footer-list">
							<li class="text-left"><a class="text-white" href="#">concept</a></li>
							<li class="text-left"><a class="text-white" href="#">roadmap</a></li>
							<li class="text-left"><a class="text-white" href="#">buy tokens</a></li>
							<li class="text-left"><a class="text-white" href="#">team</a></li>
							<li class="text-left"><a class="text-white" href="#">FAQ</a></li>
							<li class="text-left"><a class="text-white" href="#">download app</a></li>
							<li class="text-left"><a class="text-white" href="#">contact</a></li>
							<li class="text-left"><a class="text-white" href="#">news</a></li>
							<li class="text-left"><a class="text-white" href="#">overall output</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section py-4 background-dark-blue-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 footer text-center text-lg-left">
						<p>Copyright © 2018, Coeus. Template made by <a href="https://themeforest.net/user/ig_design/portfolio?ref=IG_design">IG Design</a></p>
					</div>
					<div class="col-lg-6 footer mt-4 mr-auto mt-lg-0 mr-lg-0 text-center text-lg-right">
						<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-twitter"></i></a>
						<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-facebook"></i></a>
						<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-git"></i></a>
						<a class="app-btn mx-2 mr-lg-3" href="#"><i class="fa fa-pinterest-p"></i></a>
						<a class="app-btn mx-2 mr-lg-0" href="#"><i class="fa fa-paper-plane"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-to-top light">to top</div>
@endsection

@section('scripts')
    {!! Html::script('assets/build/js/plugins.js') !!}
    {!! Html::script('assets/build/js/custom.js') !!}
    {!! Html::script('assets/build/js/particles-dark.js') !!}
@stop