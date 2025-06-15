{{-- resources/views/order/order.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Exploring Japan</title>
    <link rel="stylesheet" href="{{ asset('css/orderform.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo"><img src="{{ asset('image/logo.png') }}" alt=""></a>
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

    <section class="order-section">
        <form action="{{ url('/order') }}" method="POST" class="form-products" id="form_pemesanan">
            @csrf

            <!-- ✅ Tambahan hidden id_product & id_user -->
            <input type="hidden" name="id_product" value="{{ $product->id }}">
            <input type="hidden" name="id_user" value="{{ Auth::id() }}">

            <div class="product">
                <img src="{{ asset('storage/' . $product->picture_product) }}" alt="{{ $product->product_name }}">
                <h4>${{ $product->price }}</h4>
                <h3>{{ $product->product_name }}</h3>
                <p>{{ $product->description }}</p>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="form-group">
                <label for="product_name">Product:</label>
                <!-- ✅ Tambahan name="product_name" agar terkirim -->
                <input type="text" name="product_name" value="{{ $product->product_name }}" readonly>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" value="{{ $product->price }}" readonly>
            </div>

            <div class="form-group">
                <label for="amount_product">Amount Product:</label>
                <input type="number" name="amount_product" id="amount_product" min="1" required>
            </div>

            <div class="form-group">
                <label for="total_price">Total Price:</label>
                <input type="text" id="total_price" name="total_price" readonly>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" required>
            </div>

            <div class="form-group">
                <label for="transaction_method">Transaction Method:</label>
                <select name="transaction_method" required>
                    <option value="Cash">COD</option>
                    <option value="Debit">Debit</option>
                    <option value="Credit">Credit</option>
                </select>
            </div>

            <button type="submit" class="button-buy">Buy Now</button>
        </form>
    </section>

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
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('culture') }}">Culture</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
            <li><a href="#contact">Contact</a></li>
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
    <script>feather.replace();</script>

    <script>
        const amount = document.getElementById('amount_product');
        const price = document.getElementById('price');
        const total = document.getElementById('total_price');

        amount.addEventListener('input', function() {
            const qty = parseInt(amount.value) || 0;
            const p = parseFloat(price.value) || 0;
            total.value = (qty * p).toFixed(2);
        });

        // Navbar toggle
        const navbarNav = document.querySelector('.navbar-nav');
        document.querySelector('#menu').onclick = () => {
            navbarNav.classList.toggle('active');
        };
        const menu = document.querySelector('#menu');
        document.addEventListener('click', function(e) {
            if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
                navbarNav.classList.remove('active');
            }
        });

        // Logout modal
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("log-out");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = () => modal.style.display = "block";
        span.onclick = () => modal.style.display = "none";
        window.onclick = function(e) {
            if (e.target == modal) modal.style.display = "none";
        };
    </script>
</body>
</html>
