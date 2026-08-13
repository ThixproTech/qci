<?php
require_once "../includes/auth.php";
include "../db.php";

if(isset($_POST['Submit'])){

    $heading = trim($_POST['heading']);
    $description = $_POST['Description'];

    $uploadDir = "../uploads/";

    if(!is_dir($uploadDir)){
        mkdir($uploadDir,0777,true);
    }

    function uploadImage($field,$uploadDir){

        if(isset($_FILES[$field]) && $_FILES[$field]['error'] == 0){

            $ext = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);

            $filename = uniqid().".".$ext;

            move_uploaded_file($_FILES[$field]['tmp_name'], $uploadDir.$filename);

            return $filename;
        }

        return null;

    }

    $image1 = uploadImage("image1",$uploadDir);

    $sql = "INSERT INTO portfolio
    (heading, development_type, image1, description)
    VALUES
    (:heading, :development_type, :image1, :description)";

    try {

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':heading' => $heading,
        ':development_type' => 'ai',
        ':image1' => $image1,
        ':description' => $description
    ]);

    $success = true;

} catch(PDOException $e){

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

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title mb-4">AI Add</h4>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Title</label>
                                        <input type="text" name="heading" class="form-control" required>
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image1" class="form-control">
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Description</label>
                                        <textarea name="Description" id="Description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
CKEDITOR.replace('Description');
</script>

<?php if(isset($success)) { ?>

<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: 'Record added successfully.',
    confirmButtonColor: '#3085d6'
}).then(() => {
    window.location.href = "ai-list.php";
});
</script>

<?php } ?>

<?php if(isset($error)) { ?>

<script>
Swal.fire({
    icon: 'error',
    title: 'Error!',
    text: <?= json_encode($error); ?>,
    confirmButtonColor: '#d33'
});
</script>

<?php } ?>
