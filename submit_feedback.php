<?php
require_once 'Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $date = date("Y-m-d H:i:s");

    $db = new Database();
    $stmt = $db->prepare("INSERT INTO feedback (name, email, message, created_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $message, $date);
    $stmt->execute();
    $stmt->close();

    // Kirjuta CSV faili
    $csv = fopen("feedback.csv", "a");
    if ($csv) {
        fputcsv($csv, [$name, $email, $message, $date]);
        fclose($csv);
    }

    header("Location: contact.html?success=1");
    exit();
}
?>
