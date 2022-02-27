@extends('layout.master')
@section('content')
<!-- Page Content -->
<section class="py-5">
    <div class="container" style="display:block">
        <div class="row">
            <div class="col-md-6">
                <h1 class="banner" style="font-weight:700; padding: 10px">Extraordinary <span class="gradient-text">NFT</span></h1>
                <div class="row" style="margin-top:20%">
                    <div class="col-md-5">
                        <a class="btn btn-grad btn-grad-purple" href="#" role="button">Fehu Token</a>
                    </div>
                    <div class="col-md-5">
                        <a class="btn btn-grad btn-grad-white" href="#" role="button">View on OpenSea</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('storage/images/Heading.png') }}" width="100%" height="100%" alt="Flowers in Chania">      
            </div>
            
        </div>
    </div>
    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="collection">
        <h1 class="font-weight-light text-center">About our collection</h1>
        </br>
        <p>
            New NFT project on the Ehthereum Blockchain, the Fehu D.A.O. is making promises to break the mold and release a collection where the assets held are more important than the art as it appears.
        </br></br>
            With long-term goals in mind that support the financial success of their community, many aspects of the collection are worth looking out for throughout 2022.
        </br></br>
            The Fehu D.A.O is an NFT mint collection and community that believe in the power and utility of NFTs. They aim to remind the world of how useful NFTs are meant to be, as more than just a means of finding an avatar or profile picture.
        </p>
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="utility">
        <h1 class="font-weight-light text-center">Utilities</h1> 
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="rarity">
        <h1 class="font-weight-light text-center">Rarity</h1> 
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="roadmap">
        <h1 class="font-weight-light text-center">RoadMap</h1> 
        @include('inc.timeline') 
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="faq">
        <h1 class="font-weight-light text-center">FAQ</h1> 
        @include('inc.faq2') 
    </div>
    
</section>
@endsection

@section('scripts')
<script>
    $("a[href^='#']").click(function(e) {
        e.preventDefault();
        var position = $($(this).attr("href")).offset().top - 230;

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