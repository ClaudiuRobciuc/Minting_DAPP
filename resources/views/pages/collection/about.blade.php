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
        <p>What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
        @include('inc.faq') 
    </div>
    <hr class="solid">
</section>
@endsection