<?php
include 'db.php';  // Include your database connection

// Check if ID is provided in the URL
if (!isset($_GET['id'])) {
    die("Product ID not provided.");
}

// Fetch product details from the database
$product_id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$product_id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("Product not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Product</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Include Custom CSS -->
  <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="text-center py-4">
      <h3>My Dashboard</h3>
    </div>
    <a href="index.php"><i class="fas fa-chart-line"></i> Overview</a>
    <a href="Products.php"><i class="fas fa-box-open"></i> Products</a>
    <a href="admin_orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
    <!-- <a href="customers.php"><i class="fas fa-users"></i> Customers</a> -->
    <!-- <a href="#settings"><i class="fas fa-cog"></i> Settings</a> -->
    <a href="clients.php"><i class="fas fa-briefcase"></i> Clients</a>
    <!-- <a href="slider.php"><i class="fas fa-images"></i> Slider</a> -->
    <a href="contact.php"><i class="fas fa-address-book"></i> Contact Info</a>

    <a href="#" onclick="confirmLogout()" >
    <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h1 class="mb-4">Product Details</h1>
    <div class="card">
      <div class="card-body">
        <h3 class="card-title"> <?php echo htmlspecialchars($product['name']); ?> </h3>
        <p><strong>Category:</strong> <?php echo htmlspecialchars($product['category']); ?></p>
        <p><strong>Price:</strong> Rs. <?php echo number_format($product['price'], 2); ?></p>
        <p><strong>Discount:</strong> <?php echo htmlspecialchars($product['discount_price']); ?>%</p>
        <p><strong>Stock:</strong> <?php echo htmlspecialchars($product['stock']); ?></p>
        <p><strong>Rating:</strong> <?php echo htmlspecialchars($product['rating']); ?> / 5</p>
        <p><strong>Default Image:</strong></p>
        <img src="uploads/<?php echo htmlspecialchars($product['image_default']); ?>" alt="Product Image" class="img-fluid" width="200">
        <p><strong>Logo Image:</strong></p>
        <img src="uploads/<?php echo htmlspecialchars($product['image_hover']); ?>" alt="Logo Image" class="img-fluid" width="200">
        <div class="mt-3">
          <a href="Products.php" class="btn btn-secondary">Back to Products</a>
        </div>
      </div>
    </div>
  </div>

  <script>
function confirmLogout() {
  if (confirm("Are you sure you want to logout?")) {
    window.location.href = "logout.php";
  }
}
</script>

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
