<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Japan</title>
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo"><img src="{{ asset('image/logo.png') }}" alt=""></a>
        <form>
            <div class="search">
                <a href="#" id="search"><i data-feather="search"></i></a>
                <input class="search-input" type="search" placeholder="Search">
            </div>
        </form>
        <a href="{{ route('login') }}" id="log-out" class="logout">LOGIN</a>
        <div class="navbar-nav">
            <h1>Explore</h1>
            <a href="/">Home</a>
            <a href="/culture">Culture</a>
            <a href="/shop">Shop</a>
            <h1>Information</h1>
            <a href="/contact">Contact</a>
            <a href="/transaction">Transaction</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <section id="hero">
        <h4>ユニークな日本の特産品を見つける</h4>
        <h1>"Discover Unique Japanese Products"</h1>
        <h2>100% Original from Japan</h2>
        <p>Explore the richness of Japanese culture through our collection of signature products.</p>
        <a href="#shopmenu" class="button">Get It Now</a>
    </section>

    <div class="subtitle" id="shopmenu">
        <h1>
            @if(isset($category))
                Products in {{ ucfirst($category) }}
            @else
                Japanese Products
            @endif
        </h1>
    </div>

    <div class="container">
        <div class="categories">
            <a href="{{ url('/shop') }}"><h1>Categories</h1></a>
            <ul>
                <li><a href="{{ url('/shop/clothing') }}">Clothing</a></li>
                <li><a href="{{ url('/shop/decoration') }}">Decoration</a></li>
                <li><a href="{{ url('/shop/craft') }}">Craft</a></li>
                <li><a href="{{ url('/shop/cutlery') }}">Cutlery</a></li>
            </ul>
        </div>

        <div class="products">
            @forelse($products as $product)
                <div class='product'>
                    <a href="/order/{{ $product->id }}">
                        <img src="{{ asset('image/' . $product->picture_product) }}">
                    </a>
                    <h4>${{ $product->price }}</h4>
                    <h3>{{ $product->product_name }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class='stars'>
                        @for ($i = 0; $i < 5; $i++)
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="yellow" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 .587l3.668 7.429L24 9.753l-6 5.847 1.416 8.26L12 18.897l-7.416 3.963L6 15.6 0 9.753l8.332-1.737L12 .587z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            @empty
                <p>No products found in this category.</p>
            @endforelse
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>
