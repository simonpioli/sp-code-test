<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Fancy Clothes Boutique</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a
                        href="{{ route('home') }}"
                        class="nav-link{{ Route::currentRouteName() === 'home' ? ' active' : '' }}"
                        @if(Route::currentRouteName() === 'home')aria-current="page"@endif
                    >
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('product.index') }}"
                        class="nav-link{{ Route::currentRouteName() === 'product.index' ? ' active' : '' }}"
                        @if(Route::currentRouteName() === 'product.index')aria-current="page"@endif
                    >
                        Products
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
