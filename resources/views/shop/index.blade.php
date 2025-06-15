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
        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

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
            <a href="#contact">Contact</a>
            <a href="{{ route('transaction') }}">Transaction</a>
        </div>
        
        <div class="navbar-extra">                                                                               
            <a href="#" id="menu"><i data-feather="menu"></i></a>                                            
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <p>Are you sure you want to Log Out?</p>
              <a href="{{ route('login') }}" class="logout-btn">Log Out</a>
            </div>
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
                <li><a href="{{ url('/shop/Clothing') }}">Clothing</a></li>
                <li><a href="{{ url('/shop/Decoration') }}">Decoration</a></li>
                <li><a href="{{ url('/shop/Craft') }}">Craft</a></li>
                <li><a href="{{ url('/shop/Cutlery') }}">Cutlery</a></li>
            </ul>
        </div>

        <div class="products">
            @forelse($products as $product)
                <div class='product'>
                    <a href="/order/{{ $product->id }}">
                        <img src="{{ asset('storage/' . $product->picture_product) }}">
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
            <li><a href="../Webjapan/indexx.php">Home</a></li>
            <li><a href="../Webjapan/culture/culture.php">Culture</a></li>
            <li><a href="../Webjapan/shop/shop.php">Shop</a></li>
            <li><a href="../Webjapan/indexx.php #contact">Contact</a></li>
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
    <script> feather.replace(); </script>

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
            if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
                navbarNav.classList.remove('active');
            }
        });
    
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
</body>
</html>
