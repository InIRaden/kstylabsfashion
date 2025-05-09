<?php
// Data untuk pakaian yang dapat di-drag
$outfits = [
  ['image' => '../public/img/images (3).jpeg', 'alt' => 'Outfit 1', 'type' => 'tops'],
  ['image' => '../public/img/images (1).jpeg', 'alt' => 'Outfit 2', 'type' => 'shirt'],
  ['image' => '../public/img/images (10).jpeg', 'alt' => 'Outfit 3', 'type' => 'pants'],
  ['image' => '../public/img/images (7).jpeg', 'alt' => 'Outfit 4', 'type' => 'tops'],
  ['image' => '../public/img/images (8).jpeg', 'alt' => 'Outfit 5', 'type' => 'shoes'],
  ['image' => '../public/img/images (12).jpeg', 'alt' => 'Outfit 6', 'type' => 'shoes'],
  ['image' => '../public/img/images (9).jpeg', 'alt' => 'Outfit 7', 'type' => 'shirt'],
  ['image' => '../public/img/images (3).jpeg', 'alt' => 'Outfit 8', 'type' => 'tops']
];

// Data untuk produk yang ditampilkan di carousel
$products = [
  ['image' => '../public/img/images (7).jpeg', 'title' => 'Mint Ruched Hoodie Long Sleeve Tee', 'price' => 'US$30.52'],
  ['image' => '../public/img/images (10).jpeg', 'title' => 'Oversized Korean Cardigan', 'price' => 'US$45.99'],
  ['image' => '../public/img/images (2).jpeg', 'title' => 'Casual Korean Style Pants', 'price' => 'US$38.75'],
  ['image' => '../public/img/images (7).jpeg', 'title' => 'Stylish Korean Hoodie', 'price' => 'US$32.50'],
  ['image' => '../public/img/images (8).jpeg', 'title' => 'Modern Korean Outfit Set', 'price' => 'US$55.25'],
  ['image' => '../public/img/images (5).jpeg', 'title' => 'Trendy Korean Fashion Top', 'price' => 'US$28.99']
];

// Data kontak dan informasi perusahaan
$companyInfo = [
  'address' => '1901 Thornridge Cir. Shiloh, Hawaii 81063',
  'phone' => '(704) 555-0127',
  'email' => 'georgia.young@gmail.com'
];

// Data kategori pakaian
$categories = [
  ['name' => 'All', 'data' => 'all', 'active' => true],
  ['name' => 'Tops', 'data' => 'tops', 'active' => false],
  ['name' => 'Shirt', 'data' => 'shirt', 'active' => false],
  ['name' => 'Pants', 'data' => 'pants', 'active' => false],
  ['name' => 'Shoes', 'data' => 'shoes', 'active' => false]
];

// Data drop zones
$dropZones = [
  ['type' => 'tops', 'text' => 'Drop Tops Here'],
  ['type' => 'shirt', 'text' => 'Drop shirt Here'],
  ['type' => 'pants', 'text' => 'Drop pants Here'],
  ['type' => 'Shoes', 'text' => 'Drop Shoes Here']
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>K-StyLabs</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!-- SwiperJS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../public/css/customize.css" />
</head>

<body>
  <div class="container">
    <header>
      <a href="/src/mainPage/landingPage.php"><div class="logo">K-<span>StyLabs</span></div></a>
      <div class="search-container">
        <div class="search-bar">
          <input type="text" placeholder="Search your own style" />
        </div>
        <div class="icons">
          <i class="fa-regular fa-user" onclick="window.location.href='../auth/login.php'"></i>
          <i class="fa-regular fa-heart" onclick="window.location.href='../mainPage/favorite.php'"></i>
        </div>
      </div>
    </header>

    <nav>
      <a href="../mainPage/landingPage.php">Korean Clothes</a>
      <a href="../blog/blog.php">Fashion Tips</a>
      <a href="../mainPage/customize.php">Customize</a>
    </nav>

    <!-- KOREAN CLOTHES -->

    <main>
      <aside>
        <div class="categories">
          <?php foreach ($categories as $category): ?>
            <button class="category-btn <?php echo $category['active'] ? 'active' : ''; ?>" data-category="<?php echo $category['data']; ?>"><?php echo $category['name']; ?></button>
          <?php endforeach; ?>
        </div>
        <div class="image-list">  
          <?php foreach ($outfits as $outfit): ?>
            <img src="<?php echo $outfit['image']; ?>" alt="<?php echo $outfit['alt']; ?>" draggable="true" data-type="<?php echo $outfit['type']; ?>"/>
          <?php endforeach; ?>
        </div>
      </aside>

      <section class="preview">
        <div class="drop-zones">
          <?php foreach ($dropZones as $zone): ?>
            <div class="drop-zone" data-type="<?php echo $zone['type']; ?>">
              <p><?php echo $zone['text']; ?></p>
              <button class="remove-btn" data-target="<?php echo $zone['type']; ?>">Remove</button>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </main>

    <!-- RECOMMENDED -->

    <h2 style="display: flex; justify-content: center; margin-top: 9rem ; font-size: 2.5rem;">What's Hot This Week!</h2>

        <div class="carousel">
            <button id="prev"><i class="fas fa-chevron-left"></i></button>
            <div class="cards-container">
                <?php foreach ($products as $product): ?>
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="Product">
                    <div class="card-content">
                        <h2><?php echo $product['title']; ?></h2>
                        <p><?php echo $product['price']; ?></p>
                        <i class="far fa-heart favorite"></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button id="next"><i class="fas fa-chevron-right"></i></button>
        </div>
        
       
    </div>


    <!-- Find your favorite KPOP IDOL outfit -->

    <section class="info">
      <div class="info-image">
        <img src="../public/img/images (12).jpeg" alt="KPOP Fashion" />
      </div>
      <div class="info-text">
        <h3>Find your favorite KPOP IDOL outfit:</h3>
        <p>
          Your Ultimate Guide to K-pop Fansign Events - Online and Offline
        </p>
        <p>
          Whether you're a seasoned fan or just starting out, this guide will
          walk you through everything you need to know about joining online
          and offline fansign events in Korea.
        </p>
        <button class="find-out">Find Out Now</button>
      </div>
    </section>

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
            <li><a href="customize.php">Product</a></li>
          </ul>
        </div>

        <div class="footer-middle">
          <div class="address">
            <h4>Address</h4>
            <p><?php echo $companyInfo['address']; ?></p>
          </div>
          <div class="address">
            <h4>Address</h4>
            <p><?php echo $companyInfo['address']; ?></p>
          </div>
        </div>

        <div class="footer-right">
          <div class="contact">
            <h4>Phone</h4>
            <p><?php echo $companyInfo['phone']; ?></p>
          </div>
          <div class="contact">
            <h4>Email</h4>
            <p><?php echo $companyInfo['email']; ?></p>
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
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../public/js/customize.js"></script>
  <!-- At the bottom of the body tag, before closing -->
  <script src="../public/js/favorites.js"></script>
  </body>
</html>
