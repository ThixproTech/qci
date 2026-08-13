<?php
require '../includes/auth.php';
require '../db.php';

if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM carrer WHERE id=:id");
    $stmt->execute([
        ':id'=>$id
    ]);
}

header("Location: career-list.php");
exit;