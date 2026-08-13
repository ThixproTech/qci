<?php
require_once "./includes/auth.php";
include "./db.php";

// Fetch Website Settings
$stmt = $pdo->query("SELECT * FROM website_settings LIMIT 1");
$setting = $stmt->fetch(PDO::FETCH_ASSOC);

function uploadLogo($fieldName, $oldImage = '')
{
    $image = $oldImage;

    if(isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] == 0){

        $ext = strtolower(pathinfo($_FILES[$fieldName]['name'], PATHINFO_EXTENSION));

        $allowed = ['jpg','jpeg','png','webp','svg'];

        if(in_array($ext,$allowed)){

            if(!is_dir("uploads")){
                mkdir("uploads",0777,true);
            }

            if($oldImage != "" && file_exists("uploads/".$oldImage)){
                unlink("uploads/".$oldImage);
            }

            $image = time()."_".$fieldName.".".$ext;

            move_uploaded_file(
                $_FILES[$fieldName]['tmp_name'],
                "uploads/".$image
            );
        }
    }

    return $image;
}

if(isset($_POST['submit'])){

    $email1     = trim($_POST['email1']);
    $email2     = trim($_POST['email2']);
    $phone1     = trim($_POST['phone1']);
    $phone2     = trim($_POST['phone2']);
    $linkedin   = trim($_POST['linkedin']);
    $facebook   = trim($_POST['facebook']);
    $twitter    = trim($_POST['twitter']);
    $instagram  = trim($_POST['instagram']);
    $youtube    = trim($_POST['youtube']);
    $address    = trim($_POST['address']);

    // Check Existing Record
    $check = $pdo->query("SELECT id FROM website_settings LIMIT 1");
    $row = $check->fetch(PDO::FETCH_ASSOC);

    if($row){

        $header_logo = uploadLogo(
            'header_logo',
            $setting['header_logo'] ?? ''
        );

        $footer_logo = uploadLogo(
            'footer_logo',
            $setting['footer_logo'] ?? ''
        );

        // UPDATE

        $sql = "UPDATE website_settings SET
                    email1=?,
                    email2=?,
                    phone1=?,
                    phone2=?,
                    linkedin=?,
                    facebook=?,
                    twitter=?,
                    instagram=?,
                    youtube=?,
                    header_logo=?,
                    footer_logo=?,
                    address=?
                WHERE id=?";

        $stmt = $pdo->prepare($sql);

        $status = $stmt->execute([
            $email1,
            $email2,
            $phone1,
            $phone2,
            $linkedin,
            $facebook,
            $twitter,
            $instagram,
            $youtube,
            $header_logo,
            $footer_logo,
            $address,
            $row['id']
        ]);

    }else{

        // INSERT

        $sql = "INSERT INTO website_settings
                (email1,email2,phone1,phone2,linkedin,facebook,twitter,instagram,youtube,header_logo,footer_logo,address)
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $pdo->prepare($sql);

        $status = $stmt->execute([
            $email1,
            $email2,
            $phone1,
            $phone2,
            $linkedin,
            $facebook,
            $twitter,
            $instagram,
            $youtube,
            $header_logo,
            $footer_logo,
            $address
        ]);

    }

    $success = false;

    if ($status) {
        $success = true;
    }
}
?>


<?php include "./includes/header.php"; ?>

<style>
    .card{
        border:none;
        border-radius:12px;
        box-shadow:0 5px 18px rgba(0,0,0,.08);
    }

    .card-body{
        padding:30px;
    }

    .form-label{
        font-size:14px;
        color:#333;
    }

    .form-control{
        height:48px;
        border-radius:8px;
        border:1px solid #dfe3eb;
        transition:.3s;
    }

    .form-control:focus{
        border-color:#6f42c1;
        box-shadow:0 0 0 .15rem rgba(111,66,193,.15);
    }

    textarea.form-control{
        height:auto;
        resize:none;
    }

    .btn-primary{
        background:#5b4bff;
        border-color:#5b4bff;
        border-radius:8px;
        padding:10px 28px;
    }

    .btn-primary:hover{
        background:#4a3df0;
        border-color:#4a3df0;
    }

    .btn-light{
        border-radius:8px;
        background:#fff;
    }

    hr{
        margin:20px 0 30px;
    }
</style>

<?php include "./includes/sidebar.php"; ?>

<div class="main">

    <?php include "./includes/navbar.php"; ?>

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

                            <div class="mb-4">
                                <h4 class="fw-bold mb-3">
                                    <span class="p-3 bg-light rounded-circle me-2">
                                        <i class="fas fa-cog text-primary ps-1"></i>
                                    </span>
                                    Website Settings
                                </h4>
                                <p class="text-muted mb-0">
                                    Update your website contact and social media information.
                                </p>
                            </div>

                            <hr>

                            <form method="post" enctype="multipart/form-data">

                                <div class="row">

                                    <!-- Email 1 -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-envelope text-primary me-2"></i>
                                            Email 1
                                        </label>
                                        <input type="email" class="form-control" name="email1" value="<?= htmlspecialchars($setting['email1'] ?? '') ?>"
                                            placeholder="✉️ Enter your primary email address">
                                    </div>

                                    <!-- Email 2 -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-envelope text-primary me-2"></i>
                                            Email 2
                                        </label>
                                        <input type="email" class="form-control" name="email2" value="<?= htmlspecialchars($setting['email2'] ?? '') ?>"
                                            placeholder="✉️ Enter your secondary email address">
                                    </div>

                                    <!-- Phone 1 -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-phone text-primary me-2"></i>
                                            Phone No 1
                                        </label>
                                        <input type="text" class="form-control" name="phone1" value="<?= htmlspecialchars($setting['phone1'] ?? '') ?>"
                                            placeholder="📞 Enter your primary phone number">
                                    </div>

                                    <!-- Phone 2 -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-phone text-primary me-2"></i>
                                            Phone No 2
                                        </label>
                                        <input type="text" class="form-control" name="phone2" value="<?= htmlspecialchars($setting['phone2'] ?? '') ?>"
                                            placeholder="📞 Enter your secondary phone number">
                                    </div>

                                    <!-- LinkedIn -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fab fa-linkedin text-primary me-2"></i>
                                            LinkedIn Link
                                        </label>
                                        <input type="url" class="form-control" name="linkedin" value="<?= htmlspecialchars($setting['linkedin'] ?? '') ?>"
                                            placeholder="🔗 https://linkedin.com/company/yourcompany">
                                    </div>

                                    <!-- Facebook -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fab fa-facebook text-primary me-2"></i>
                                            Facebook Link
                                        </label>
                                        <input type="url" class="form-control" name="facebook" value="<?= htmlspecialchars($setting['facebook'] ?? '') ?>"
                                            placeholder="🔗 https://facebook.com/yourpage">
                                    </div>

                                    <!-- Twitter -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fab fa-twitter text-info me-2"></i>
                                            Twitter Link
                                        </label>
                                        <input type="url" class="form-control" name="twitter" value="<?= htmlspecialchars($setting['twitter'] ?? '') ?>"
                                            placeholder="🔗 https://twitter.com/yourprofile">
                                    </div>

                                    <!-- Instagram -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fab fa-instagram text-danger me-2"></i>
                                            Instagram Link
                                        </label>
                                        <input type="url" class="form-control" name="instagram" value="<?= htmlspecialchars($setting['instagram'] ?? '') ?>"
                                            placeholder="🔗 https://instagram.com/yourprofile">
                                    </div>

                                    <!-- YouTube -->
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fab fa-youtube text-danger me-2"></i>
                                            YouTube Link
                                        </label>
                                        <input type="url" class="form-control" name="youtube" value="<?= htmlspecialchars($setting['youtube'] ?? '') ?>"
                                            placeholder="🔗 https://youtube.com/@yourchannel">
                                    </div>

                                    <div class="col-md-6"></div>


                                    <div class="col-md-6 mb-4">

                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-image text-primary me-2"></i>
                                            Header Logo
                                        </label>

                                        <input type="file"
                                               class="form-control h-auto py-2"
                                               name="header_logo"
                                               accept="image/*">

                                        <?php if(!empty($setting['header_logo'])){ ?>

                                            <div class="mt-3">
                                                <img src="uploads/<?= htmlspecialchars($setting['header_logo']) ?>"
                                                     style="height:80px;border:1px solid #ddd;padding:5px;border-radius:8px;">
                                            </div>

                                        <?php } ?>

                                    </div>

                                    <div class="col-md-6 mb-4">

                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-image text-primary me-2"></i>
                                            Footer Logo
                                        </label>
                                    
                                        <input type="file"
                                               class="form-control h-auto py-2"
                                               name="footer_logo"
                                               accept="image/*">
                                    
                                        <?php if(!empty($setting['footer_logo'])){ ?>
                                    
                                            <div class="mt-3">
                                                <img src="uploads/<?= htmlspecialchars($setting['footer_logo']) ?>"
                                                     style="height:80px;border:1px solid #ddd;padding:5px;border-radius:8px;">
                                            </div>
                                    
                                        <?php } ?>
                                    
                                    </div>

                                    <!-- Address -->
                                    <div class="col-md-12 mb-4">
                                        <label class="form-label fw-semibold">
                                            <i class="fs-5 fas fa-map-marker-alt text-primary me-2"></i>
                                            Address
                                        </label>
                                        <textarea class="form-control" rows="4" name="address"
                                            placeholder="📍 Enter your full address here..."><?= htmlspecialchars($setting['address'] ?? '') ?></textarea>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-between mt-4">
                        
                                    <button type="submit" name="submit" class="btn btn-primary px-4 ms-auto">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        <?= !empty($setting) ? 'Update Settings' : 'Save Settings'; ?>
                                    </button>
                        
                                </div>
                        
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

<?php if (!empty($success)) { ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Settings saved successfully!'
}).then(() => {
    window.location.href = 'website-settings.php';
});
</script>
<?php } ?>

