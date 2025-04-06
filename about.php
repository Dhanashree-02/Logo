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

  <!-- Include Bootstrap CSS & JS if not already included -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    
<style>
  .custom-slider {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
  margin-bottom: 20px;
}

.custom-slides {
  position: relative;
  width: 100%;
  height: 100%;
}

.custom-slide {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.custom-slide.active {
  opacity: 1;
  z-index: 1;
}

.custom-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.custom-caption {
  position: absolute;
  bottom: 20%;
  left: 10%;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 15px 25px;
  border-radius: 8px;
  max-width: 90%;
}

.custom-caption h2 {
  font-size: 28px;
  margin-bottom: 10px;
}

.custom-caption p {
  font-size: 18px;
}

.prev,
.next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 30px;
  background-color: rgba(0, 0, 0, 0.4);
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
  z-index: 2;
  border-radius: 50%;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.6);
}

.prev {
  left: 20px;
}

.next {
  right: 20px;
}

</style>

<style>
      .product-container a {
  text-decoration: none !important;
  color: inherit;
}

.product-container ul {
  padding-left: 0 !important;
  margin-bottom: 0 !important;
}

.product-container ul li {
  list-style: none !important;
}

#aboutCarousel {
  max-height: 400px; /* Set the desired height */
  overflow: hidden;
  margin-bottom: 25px;
}

#aboutCarousel .carousel-item img {
  height: 400px; /* Match the height */
  object-fit: cover;
  width: 100%;
}

.carousel-caption {
  bottom: 20px;
  background-color: rgba(0, 0, 0, 0.5); /* Optional overlay for better text visibility */
  padding: 10px 20px;
  border-radius: 10px;
}
</style>

    <style>

.action-btn {
  display: flex;
  flex-direction: column; /* Stacks the icon and text vertically */
  align-items: center; /* Centers them horizontally */
  justify-content: center; /* Centers them vertically */
  gap: 4px; /* Adds space between icon and text */
  padding: 8px 12px;
  font-size: 14px;
  background: none;
  border: none;
  cursor: pointer;
}

.action-btn ion-icon {
  font-size: 30px; /* Adjust icon size */
}

.action-btn p {
  margin: 0;
  font-size: 15px; /* Adjust text size */
}

</style> 


<style>
  /* General Styling */
.container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Row Styling */
.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
  text-align: justify;
}

/* Address container styling */
.address-container {
  padding: 25px;
  border-radius: 12px;
  margin-bottom: 20px;
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s;
  text-align: justify;
}

.address-container:hover {
  transform: translateY(-7px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
}

.address-container h3 {
  font-size: 26px;
  font-weight: bold;
  color: orangered;
  border-left: 6px solid orange;
  padding-left: 12px;
  text-transform: uppercase;
}

.address-container p,
.address-container ul {
  list-style: none; /* Remove default bullets */
  font-size: 18px;
  color: #444;
  line-height: 1.6;
}

.address-container ul {
  list-style: none; /* Remove default bullets */
  padding-left: 0;
}

.address-container ul li {
  position: relative;
  font-size: 18px;
  color: #444;
  padding: 8px 0 8px 30px; /* Left padding for the icon */
  transition: color 0.3s ease-in-out;
}

/* Custom orange tick */
.address-container ul li::before {
  content: "✔"; /* Two checkmarks */
  color: black;
  font-weight: bold;
  margin-right: 10px;
  font-size: 20px;
}

.address-container ul li::before {
  background: linear-gradient(to right, orangered 50%, orange 50%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}



/* Sidebar styling */
.sidebar {
  width: 350px;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(240, 240, 240, 0.6));
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(15px);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s;
}

.sidebar:hover {
  transform: scale(1.03);
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.35);
}

.sidebar-title {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 15px;
  color: orangered;
  text-transform: uppercase;
  text-shadow: 1px 1px 3px orange;
}

/* Form Styling */
.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-size: 18px;
  color: #333;
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid transparent;
  border-radius: 8px;
  font-size: 16px;
  transition: 0.3s;
  background: rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(8px);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: #0056b3;
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
}

.form-group textarea {
  resize: vertical;
  height: 120px;
}

/* Code Box Styling */
.code-box {
  background: linear-gradient(135deg, #f3f3f3, #e0e0e0);
  padding: 12px;
  text-align: center;
  font-weight: bold;
  font-size: 18px;
  border-radius: 6px;
  margin-top: 5px;
  box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.2);
}

/* Buttons Styling */
#refreshCodeBtn,
.submit-btn {
  width: 100%;
  padding: 12px;
  border-radius: 8px;
  font-size: 18px;
  cursor: pointer;
  font-weight: bold;
  transition: 0.3s ease-in-out;
  text-transform: uppercase;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

#refreshCodeBtn {
  background: linear-gradient(135deg, #007bff, #0056b3);
  color: #fff;
  border: none;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

#refreshCodeBtn:hover {
  background: linear-gradient(135deg, #0056b3, #003d80);
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.submit-btn {
  background: linear-gradient(135deg, #28a745, #218838);
  color: #fff;
  border: none;
  margin-top: 10px;
}

.submit-btn:hover {
  background: linear-gradient(135deg, #218838, #1e7e34);
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}


</style>


</head>

<body>


  <div class="overlay" data-overlay></div>

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
      <img src="./assets/images/logosample/img.jpeg" alt="subscribe newsletter" width="400" height="400">
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
      <img src="./assets/images/logosample/img9.jpeg" alt="Logo" width="80" height="70">
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
        <!-- Shree Graphics Design -->
        </a>

        <div class="header-search-container">
    <input type="search" id="searchBar" name="search" class="search-field" placeholder="Enter your product name...">
    <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
    </button>
</div>



        <div class="header-user-actions">

        <a href="about.php">
          <button class="action-btn">
          <ion-icon name="bookmark-outline"></ion-icon>
          <p>About</p>

         </button>



        <a href="services.php">
          <button class="action-btn">
            <ion-icon name="apps-outline"></ion-icon>
            <p>Services</p>

          </button>
        </a>
         
        <a href="clients.php">
  <button class="action-btn">
    <ion-icon name="trophy-outline"></ion-icon>
    <p>Clients</p>
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
            <a href="tshirt.php" class="menu-title">T/Shirt</a>

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
            <a href="Apparels.php" class="menu-title">Apparels</a>

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

             

            </ul>
          </li>

          <li class="menu-category">
            <a href="travel.php" class="menu-title">Travel</a>

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
            <a href="leather.php" class="menu-title">Leather</a>

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


            </ul>
          </li>

          <li class="menu-category">
            <a href="uniforms.php" class="menu-title">Uniforms</a>

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

              <li class="dropdown-item">
                <a href="bank.php">Bank Uniforms </a>
              </li>


              <li class="dropdown-item">
                <a href="housekeeping.php">House Keeping Staff Uniforms </a>
              </li>

              <li class="dropdown-item">
                <a href="delivery.php">Delivery staff Uniforms </a>
              </li>

              <li class="dropdown-item">
                <a href="sports.php">Sports Uniforms </a>
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
          <a href="about.php" class="menu-title">About</a>
        </li>


        <li class="menu-category">
          <a href="services.php" class="menu-title">Services</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="tshirt.php">
            <p class="menu-title">T-shirt</p>
            </a>
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
            <a href="apparels.php">
            <p class="menu-title">Apparels</p>
            </a>
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

            

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="travel.php">
            <p class="menu-title">Travel</p>
            </a>
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
            <a href="leather.php">
            <p class="menu-title">Leather</p>
            </a>
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


          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="uniforms.php">
            <p class="menu-title">Uniforms</p>
            </a>
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
          <a href="contact.php" class="menu-title">Contact</a>
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


<!-- Image Slider Section -->
<div class="custom-slider">
  <div class="custom-slides">
    <div class="custom-slide active">
      <img src="assets/images/banner-1.jpg" alt="About Image 1">
      <div class="custom-caption">
        <h2>Welcome to Shree Graphics Design</h2>
        <p>Expert Embroidery and Logo Designing Services</p>
      </div>
    </div>

    <div class="custom-slide">
      <img src="assets/images/banner-2.jpg" alt="About Image 2">
      <div class="custom-caption">
        <h2>Bring Your Brand to Life</h2>
        <p>Custom Logos, Apparel Printing, and More</p>
      </div>
    </div>

    <div class="custom-slide">
      <img src="assets/images/banner-3.jpg" alt="About Image 3">
      <div class="custom-caption">
        <h2>Quality Meets Creativity</h2>
        <p>Let your brand speak with our designs</p>
      </div>
    </div>
  </div>

  <!-- Navigation buttons -->
  <button class="prev" onclick="changeSlide(-1)">❮</button>
  <button class="next" onclick="changeSlide(1)">❯</button>
</div>



    <!--
      - PRODUCT
    -->
    <div class="product-container">

<div class="container">

  <div class="product-box">

    <div class="row">
      <div class="col-left">

        <div class="address-container">
          <h3>About Us</h3>
          <p>Welcome to <strong>Shree Graphics Design</strong>, your trusted partner for professional embroidery and digital logo designing. We specialize in creating custom logos for a wide range of products, including T-Shirts, Uniforms, Apparels, Travel Accessories, Leather Products, and more.</p>
        </div>

        <div class="address-container">
          <h3>Our Vision</h3>
          <p>Our vision is to bring creativity and innovation to logo designing, ensuring that your brand stands out with a unique and professional identity.</p>
        </div>

        <div class="address-container">
          <h3>What We Offer</h3>
          <ul >
            <li>Custom Embroidery Logo Designs</li>
            <li>High-Quality Digital Logo Creation</li>
            <li>Branding for Schools, Businesses, and Events</li>
            <li>Personalized Printing for T-Shirts, Caps, Uniforms, and More</li>
          </ul>
        </div>

        <div class="address-container">
          <h3>Why Choose Us?</h3>
          <ul>
            <li>Experienced team of designers</li>
            <li>Use of advanced embroidery & printing technology</li>
            <li>Customized solutions for all industries</li>
            <li>Affordable pricing & on-time delivery</li>
          </ul>
        </div>

      </div>

    </div>

    <div class="row">
      <div class="col-left">

        <div class="address-container">
          <h3>Our Services</h3>
          <p>At <strong>Shree Graphics Design</strong>, we offer a wide range of professional services to help your brand stand out with high-quality embroidery and digital logo designing.</p>
        </div>

        <div class="address-container">
          <h3>Custom Embroidery Logo Design</h3>
          <p>We specialize in designing and stitching customized embroidery logos for T-Shirts, Uniforms, and Corporate Wear. Our team ensures precision and quality in every design.</p>
        </div>

        <div class="address-container">
          <h3>Digital Logo Creation</h3>
          <p>We provide high-resolution digital logo designs tailored for businesses, startups, and personal brands, ensuring a professional and unique brand identity.</p>
        </div>

        <div class="address-container">
          <h3>Printing & Branding Services</h3>
          <ul>
            <li>Personalized T-Shirts, Caps, and Hoodies</li>
            <li>Corporate Uniform Branding</li>
            <li>Event Merchandise & Promotional Items</li>
            <li>Leather Products Customization</li>
          </ul>
        </div>

        <div class="address-container">
          <h3>Why Choose Our Services?</h3>
          <ul>
            <li>Premium quality embroidery and printing</li>
            <li>Custom-made designs for every client</li>
            <li>Fast and reliable delivery</li>
            <li>Affordable pricing with no compromise on quality</li>
          </ul>
        </div>

      </div>
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
            <a href="handbag.php" class="footer-nav-link">Hand Bag</a>
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

            <a href="mailto:lamkhadegs@gmail.com" class="footer-nav-link">hr@devconsoftware.com</a>
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
  
<!-- For Slider -->
<script>
  const slides = document.querySelectorAll('.custom-slide');
  let currentSlide = 0;
  let slideInterval = setInterval(autoSlide, 4000);

  function showSlide(index) {
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
  }

  function changeSlide(direction) {
    clearInterval(slideInterval); // Stop auto sliding on manual change
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    showSlide(currentSlide);
    slideInterval = setInterval(autoSlide, 4000); // Restart auto sliding
  }

  function autoSlide() {
    changeSlide(1);
  }
</script>


</body>

</html>