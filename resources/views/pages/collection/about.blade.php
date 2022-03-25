@extends('layout.master')
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
        <div class="row">
            <div class="col-md-6 order-1">
                <p>What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    
                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    
                    
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </p>
            </div>
            <div class="col-md-6 order-md-1"><img src="{{ asset('storage/images/rarity.png') }}" class="rarity"></div>
        </div>
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
    <div class="container" style="display:block" id="roadmap">
        <h1 class="font-weight-light text-center">RoadMap</h1> 
        @include('inc.pages.timeline') 
    </div>

    <hr class="solid">
    <img src="{{ asset('storage/images/knot.png') }}" class="divider"> 
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
        var offset = 220;
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