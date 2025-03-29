<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product </title>
    <link rel="stylesheet" href="CSS/index.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>


<style>
.pagination {
    text-align: left;
    margin-top: 20px;
}
.pagination a {
    display: inline-block;
    padding: 8px 12px;
    margin: 5px;
    border: 2px solid #ccc;
    text-decoration: none;
    color: #333;
    border-radius: 5px;
}
.pagination a.active {
    background-color: #007bff;
    color: white;
    border: 1px solid #007bff;
}
.pagination a:hover {
    background-color: #0056b3;
    color: white;
}

</style>

<style>
    /* Modal styles */
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
</style>

<style>
    .product-img {
        width: 100%;
        height: 250px; /* Fixed height for all images */
        object-fit: cover; /* Ensures images fill the area without distortion */
        border-radius: 10px; /* Optional: Rounded corners */
    }

    .showcase {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 100%;
        position: relative; /* To position logo on top */
    }

    .showcase-banner {
        width: 100%;
        height: 250px; /* Fixed height */
        display: flex;
        justify-content: center;
        overflow: hidden;
        position: relative; /* For absolute positioning of logo */
    }

    /* Logo overlay (hover image) */
    .product-logo {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80px; /* Adjust size as needed */
        height: auto;
        transform: translate(-50%, -40%);
        opacity: 0.8; /* Make it slightly transparent */
        z-index: 1; /* Ensure it appears on top */
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
        z-index: 2; /* Ensure badge is on top */
    }
</style>

<body>
    <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img id="modalImg" class="modal-content">
    </div>

    <?php
    // Database connection
    include 'db.php';  // Ensure PDO-based database connection is included

    // Check if the database connection is successful
    if (!$pdo) {
        die("Database connection failed.");
    }

    // Check if category filter is set
    $category_filter = isset($category_filter) ? $category_filter : '';

    // Prepare the SQL query based on the category filter
    $query = "SELECT * FROM products";
    if ($category_filter) {
        $query .= " WHERE category = :category";
    }

    try {
        // Prepare and execute the query
        $stmt = $pdo->prepare($query);

        // Bind parameters
        if ($category_filter) {
            $stmt->bindParam(':category', $category_filter);
        }

        $stmt->execute();

        // Check if there are products
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Ensure the image paths are correctly formed
                $image_path = "admin/uploads/" . basename($row['image_default']);
                $logo_path = "admin/uploads/" . basename($row['image_hover']);

                // Check if the images exist; if not, use a default image
                $image_path = file_exists($image_path) ? $image_path : 'default_image_path.jpg';
                $logo_path = file_exists($logo_path) ? $logo_path : 'default_logo.png';

                // Display product
                echo '<div class="showcase">';
                echo '  <div class="showcase-banner">';
                echo '    <a href="#" class="openModal" data-img="' . $logo_path . '">';
                echo '      <img src="' . $image_path . '" alt="' . htmlspecialchars($row['name']) . '" class="product-img">';
                echo '      <img src="' . $logo_path . '" alt="Logo" class="product-logo">';
                echo '      <p class="showcase-badge">' . ($row['discount_price'] ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '') . '</p>';
                echo '    </a>';
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

            document.querySelectorAll(".openModal").forEach(item => {
                item.addEventListener("click", function (event) {
                    event.preventDefault();
                    const imgSrc = this.getAttribute("data-img");

                    modalImg.src = "loader.gif";
                    modal.style.display = "flex";

                    const newImg = new Image();
                    newImg.src = imgSrc;
                    newImg.onload = function () {
                        modalImg.src = imgSrc;
                    };
                });
            });

            closeModal.addEventListener("click", function () {
                modal.style.display = "none";
            });

            modal.addEventListener("click", function (e) {
                if (e.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>