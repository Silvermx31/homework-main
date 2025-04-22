<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

require_once 'Database.php';
$db = new Database();

$query = "SELECT * FROM feedback ORDER BY created_at DESC";
$result = $db->conn->query($query);

echo "<h2>Tagasiside</h2>";
echo "<table border='1'>";
echo "<tr><th>Nimi</th><th>Email</th><th>Sõnum</th><th>Kuupäev</th><th>Kustuta</th></tr>";

while ($row = $result->fetch_assoc()) {
    $date = date("d.m.Y H:i", strtotime($row['created_at']));
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['message']}</td>
            <td>{$date}</td>
            <td>
                <form method='POST' action='delete.php'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit'>Kustuta</button>
                </form>
            </td>
          </tr>";
}
echo "</table>";
?>
