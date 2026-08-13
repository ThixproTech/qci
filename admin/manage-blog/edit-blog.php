<?php

require_once "../includes/auth.php";
include "../db.php";

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM blogs WHERE id=?");
$stmt->execute([$id]);
$blog = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$blog){
    die("Blog not found.");
}

if(isset($_POST['Submit'])){

    try{

        $imageName = $blog['image'];

        if(isset($_FILES['image']) && $_FILES['image']['name']!=""){

            // delete old image
            if(file_exists("../uploads/blog/".$blog['image'])){
                unlink("../uploads/blog/".$blog['image']);
            }

            $imageName = time().'_'.basename($_FILES['image']['name']);

            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                "../uploads/blog/".$imageName
            );
        }

        $blog_details = $_POST['blog_details'];

        $blog_details = preg_replace('/\s+/', ' ', $blog_details);
        $blog_details = preg_replace('/>\s+</', '><', $blog_details);
        $blog_details = trim($blog_details);

        $sql = "UPDATE blogs SET

                blog_type=:blog_type,
                category=:category,
                title=:title,
                image=:image,
                date=:date,
                reading_time=:reading_time,
                views=:views,
                description=:description,
                blog_details=:blog_details

                WHERE id=:id";

        $stmt = $pdo->prepare($sql);

        $blog_details = $_POST['blog_details'] ?? '';

$blog_details = html_entity_decode(
    $blog_details,
    ENT_QUOTES | ENT_HTML5,
    'UTF-8'
);

// Remove &nbsp; text if still encoded
$blog_details = str_replace('&nbsp;', ' ', $blog_details);

// Remove actual non-breaking-space character
$blog_details = str_replace("\xC2\xA0", ' ', $blog_details);

// Remove empty paragraphs
$blog_details = preg_replace(
    '/<p[^>]*>\s*<\/p>/i',
    '',
    $blog_details
);

// Remove empty div
$blog_details = preg_replace(
    '/<div[^>]*>\s*<\/div>/i',
    '',
    $blog_details
);

// Remove empty span
$blog_details = preg_replace(
    '/<span[^>]*>\s*<\/span>/i',
    '',
    $blog_details
);

$blog_details = trim($blog_details);

        $stmt->execute([

            ':blog_type'=>$_POST['blog_type'],
            ':category'=>$_POST['category'],
            ':title'=>$_POST['title'],
            ':image'=>$imageName,
            ':date'=>$_POST['date'],
            ':reading_time'=>$_POST['reading_time'],
            ':views'=>$_POST['view'],
            ':description'=>$_POST['description'],
            ':blog_details'=>$blog_details,
            ':id'=>$id

        ]);

        $success = true;

        // Refresh blog data
        $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id=?");
        $stmt->execute([$id]);
        $blog = $stmt->fetch(PDO::FETCH_ASSOC);

    }catch(PDOException $e){

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

                            <h4 class="header-title mb-4">Add Blog</h4>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Blog Type</label>
                                        <select name="blog_type" class="form-control">
                                            <option value="" disabled <?= empty($blog['blog_type']) ? 'selected' : '' ?>>--Select Blog Type--</option>
                                            <option value="latest" <?= strtolower(trim($blog['blog_type'])) === 'latest' ? 'selected' : '' ?>>Latest</option>
                                            <option value="trending" <?= strtolower(trim($blog['blog_type'])) === 'trending' ? 'selected' : '' ?>>Trending Articles</option>
                                            <option value="popular" <?= strtolower(trim($blog['blog_type'])) === 'popular' ? 'selected' : '' ?>>Popular</option>
                                        </select>
                                        
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Category</label>
                                        <select name="category" class="form-control">
                                            <option value="" disabled selected>--Select Category--</option>
                                            <option value="Artificial Intelligence" <?=($blog['category']=="Artificial Intelligence")?'selected':''?>>Artificial Intelligence</option>
                                            <option value="Web Development" <?=($blog['category']=="Web Development")?'selected':''?>>Web Development</option>
                                            <option value="Mobile Apps" <?=($blog['category']=="Mobile Apps")?'selected':''?>>Mobile Apps</option>
                                            <option value="Cloud Computing" <?=($blog['category']=="Cloud Computing")?'selected':''?>>Cloud Computing</option>
                                            <option value="Cyber Security" <?=($blog['category']=="Cyber Security")?'selected':''?>>Cyber Security</option>
                                            <option value="Software Development" <?=($blog['category']=="Software Development")?'selected':''?>>Software Development</option>
                                            <option value="Digital Transformation" <?=($blog['category']=="Digital Transformation")?'selected':''?>>Digital Transformation</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($blog['title']) ?>">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Image</label>
                                        <img src="../uploads/blog/<?= htmlspecialchars($blog['image']) ?>" width="100" alt="Blog Image">
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control" value="<?= $blog['date'] ?>">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Reading Time</label>
                                        <input type="number" name="reading_time" class="form-control" value="<?= $blog['reading_time'] ?>">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>View</label>
                                        <input type="text" name="view" class="form-control" value="<?= $blog['views'] ?>">
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control"><?= htmlspecialchars($blog['description']) ?></textarea>
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Blog Details</label>
                                        <textarea name="blog_details" id="Description" class="form-control"><?= htmlspecialchars($blog['blog_details']) ?></textarea>
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
var editor = CKEDITOR.replace('Description', {
    enterMode: CKEDITOR.ENTER_P,
    shiftEnterMode: CKEDITOR.ENTER_BR,

    // Reduce unwanted CKEditor-generated content
    fillEmptyBlocks: false,
    autoParagraph: false,

    // Don't convert characters unnecessarily to HTML entities
    entities: false,
    basicEntities: false,

    allowedContent: true
});

editor.on('instanceReady', function () {

    editor.dataProcessor.htmlFilter.addRules({
        elements: {

            span: function (element) {

                // Remove span if it has no useful attributes
                if (
                    !element.attributes.style &&
                    !element.attributes.class &&
                    !element.attributes.id
                ) {
                    return false;
                }

                return element;
            }

        }
    });

});
</script>

<?php if(isset($success)) { ?>

<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: 'Record added successfully.',
    confirmButtonColor: '#3085d6'
}).then(() => {
    window.location.href = "blog-list.php";
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
