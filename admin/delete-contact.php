<?php

require "includes/auth.php";
require "db.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: contact-messages.php");
    exit;
}

$id = (int)$_GET['id'];

$stmt = $pdo->prepare("DELETE FROM contact_messages WHERE id=?");
$stmt->execute([$id]);

header("Location: contact-messages.php?deleted=1");
exit;