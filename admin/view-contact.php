<?php

require "includes/auth.php";
require "db.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: contact-messages.php");
    exit;
}

$id = (int)$_GET['id'];

// Mark as Read
$stmt = $pdo->prepare("UPDATE contact_messages SET status='Read' WHERE id=?");
$stmt->execute([$id]);

// Fetch Contact
$stmt = $pdo->prepare("SELECT * FROM contact_messages WHERE id=?");
$stmt->execute([$id]);

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    die("Message not found.");
}

include "includes/header.php";
include "includes/sidebar.php";
?>

<div class="main">

<?php include "includes/navbar.php"; ?>

<div class="content">

<div class="container-fluid">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4 class="mb-0">

View Contact Message

</h4>

</div>

<div class="card-body">

<table class="table table-bordered">

<tr>
<th width="220">ID</th>
<td><?= $row['id']; ?></td>
</tr>

<tr>
<th>Full Name</th>
<td><?= htmlspecialchars($row['fullname']); ?></td>
</tr>

<tr>
<th>Email</th>
<td><?= htmlspecialchars($row['email']); ?></td>
</tr>

<tr>
<th>Phone</th>
<td><?= htmlspecialchars($row['phone']); ?></td>
</tr>

<tr>
<th>Company</th>
<td><?= htmlspecialchars($row['company']); ?></td>
</tr>

<tr>
<th>Subject</th>
<td><?= htmlspecialchars($row['subject']); ?></td>
</tr>

<tr>
<th>Message</th>
<td><?= nl2br(htmlspecialchars($row['message'])); ?></td>
</tr>

<tr>
<th>Status</th>
<td>

<?php if($row['status']=="Unread"){ ?>

<span class="badge bg-danger">Unread</span>

<?php }else{ ?>

<span class="badge bg-success">Read</span>

<?php } ?>

</td>
</tr>

<tr>
<th>IP Address</th>
<td><?= htmlspecialchars($row['ip_address']); ?></td>
</tr>

<tr>
<th>Date</th>
<td><?= date("d M Y h:i A", strtotime($row['created_at'])); ?></td>
</tr>

</table>

<a href="contact-messages.php" class="btn btn-secondary">

<i class="bi bi-arrow-left"></i>

Back

</a>

<a
href="delete-contact.php?id=<?= $row['id']; ?>"
class="btn btn-danger"
onclick="return confirm('Delete this message?');">

<i class="bi bi-trash"></i>

Delete

</a>

</div>

</div>

</div>

</div>

</div>

<?php include "includes/footer.php"; ?>