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
									<a class="nav-link" href="#about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#utilities">Utilities</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#rarity">Rarity</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#roadmap">Roadmap</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#faq">FAQ</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link no-line" href="#">Collections</a>
									<ul class="background-gradient-dark sub-shadow">
										<li><a href="#" class="text-black">Rarible</a></li>
										<li><a href="#" class="text-black">OpenSea</a></li>
										<li><a href="#" class="text-black">LooksRare</a></li>
									</ul>
								</li>
								<li class="nav-item mt-2">
									<a class="btn btn-primary btn-gradient" href="#app" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>MINT</span></a>
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
		<div class="section full-height hide-over background-image-cover-bottom" style="background-image: url({{ asset('storage/images/background-top.png') }});">
			<div class="hero-center-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center align-self-center z-bigger parallax-fade-top">
							<h2 class="mt-3 mb-4 pb-3 font-weight-normal text-black">Extraordinary <span class="gradient-text">NFT</span></h2>
							<p class="mt-3 mb-4 pb-3 font-weight-normal text-black">
								This is it; the time has arrived! 
								The opportunity to make the future of decentralization a reality is yours. 
								It all starts with our NFT collection, which will embark you on a mythical journey through art, while giving you the freedom to choose what you want for the future of the D.A.O.
							</p>
							<a class="btn btn-primary btn-gradient mx-0 js-tilt" href="#buy" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24" data-gal="m_PageScroll2id" data-ps2id-offset="68" ><span>Fehu Token</span></a>
							<a class="btn btn-primary btn-gradient mx-0 js-tilt" href="#buy" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24" data-gal="m_PageScroll2id" data-ps2id-offset="68" ><span>Buy on OpenSea</span></a>
						</div>
					</div>
				</div>
			</div>
			<div id="particles-js" class="min-height-snd"></div>
		</div>	
	</div>

	<div class="section padding-top-big background-gradient-green-re" id="about">
		<div class="container">
			<div class="row" style="font-weight:400;">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">about</div>
						<h3 class="text-black">Our collection</h3>
					</div>
				</div>
				
				<div class="col-md-12">
					<p class="text-black">
						Our new NFT project on the Ethereum Blockchain, is challenging the current status quo and releases a collection where the assets are mintable with our own crypto token (FEHU), and feature utility from the get-go.
					</br></br>
					With a robust long-term vision revolving around empowering the community to build their own D.A.O and support their financial success, there are plenty of things to look forward to in 2022.
					</br></br>
					The Fehu D.A.O debuts with a mintable NFT collection capitalizing on the community’s yearning for utility. Their main purpose is to prove once and for all that NFTs are not just avatars, but the future of decentralization. 
					</p>
					<p class="text-black">
						Besides constant new releases and a story that takes shape before your eyes, everything you own comes with decision-making power. You get to build the Web 3.0 universe and a business alongside us, while enjoying infinite perks:
					</p>
				</div>
			</div>	
			<div class="row" style="padding-top:2rem">
				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/income.png') }}" alt="">
						<h5 class="text-black">Income</h5>
						<p class="text-black">NFT flipping and various other investment opportunities</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/tickets.png') }}" alt="">
						<h5 class="text-black">Ticket System</h5>
						<p class="text-black">Free tickets to high-profile events and festivals across the world</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/voting.png') }}" alt="">
						<h5 class="text-black">DAO</h5>
						<p class="text-black">Voting rights for future perks of your choice</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/key.png') }}" alt="">
						<h5 class="text-black">Owner privileges</h5>
						<p class="text-black">Early bird access to NFTs and crypto releases</p>
					</div>
				</div>
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="concept-box">
						<img class="mb-4" src="{{ asset('storage/images/event.png') }}" alt="">
						<h5 class="text-black">High Growth</h5>
						<p class="text-black">Networking events with other crypto enthusiasts</p>
					</div>
				</div>
				<p class="text-black" style="padding-bottom: 15px">If what you have read excites you as much as it excites us, you are already a FEHU. Put your wealth in motion and embark on our journey to the future! Stay true! Stay Fehu!</p>
				
			</div>
		</div>
	</div>

	<div class="section padding-top-big background-gradient-green" id="utilities">
		<div class="container">
			<div class="row" style="font-weight: 400;">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">utilities</div>
						<h3 class="text-black">Utilities</h3>
					</div>
				</div>
				
				<div class="col-md-12">
					<p class="text-black">
						Firstly, besides the perceived value of our NFTs given by the people, each NFT will be a unique access key for the holder. The power of each NFT is based on rarity, thus the rarer the NFT you hold, the higher the power and benefits that come with it. We will be using https://snapshot.org for our voting system as it proved most efficient.
					</p>
					<p class="text-black">
						Overall, all our NFTs have a core purpose, which is granting access to events ranging from entertainment to business/cultural, depending on the community’s desires.
						Increasingly rarer NFTs will bring holders access to the voting system, where they can pick which events, they would like to attend, or what direction should Fehu D.A.O move towards. Moreover, the higher the rarity of the NFT the more events you can attend on a yearly basis, ranging from small events to big events.
					</p>
					<p class="text-black">
						As for numbers, we are expecting during our first year to organize 1 event monthly, which is planned 1-3 months ahead based on the event size. The ticket claim will work as following based on rarity:
						<ul>
							<li class="text-black">3 claims a year for Common</li>
							<li class="text-black">5 claims a year for Rare</li>
							<li class="text-black">8 claims a year for Epic</li>
							<li class="text-black">12 claims a year for Legendary and Mythic</li>
						</ul>
						<p class="text-black">
							These numbers are subject to change based on budget, # of holders and market cap. This is currently just an estimate.
						</p>
					</p>
					<p class="text-black">
						Early bird access to NFTs and crypto releases:
					</p>
					<p class="text-black">
						High value NFT and FehuToken holders, will have early access to the minting platform for 30 out of 100 NFTs released every month.
					</p>
				</div>
			</div>	
		</div>
	</div>

	<div class="section padding-top-big background-gradient-green-re" style="padding-bottom: 20px;" id="rarity">
		<div class="section background-image-cover" style="background-image: url({{ asset('storage/images/background-blue-1.png') }});">
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-self-center" data-scroll-reveal="enter left move 50px over 0.6s after 0.3s">
						<h4 class="text-black">Collection Rarity Distribution</h4>
						<p class="lead text-black">Each collection will be capped at 100 pieces. The rarity distribution will be as follows:</p>
						<ul>
							<li class="text-black">48 Commons</li>
							<li class="text-black">25 Rares</li>
							<li class="text-black">15 Epics</li>
							<li class="text-black">8 Legendaries</li>
							<li class="text-black">4 Mythics</li>
						</ul>
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
						<h4 class="text-black">What each rarity brings</h4>
						<p class="text-black">	
							Each rarity level will bring incrementally better rewards.
							<ul>
								<li class="text-black">Common NFTs will benefit from our event system utility</li>
								<li class="text-black">Rare NFTs will be able to also vote on what events our holders could attend</li>
								<li class="text-black">Epic NFTs will gives you double the voting power including more potential tickets</li>
								<li class="text-black">Legendary NFTs will grant you everything mentioned above including voting rights for the future of the Fehu D.A.O and V.I.P tickets to the events.</li>
								<li class="text-black">Mythical NFT holders will have all the privileges, and decision-making power regarding budgeting (marketing, project development, games, etc.).</li>
							</ul>
						</p>
						<p class="text-black">	
							Everything will be fully transparent from voting results to the course of action. The information will be readily available to everyone on all our platforms (Discord, Twitter, Telegram).
						</p>
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
						<h3 class="text-black">Making the most<br>out of unused.</h3>
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
								<h6 class="text-black">Phase 1</h6>
								<p class="text-black">First collection NFT launched on OpenSea</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box current-road background-light-green-1 roadmap-shadow">
								<p class="mb-4"><span>Current</span></p>
								<h6 class="text-black">Phase 2</h6>
								<p class="text-black">When over 50% of first collection NFTs are sold, we will organize our DAO on snapshot.org</p>
							</div>	
						</div>												
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-black">Phase 3</h6>
								<p class="text-black">New collection added and mintable on our website using FehuToken.</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-black">Phase 4</h6>
								<p class="text-black">Planning of community events, establishing parternships for musical/sport events</p>
							</div>	
						</div>											
						<div class="item blue-gradient"> 						 
							<div class="roadmap-box next-road background-light-green-1">
								<p class="mb-4 plan"><span>Plan</span></p>
								<h6 class="text-black">Phase 5</h6>
								<p class="text-black">New monthly collections release with characters based on the Celtic Zodiac</p>
							</div>	
						</div>																
					</div>
				</div>
				<div class="col-md-12 padding-top">
					<div class="title-wrap text-center">
						<h5 class="text-black">How it works:</h5>
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
	
	<div class="section padding-top-big pb-4  background-gradient-green-re" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">faq</div>
						<h3 class="text-black">Questions and Answers</h3>
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
								<a class="text-black background-light-green-1" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									How many NFTs are mintable?
								</a>
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">How many NFTs are mintable?</h6>
									<p class="text-black">You can mint a Fehu NFT for a limited time before the next collection is being released. There will be a new collection comprising of 100 unique pieces every month.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingTwo">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									How to get access to the pre-sale?
								</a>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">How to get access to the pre-sale?</h6>
									<p class="text-black">You can do that by owning Fehu tokens which will enable you to mint upon every collection release.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingThree">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What's the story behind the Fehu NFT characters?
								</a>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">What's the story behind the Fehu NFT characters?</h6>
									<p class="text-black">All our characters are inspired from the Celtic mythology and are representative of human traits. Each month bringing a new “Guardian Animal” from the Gaelic Zodiac.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingFour">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What is so special about this NFT collection?
								</a>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">	What is so special about this NFT collection?</h6>
									<p class="text-black">Each NFT will have unique traits and meaning while providing metadata with on-chain storage of media. Fehu NFTs are all about utility, each NFT bringing different levels of decision power within the Fehu DAO and access to activities through the proof of ownership associated with smart contracts. They will act as a key for you to attend worldwide events and tailor the journey of our organization.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingSix">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Where can I interact with other Fehu NFT collectors?
								</a>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">Where can I interact with other Fehu NFT collectors?</h6>
									<p class="text-black">We’re always hanging out on our Fehu NFT discord channel and fehu token telegram :)
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingSeven">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									What blockchain are these NFTs minted on?
								</a>
							</div>
							<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black"> What blockchain are these NFTs minted on?</h6>
									<p class="text-black">NFTs are minted on ERC-721 compliant contracts deployed on the Ethereum blockchain. This is the "gold standard" and most used format for digital collectibles.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingEight">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									Can you rent out your Fehu NFT?
								</a>
							</div>
							<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">Can you rent out your Fehu NFT?</h6>
									<p class="text-black">To redeem its benefits, we must first be able to verify ownership on the blockchain when the claim is made. Once everything is confirmed and the benefits rolling, it can be rented.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingTwelve">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
									What traits does Fehu NFT have?
								</a>
							</div>
							<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
								<div class="card-body">
									<h6 class="text-black">What traits does Fehu NFT have?</h6>
									<p class="text-black">The Fehu Collection has over 6 unique traits and hundreds of possible combinations. The collection is designed by hand and digitized by our artists.
									</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
				<div class="col-md-6 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div id="accordion-snd" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingNine">
								<a class="text-black background-light-green-1" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
									How do I purchase a Fehu NFT?
								</a>
							</div>

							<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">How do I purchase a Fehu NFT?</h6>
									<p class="text-black">To purchase a Fehu NFT from a secondary market, you will first need to own enough ETH on a crypto wallet like MetaMask, Portis or WalletConnect to cover the collectible’s price and the afferent gas fee. Once that is covered, you will browse the collectibles uploaded for sale on the marketplace (OpenSea), connect your wallet to it and proceed purchasing. </p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingTen">
								<a class="text-black background-light-green-1" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
									Can I resell my Fehu NFT?
								</a>
							</div>
							<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">Can I resell my Fehu NFT?</h6>
									<p class="text-black">Yes! Fehu Nfts can be resold on NFT marketplaces such as OpenSea or Rarible. If a Fehu NFT is resold there will be a 5% royalty fee to Fehu NFT DAO. The Cash Flow will be 100% transparent and allocated according to the Fehu Token and NFT holders votes.</p>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-header" id="headingEleven">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
									Will the NFTs be sold on open marketplaces?
								</a>
							</div>
							<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">Will the NFTs be sold on open marketplaces?</h6>
									<p class="text-black">Primary sales of Fehu NFTs will be on FehuNFT.com from minting.
										FEHU collection will appear on secondary marketplaces like OpenSea, Rarible and Looksrare for resale purchase. FEHU NFTs will adhere to the ERC-721 standard.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingThirteen">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
									How many Fehu NFTs can be minted per wallet?
								</a>
							</div>
							<div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black"> How many Fehu NFTs can be minted per wallet?</h6>
									<p class="text-black">There is no limit per wallet. If you are quick enough, you can snatch as many as you can. However, there will be only 1 Fehu NFT available for one transaction hence you will be subject to multiple gas fees.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingFourteen">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
									Can I purchase Fehu NFTs with my credit card?
								</a>
							</div>
							<div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">Can I purchase Fehu NFTs with my credit card?</h6>
									<p class="text-black">Currently it is not possible. To purchase a Fehu NFT you will need to own a crypto wallet with Fehu tokens for minting or ETH to buy it from secondary markets.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingFifteen">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
									How do I download and install MetaMask?
								</a>
							</div>
							<div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">How do I download and install MetaMask?</h6>
									<p class="text-black">Go on the <a href="https://metamask.io/download/">metamask</a> official website and download the MetaMask extension for browser.
									</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingSixteen">
								<a class=" text-black background-light-green-1" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
									How Many Rewards Does a Token Have?
								</a>
							</div>
							<div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion-snd">
								<div class="card-body">
									<h6 class="text-black">How Many Rewards Does a Token Have?</h6>
									<p class="text-black">
										You can verify the number of prerogatives a token has by visiting the specific token’s page on fehu.nft and checking the redemption count as marked by our redemption key symbol. Fehu NFT redemption counts are also available on OpenSea under the token’s properties.
									</p>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>	
		</div>
	</div>
	
	<div class="section background-light-green-1">
		<div class="section padding-top-big background-image-cover" style="background-image: url({{ asset('storage/images/background-footer.png') }});">
			<div class="container padding-bottom-big">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h6 class="text-black mb-4">Risk Disclaimer</h6>
						<p class="text-left text-black mb-0"><small>* The trading of alternative cryptocurrencies has potential rewards, and it also has potential risks involved. Trading may not be suitable for all people. Anyone wishing to invest should seek his or her own independent financial or professional advice.</small></p>
					</div>
					<div class="col-lg-5 mt-4">
						<ul class="footer-list">
							<li class="text-left"><a class="text-black" href="#">concept</a></li>
							<li class="text-left"><a class="text-black" href="#">roadmap</a></li>
							<li class="text-left"><a class="text-black" href="#">buy tokens</a></li>
							<li class="text-left"><a class="text-black" href="#">team</a></li>
							<li class="text-left"><a class="text-black" href="#">FAQ</a></li>
							<li class="text-left"><a class="text-black" href="#">download app</a></li>
							<li class="text-left"><a class="text-black" href="#">contact</a></li>
							<li class="text-left"><a class="text-black" href="#">news</a></li>
							<li class="text-left"><a class="text-black" href="#">overall output</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section py-4 background-dark-blue-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 footer text-center text-lg-left">
						<p>FehuTeam© 2022</p>
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