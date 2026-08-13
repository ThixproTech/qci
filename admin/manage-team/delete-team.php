<?php
require_once "../includes/auth.php";
include "../db.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid ID");
}

$id = (int)$_GET['id'];

try {

    // Fetch record
    $stmt = $pdo->prepare("SELECT * FROM team WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        die("Record not found.");
    }

    // Delete images
    $images = [
        $row['image'],
    ];

    foreach ($images as $image) {
        if (!empty($image) && file_exists("../uploads/" . $image)) {
            
            unlink("../uploads/" . $image);
        }
    }

    $delete = $pdo->prepare("DELETE FROM team WHERE id = :id");
    $delete->execute([':id' => $id]);

    header("Location: team-list.php?deleted=1");
    exit;

} catch (PDOException $e) {
    die($e->getMessage());
}
?>
