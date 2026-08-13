<?php
require '../includes/auth.php';
require '../db.php';

include '../includes/header.php';
include '../includes/sidebar.php';

if (!isset($_GET['id'])) {
    header("Location: career-list.php");
    exit;
}

$id = (int)$_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM carrer WHERE id = :id");
$stmt->execute([':id' => $id]);

$career = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$career) {
    header("Location: career-list.php");
    exit;
}
?>

<div class="main">

<?php include '../includes/navbar.php'; ?>

<div class="content">
    <div class="container-fluid">

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit Career</h4>
            </div>

            <div class="card-body">

                <form action="update-career.php" method="POST">

                    <input type="hidden" name="id" value="<?= $career['id']; ?>">

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Job Title</label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   value="<?= htmlspecialchars($career['title']); ?>"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Location</label>
                            <input type="text"
                                   name="location"
                                   class="form-control"
                                   value="<?= htmlspecialchars($career['location']); ?>"
                                   required>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Education</label>
                            <input type="text"
                                   name="education"
                                   class="form-control"
                                   value="<?= htmlspecialchars($career['education']); ?>"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Salary</label>
                            <input type="text"
                                   name="salary"
                                   class="form-control"
                                   value="<?= htmlspecialchars($career['salary']); ?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Experience</label>
                            <input type="text"
                                   name="experience"
                                   class="form-control"
                                   value="<?= htmlspecialchars($career['experience']); ?>"
                                   required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Total Position</label>
                            <input type="number"
                                   name="totalposition"
                                   class="form-control"
                                   value="<?= $career['totalposition']; ?>"
                                   required>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label>Requirement</label>

                        <textarea name="requirement"
                                  id="requirement"
                                  class="form-control"
                                  rows="5"><?= htmlspecialchars($career['requirement']); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Skills</label>

                        <textarea name="skill"
                                  id="skill"
                                  class="form-control"
                                  rows="4"><?= htmlspecialchars($career['skill']); ?></textarea>
                    </div>

                    <button class="btn btn-success" name="update_career">
                        Update Career
                    </button>

                    <a href="career-list.php" class="btn btn-secondary">
                        Back
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>

<?php include '../includes/footer.php'; ?>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
CKEDITOR.replace('requirement');
CKEDITOR.replace('skill');
</script>