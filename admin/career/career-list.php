<?php
require '../includes/auth.php';
require '../db.php';

include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main">

    <?php include '../includes/navbar.php'; ?>

    <div class="content">
        <div class="container-fluid">

            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Career List</h4>

                    <a href="add-career.php" class="btn btn-light btn-sm">
                        <i class="fas fa-plus"></i> Add Career
                    </a>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover" id="careerTable">

                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Job Title</th>
                                    <th>Location</th>
                                    <th>Education</th>
                                    <th>Salary</th>
                                    <th>Experience</th>
                                    <th>Position</th>
                                    <th width="180">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php
                            $stmt = $pdo->query("SELECT * FROM carrer ORDER BY id DESC");

                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>

                                <tr>

                                    <td><?= $row['id']; ?></td>
                                    <td><?= htmlspecialchars($row['title']); ?></td>
                                    <td><?= htmlspecialchars($row['location']); ?></td>
                                    <td><?= htmlspecialchars($row['education']); ?></td>
                                    <td><?= htmlspecialchars($row['salary']); ?></td>
                                    <td><?= htmlspecialchars($row['experience']); ?></td>
                                    <td><?= $row['totalposition']; ?></td>

                                    <td>

                                        <a href="edit-career.php?id=<?= $row['id']; ?>"
                                           class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <a href="delete-career.php?id=<?= $row['id']; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>

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



<script>
$(document).ready(function () {
    $('#careerTable').DataTable();
});
</script>