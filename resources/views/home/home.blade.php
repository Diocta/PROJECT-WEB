<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Japan</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

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
            <a href="../Webjapan/shop/transaction.php">Transaction</a>
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

    <!-- Hero section start -->
    <section class="hero" id="home">
        <main class="content">
            <h3>Explore Amazing</h3>
            <h1>JAPAN</h1>
            <p>Discover interesting things in Japan.</p>
            <p>There are many cultures and beautiful places</p>
            <p>that you can get to know!</p>
            <a href="#about" class="cta">Explore now</a>
        </main>
    </section>

    <!-- About -->
    <section id="about" class="about">
        <h2>About <span>Japan</span></h2>
        <div class="row">
            <div class="about-img">
                <img src="image/about.jpg" alt="About Japan">
            </div>
            <div class="content">
                <h3>What kind of country is Japan?</h3>
                <p>Japan, geographically, is an island country located in East Asia. This country consists of four main islands, namely Honshu, Hokkaido, Kyushu, and Shikoku, as well as a number of small islands around them. Japan has a varied climate, from subtropical to temperate, with distinct seasons such as hot, humid summers and cool winters.</p>
                <p>Geographically, Japan has a very diverse landscape, from steep mountains to fertile plains. Mount Fuji, which is the highest mountain in Japan, is the symbol of the country.</p>
            </div>
        </div>
        <div class="text">
            <p>This country is also famous for its modern and bustling cities, such as Tokyo, Osaka and Kyoto. Tokyo, the capital of Japan, is one of the largest and most developed cities in the world, with sophisticated urban infrastructure and a vibrant nightlife.</p>
            <p>Japanese society is known for its discipline, hard work, and respect for tradition and hierarchy. Values ​​such as politeness, humility, and social responsibility are highly valued in Japanese culture.</p>
            <p>Apart from that, Japan also has a rich history, with an ancient cultural heritage and traditions that are still preserved today. Historical buildings such as temples and palaces, as well as traditional festivals, are an important part of Japanese identity.</p>
            <p>Overall, Japan is a unique country with a strong combination of modernity and tradition. Its natural beauty, rich culture, and disciplined society make Japan an attractive destination for many people around the world.</p>
        </div>
    </section>

    <!-- Culture Home -->
    <section class="culture">
        <div class="row">
            <div class="culture-home">
                <h2>CULTURE IN <span>JAPAN</span></h2>
                <div class="row2">
                    <div class="culture-img">
                        <img src="image/bgculture.jpeg">
                    </div>
                    <div class="culture-content">
                        <p>Japan, a country rich in history and fascinating cultural heritage, has been in the world's spotlight for its diverse contributions to art, technology and lifestyle. Japanese culture has influenced the world in undeniable ways, attracting interest and admirers from all over the world</p>
                        <p>Japanese culture is a unique blend of rich traditions, stunning art, a strong work ethic, technological innovation, and worldwide pop appeal. This extraordinary cultural heritage continues to inspire and captivate the world, making Japan one of the most interesting and fascinating countries on the planet.</p>
                        <a href="{{ route('culture') }}">EXPLORE MORE ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shope Home -->
    <section class="shop">
        <h2>GET ORIGINAL PRODUCT FROM <span>JAPAN</span> NOW!</h2>
        <div class="products">
            <div class="product" id="decoration">
                <img src="image/luckycat.jpeg">
                <h4>$20.01</h4>
                <h3>LUCKY CAT STATUE</h3>
                <p>Japanese lucky cat statue with lamp + battery</p>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                </div>
            </div>
            <div class="product" id="clothing">                             
                <img src="image/haori.jpeg">
                <h4>$17.25</h4>
                <h3>HAORI YUKATA CARDIGAN KIMONO INARIZAKI</h3>
                <p>Haori Yukata Cardigan Kimono Inarizaki Polyester Material</p>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                </div>
            </div>
            <div class="product" id="craft">
                <img src="image/ornamengatefuji.jpeg">
                <h4>$4.14</h4>
                <h3>JAPANESE ORNAMENT TORII GATE MOUNT FUJI</h3>
                <p>Japanese ornament wooden Torii Gate Mount Fuji</p>
                <div class="stars">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" height="16" width="16">
                        <path fill="#000000" d="m12.4725 10.254 0.4717 5.346 -4.94425 -2.1001L3.05571 15.6l0.47164 -5.346L0 6.20591l5.23573 -1.20395L7.99995 0.400024 10.7642 5.00196l5.2357 1.20395 -3.5274 4.04809Z" stroke-width="1"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="shop-home">
                <div class="row2">
                    <div class="shop-img">
                        <img src="image/shopehome.png">
                    </div>
                    <div class="shop-content">
                        <h3>"DELVE DEEPER INTO JAPANESE CULTURE"</h3>
                        <h2>Discover the various beauties of Japanese culture in every product we offer.</h2>
                        <a href="{{ route('shop') }}">EXPLORE MORE ></a>
                    </div>
                </div>
            </div>
        </div>

    </section>

   <!-- contact -->
<section id="contact" class="contact">
    <div class="background">
        <div class="content-contact">
            <h2>Contact</h2>
            <p>If you have questions you want to ask or have suggestions, you can send a message!</p>
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="box-contact">
                    <div class="icon-contact"><i data-feather="phone"></i></div>
                    <div class="text-contact">
                        <h3>Phone</h3>
                        <p>+62 858 9562 8575</p>
                    </div>
                </div>
                <div class="box-contact">
                    <div class="icon-contact"><i data-feather="mail"></i></div>
                    <div class="text-contact">
                        <h3>Email</h3>
                        <p>exploringjapan.id@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form action="sendemail.php" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Username</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
            <div>
                <?php if (isset($pesan)) {
                    echo $pesan;
                } ?>
            </div>
        </div>
    </div>
</section>


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