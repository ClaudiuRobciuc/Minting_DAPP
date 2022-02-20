@extends('layout.master')
@section('content')
<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="font-weight-light text-center">Collection</h1>
        <img src="{{ asset('storage/images/card.jpg') }}" width="100%" height="90%" alt="Flowers in Chania">      
    </div>
    <hr class="solid">
    <div class="container">
        <h1 class="font-weight-light text-center">About our collection</h1>
        </br>
        <p>
            New NFT project on the Ehthereum Blockchain, the Fehu D.A.O. is making promises to break the mold and release a collection where the assets held are more important than the art as it appears.
        </br></br>
            With long-term goals in mind that support the financial success of their community, many aspects of the collection are worth looking out for throughout 2022.
        </br></br>
            The Fehu D.A.O is an NFT mint collection and community that believe in the power and utility of NFTs. They aim to remind the world of how useful NFTs are meant to be, as more than just a means of finding an avatar or profile picture.
        </p>
        @include('inc.nftcarousel') 
    </div>
    <hr class="solid">
    <div class="container">
        <h1 class="font-weight-light text-center">Rarity</h1> 
        Rarity
    </div>
    <hr class="solid">
    <div class="container">
        <h1 class="font-weight-light text-center">FAQ</h1> 
        @include('inc.faq2') 
    </div>
    <hr class="solid">
</section>
@endsection

@section('scripts')
<script>
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