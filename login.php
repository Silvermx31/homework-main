<?php
session_start();
$correct_password = "salajane123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['password'] ?? '';
    if ($input === $correct_password) {
        $_SESSION['admin'] = true;
        header("Location: admin.php");
        exit();
    } else {
        echo "Vale parool!";
    }
}
?>

<form method="POST">
    <input type="password" name="password" placeholder="Sisesta parool">
    <button type="submit">Logi sisse</button>
</form>
