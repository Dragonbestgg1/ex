<?php
include "db.php";
$db = new Database();
$conn = $db->dbConnection();

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comments'];
$insert_date = $_POST['time'];

$stmt = $conn->prepare("INSERT INTO comments (name, email, comment, insert_date) VALUES (?, ?, ?, ?)");
$result = $stmt->execute([$name, $email, $comment, $insert_date]);

if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Failed to insert data";
    print_r($stmt->errorInfo());
}
?>
