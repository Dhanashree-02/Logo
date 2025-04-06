<?php
$host = 'localhost';
$dbname = 'logo';
$username = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $search = $_GET['search'] ?? '';
  if (!empty($search)) {
    $stmt = $pdo->prepare("SELECT * FROM contact_form WHERE email LIKE ? OR message LIKE ? ORDER BY id DESC");
    $stmt->execute(["%$search%", "%$search%"]);
  } else {
    $stmt = $pdo->query("SELECT * FROM contact_form ORDER BY id DESC");
  }

  $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Contact Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="CSS/index.css">
  <style>
    .mb-4 {
        text-align: center;
    }
  </style>

<style>
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

</head>

<body class="bg-light">

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
<div class="container mt-5">
  <h2 class="mb-4">Contact Submissions</h2>

  <!-- Search Form -->
  <div class="d-flex justify-content-center mb-4">
  <form method="get" class="col-md-6 col-sm-8 mb-2 mb-sm-0">
    <input type="text" name="search" class="form-control mr-2" placeholder="Search by email or message" value="<?= htmlspecialchars($search) ?>">
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>


  <?php if (count($contacts) > 0): ?>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Time</th>
          <th>Reply</th>
          <th>Read</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($contacts as $contact): ?>
          <tr class="<?= $contact['is_read'] ? 'table-secondary' : '' ?>">
            <td><?= $contact['id'] ?></td>
            <td><?= htmlspecialchars($contact['name']) ?></td>
            <td><?= htmlspecialchars($contact['email']) ?></td>
            <td><?= htmlspecialchars($contact['message']) ?></td>
            <td><?= date("d M Y, h:i A", strtotime($contact['created_at'])) ?></td>
            <td><a href="mailto:<?= $contact['email'] ?>" class="btn btn-sm btn-info">Reply</a></td>
            <td>
              <form method="post" action="mark_read.php">
                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                <button type="submit" class="btn btn-sm <?= $contact['is_read'] ? 'btn-secondary' : 'btn-success' ?>">
                  <?= $contact['is_read'] ? 'Mark Unread' : 'Mark Read' ?>
                </button>
              </form>
            </td>
            <td>
              <form method="post" action="delete_contact.php" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <div class="alert alert-info">No contact entries found.</div>
  <?php endif; ?>
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
