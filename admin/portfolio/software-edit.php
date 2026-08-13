    <?php
require_once "../includes/auth.php";
include "../db.php";

if(!isset($_GET['id']) || empty($_GET['id'])){
    die("Invalid ID");
}

$id = (int)$_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM portfolio WHERE id=:id");
$stmt->execute([':id'=>$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$row){
    die("Record not found");
}

$oldImage1 = $row['image1'];

$uploadDir = "../uploads/";

function uploadImage($field, $uploadDir, $oldImage = null)
{
    if (isset($_FILES[$field]) && $_FILES[$field]['error'] == 0) {

        $ext = strtolower(pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION));
        $filename = uniqid() . "." . $ext;

        if (move_uploaded_file($_FILES[$field]['tmp_name'], $uploadDir . $filename)) {

            // Delete old image
            if (!empty($oldImage) && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

            return $filename;
        }
    }

    return null;
}


if(isset($_POST['Submit'])){

    $heading=trim($_POST['heading']);
    $url=trim($_POST['url']);
    $description=$_POST['Description'];

   $image1 = uploadImage("image1", $uploadDir, $oldImage1);


    if(empty($image1)){
        $image1=$oldImage1;
    }

    $sql="UPDATE portfolio SET

        heading=:heading,
        url=:url,
        image1=:image1,
        description=:description

        WHERE id=:id";

    try{

        $stmt=$pdo->prepare($sql);

        $stmt->execute([

            ':heading'=>$heading,
            ':url'=>$url,
            ':image1'=>$image1,
            ':description'=>$description,
            ':id'=>$id

        ]);

        $success=true;

    }catch(PDOException $e){

        $error=$e->getMessage();

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

                            <h4 class="header-title mb-4">Software Development Edit</h4>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label>Title</label>
                                        <input type="text" name="heading" class="form-control" value="<?= htmlspecialchars($row['heading']); ?>" required>
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>URL Link</label>
                                        <input type="text" name="url" class="form-control" value="<?= htmlspecialchars($row['url']); ?>">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Image 1</label>
                                        <input type="file" name="image1" class="form-control">
                                        <br>

<?php if($row['image1']){ ?>

<img src="../uploads/<?= $row['image1']; ?>"
width="120">

<?php } ?>
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Description</label>
                                        <textarea name="Description" id="Description" class="form-control"><?= htmlspecialchars($row['description']); ?></textarea>
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

<?php if(isset($success)){ ?>

<script>

Swal.fire({

icon:'success',

title:'Updated',

text:'Record Updated Successfully'

}).then(()=>{

window.location='software-list.php';

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
