<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shree Graphics Design </title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/logo/Shree_Graphics_Design.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <style>
.sidebar {
  width: 300px;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.sidebar-title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}
.form-group {
  margin-bottom: 15px;
}
.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.code-box {
  background-color: #f3f3f3;
  padding: 10px;
  text-align: center;
  font-weight: bold;
  border-radius: 5px;
  margin-top: 5px;
}
#refreshCodeBtn {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
}
.submit-btn {
  background-color: #28a745;
  color: #fff;
  border: none;
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}
</style>

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

<!--
  - MODAL
-->

<div class="modal" data-modal>

  <div class="modal-close-overlay" data-modal-overlay></div>

  <div class="modal-content">

    <button class="modal-close-btn" data-modal-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="newsletter-img">
      <img src="./assets/images/img2.jpeg" alt="subscribe newsletter" width="400" height="400">
    </div>

    <div class="newsletter">
  <form action="index.php">
    <div class="newsletter-header">
      <h3 class="newsletter-title">Stay Inspired with Unique Logo Designs!</h3>
      <p class="newsletter-desc">
      We craft unique, high-quality logos that define your brand identity. Whether you're a startup or an established business, our designs will leave a lasting impression.
      </p>
    </div>
    <button type="submit" class="btn-newsletter">Get Started</button>
  </form>
</div>


  </div>

</div>



  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/cap1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Cap
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>


    <div class="header-main">

      <div class="container">

      <a href="index.php" class="header-logo">
        <img src="./assets/logo/Shree_Graphics_Design.png" alt="Logo" width="100" height="60">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">
          <a href="Awards.php">
          <button class="action-btn">
            <ion-icon name="trophy-outline"></ion-icon></a>
          </button>
        </a>
        </div>

      </div>

    </div>


    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="index.php" class="menu-title">Embroidery 
            </a>
          </li>

          <li class="menu-category">
            <a href="about.php" class="menu-title">About
            </a>
          </li>

          <li class="menu-category">
            <a href="services.php" class="menu-title">Services
            </a>
          </li>


          <li class="menu-category">
            <a href="#" class="menu-title">Tshirt</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="round_neck.php">Round Neck
                </a>
              </li>

              <li class="dropdown-item">
                <a href="v_neck.php">V-Neck</a>
              </li>

              <li class="dropdown-item">
                <a href="pool_tshirt.php">Pool T-Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="cutSew.php">Cut and sew T-Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="basicpool.php">Basic Pool T-Shirt</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Apparels</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="cap.php">Cap</a>
              </li>

              <li class="dropdown-item">
                <a href="jackets.php">Jackets</a>
              </li>

              <li class="dropdown-item">
                <a href="sweartshirt.php">Sweartshirt</a>
              </li>

              <li class="dropdown-item">
                <a href="denimShirt.php">Denim Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="windcheaters.php">Windcheaters</a>
              </li>

              <li class="dropdown-item">
                <a href="ties.php">Ties</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Travel</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="handbag.php">Hand Bag</a>
              </li>

              <li class="dropdown-item">
                <a href="strolleybag.php">Strolley Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="travelbag.php">Travel Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="backpacks.php">Back Packs</a>
              </li>

              <li class="dropdown-item">
                <a href="laptopbag.php">Laptop Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="laptopcumbag.php">Laptop Cum Overnighter Bag</a>
              </li>

              <li class="dropdown-item">
                <a href="trekkingbag.php">Trekking Bag</a>
              </li>

              <li class="dropdown-item">
                <a href="passport.php">Passport Holder</a>
              </li>

              <li class="dropdown-item">
                <a href="ipad.php">I Pad Pouch</a>
              </li>

              <li class="dropdown-item">
                <a href="laptophandbag.php">Laptop Hand Bag</a>
              </li>

              <li class="dropdown-item">
                <a href="laptopPouch.php"> Laptop Pouch</a>
              </li>


            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Leather</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="leatherofficebag.php">Leather office Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="leatherpassport.php">Leather Passport Holder</a>
              </li>

              <li class="dropdown-item">
                <a href="leatherwallets.php">Leather Wallets</a>
              </li>

              <li class="dropdown-item">
                <a href="leatherorganizer.php">Leather Organizers</a>
              </li>

              <li class="dropdown-item">
                <a href="leathergift.php">Leather Gift Sets</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Uniforms</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="school.php">School Uniforms </a>
              </li>

              <li class="dropdown-item">
                <a href="corporate.php">Corporate Uniforms</a>
              </li>

              <li class="dropdown-item">
                <a href="security.php"> Security Uniforms</a>
              </li>

              <li class="dropdown-item">
                <a href="hotal.php"> Hotel & Restaurant Uniforms </a>
              </li>

              <li class="dropdown-item">
                <a href="medical.php"> Medical & Hospital Uniforms </a>
              </li>

            </ul>
          </li>




          <li class="menu-category">
            <a href="clients.php" class="menu-title">Clients</a>
          </li>

          <li class="menu-category">
            <a href="contact.php" class="menu-title">Contact
            </a>
          </li>


        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Embroidery Designing</a>
        </li>

        

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">T-shirt</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="round_neck.php" class="submenu-title">Round Neck</a>
            </li>

            <li class="submenu-category">
              <a href="v_neck.php" class="submenu-title">V-Neck</a>
            </li>

            <li class="submenu-category">
              <a href="pool_tshirt.php" class="submenu-title">Pool T-Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="cutSew.php" class="submenu-title">Cut and sew T-Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="basicpool.php" class="submenu-title">Basic Pool T-Shirt</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Apparels</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="cap.php" class="submenu-title">Cap</a>
            </li>

            <li class="submenu-category">
              <a href="jackets.php" class="submenu-title">Jackets</a>
            </li>

            <li class="submenu-category">
              <a href="sweartshirt.php" class="submenu-title">Sweartshirt</a>
            </li>

            <li class="submenu-category">
              <a href="denimShirt.php" class="submenu-title"> Denim Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="windcheaters.php" class="submenu-title"> Windcheaters</a>
            </li>

            <li class="submenu-category">
              <a href="ties.php" class="submenu-title"> Ties</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Travel</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="handbag.php" class="submenu-title">Hand Bag</a>
            </li>

            <li class="submenu-category">
              <a href="strolleybag.php" class="submenu-title">Strolley Bags</a>
            </li>

            <li class="submenu-category">
              <a href="travelbag.php" class="submenu-title">Travel Bags</a>
            </li>

            <li class="submenu-category">
              <a href="backpacks.php" class="submenu-title">Back Packs</a>
            </li>

            <li class="submenu-category">
              <a href="laptopbag.php" class="submenu-title">Laptop Bags</a>
            </li>

            <li class="submenu-category">
              <a href="laptopcumbag.php" class="submenu-title">Laptop Cum Overnighter Bag</a>
            </li>

            <li class="submenu-category">
              <a href="trekkingbag.php" class="submenu-title">Trekking Bag</a>
            </li>

            <li class="submenu-category">
              <a href="passport.php" class="submenu-title">Passport Holder</a>
            </li>

            <li class="submenu-category">
              <a href="ipad.php" class="submenu-title">I Pad Pouch</a>
            </li>

            <li class="submenu-category">
              <a href="laptophandbag.php" class="submenu-title">Laptop Hand Bag</a>
            </li>

            <li class="submenu-category">
              <a href="laptopPouch.php" class="submenu-title">Laptop Pouch</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Leather</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="leatherofficebag.php" class="submenu-title">Leather office Bags</a>
            </li>

            <li class="submenu-category">
              <a href="leatherpassport.php" class="submenu-title">Leather Passport Holder</a>
            </li>

            <li class="submenu-category">
              <a href="leatherwallets.php" class="submenu-title">Leather Wallets</a>
            </li>

            <li class="submenu-category">
              <a href="leatherorganizer.php" class="submenu-title">Leather Organizers</a>
            </li>

            <li class="submenu-category">
              <a href="leathergift.php" class="submenu-title">Leather Gift Sets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Uniforms</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="school.php" class="submenu-title">School Uniforms</a>
            </li>

            <li class="submenu-category">
              <a href="corporate.php" class="submenu-title">Corporate Uniforms
              </a>
            </li>

            <li class="submenu-category">
              <a href="security.php" class="submenu-title">Security Uniforms
              </a>
            </li>

            <li class="submenu-category">
              <a href="hotal.php" class="submenu-title">Hotel & Restaurant Uniforms
              </a>
            </li>

            <li class="submenu-category">
              <a href="medical.php" class="submenu-title">Medical & Hospital Uniforms
              </a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="clients.php" class="menu-title">Clients</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Contact</a>
        </li>

      </ul>

    </nav>

  </header>


  <!--
    - MAIN
  -->

  <main>

    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">




        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-box">
            <!-- PRODUCT GRID -->
            <div class="product-grid">
            <?php // Set the category filter to 'cap'
// Set the category filter to 'cap'
$category_filter = 'sweartshirt'; ?>
              <?php include 'Admin/fetch_products.php'; ?>
            </div>
          </div>
          <!--
            - PRODUCT FEATURED
          -->



          <!--
            - PRODUCT GRID
          -->



        </div>
<!--
  - SIDEBAR
-->

<div class="sidebar has-scrollbar" data-mobile-menu>
  <div class="sidebar-category">
    <div class="sidebar-top">
    <h2 class="sidebar-title">Contact Form</h2>

        <button class="sidebar-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
    </div>
    <ul class="sidebar-menu-category-list">
      <li class="sidebar-menu-category">
      <form action="submit_contact.php" method="post" id="contactForm" onsubmit="return validateCode()">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="menu-title-flex">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
          </div>
        </div>
      </li>
      <li class="sidebar-menu-category">
        <div class="menu-title-flex">
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
          </div>
        </div>
      </li>
      <li class="sidebar-menu-category">
        <div class="menu-title-flex">
          <div class="form-group">
            <label for="verificationCode">Code</label>
            <input type="text" id="verificationCode" name="verificationCode" required>
            <div id="codeDisplay" class="code-box">ABC123</div>
          </div>
        </div>
      </li>
      <li class="sidebar-menu-category">
        <div class="menu-title-flex">
          <div class="form-group">
            <button type="button" id="refreshCodeBtn">Refresh Code</button>
          </div>
        </div>
      </li>
      <li class="sidebar-menu-category">
        <div class="menu-title-flex">
          <button type="submit" class="submit-btn">Submit</button>
        </div>
      </li>
      </form>
    </ul>
  </div>
</div>

      </div>

    </div>





  </main>


  
  <!--
    - FOOTER
  -->

  <footer>



    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="index.php" class="footer-nav-link">Home</a>
          </li>

          <li class="footer-nav-item">
            <a href="Services.php" class="footer-nav-link">Services</a>
          </li>

          <li class="footer-nav-item">
            <a href="Awards.php" class="footer-nav-link">Awards</a>
          </li>

          <li class="footer-nav-item">
            <a href="Brands.php" class="footer-nav-link">Brands</a>
          </li>

          <li class="footer-nav-item">
            <a href="contact.php" class="footer-nav-link">Contact</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="round_neck.php" class="footer-nav-link"> Round Neck T-shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="v_neck.php" class="footer-nav-link"> V-neck T-shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="pool_tshirt.php" class="footer-nav-link">Pool T-shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="cutSew.php" class="footer-nav-link">Cut And Sew T-shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="basicpool.php" class="footer-nav-link">Basic Pool T-Shirt</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="cap.php" class="footer-nav-link">Cap</a>
          </li>

          <li class="footer-nav-item">
            <a href="jackets.php" class="footer-nav-link">Jackets</a>
          </li>

          <li class="footer-nav-item">
            <a href="sweartshirt.php" class="footer-nav-link">Sweartshirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="denimShirt.php" class="footer-nav-link">Denimn Shirt</a>
          </li>

          <li class="footer-nav-item">
            <a href="ties.php" class="footer-nav-link">Ties</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Logo Design</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Brand Identity</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Custom Illustrations</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Business Cards</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Social Media Graphics</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
            Mountain View Society, Radhyeswari Nagari, Bakori road Wagholi, Pune.412207
          </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:8888830696" class="footer-nav-link">8888830696</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:lamkhadegs@gmail.com" class="footer-nav-link">lamkhadegs@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">


        <p class="copyright">
          Copyright &copy; <a href="#">Shree Graphics Design </a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>




  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <!-- Script for Contact Form -->
      <script>
    // Initialize the verification code
    const generateCode = () => {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      let newCode = '';
      for (let i = 0; i < 6; i++) {
        newCode += characters.charAt(Math.floor(Math.random() * characters.length));
      }
      return newCode;
    };

    // Update the displayed code
    const refreshCode = () => {
      const newCode = generateCode();
      document.getElementById('codeDisplay').textContent = newCode;
    };

    // Event listener for refreshing the code
    document.getElementById('refreshCodeBtn').addEventListener('click', refreshCode);

    // Validate the code on form submission
    const validateCode = () => {
      const displayedCode = document.getElementById('codeDisplay').textContent;
      const enteredCode = document.getElementById('verificationCode').value;

      if (displayedCode !== enteredCode) {
        alert('Verification code is incorrect. Please try again.');
        return false; // Prevent form submission
      }

      return true; // Allow form submission
    };

    // Set an initial code when the page loads
    window.onload = refreshCode;
  </script>
  
</body>

</html>