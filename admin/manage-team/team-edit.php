<?php
require_once "../includes/auth.php";
include "../db.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: team-list.php");
    exit;
}

$id = (int)$_GET['id'];

// Fetch existing record
$stmt = $pdo->prepare("SELECT * FROM team WHERE id = ?");
$stmt->execute([$id]);
$team = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$team) {
    die("Team member not found.");
}

if (isset($_POST['Submit'])) {

    $team_name = trim($_POST['team_name']);
    $profile   = $_POST['profile'];
    $linkedin  = trim($_POST['linkedin']);

    $uploadDir = "../uploads/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    function uploadImage($field, $uploadDir)
    {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] == 0) {

            $allowed = ['jpg', 'jpeg', 'png', 'webp'];

            $ext = strtolower(pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION));

            if (!in_array($ext, $allowed)) {
                return null;
            }

            $filename = uniqid() . "." . $ext;

            if (move_uploaded_file($_FILES[$field]['tmp_name'], $uploadDir . $filename)) {
                return $filename;
            }
        }

        return null;
    }

    // Keep old image if no new image uploaded
    $image = uploadImage("image", $uploadDir);

    if (!$image) {
        $image = $team['image'];
    } else {
        // Delete old image
        if (!empty($team['image']) && file_exists($uploadDir . $team['image'])) {
            unlink($uploadDir . $team['image']);
        }
    }

    $sql = "UPDATE team SET
                team_name = :team_name,
                profile = :profile,
                linkedin = :linkedin,
                image = :image
            WHERE id = :id";

    try {

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':team_name' => $team_name,
            ':profile'   => $profile,
            ':linkedin'  => $linkedin,
            ':image'     => $image,
            ':id'        => $id
        ]);

        $success = true;

        // Refresh data after update
        $stmt = $pdo->prepare("SELECT * FROM team WHERE id=?");
        $stmt->execute([$id]);
        $team = $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="main">

    <?php include "../includes/navbar.php"; ?>

    <div class="content">
        <div class="container-fluid">


            <form method="POST" enctype="multipart/form-data">

                <div class="team-card">

                    <div class="team-header">

                        <div>
                            <h4>
                                <i class="fas fa-users text-primary"></i>
                                Edit Team Member
                            </h4>

                            <p>Fill in the details to update this team member.</p>
                        </div>

                        <img src="../assets/images/add-team.png" width="250">

                    </div>

                    <div class="p-4">

                        <div class="form-row-custom">

                            <div class="left-label">
                                <i class="far fa-image"></i>
                                Image
                            </div>

                            <div class="right-input">

                                <label class="upload-box">

                                    <input type="file" name="image" id="image" hidden>

                                    <i class="fas fa-cloud-upload-alt"></i>

                                    <p id="fileName">Drag & Drop Image Here or Click to Upload</p>

                                    <small>PNG, JPG or WEBP (Max 2MB)</small>
                                    <img id="preview"
                                         src="../uploads/<?php echo htmlspecialchars($team['image']); ?>"
                                         class="mx-auto"
                                         style="max-width:200px;margin-top:10px;<?php echo empty($team['image']) ? 'display:none;' : ''; ?>">

                                </label>

                            </div>

                        </div>


                        <div class="form-row-custom">

                            <div class="left-label">
                                <i class="far fa-user"></i>
                                Team Name
                            </div>

                            <div class="right-input">

                                <input type="text"
                                       class="form-control"
                                       name="team_name"
                                       placeholder="Enter team member name"
                                       value="<?= htmlspecialchars($team['team_name']) ?>">

                            </div>

                        </div>


                        <div class="form-row-custom">

                            <div class="left-label">
                                <i class="far fa-file-alt"></i>
                                Profile
                            </div>

                            <div class="right-input">

                                <textarea class="form-control"
                                          name="profile"
                                          placeholder="Enter team member profile or description"><?= htmlspecialchars($team['profile']) ?></textarea>

                            </div>

                        </div>


                        <div class="form-row-custom">

                            <div class="left-label">
                                <i class="fab fa-linkedin"></i>
                                LinkedIn URL
                            </div>

                            <div class="right-input">

                                <input type="url"
                                       class="form-control"
                                       name="linkedin"
                                       placeholder="https://www.linkedin.com/in/username"
                                       value="<?= htmlspecialchars($team['linkedin']) ?>">

                            </div>

                        </div>

                    </div>

                    <div class="p-4 border-top text-end">

                        <button type="submit" name="Submit" class="btn btn-save">
                            <i class="fas fa-check"></i>
                            Update Team Member
                        </button>

                    </div>

                </div>

            </form>

        </div>
    </div>
    
    <?php include "../includes/footer.php"; ?>

</div>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.getElementById("image").addEventListener("change", function () {

    const file = this.files[0];

    if (file) {

        document.getElementById("fileName").textContent = file.name;

        const reader = new FileReader();

        reader.onload = function (e) {
            const preview = document.getElementById("preview");
            preview.src = e.target.result;
            preview.style.display = "block";
        };

        reader.readAsDataURL(file);
    }

});
</script>


<?php if(isset($success)) { ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: 'Team member has been updated successfully.',
    confirmButtonColor: '#3085d6'
}).then(() => {
    window.location.href = "team-list.php";
});
</script>
<?php } ?>

<?php if(isset($error)) { ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Database Error',
    text: <?= json_encode($error); ?>,
    confirmButtonColor: '#d33'
});
</script>
<?php } ?>

