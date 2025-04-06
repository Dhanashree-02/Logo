<?php
$host = 'localhost';
$dbname = 'logo';
$username = 'root';
$password = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $id = $_POST['id'] ?? null;

  if ($id) {
    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // Toggle read status
      $stmt = $pdo->prepare("UPDATE contact_form SET is_read = NOT is_read WHERE id = ?");
      $stmt->execute([$id]);

    } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
    }
  }
}

header("Location: contact.php");
exit;
