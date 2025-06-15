<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Japan</title>
    <link rel="stylesheet" href="{{ asset('css/culture-content.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    
   <!-- Navbar start -->
   <nav class="navbar">
    <a href="#" class="logo"><img src="../image/logo.png" alt=""></a>

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
          <a href="../../Loginregister/loginregister.php" class="logout-btn">Log Out</a>
        </div>
    </div>       
</nav>

<!-- content -->
<section id="hero" class="hero">
    <a href="#technology" class="button">EXPLORE</a>
</section>

<div class="subtitle" id="technology">
</div>

<div class="container">
  <div class="categories">
    <a href="{{ route('culture') }}#culture">
        <h1>Culture</h1>
    </a>
   <ul>
    <li><a href="{{ route('culture.lifestyle') }}#lifestyle">Lifestyle</a></li>
    <li><a href="{{ route('culture.festival') }}#festival">Festival</a></li>
    <li><a href="{{ route('culture.art') }}#art">Art</a></li>
    <li><a href="{{ route('culture.traditionalclothing') }}#traditionalclothing">Traditional Clothing</a></li>
    <li><a href="{{ route('culture.localfood') }}#localfood">Local Food</a></li>
    <li><a href="{{ route('culture.pop') }}#pop">Pop</a></li>
    <li><a href="{{ route('culture.economy') }}#economy">Economy</a></li>
    @php
        $hasTechnology = false;
        foreach ($articles as $article) {
            if ($article->category_name === 'Technology') {
                $hasTechnology = true;
                break;
            }
        }
    @endphp
    @if ($hasTechnology)
        <li><a href="{{ route('culture.technology') }}#technology">Technology</a></li>
    @endif
</ul>

  </div>
  
  <section class="culture">
    <div class="row">
        @forelse ($articles as $article)
            <div class="culture1">
                <h2>{!! $article->title !!}</h2>
                <div class="row1">
                    @if (!empty($article->picture_article))
                        <div class="culture-img1">
                            <img src="{{ asset('image/' . $article->picture_article) }}" alt="{{ $article->title }}">
                        </div>
                    @endif
                    <div class="content">
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

<!-- footer -->
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
        <li><a href="../indexx.php">Home</a></li>
        <li><a href="../culture/culture.php">Culture</a></li>
        <li><a href="../shop/shop.php">Shop</a></li>
        <li><a href="../indexx.php #contact">Contact</a></li>
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

<!-- Script -->
<script>
    // Toggle class active
    const navbarNav = document.querySelector('.navbar-nav');
    // ketika menu diklik
    document.querySelector('#menu').onclick = () => {
        navbarNav.classList.toggle('active');
    };

    // klik diluar side bar
    const menu = document.querySelector('#menu');

    document.addEventListener('click', function(e) {
        if(!menu.contains(e.target) && !navbarNav.contains(e.target)) {
            navbarNav.classList.remove('active');
        }
    });
</script>    

<script>
    // Menangkap semua tautan di dalam navbar
    const navLinks = document.querySelectorAll('.navbar-nav a');

    // Menambahkan event listener ke setiap tautan navbar
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Menonaktifkan navbar setelah mengarahkan pengguna
            navbarNav.classList.remove('active');
        });
    });

    // Dapatkan tombol menu
    const menuButton = document.getElementById('menuButton');

    // Tambahkan event listener ke tombol menu
    menuButton.addEventListener('click', function(event) {
        // Mencegah perilaku default dari tautan menu
        event.preventDefault();
        // Menampilkan atau menyembunyikan navbar
        navbarNav.classList.toggle('active');
    });
</script>    

<script>
    // Dapatkan modal
    var modal = document.getElementById("myModal");

    // Dapatkan tombol yang membuka modal
    var btn = document.getElementById("log-out");

    // Dapatkan elemen <span> yang menutup modal
    var span = document.getElementsByClassName("close")[0];

    // Ketika tombol Logout ditekan, tampilkan modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // Ketika pengguna mengklik tombol (x), tutup modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // Ketika pengguna mengklik di luar modal, tutup modal
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
<script>
    feather.replace();
</script>

</body>
</html>
