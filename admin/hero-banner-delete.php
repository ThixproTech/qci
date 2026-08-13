<?php

include "./db.php";

$id=$_GET['id'];

$stmt=$pdo->prepare("
SELECT *
FROM hero_banners
WHERE id=?
");

$stmt->execute([$id]);

$banner=$stmt->fetch();

if($banner){

    if(file_exists("uploads/".$banner['image'])){

        unlink("uploads/".$banner['image']);

    }

    $stmt=$pdo->prepare("
    DELETE FROM hero_banners
    WHERE id=?
    ");

    $stmt->execute([$id]);

}

header("Location: hero-banner.php?deleted=1");
exit;