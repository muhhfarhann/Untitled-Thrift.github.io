<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnThrift.</title>
    <!-- GoogleFont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="" class="navbar-logo">Un<span>titled</span>-</a>
        
        <div class="navbar-nav">
            <a href="#about">About</a>
            <a href="#product">New Product</a>
            <a href="#contact">Contact</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="home" title="Home"><i data-feather="home"></i></a>
            <a href="#" id="search" title="Search"><i data-feather="search"></i></a>
            <a href="#" id="shoppping-bag" title="Shopp Now"><i data-feather="shopping-bag"></i></a>
            <a href="#" id="menu" title="Menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Hero Section -->
    <section class="hero" id="home">
        <main class="content">
                <h1>Every Month <br><span>New!</span> <br>Catalog ...</h1>
                <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Aut, perspiciatis!</p>
                <a href="" class="cta">Buy Now!</a>
        </main>
    </section>
    <!-- End Hero Section -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2>About Us</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/About-1.jpg" alt="About Us">
            </div>
            <div class="content">
                <h3>Why Our Product?</h3>
                <p>
                    Our products are created manually
                </p>
                <p>
                We were founded dozens of years ago and have been through a decade, we have experience 
                from various sectors and all aspects because we prioritize quality.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- New Product Section Start -->
    <section id="product" class="product">
        <h2>New Product</h2>
        <p>
            Monthly New Product!
        </p>
        <div class="row">
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
            <div class="product-card">
                <img src="img/product/2.png" alt="Tshirt-White" class="product-card-img" style="width:300px; height:300PX;">
                <h3 class="product-card-title">- UW-Shirt -</h3>
                <p class="product-card-price"><a href="">$40</a></p>
            </div>
        </div>
    </section>
    <!-- New Product Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="contact">
        <h2>Contact</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, ratione!
            </p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5228585542254!2d106.8691517575147!3d-6.
                326219801259798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed08e77ed22b%3A0xdebbc1160c7de0f0!2sGg.
                %20Nusa%20Indah%2C%20RT.1%2FRW.7%2C%20Ciracas%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1701574248408!5m2!1sen!2sid" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map">
            </iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="e-mail">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no-tlp">
                </div>
                <button class="btn">Submit</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer -->
    <footer>
        <div class="socials">
            <a href="">
                <i data-feather="instagram"></i>
            </a>
            <a href="">
                <i data-feather="twitter"></i>
            </a>
        </div>

        <div class="links">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">New Product</a>
            <a href="">Contact</a>
        </div>

        <div class="credit">
            <p>Created By<i data-feather="code"></i>| &copy; 2023 / Untitiled-.</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icon -->
    <script>feather.replace();</script>

    <!-- My Javasvript -->
    <script src="js/script.js"></script>
</body>
</html>