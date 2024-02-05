<?php
include "db.php";
$db = new Database();
$conn = $db->dbConnection();

$filter = $_GET['filter'] ?? 'date-asc';
$order = 'ORDER BY insert_date ASC';
if ($filter === 'date-desc') {
    $order = 'ORDER BY insert_date DESC';
} elseif ($filter === 'name-asc') {
    $order = 'ORDER BY name ASC';
} elseif ($filter === 'name-desc') {
    $order = 'ORDER BY name DESC';
}

$stmt = $conn->prepare("SELECT * FROM comments $order");
$stmt->execute();
$records = $stmt->fetchAll();

foreach ($records as $record) {
    echo htmlspecialchars($record['name']) . ', ' . htmlspecialchars($record['email']) . ', ' . htmlspecialchars($record['comment']) . ', ' . htmlspecialchars($record['insert_date']) . '<br>';
}
?>
