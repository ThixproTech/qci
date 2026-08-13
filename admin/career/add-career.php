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
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Add New Career Posting</h4>
                </div>
                <div class="card-body">
                    
                    <!-- Alert Messages -->
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-success">Career entry added successfully!</div>
                    <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                        <div class="alert alert-danger">Something went wrong. Please try again.</div>
                    <?php endif; ?>

                    <form action="insert-career.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Job Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Location</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Education Required</label>
                                <input type="text" name="education" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Salary Range</label>
                                <input type="text" name="salary" class="form-control" placeholder="e.g. $50,000 - $70,000">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Experience Required</label>
                                <input type="text" name="experience" class="form-control" placeholder="e.g. 2-3 Years" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Total Positions</label>
                                <input type="number" name="totalposition" class="form-control" min="1" required>
                            </div>
                        </div>

                        <div class="mb-3">
    <label class="form-label fw-bold">Job Requirements</label>
    <textarea name="requirement" id="requirement" class="form-control" rows="4" required></textarea>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Skills Required</label>
    <textarea name="skill" id="skill" class="form-control" rows="3" required></textarea>
</div>

                        <div class="mt-4">
                            <button type="submit" name="submit_career" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Submit Posting
                            </button>
                            <a href="career-list.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('requirement');
    CKEDITOR.replace('skill');
</script>

<script>
if (window.history.replaceState) {
    window.history.replaceState({}, document.title, window.location.pathname);
}
</script>

