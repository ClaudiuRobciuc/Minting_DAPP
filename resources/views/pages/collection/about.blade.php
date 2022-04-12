@extends('layout.old_master')
@section('content')
<!-- Page Content -->
<section class="py-5">
    <div class="container" style="display:block" id="top">
        <div class="row">
            <div class="col-md-12">
                <h1 class="banner" style="font-weight:700; padding: 10px">Extraordinary <span class="gradient-text">NFT</span></h1>
            </div>
            <div class="col-md-6 order-1">
                <div class="row" style="margin-top:20%">
                    <div class="col-md-12" style="text-align: center; font-weight: 700;">
                        <p>
                            This is it; the time has arrived! The opportunity to make the future of decentralization a reality is yours. 
                            It all starts with our NFT collection, which will embark you on a mythical journey of art and glory, while giving you the freedom to choose what you want for the future of our organization.
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <a class="btn btn-grad btn-grad-purple" target="_blank" href="https://fehutoken.com" role="button">Fehu Token</a>
                    </div>
                    <div class="col-md-5">
                        <a class="btn btn-grad btn-grad-white" href="#" role="button">View on OpenSea</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('storage/images/Heading.png') }}" width="100%" height="100%" alt="Flowers in Chania">      
            </div>
            
        </div>
    </div>
    <hr class="solid">
    <img src="{{ asset('storage/images/linear-knot-divider.png') }}" class="divider"> 
    <div class="container" style="display:block" id="collection">
        <h1 class="font-weight-light text-center">About our collection</h1>
        </br>
        <p>
            New NFT project on the Ethereum Blockchain, the Fehu D.A.O. is making promises to break the mold and release a collection where the assets held are more important than the art as it appears.
        </br></br>
            With long-term goals in mind, that support the financial success of this community, many aspects of the collection are worth looking out for throughout 2022.
        </br></br>
            The Fehu D.A.O is an NFT mint collection with a community that believes in the power and utility of NFTs. The aim is to remind the world of how useful NFTs are meant to be, more than just a mean of finding an avatar or profile picture.
        </p>
        <p>
            Our collection is based on the celtic zodiac.</br>
            Besides constant new releases and a story that takes shape before your eyes, everything you own comes with decision-making power. You get to build the Web 3.0 universe and business alongside us, while enjoying wide variety of perks:
            <ul>
                <li>Income streams and various investment opportunities</li>
                <li>Free tickets to high-profile events and festivals across the world</li>
                <li>Voting rights for future perks of your choice</li>
                <li>Early bird access to NFTs and crypto releases</li>
                <li>Networking events with other crypto enthusiasts</li>
            </ul>
            If what you have read excites you as much as it excites us, you are already a FEHU. Put your wealth in motion and embark on our journey to the future! Stay true! Stay Fehu!
        </p>
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/linear-knot-divider.png') }}" class="divider">  
    <div class="container" style="display:block" id="utility">
        <h1 class="font-weight-light text-center">Utilities</h1> 
        <p>
            Firstly, besides the value of our NFTs given by the market, each NFT will be its unique system for the holder, which you can use. The capabilities of each NFT is based on its rarity, thus the higher the rarity of the NFT which you hold, the higher the power and benefits you have as a holder. We will be using <a href="https://snapshot.org" target="_blank">SnapShot</a> for our voting system since it is widely used and efficient.
        </p>
        <p>
            Overall all NFTs will have a core principle, this being granting access through tickets to events ranging from entertainment to business/cultural, based on our community wishes.
            Higher rarity NFTs will bring our holders access to our voting system, which they can vote on which events they will like to attend to or voting in the future decisions of our project FehuToken. Moreover the higher the rarity of the NFT the more events you can attend on a yearly basis, ranging from small events to big events.
        </p>
        <p>
            As for numbers, we are expecting during our first year to organize 1 event monthly, which is planned 1-3 months ahead based on the event size. The ticket claim will work as following based on the NFT rarity:
            <ul>
                <li>3 claims a year for Common</li>
                <li>5 claims a year for Rare</li>
                <li>8 claims a year for Epic</li>
                <li>12 claims a year for Legendary and Mythic</li>
            </ul>
            These numbers are a subject to change based on our current budget, holders and marketcap. This estimation is based on our current estimation.
        </p>
        <p>
            High value NFT holders, while they hold our token Fehu, will have special access to our minting platform where they can mint 30 out of 100 NFTs earlier.
            We are planning to release a new collection every month.
        </p>
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/linear-knot-divider.png') }}" class="divider"> 
    <div class="container" style="display:block" id="rarity">
        <h1 class="font-weight-light text-center">Rarity</h1> 
        <div class="row">
            <div class="col-md-6 order-1">
                <h2 style="font-weight: 800;" class="text-center">Collection Rarity Distribution</h2>
                <p>
                    Each collection will have a fixed number of NFTs, this being 100. The rarity distribution will be as following:
                    <ul>
                        <li>48 Commons</li>
                        <li>25 Rares</li>
                        <li>15 Epics</li>
                        <li>8 Legendaries</li>
                        <li>4 Mythics</li>
                    </ul>
                </p>
                </br></br>
                <h2 style="font-weight: 800" class="text-center">What each rarity brings</h2>
                <p>
                    Each rarity will come with its own benefits, the rarity above the other inheriting the others utilities.
                    <ul>
                        <li>Common NFTs will benefit from our event system utility</li>
                        <li>Rare NFTs will be able to vote on a selection of events which our holders could take part of</li>
                        <li>Epic NFTs will gives you double the voting power regarding choosing of events</li>
                        <li>Legendary NFTs, besides having double voting power in the event system, holders will also be able to vote on the future decision for our token, called FehuToken. And of course VIP tickets for the events where it applies.</li>
                        <li>Mythic NFT holders will have all the privileges from the above, plus they can also decide on our future spendings based on the available budget (marketing, development, influencers etc).</li>
                    </ul>
                </p>
                <p>Everything will be transparent and all voting results plus the actions taken will be displayed on our community platforms such as Discord, Twitter and Telegram.</p>
            </div>
            <div class="col-md-6 order-md-1"><img src="{{ asset('storage/images/rarity-banner.png') }}" class="rarity"></div>
        </div>
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/linear-knot-divider.png') }}" class="divider"> 
    <div class="container" style="display:block" id="roadmap">
        <h1 class="font-weight-light text-center">RoadMap</h1> 
        @include('inc.pages.timeline') 
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/linear-knot-divider.png') }}" class="divider"> 
    <div class="container" style="display:block" id="faq">
        <h1 class="font-weight-light text-center">FAQ</h1> 
        @include('inc.pages.faq') 
    </div>
    
</section>
@endsection

@section('scripts')
<script>
    $("a[href^='#']").click(function(e) {
        e.preventDefault();
        var offset = 200;
        if ($(window).width() < 992){
            offset = 370;
        }
        var position = $($(this).attr("href")).offset().top - offset;

        $("body, html").animate({
            scrollTop: position
        }, 5 );
    });

    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
    accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
        
        // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
        // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
        //   currentlyActiveAccordionItemHeader.classList.toggle("active");
        //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        // }

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
            accordionItemBody.style.maxHeight = 0;
        }
        
    });
});
</script>
@endsection