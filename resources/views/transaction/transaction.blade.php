<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaction</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Signika:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/transaction.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

<!-- Navbar -->
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

<section class="user">
    <h1>TRANSACTION</h1>
    <table border="1" class="table">
        <tr>
            <th class="text">No.</th>
            <th class="text">Username</th>
            <th class="text">Product</th>
            <th class="text">Price</th>
            <th class="text">Total Product</th>
            <th class="text">Total Price</th>
            <th class="text">Transaction Method</th>
            <th class="text">Address</th>
            <th class="text">Order Date</th>
            <th>Image</th>
        </tr>

        @foreach($orders as $no => $order)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $order->username }}</td>
            <td>{{ $order->product_name }}</td>
            <td>{{ number_format($order->price, 2) }}</td>
            <td>{{ $order->amount_product }}</td>
            <td>{{ number_format($order->total_price, 2) }}</td>
            <td>{{ $order->transaction_method }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ date('Y-m-d H:i', strtotime($order->created_at)) }}</td>
            <td>
               <img src="{{ asset('storage/' . $order->picture_product) }}" width="100" alt="{{ $order->product_name }}">
            </td>
        </tr>
        @endforeach
    </table>
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

<script> feather.replace(); </script>

<script>
    const navbarNav = document.querySelector('.navbar-nav');
    document.querySelector('#menu').onclick = () => {
        navbarNav.classList.toggle('active');
    };
    document.addEventListener('click', function(e) {
        if (!document.querySelector('#menu').contains(e.target) && !navbarNav.contains(e.target)) {
            navbarNav.classList.remove('active');
        }
    });

    var modal = document.getElementById("myModal");
    var btn = document.getElementById("log-out");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
