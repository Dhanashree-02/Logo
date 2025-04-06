<?php
session_start();
include 'db.php';  // Include your database connection

// Fetch products from the database
$query = "SELECT * FROM products"; // Modify this based on your table name and columns
$stmt = $pdo->query($query);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Dashboard</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Include Ionicons -->
  <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSS/index.css">
</head>

<style>
  /* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f4f7fc;
    margin: 0;
    padding: 0;
    display: flex;
}

/* Sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    background: #2c3e50;
    padding-top: 20px;
    position: fixed;
    left: 0;
    top: 0;
    transition: 0.3s;
}

.sidebar h3 {
    color: #fff;
    text-align: center;
    font-weight: bold;
    margin-bottom: 20px;
}

.sidebar a {
    display: block;
    color: #ddd;
    padding: 12px 20px;
    text-decoration: none;
    font-size: 16px;
    transition: 0.3s;
}

.sidebar a i {
    margin-right: 10px;
}

.sidebar a:hover {
    background: #34495e;
    color: #fff;
}

/* Main Content */
.main-content {
    margin-left: 260px;
    padding: 20px;
    width: calc(100% - 260px);
    transition: 0.3s;
}

.main-content h1 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

/* Overview Cards */
.small-card {
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s;
    box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
}

.small-card:hover {
    transform: scale(1.05);
}

.small-card h5 {
    font-size: 18px;
    font-weight: bold;
}

/* Tables */
.table-responsive {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
}

.table {
    width: 100%;
    margin-bottom: 0;
}

.table thead {
    background: #34495e;
    color: #fff;
}

.table tbody tr:hover {
    background: rgba(52, 73, 94, 0.1);
}

.table img {
    border-radius: 5px;
    transition: transform 0.3s;
}

.table img:hover {
    transform: scale(1.2);
}

/* Buttons */
.btn-warning {
    background: #f39c12;
    border: none;
    transition: 0.3s;
}

.btn-warning:hover {
    background: #e67e22;
}

.btn-danger {
    background: #e74c3c;
    border: none;
    transition: 0.3s;
}

.btn-danger:hover {
    background: #c0392b;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .sidebar {
        width: 60px;
    }
    .sidebar h3 {
        display: none;
    }
    .sidebar a {
        text-align: center;
        font-size: 18px;
        padding: 10px;
    }
    .sidebar a i {
        margin-right: 0;
    }
    .main-content {
        margin-left: 70px;
        width: calc(100% - 70px);
    }
}

</style>
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
  
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'Logo');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders from the database
$sql = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='table-container'>";
    echo "<h2>Pending Orders</h2>";
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Fetch the current order status
        $status = isset($row['status']) ? $row['status'] : 0;

        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['product_name'] . "</td>
                <td>" . $row['quantity'] . "</td>
                <td>" . $row['user_name'] . "</td>
                <td>" . $row['user_email'] . "</td>
                <td>" . $row['order_date'] . "</td>
                <td>" . ($status == 1 ? 'Accepted' : ($status == 0 ? 'Pending' : 'Rejected')) . "</td>
                <td>
                    <form action='process_order_approval.php' method='POST'>
                        <input type='hidden' name='order_id' value='" . $row['id'] . "'>
                        <button type='submit' name='status' value='1' class='accept'>Accept</button>
                        <button type='submit' name='status' value='2' class='reject'>Reject</button>
                    </form>
                </td>
              </tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<p>No orders found.</p>";
}

// Close the database connection
$conn->close();
?>
  
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
