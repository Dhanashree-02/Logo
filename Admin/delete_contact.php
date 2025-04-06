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

      $stmt = $pdo->prepare("DELETE FROM contact_form WHERE id = ?");
      $stmt->execute([$id]);

    } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
    }
  }
}

header("Location: contact.php");
exit;
