<?php
// Database connection settings
$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password (if any)
$dbname = "logo"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted and handle the data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $customerName = $_POST['customerName'];
    $customerContact = $_POST['customerContact'];
    $customerEmail = $_POST['customerEmail'];
    $itemQuantity = $_POST['itemQuantity'];

    // Initialize logo file path
    $logoFilePath = "";

    // Handle file upload
    if (isset($_FILES['logoFile']) && $_FILES['logoFile']['error'] == 0) {
        $logoFile = $_FILES['logoFile'];

        // Correct the file path to point to the Admin/uploads folder
        $targetDir = "uploads/"; // Path to the Admin folder's uploads directory

        // Ensure the file is not too long and make it unique by appending timestamp
        $targetFile = $targetDir . time() . "_" . basename($logoFile["name"]);

        // Check if file is a valid image (optional check)
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($imageFileType, $allowedTypes)) {
            // Move uploaded file to target directory
            if (move_uploaded_file($logoFile["tmp_name"], $targetFile)) {
                $logoFilePath = $targetFile; // Set the logo file path
                // Insert data into the 'vendors' table
                $sql = "INSERT INTO vendors (name, contact, email, quantity, logo) 
                        VALUES ('$customerName', '$customerContact', '$customerEmail', '$itemQuantity', '$logoFilePath')";

                if ($conn->query($sql) === TRUE) {
                    // Show a success popup and redirect after 2 seconds
                    echo "<script>
                            alert('Vendor added successfully!');
                            window.location.href = 'vendor.php';
                          </script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your logo.";
            }
        } else {
            echo "Invalid file type. Only JPG, JPEG, PNG, and GIF are allowed.";
        }
    } else {
        echo "Please upload a valid logo.";
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Form</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Add your CSS file here -->
    <style>
        /* Simple styling for modal background */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            /* Hidden by default */
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 600px;
            display: none;
            /* Hidden by default */
        }
    </style>
</head>

<body>

    <main>
        <!-- Modal overlay to close when clicking outside -->
        <div class="modal-overlay" id="modalOverlay">
            <div class="form-container" id="formContainer">
                <!-- Form for submitting order details -->
                <form action="Admin/submit_vendor.php" method="POST" enctype="multipart/form-data">
                    <label for="customerName">Name:</label>
                    <input type="text" id="customerName" name="customerName" required>

                    <label for="customerContact">Contact:</label>
                    <input type="text" id="customerContact" name="customerContact" required>

                    <label for="customerEmail">Email:</label>
                    <input type="email" id="customerEmail" name="customerEmail" required>

                    <label for="logoFile">Logo (Image):</label>
                    <input type="file" id="logoFile" name="logoFile" accept="image/*" required>

                    <label for="itemQuantity">Quantity:</label>
                    <input type="number" id="itemQuantity" name="itemQuantity" required>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        // JavaScript to handle the modal close functionality
        const modalOverlay = document.getElementById('modalOverlay');
        const formContainer = document.getElementById('formContainer');

        // Show the modal when the page loads
        window.onload = function () {
            modalOverlay.style.display = 'flex';
            formContainer.style.display = 'block';
        }

        // Close the modal if clicking outside the form
        modalOverlay.addEventListener('click', function (event) {
            if (event.target === modalOverlay) {
                modalOverlay.style.display = 'none';
            }
        });
    </script>
<!-- For searcha button -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchBar = document.getElementById("searchBar");
    const showcases = document.querySelectorAll(".showcase");

    searchBar.addEventListener("keyup", function () {
        const query = searchBar.value.toLowerCase();

        showcases.forEach(showcase => {
            const title = showcase.querySelector(".showcase-title").innerText.toLowerCase();
            if (title.includes(query)) {
                showcase.style.display = "block";
            } else {
                showcase.style.display = "none";
            }
        });
    });
});
</script>
</body>

</html>