<?php

session_start();

require "db.php";

$error = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE email=?");

    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){

        if(password_verify($password,$user['password'])){

            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_name'] = $user['name'];
            $_SESSION['admin_email'] = $user['email'];
           $_SESSION['last_activity'] = time();
            header("Location: dashboard.php");
            exit;

        }else{

            $error = "Invalid Password";

        }

    }else{

        $error = "Email not found";

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

:root{
    --primary:#2563eb;
    --primary-dark:#1d4ed8;
    --bg:#f4f7fb;
    --border:#e5e7eb;
    --text:#1f2937;
    --muted:#6b7280;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Inter,Segoe UI,sans-serif;
}

body{
    background:var(--bg);
    height:100vh;
}

.login-wrapper{
    height:100vh;
}

.left-panel{
    background:linear-gradient(135deg,#2563eb,#3b82f6);
    color:#fff;
    position:relative;
    overflow:hidden;
}

.left-panel::before{
    content:'';
    width:350px;
    height:350px;
    background:rgba(255,255,255,.08);
    border-radius:50%;
    position:absolute;
    top:-120px;
    left:-120px;
}

.left-panel::after{
    content:'';
    width:250px;
    height:250px;
    background:rgba(255,255,255,.08);
    border-radius:50%;
    position:absolute;
    bottom:-80px;
    right:-80px;
}

.brand{
    position:relative;
    z-index:2;
}

.logo{
    width:70px;
    height:70px;
    background:#fff;
    color:var(--primary);
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:34px;
    margin-bottom:25px;
}

.brand h1{
    font-weight:700;
    margin-bottom:15px;
}

.brand p{
    font-size:17px;
    opacity:.9;
}

.right-panel{
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px;
}

.login-card{
    width:100%;
    max-width:430px;
}

.login-card h2{
    font-weight:700;
    color:var(--text);
}

.login-card p{
    color:var(--muted);
}

.form-control{
    height:55px;
    border-radius:12px;
    border:1px solid var(--border);
    padding-left:45px;
}

.form-control:focus{
    border-color:var(--primary);
    box-shadow:0 0 0 .15rem rgba(37,99,235,.15);
}

.input-group-custom{
    position:relative;
}

.input-group-custom i.left{
    position:absolute;
    left:15px;
    top:18px;
    color:#9ca3af;
    z-index:5;
}

.password-toggle{
    position:absolute;
    right:15px;
    top:18px;
    cursor:pointer;
    color:#9ca3af;
    z-index:5;
}

.btn-login{
    height:54px;
    border-radius:12px;
    background:var(--primary);
    font-weight:600;
    border:none;
    transition:.3s;
}

.btn-login:hover{
    background:var(--primary-dark);
}

.form-check-label{
    color:var(--muted);
}

a{
    text-decoration:none;
}

.footer{
    text-align:center;
    margin-top:35px;
    color:#9ca3af;
    font-size:14px;
}

@media(max-width:991px){

.left-panel{
display:none;
}

.right-panel{
padding:25px;
}

}

</style>

</head>
<body>

<div class="container-fluid login-wrapper">

<div class="row h-100">

<!-- Left -->

<div class="col-lg-6 left-panel d-flex align-items-center justify-content-center">

<div class="brand px-5">

<div class="logo">
<i class="bi bi-shield-lock-fill"></i>
</div>

<h1>Admin Dashboard</h1>

<p>
Manage users, monitor reports, view analytics,
and control your application from one secure place.
</p>

<div class="mt-5">

<img src="https://undraw.co/api/illustrations/7f66aaf3-4d3b-4f9e-8d45-71b75d27be27"
class="img-fluid"
alt="">

</div>

</div>

</div>

<!-- Right -->

<div class="col-lg-6 right-panel">

<div class="login-card">

<div class="mb-5">

<h2>Welcome Back 👋</h2>

<p>
Please sign in to continue to your dashboard.
</p>

</div>

<?php if($error!=""){ ?>

<div class="alert alert-danger">
    <?= htmlspecialchars($error) ?>
</div>

<?php } ?>

<form action="" method="POST">

<div class="mb-3 input-group-custom">

<i class="bi bi-envelope left"></i>

<input
type="email"
class="form-control"
placeholder="Email Address"
name="email"
required>

</div>

<div class="mb-3 input-group-custom">

<i class="bi bi-lock left"></i>

<input
type="password"
class="form-control"
placeholder="Password"
id="password"
name="password"
required>

<i class="bi bi-eye-slash password-toggle"
id="togglePassword"></i>

</div>

<div class="d-flex justify-content-between align-items-center mb-4">

<div class="form-check">

<input
class="form-check-input"
type="checkbox"
id="remember">

<label
class="form-check-label"
for="remember">

Remember Me

</label>

</div>



</div>

<div class="d-grid">

<button
class="btn btn-primary btn-login">

Login to Dashboard

</button>

</div>

</form>

<div class="footer">

© 2026 Your Company. All Rights Reserved.

</div>

</div>

</div>

</div>

</div>

<script>

const toggle=document.getElementById("togglePassword");
const password=document.getElementById("password");

toggle.onclick=function(){

const type=password.type==="password"?"text":"password";

password.type=type;

toggle.classList.toggle("bi-eye");

toggle.classList.toggle("bi-eye-slash");

}

</script>

</body>
</html>