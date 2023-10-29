<nav class="navbar navbar-expand-lg bg-white shadow shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand fw-bold"><span class="primary">TOKO</span> KESEHATAN</a>
        {{-- <div class="navbar-brand">Toko Kesehatan</div> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
            <ul class="navbar-nav">
                <a href="/" class="nav-link text-black">Home</a>
                <a href="/products" class="nav-link text-black">Product</a>

               @auth
                    @if (auth()->user()->role == 'admin')
                        {{-- <li class="nav-item">
                            <a href="/" class="nav-link text-black">Home</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a href="/products" class="nav-link text-black">Product</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="/kelola" class="nav-link text-black">Kelola</a>
                        </li>
                    @else
                        {{-- <li class="nav-item">
                            <a href="/" class="nav-link text-black">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/products" class="nav-link text-black">Product</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="/cart" class="nav-link text-black">Cart</a>
                        </li>
                        <li class="nav-item">
                            {{-- <a href="{{ route('summary', $item->id) }}" class="nav-link text-white">Summary</a> --}}
                            <a href="/summary" class="nav-link text-black">Summary</a>
                        </li>
                    @endif
               @endauth

            </ul>
        </div>
        
        @auth
            <a href="/logout" class="btn btn-warning">Logout</a>
            @else
            <a href="/login" class="btn btn-primary">Login</a>
        @endauth
    </div>
</nav>