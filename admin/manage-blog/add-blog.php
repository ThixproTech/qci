<?php

require_once "../includes/auth.php";
include "../db.php";


if(isset($_POST['Submit'])){


    try {

        // Main Image Upload

        $imageName = "";

        if(isset($_FILES['image']) && $_FILES['image']['name']!=""){


            $imageName = time().'_'.$_FILES['image']['name'];

            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                "../uploads/blog/".$imageName
            );

        }

        $sql = "INSERT INTO blogs
        (
            blog_type,
            category,
            title,
            image,
            date,
            reading_time,
            views,
            description,
            blog_details
        )
        VALUES
        (
            :blog_type,
            :category,
            :title,
            :image,
            :date,
            :reading_time,
            :views,
            :description,
            :blog_details
        )";


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

            ':blog_details'=>$blog_details


        ]);


        $success=true;


    }
    catch(PDOException $e){

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

                            <h4 class="header-title mb-4">Add Blog</h4>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Blog Type</label>
                                        <select name="blog_type" class="form-control">
                                            <option value="" disabled selected>--Select Blog Type--</option>
                                            <option value="Latest">Latest</option>
                                            <option value="Trending">Trending Articles</option>
                                            <option value="Popular">Popular</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Category</label>
                                        <select name="category" class="form-control">
                                            <option value="" disabled selected>--Select Category--</option>
                                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Mobile Apps">Mobile Apps</option>
                                            <option value="Cloud Computing">Cloud Computing</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                            <option value="Software Development">Software Development</option>
                                            <option value="Digital Transformation">Digital Transformation</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>Reading Time</label>
                                        <input type="number" name="reading_time" class="form-control">
                                    </div>

                                    <div class="col-lg-6 form-group mb-3">
                                        <label>View</label>
                                        <input type="text" name="view" class="form-control">
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>

                                    <div class="col-lg-12 form-group mb-3">
                                        <label>Blog Details</label>
                                        <textarea name="blog_details" id="Description" class="form-control"></textarea>
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
