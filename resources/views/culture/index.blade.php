<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Japan - Culture</title>
    <link rel="stylesheet" href="{{ asset('css/culture.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <a href="#" class="logo"><img src="{{ asset('image/logo.png') }}" alt="Logo"></a>

    <form>
        <div class="search">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <input class="search-input" type="search" placeholder="Search">
        </div>
    </form>

    <a href="#" id="log-out" class="logout">LOGOUT</a>

    <div class="navbar-nav">
        <h1>Explore</h1>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('culture') }}">Culture</a>
        <a href="{{ route('shop') }}">Shop</a>
        <h1>Information</h1>
        <a href="{{ url('/#contact') }}">Contact</a>
        <a href="{{ url('/shop/transaction') }}">Transaction</a>
    </div>

    <div class="navbar-extra">
        <a href="#" id="menu"><i data-feather="menu"></i></a>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Are you sure you want to Log Out?</p>
            <a href="{{ url('/logout') }}" class="logout-btn">Log Out</a>
        </div>
    </div>
</nav>

<!-- Hero -->
<section id="hero" class="hero">
    <a href="#culture" class="button">EXPLORE</a>
</section>

<!-- Subtitle -->
<div class="subtitle" id="culture"></div>

<!-- Main Content -->
<div class="container">
    <div class="categories">
        <a href="{{ route('culture') }}#culture">
            <h1>{{ $category_name }}</h1>
        </a>
        <ul>
            <li><a href="{{ route('culture.lifestyle') }}#lifestyle">Lifestyle</a></li>
            <li><a href="{{ route('culture.festival') }}#festival">Festival</a></li>
            <li><a href="{{ route('culture.art') }}#art">Art</a></li>
            <li><a href="{{ route('culture.traditionalclothing') }}#traditionalclothing">Traditional Clothing</a></li>
            <li><a href="{{ route('culture.localfood') }}#localfood">Local Food</a></li>
            <li><a href="{{ route('culture.pop') }}#pop">Pop</a></li>
            <li><a href="{{ route('culture.economy') }}#economy">Economy</a></li>
            <li><a href="{{ route('culture.technology') }}#technology">Technology</a></li>
        </ul>
    </div>

    <section class="culture">
    <div class="row">
        @forelse ($articles as $article)
            <div class="culture-home">
                <h2>{!! $article->title !!}</h2>
                <div class="row2">
                    <div class="culture-img">
                        <img src="{{ asset('image/' . $article->picture_article) }}" alt="{{ $article->title }}">
                    </div>
                    <div class="culture-content">
                        <p>{!! nl2br(e($article->article_content)) !!}</p>
                    </div>
                </div>
            </div>
        @empty
            <p>No articles available for this category.</p>
        @endforelse
    </div>
</section>

</div>

<!-- Footer -->
<section class="footer">
    <div class="footer-box">
        <h2>Exploring Japan</h2>
        <p>Website that contains socio-cultural information and sells products from Japan.</p>
        <div class="socials">
            <li><a href="#"><i data-feather="instagram" class="icon"></i></a></li>
            <li><a href="#"><i data-feather="twitter" class="icon"></i></a></li>
            <li><a href="#"><i data-feather="facebook" class="icon"></i></a></li>
        </div>
    </div>
    <div class="footer-box2">
        <h3>Page Link</h3>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('culture') }}">Culture</a></li>
        <li><a href="{{ url('/shop') }}">Shop</a></li>
        <li><a href="{{ url('/#contact') }}">Contact</a></li>
    </div>
    <div class="footer-box">
        <h3>Contact</h3>
        <div class="contact-footer">
            <span><i data-feather="map-pin" class="icon"></i>East Java - Indonesia</span>
            <span><i data-feather="phone" class="icon"></i>+62 858 9562 8575</span>
            <span><i data-feather="mail" class="icon"></i>exploringjapan.id@gmail.com</span>
        </div>
    </div>
</section>

<div class="credit">
    <div class="text-credit">
        <p>&copy; ExploringJapan 2024. All Right Reserved.</p>
    </div>
</div>

<!-- Scripts -->
<script>
    feather.replace();

    // Navbar toggle
    const navbarNav = document.querySelector('.navbar-nav');
    document.querySelector('#menu').onclick = () => {
        navbarNav.classList.toggle('active');
    };

    document.addEventListener('click', function(e) {
        const menu = document.querySelector('#menu');
        if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
            navbarNav.classList.remove('active');
        }
    });

    // Logout modal
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("log-out");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
