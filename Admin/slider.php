<?php
// Database connection
$host = 'localhost';
$user = 'root';        // Default user for XAMPP
$password = '';        // Default empty password for XAMPP
$dbname = 'logo';      // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Fetch slider images
$sql = "SELECT * FROM slider_images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
  
  <div class="main-content">
    <div class="container mt-4">
        <h2>Manage Slider Images</h2>

        <!-- Image Upload Form -->
        <form action="upload_image.php" method="POST" enctype="multipart/form-data" class="mb-4">
            <div class="mb-3">
                <label for="image" class="form-label">Select Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <!-- Display Uploaded Images -->
<h3>Uploaded Slider Images</h3>
<div class="row">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Correct the image path as uploads/ is in the same folder as slider.php -->
                    <img src="uploads/<?php echo $row['image_url']; ?>" class="card-img-top" alt="Slider Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($row['subtitle']); ?></p>
                        <p class="card-text">Price: RS. <?php echo number_format($row['price'], 2); ?></p>
                        <form action="delete_image.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No images found.</p>
    <?php endif; ?>
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
</body>
</html>

<?php
$conn->close();
?>
