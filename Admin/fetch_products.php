<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <link rel="stylesheet" href="CSS/index.css" />
  <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <style>
    .price-box {
  margin: 10px 0;
}

.price {
  font-size: 18px;
  font-weight: bold;
}

.showcase-rating {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 8px 0;
  color:rgb(236, 209, 56);
  font-size: 18px;
}
    .order-now-btn,
    .view-logo-btn {
      padding: 8px 6px;
      margin-bottom: 10px;
      background-color: #FF91A4;
      color: white;
      border-radius: 4px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s ease;
      margin-right: 10px;
      border: none;
      cursor: pointer;
    }

    .order-now-btn:hover,
    .view-logo-btn:hover {
      background-color: rgb(245, 111, 133);
    }

    .button-group {
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }

    .close {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 30px;
      color: white;
      cursor: pointer;
    }

    .product-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      cursor: pointer;
    }

    .showcase {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      height: 100%;
      position: relative;
      margin-bottom: 30px;
    }

    .showcase-banner {
      width: 100%;
      height: 250px;
      display: flex;
      justify-content: center;
      overflow: hidden;
      position: relative;
    }

    .product-logo {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80px;
      height: auto;
      transform: translate(-50%, -40%);
      opacity: 0.8;
      z-index: 1;
    }

    .showcase-badge {
      position: absolute;
      top: 10px;
      left: 10px;
      background: red;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 12px;
      font-weight: bold;
      z-index: 2;
    }

    .showcase-content {
      text-align: center;
      margin-top: -1  0px;
    }
  </style>
</head>

<body>
  <!-- Image Modal -->
  <div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img id="modalImg" class="modal-content" loading="eager" />
  </div>

  <?php
  include 'db.php';

  if (!$pdo) {
    die("Database connection failed.");
  }

  $category_filter = isset($category_filter) ? $category_filter : '';
  $query = "SELECT * FROM products";
  if ($category_filter) {
    $query .= " WHERE category = :category";
  }

  try {
    $stmt = $pdo->prepare($query);
    if ($category_filter) {
      $stmt->bindParam(':category', $category_filter);
    }
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $image_path = "admin/uploads/" . basename($row['image_default']);
        $logo_path = "admin/uploads/" . basename($row['image_hover']);

        $image_path = file_exists($image_path) ? $image_path : 'default_image_path.jpg';
        $logo_path = file_exists($logo_path) ? $logo_path : 'default_logo.png';

        echo '<div class="showcase">';
        echo '  <div class="showcase-banner">';
        // 👇 Add data-logo attribute here
        echo '    <img src="' . $image_path . '" alt="' . htmlspecialchars($row['name']) . '" class="product-img" data-logo="' . $logo_path . '">';
        echo '    <img src="' . $logo_path . '" alt="Logo" class="product-logo">';
        echo '    <p class="showcase-badge">' . ($row['discount_price'] ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '') . '</p>';
        echo '  </div>';
        echo '  <div class="showcase-content">';
        echo '    <a href="order_product.php?id=' . $row['id'] . '" class="showcase-category">' . htmlspecialchars($row['category']) . '</a>';
        echo '    <a href="order_product.php?id=' . $row['id'] . '"><h3 class="showcase-title">' . htmlspecialchars($row['name']) . '</h3></a>';
        echo '    <div class="showcase-rating">';
        for ($i = 0; $i < $row['rating']; $i++) {
          echo '      <ion-icon name="star"></ion-icon>';
        }
        for ($i = $row['rating']; $i < 5; $i++) {
          echo '      <ion-icon name="star-outline"></ion-icon>';
        }
        echo '    </div>';
        echo '    <div class="price-box">';
        echo '      <p class="price">Rs.' . number_format($row['discount_price'], 2) . '</p>';
        if ($row['discount_price'] < $row['price']) {
          echo '      <del>Rs.' . number_format($row['price'], 2) . '</del>';
        }
        echo '    </div>';
        echo '    <div class="button-group">';
        echo '      <a href="order_product.php?id=' . $row['id'] . '" class="order-now-btn">Order Now</a>';
        echo '      <button class="view-logo-btn" data-img="' . $logo_path . '">View Logo</button>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
      }
    } else {
      echo "No products found.";
    }
  } catch (PDOException $e) {
    echo "Error fetching products: " . $e->getMessage();
  }
  ?>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const modal = document.getElementById("imageModal");
      const modalImg = document.getElementById("modalImg");
      const closeModal = document.querySelector(".close");

      function openModal(src) {
        modalImg.src = src;
        modal.style.display = "flex";
      }

      // View Logo button click
      document.querySelectorAll(".view-logo-btn").forEach(button => {
        button.addEventListener("click", function () {
          const imgSrc = this.getAttribute("data-img");
          openModal(imgSrc);
        });
      });

      // Product image click → show logo
      document.querySelectorAll(".product-img").forEach(img => {
        img.addEventListener("click", function () {
          const logoSrc = this.getAttribute("data-logo");
          if (logoSrc) {
            openModal(logoSrc);
          }
        });
      });

      closeModal.addEventListener("click", function () {
        modal.style.display = "none";
        modalImg.src = "";
      });

      modal.addEventListener("click", function (e) {
        if (e.target === modal) {
          modal.style.display = "none";
          modalImg.src = "";
        }
      });
    });
  </script>

</body>

</html>
