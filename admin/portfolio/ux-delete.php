<?php
require_once "../includes/auth.php";
include "../db.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid ID");
}

$id = (int)$_GET['id'];

try {

    // Fetch record
    $stmt = $pdo->prepare("SELECT * FROM portfolio WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        die("Record not found.");
    }

    // Delete images
    $images = [
        $row['image1'],
    ];

    foreach ($images as $image) {
        if (!empty($image) && file_exists("../uploads/" . $image)) {
            unlink("../uploads/" . $image);
        }
    }

    // Delete database record
    $delete = $pdo->prepare("DELETE FROM portfolio WHERE id = :id");
    $delete->execute([':id' => $id]);

    header("Location: ux-list.php?deleted=1");
    exit;

} catch (PDOException $e) {
    die($e->getMessage());
}
?>
