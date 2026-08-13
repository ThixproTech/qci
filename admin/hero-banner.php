<?php
require_once "./includes/auth.php";
include "./db.php";

$success = false;

if(isset($_POST['uploadBanner'])){

    $image="";

    if($_FILES['banner']['error']==0){

        $ext=strtolower(pathinfo($_FILES['banner']['name'],PATHINFO_EXTENSION));

        $allowed=['jpg','jpeg','png','webp'];

        if(in_array($ext,$allowed)){

            if(!is_dir("uploads")){
                mkdir("uploads",0777,true);
            }

            $image=time().".".$ext;

            move_uploaded_file(
                $_FILES['banner']['tmp_name'],
                "uploads/".$image
            );

            $stmt=$pdo->prepare("
            INSERT INTO hero_banners(image)
            VALUES(?)
            ");


            if ($stmt->execute([$image])) {
                header("Location: hero-banner.php?success=1");
                exit;
            }


        }

    }

}

$stmt=$pdo->query("
SELECT *
FROM hero_banners
ORDER BY id DESC
");

$banners=$stmt->fetchAll(PDO::FETCH_ASSOC);

// Update Banner
if(isset($_POST['updateBanner'])){

    $id = $_POST['id'];

    // Get old image
    $stmt = $pdo->prepare("SELECT image FROM hero_banners WHERE id=?");
    $stmt->execute([$id]);
    $old = $stmt->fetch(PDO::FETCH_ASSOC);

    $image = $old['image'];

    // New image selected
    if(isset($_FILES['banner']) && $_FILES['banner']['error']==0){

        $ext = strtolower(pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION));

        $allowed = ['jpg','jpeg','png','webp'];

        if(in_array($ext,$allowed)){

            $image = time().".".$ext;

            move_uploaded_file(
                $_FILES['banner']['tmp_name'],
                "uploads/".$image
            );

            // Delete old image
            if(file_exists("uploads/".$old['image'])){
                unlink("uploads/".$old['image']);
            }
        }
    }

    $stmt = $pdo->prepare("
        UPDATE hero_banners
        SET image=?
        WHERE id=?
    ");

    if($stmt->execute([$image,$id])){
        header("Location: hero-banner.php?updated=1");
        exit;
    }

}

?>


<?php include "./includes/header.php"; ?>

<?php include "./includes/sidebar.php"; ?>

<div class="main">

    <?php include "./includes/navbar.php"; ?>

    <div class="content">
        <div class="container-fluid">

            <div class="row mb-3">
                <div class="col-md-6">
                    <h4 class="page-title">Banner Management</h4>
                </div>

                <div class="col-md-6 d-flex justify-content-md-end align-items-center">

                    <button
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#bannerModal">

                        <i class="fa fa-upload me-2"></i>
                        Upload Banner
                    </button>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                <div class="card-body">

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">

                            <thead class="thead-light">
                                <tr>
                                    <th width="220">Banner Image</th>
                                    <th width="120" class="text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php if(count($banners)>0){ ?>

                                <?php foreach($banners as $banner){ ?>

                                <tr>

                                <td>

                                <img
                                src="uploads/<?= htmlspecialchars($banner['image']) ?>"
                                style="width:220px;height:70px;object-fit:cover"
                                class="img-fluid rounded">

                                </td>

                                <td class="text-center">

<button
type="button"
class="btn btn-warning btn-sm editBtn"
data-id="<?= $banner['id'] ?>"
data-image="<?= htmlspecialchars($banner['image']) ?>"
data-bs-toggle="modal"
data-bs-target="#editBannerModal">

<i class="fa fa-edit"></i>

</button>

<a
href="hero-banner-delete.php?id=<?= $banner['id'] ?>"
class="btn btn-danger btn-sm deleteBanner">

<i class="fa fa-trash"></i>

</a>

</td>


                                </tr>

                                <?php } ?>

                                <?php }else{ ?>

                                <tr>

                                <td colspan="2" class="text-center">

                                No Banner Found

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
    </div>

    <?php include "./includes/footer.php"; ?>

</div>

<div class="modal fade" id="bannerModal">

<div class="modal-dialog">

<div class="modal-content">

<form
method="POST"
enctype="multipart/form-data">

<div class="modal-header">

<h5>Upload Banner</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<label class="form-label">
Banner Image
</label>

<input
type="file"
name="banner"
class="form-control"
required>

</div>

<div class="modal-footer">

<button
class="btn btn-secondary"
data-bs-dismiss="modal">

Close

</button>

<button
type="submit"
name="uploadBanner"
class="btn btn-primary">

Upload

</button>

</div>

</form>

</div>

</div>

</div>


<div class="modal fade" id="editBannerModal">

<div class="modal-dialog">

<div class="modal-content">

<form
method="POST"
enctype="multipart/form-data">

<input type="hidden" name="id" id="editId">

<div class="modal-header">

<h5>Edit Banner</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="mb-3">

<img
id="previewImage"
src=""
class="img-fluid rounded"
style="width:100%;height:150px;object-fit:cover;">

</div>

<label class="form-label">

Choose New Image (Optional)

</label>

<input
type="file"
name="banner"
class="form-control">

</div>

<div class="modal-footer">

<button
type="button"
class="btn btn-secondary"
data-bs-dismiss="modal">

Close

</button>

<button
type="submit"
name="updateBanner"
class="btn btn-primary">

Update

</button>

</div>

</form>

</div>

</div>

</div>



<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.querySelectorAll('.deleteBanner').forEach(function(btn){

    btn.addEventListener('click', function(e){

        e.preventDefault();

        let url = this.getAttribute('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to recover this banner!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result)=>{

            if(result.isConfirmed){
                window.location.href = url;
            }

        });

    });

});


document.querySelectorAll(".editBtn").forEach(function(btn){

    btn.addEventListener("click", function(){

        document.getElementById("editId").value =
            this.dataset.id;

        document.getElementById("previewImage").src =
            "uploads/" + this.dataset.image;

    });

});



</script>


<?php if(isset($_GET['success'])){ ?>

<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Banner Uploaded Successfully!'
}).then(() => {
    window.history.replaceState({}, document.title, "hero-banner.php");
});
</script>

<?php } ?>

<?php if(isset($_GET['deleted'])){ ?>

<script>
Swal.fire({
    icon:'success',
    title:'Deleted!',
    text:'Banner Deleted Successfully!'
}).then(() => {
    window.history.replaceState({}, document.title, "hero-banner.php");
});
</script>

<?php } ?>


<?php if(isset($_GET['updated'])){ ?>

<script>

Swal.fire({
    icon:'success',
    title:'Success',
    text:'Banner Updated Successfully!'
}).then(() => {
    window.history.replaceState({}, document.title, "hero-banner.php");
});

</script>

<?php } ?>




<style>
.nav-tabs .nav-link.active{
    color:#0d6efd;
    font-weight:600;
    border-bottom:3px solid #0d6efd;
}

.table td,
.table th{
    vertical-align:middle;
}

.btn{
    border-radius:4px;
}

.card{
    border-radius:8px;
}

img{
    border-radius:4px;
}
</style>
