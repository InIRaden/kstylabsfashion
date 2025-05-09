<?php
// Anda bisa menambahkan kode PHP di sini jika diperlukan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-StyLabs</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    
    <link rel="stylesheet" href="landingpage.css">
    
</head>
<body>
<div class="container">
    <header>
        <div class="logo">
            <a href="/src/mainPage/landingPage.php">K-<span>StyLabs</span></a>
        </div>
        <div class="search-container">
            <div class="search-bar">
                <input type="text" placeholder="Search your own style">
            </div>
            <div class="icons">
                <i class="fa-regular fa-user" onclick="window.location.href='../auth/login.php'"></i>
                <i class="fa-regular fa-heart" onclick="window.location.href = '../mainPage/favorite.php'"></i>
            </div>
        </div>
    </header>
    
    <nav>
        <a href="#">Korean Clothes</a>
        <a href="../blog/blog.php">Fashion Tips</a>
        <a href="/src/mainPage/customize.php">Customize</a>
    </nav>

    <div class="content">
        <div class="text">
            <h1>Matched Your Korean Fashion <span class="highlight" style="font-weight: bold;">at K-StyLabs</span></h1>
        
            <div class="cta">
                <button onclick="window.location.href='../auth/login.php';">Get Started</button>
                <div class="stats">
                    <span>70+</span>
                    <p>Fashion Style</p>
                </div>
            </div>
        </div>
        

        
        <div class="image-container">
            <img class="image-1" src="../public/img/images (10).jpeg" 
                 alt="A woman with dark hair and red lipstick, wearing a gold outfit and earrings">
            <img  class ='image-2'src="../public/img/images (4).jpeg" 
                 alt="A woman with dark hair and red lipstick, wearing a gold outfit and earrings">
        </div>

        
    </div>

    <!-- container second  -->
    <div class="container-second">
        <div>
            <h1 class="seken">We Provided The Best <br> Outfit To Help You <br> <span>Express</span> Your Identity!</h1>
            <p>Our app lets you customize fashion using AI. Just enter a prompt, <br>
                and the AI will find the best design that matches your needs. Each <br>
                piece is secured with blockchain smart contracts, ensuring <br>
                authenticity and uniqueness.</p>
            <div class="underline">
                <div class="line"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>


    <!-- carousel -->
    <h2 style="display: flex; justify-content: center; margin-top: 9rem ; font-size: 2.5rem;">What's Hot This Week!</h2>

        <div class="carousel">
            <button id="prev"><i class="fas fa-chevron-left"></i></button>
            <div class="cards-container">
                <?php
                // Contoh penggunaan PHP untuk menampilkan produk
                $products = [
                    ['image' => '../public/img/images (7).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
                    ['image' => '../public/img/images (10).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
                    ['image' => '../public/img/images (2).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
                    ['image' => '../public/img/images (7).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
                    ['image' => '../public/img/images (8).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
                    ['image' => '../public/img/images (5).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52']
                ];
                
                foreach ($products as $product) {
                    echo '<div class="card">';
                    echo '<img src="' . $product['image'] . '" alt="Product">';
                    echo '<div class="card-content">';
                    echo '<h2>' . $product['title'] . '</h2>';
                    echo '<p>' . $product['price'] . '</p>';
                    echo '<i class="far fa-heart favorite"></i>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button id="next"><i class="fas fa-chevron-right"></i></button>
        </div>
        
       
    </div>

     <!-- Benefit section  -->
     <div class="benefits-section">
        <h2 class="benefits-title">Our Benefits</h2>
    
        <div class="benefits-container">
            <div class="benefit-card">
                <div class="icon" style="color: black;">
                    <i class="fas fa-tshirt"></i>
                </div>
                <h3>Style Customizable</h3>
                <p>Customize your style effortlessly with flexible options.</p>
                <span class="decor-circle decor-top-left"></span>
                <span class="decor-circle decor-bottom-right"></span>
            </div>
    
            <div class="benefit-card">
                <div class="icon" style="color: black;">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>A Lot of Korean Style</h3>
                <p>Explore a variety of trendy Korean-inspired designs.</p>
                <span class="decor-circle decor-top-right"></span>
                <span class="decor-circle decor-bottom-left"></span>
            </div>
    
            <div class="benefit-card">
                <div class="icon" style="color: black;">
                    <i class="fas fa-magic"></i>
                </div>
                <h3>Easy To Use</h3>
                <p>Smooth navigation, seamless experience.</p>
                <span class="decor-circle decor-top-left"></span>
                <span class="decor-circle decor-bottom-right"></span>
            </div>
        </div>
    </div>


    <!-- alot image  -->
    <div class="container-alot-image">
        <div class="header">
            <h1>Your Korean Look like</h1>
            <p>Enjoy the benefits of our features for a cooler outfit!</p>
        </div>

        <div class="item-grid">
            <?php
            // Contoh penggunaan PHP untuk menampilkan gambar
            $koreanLooks = [
                ['image' => '../public/img/images (6).jpeg', 'alt' => 'Korean Look 1'],
                ['image' => '../public/img/images (12).jpeg', 'alt' => 'Korean Look 2'],
                ['image' => '../public/img/images (5).jpeg', 'alt' => 'Korean Look 3'],
                ['image' => '../public/img/images (8).jpeg', 'alt' => 'Korean Look 4'],
                ['image' => '../public/img/images (10).jpeg', 'alt' => 'Korean Look 5'],
                ['image' => '../public/img/images (7).jpeg', 'alt' => 'Korean Look 6']
            ];
            
            foreach ($koreanLooks as $look) {
                echo '<div class="item">';
                echo '<img src="' . $look['image'] . '" alt="' . $look['alt'] . '">';
                echo '<div class="item-overlay">';
                echo '<button class="btn">See Products</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="all-products">
            <button>All Products</button>
        </div>
    </div>



    <!-- section footer -->
    <section class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <div class="logo">K-StyLabs</div>
                <p>Let's Create A Custom Photo Session Just For You.</p>
                <ul>
                    <li><a href="#">Data Privacy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Impressum</a></li>
                    <li><a href="#">Product</a></li>
                </ul>
            </div>
    
            <div class="footer-middle">
                <div class="address">
                    <h4>Address</h4>
                    <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                </div>
                <div class="address">
                    <h4>Address</h4>
                    <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p>
                </div>
            </div>
    
            <div class="footer-right">
                <div class="contact">
                    <h4>Phone</h4>
                    <p>(704) 555-0127</p>
                </div>
                <div class="contact">
                    <h4>Email</h4>
                    <p>georgia.young@gmail.com</p>
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p> Cherish Your Special Day With Stunning, Candid Shots That Capture The Love And Joy. </p>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-discord"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </section>
    
</div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function()  { 
     const prev = document.querySelector('#prev');
     const next = document.querySelector('#next');
     const cardsContainer = document.querySelector('.cards-container');

     let scrollAmount = 0;
     let cardWidth = cardsContainer.querySelector('.card').offsetWidth + 16;
     next.addEventListener('click', () => {
         cardsContainer.scrollBy({
             left: cardWidth,
             behavior: 'smooth'
         })
     })
     prev.addEventListener('click', () => {
         cardsContainer.scrollBy({
             left: -cardWidth,
             behavior: 'smooth'
         })
         })

   })


//    animasi scroll
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".container");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        observer.unobserve(entry.target); 
      }
    });
  }, { threshold: 0.2 });

  elements.forEach((el) => observer.observe(el));
});
</script>
<script src="../public/js/favorites.js"></script>
</body>
</html>
