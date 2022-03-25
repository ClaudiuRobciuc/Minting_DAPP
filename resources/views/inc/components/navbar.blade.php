<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" style="font-size: 24px;" href="#top"><img src="{{ asset('storage/images/f_vectorial222.png') }}" alt="" width="65" height="44">Fehu NFT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="#collection">Collection</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#utility">Utilities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#rarity">Rarity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Collections
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Rarible</a></li>
              <li><a class="dropdown-item" href="#">OpenSea</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Marketplace</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a class="btn btn-grad btn-grad-purple nav-link" style="font-size: 20px; margin:0; padding:5px 15px; color:#d8ff04f5; display:block" href="{{ route('app.nft.mint') }}">MINT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>