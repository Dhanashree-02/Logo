<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="CSS/index.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<style>
    /* Modal styles */
    .modal-container {
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

    .modal-content-box {
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 30px;
        color: white;
        cursor: pointer;
    }

    /* Service section styles */
    .service-section {
        margin-bottom: 40px;
    }

    .service-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
    }

    .service-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        position: relative;
        margin-bottom: 20px;
    }

    .service-banner-container {
        width: 100%;
        height: 250px;
        display: flex;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }

    /* Logo overlay (hover image) */
    .service-overlay-logo {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80px;
        transform: translate(-50%, -40%);
        opacity: 0.8;
        z-index: 1;
    }

    .discount-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: var(--ocean-green) !important;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        z-index: 2;
    }
</style>

<body>

    <?php
    include 'db.php';

    if (!$pdo) {
        die("Database connection failed.");
    }

    $categories = ["school", "corporate", "security", "hotal",];

    foreach ($categories as $category) {
        echo "<div class='service-section'>";
        // echo "<p>$category Services</p>";

        $query = "SELECT * FROM products WHERE category = :category";

        try {
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':category', $category);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $image_path = "admin/uploads/" . basename($row['image_default']);
                    $logo_path = "admin/uploads/" . basename($row['image_hover']);

                    $image_path = file_exists($image_path) ? $image_path : 'default_image.jpg';
                    $logo_path = file_exists($logo_path) ? $logo_path : 'default_logo.png';

                    $discountPercentage = ($row['discount_price'] > 0 && $row['discount_price'] < $row['price'])
                        ? round(100 - ($row['discount_price'] / $row['price']) * 100) . '%' : '';

                    echo '
                    <div class="service-box">
                        <div class="service-banner-container">
                            <a href="#" class="trigger-modal" data-img="' . $logo_path . '">
                                <img src="' . $image_path . '" alt="' . htmlspecialchars($row['name']) . '" class="service-image">
                                <img src="' . $logo_path . '" alt="Service Logo" class="service-overlay-logo">
                                <p class="discount-badge">' . $discountPercentage . '</p>
                            </a>
                        </div>

                        <div class="service-description">
                            <a href="order_service.php?id=' . $row['id'] . '">
                                <h3 class="service-title">' . htmlspecialchars($row['name']) . '</h3>
                            </a>

                            <div class="price-container">
                                <p class="discounted-price">Rs.' . number_format($row['discount_price'], 2) . '</p>';
                    if ($row['discount_price'] < $row['price']) {
                        echo '<del>Rs.' . number_format($row['price'], 2) . '</del>';
                    }
                    echo '</div>
                        </div>
                    </div>';
                }
            } else {
                echo "<p>No services found in this category.</p>";
            }
        } catch (PDOException $e) {
            echo "Error fetching services: " . $e->getMessage();
        }

        echo "</div>";
    }
    ?>

    <!-- Single Modal (Outside Loop) -->
    <div id="serviceModal" class="modal-container">
        <span class="close-btn">&times;</span>
        <img class="modal-content-box" id="modalImage">
    </div>

    <script>
        document.addEventListener("readystatechange", function () {
            if (document.readyState === "complete") {
                const modal = document.getElementById("serviceModal");
                const modalImg = document.getElementById("modalImage");
                const closeModal = document.querySelector(".close-btn");

                document.querySelectorAll(".trigger-modal").forEach(item => {
                    item.addEventListener("click", function (event) {
                        event.preventDefault();
                        const imgSrc = this.getAttribute("data-img");
                        modalImg.src = imgSrc;
                        modal.style.display = "flex";
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
            }
        });
    </script>

</body>
</html>
