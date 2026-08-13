<?php if(isset($_GET['deleted'])){ ?>



Message deleted successfully.

<button
type="button"
class="btn-close"
data-bs-dismiss="alert">
</button>

</div>

<?php } ?>


<?php


require "includes/auth.php";
require "db.php";

include "includes/header.php";
include "includes/sidebar.php";


$stmt = $pdo->query("
SELECT *
FROM contact_messages
ORDER BY id DESC
");

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="main">

<?php include "includes/navbar.php"; ?>

<div class="content">

<div class="container-fluid">

<!-- Header -->

<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h3 class="fw-bold mb-1">
Contact Messages
</h3>

<p class="text-muted">
Manage all contact form enquiries.
</p>

</div>

<div class="card shadow-sm border-0 px-4 py-3">

<h6 class="text-muted mb-1">
Total Messages
</h6>

<h3 class="mb-0 text-primary">

<?= count($data); ?>

</h3>

</div>

</div>

<!-- Search -->

<div class="card shadow-sm border-0 mb-4">

<div class="card-body">

<input
type="text"
id="searchInput"
class="form-control"
placeholder="Search by Name, Email or Subject">

</div>

</div>

<!-- Table -->

<div class="card shadow border-0">

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle" id="messageTable">

<thead class="table-dark">

<tr>

<th>#</th>

<th>Name</th>

<th>Email</th>

<th>Phone</th>

<th>Subject</th>

<th>Status</th>

<th>Date</th>

<th width="150">
Action
</th>

</tr>

</thead>

<tbody>

<?php if(count($data)>0){ ?>

<?php foreach($data as $row){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= htmlspecialchars($row['fullname']); ?></td>

<td><?= htmlspecialchars($row['email']); ?></td>

<td><?= htmlspecialchars($row['phone']); ?></td>

<td><?= htmlspecialchars($row['subject']); ?></td>

<td>

<?php if($row['status']=="Unread"){ ?>

<span class="badge bg-danger">
Unread
</span>

<?php }else{ ?>

<span class="badge bg-success">
Read
</span>

<?php } ?>

</td>

<td>

<?= date("d M Y",strtotime($row['created_at'])); ?>

</td>

<td>

<a
href="view-contact.php?id=<?= $row['id']; ?>"
class="btn btn-sm btn-primary">

<i class="bi bi-eye"></i>

</a>

<a
href="delete-contact.php?id=<?= $row['id']; ?>"
class="btn btn-sm btn-danger"
onclick="return confirm('Delete this message?')">

<i class="bi bi-trash"></i>

</a>

</td>

</tr>

<?php } ?>

<?php }else{ ?>

<tr>

<td colspan="8" class="text-center py-5">

<h5 class="text-muted">

No Contact Messages Found

</h5>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

</div>


<script>

document.getElementById("searchInput").addEventListener("keyup", function(){

let value = this.value.toLowerCase();

let rows = document.querySelectorAll("#messageTable tbody tr");

rows.forEach(function(row){

row.style.display = row.innerText.toLowerCase().includes(value)
? ""
: "none";

});

});

</script>