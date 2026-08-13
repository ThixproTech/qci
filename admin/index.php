<?php

session_start();

require "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE email=?");
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        if (password_verify($password, $user['password'])) {

            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_name'] = $user['name'];
            $_SESSION['admin_email'] = $user['email'];
            $_SESSION['last_activity'] = time();

            header("Location: dashboard.php");
            exit;

        } else {

            $error = "Invalid Password";

        }

    } else {

        $error = "Email not found";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>QCI Portal - Admin Login</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
rel="stylesheet">


<style>

/* =========================================================
   RESET
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


html,
body {
    width: 100%;
    min-height: 100%;
}


body {

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    background: #eef5fc;

    color: #132b5c;

}


/* =========================================================
   MAIN LOGIN WRAPPER
========================================================= */

.qci-login-page {

    width: 100%;

    min-height: 100vh;

    padding: 8px;

    display: flex;

    align-items: stretch;

}


/* =========================================================
   MAIN CONTAINER
========================================================= */

.qci-login-container {

    width: 100%;

    height: 118vh;

    background: #ffffff;

    border-radius: 4px;

    overflow: hidden;

    box-shadow:
        0 2px 15px rgba(21, 64, 110, .10);

    display: flex;

    position: relative;

}


/* =========================================================
   LEFT PANEL
========================================================= */

.qci-left-panel {

    width: 48%;

    min-height: 100%;

    position: relative;

    overflow: hidden;

    display: flex;

    justify-content: center;

    text-align: center;

    background:

        linear-gradient(
            180deg,
            #f8fbff 0%,
            #f4f9ff 55%,
            #d9ebff 100%
        );

}


/* =========================================================
   DECORATIVE BACKGROUND
========================================================= */

.qci-left-panel::before {

    content: "";

    position: absolute;

    width: 280px;

    height: 280px;

    top: -120px;

    left: -100px;

    border-radius: 50%;

    background:
        radial-gradient(
            circle,
            rgba(26, 102, 203, .08) 0,
            rgba(26, 102, 203, .03) 60%,
            transparent 70%
        );

}


.qci-left-panel::after {

    content: "";

    position: absolute;

    width: 520px;

    height: 180px;

    bottom: -70px;

    left: -60px;

    border-radius: 50%;

    background:
        rgba(116, 175, 237, .35);

    transform: rotate(10deg);

}


/* =========================================================
   LEFT CONTENT
========================================================= */

.qci-left-content {

    width: 100%;

    max-width: 650px;

    position: relative;

    z-index: 5;

    padding: 25px 40px 30px;

}


/* =========================================================
   LOGO
========================================================= */

.qci-main-logo {

    width: 105px;

    height: 120px;

    object-fit: contain;

    display: block;

    margin: 0 auto 4px;

}


/* =========================================================
   QCI PORTAL
========================================================= */

.qci-portal-heading {

    color: #173b76;

    font-size: 58px;

    line-height: 1;

    font-weight: 800;

    letter-spacing: 1px;

    margin-top: 2px;

}


.qci-administration {

    color: #172c51;

    font-size: 22px;

    letter-spacing: 9px;

    font-weight: 600;

    margin-top: 10px;

}


/* BLUE LINE */

.qci-blue-line {

    width: 55px;

    height: 4px;

    background: #1264d8;

    border-radius: 5px;

    margin: 17px auto 18px;

}


/* =========================================================
   DESCRIPTION
========================================================= */

.qci-quality-title {

    color: #0d4fc3;

    font-size: 20px;

    font-weight: 600;

    margin-bottom: 12px;

}


.qci-description {

    color: #172c51;

    font-size: 17px;

    line-height: 1.5;

}


/* =========================================================
   FEATURE ICONS
========================================================= */

.qci-features {

    margin-top: 28px;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 20px 15px;

}


.qci-feature {

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: center;

}


.qci-feature-icon {

    width: 78px;

    height: 78px;

    border-radius: 50%;

    background: #ffffff;

    display: flex;

    align-items: center;

    justify-content: center;

    box-shadow:
        0 4px 18px rgba(35, 90, 150, .12);

    margin-bottom: 8px;

}


.qci-feature-icon i {

    font-size: 36px;

    color: #1558c5;

}


.qci-feature-text {

    color: #172c51;

    font-size: 14px;

    font-weight: 500;

}


/* =========================================================
   SECURITY BOX
========================================================= */

.qci-security-box {

    margin: 42px auto 0;

    max-width: 565px;

    min-height: 128px;

    padding: 22px 28px;

    border-radius: 9px;

    background:

        linear-gradient(
            110deg,
            #092b5b,
            #0a3976
        );

    color: #ffffff;

    display: flex;

    align-items: center;

    text-align: left;

    box-shadow:
        0 5px 18px rgba(10, 55, 105, .18);

}


.qci-security-icon {

    width: 75px;

    height: 75px;

    flex-shrink: 0;

    border-radius: 50%;

    border: 2px solid #5ebcff;

    display: flex;

    align-items: center;

    justify-content: center;

    margin-right: 22px;

}


.qci-security-icon i {

    font-size: 36px;

    color: #ffffff;

}


.qci-security-title {

    font-size: 16px;

    font-weight: 700;

    margin-bottom: 8px;

}


.qci-security-text {

    font-size: 14px;

    line-height: 1.6;

    color: #f1f6ff;

}


/* =========================================================
   RIGHT PANEL
========================================================= */

.qci-right-panel {

    width: 52%;

    background: #f7faff;

    padding: 32px 55px;

    display: flex;

    align-items: center;

    justify-content: center;

}


/* =========================================================
   LOGIN CARD
========================================================= */

.qci-login-card {

    width: 100%;

    max-width: 720px;

    background: #ffffff;

    border-radius: 14px;

    padding: 28px 46px 24px;

    box-shadow:
        0 7px 25px rgba(21, 52, 90, .12);

}


/* =========================================================
   LOGIN HEADER
========================================================= */

.qci-login-icon {

    width: 72px;

    height: 82px;

    margin: 0 auto 8px;

    background: #183b78;

    clip-path: polygon(
        50% 0,
        91% 17%,
        91% 61%,
        76% 83%,
        50% 100%,
        24% 83%,
        9% 61%,
        9% 17%
    );

    display: flex;

    align-items: center;

    justify-content: center;

    color: #ffffff;

}


.qci-login-icon i {

    font-size: 37px;

}


.qci-login-title {

    text-align: center;

    color: #111827;

    font-size: 35px;

    line-height: 1.15;

    font-weight: 700;

    margin-bottom: 6px;

}


.qci-login-subtitle {

    text-align: center;

    color: #34435e;

    font-size: 16px;

    margin-bottom: 25px;

}


/* =========================================================
   ERROR
========================================================= */

.qci-error {

    background: #fff1f2;

    border: 1px solid #fecdd3;

    color: #be123c;

    padding: 10px 13px;

    border-radius: 7px;

    font-size: 13px;

    margin-bottom: 15px;

}


/* =========================================================
   FORM LABEL
========================================================= */

.qci-form-label {

    display: block;

    color: #171717;

    font-size: 15px;

    font-weight: 600;

    margin-bottom: 8px;

}


/* =========================================================
   INPUT
========================================================= */

.qci-input-wrapper {

    position: relative;

    margin-bottom: 20px;

}


.qci-input-icon {

    position: absolute;

    left: 16px;

    top: 50%;

    transform: translateY(-50%);

    color: #56637b;

    font-size: 20px;

    z-index: 3;

}


.qci-input {

    width: 100%;

    height: 36px;

    border: 1px solid #d5dce6;

    border-radius: 6px;

    padding:
        0 45px;

    outline: none;

    color: #1f2937;

    font-size: 15px;

    background: #ffffff;

    transition: .2s;

}


.qci-input:focus {

    border-color: #1c62ca;

    box-shadow:
        0 0 0 3px rgba(28, 98, 202, .10);

}


.qci-input::placeholder {

    color: #7b8799;

}


/* PASSWORD EYE */

.qci-password-eye {

    position: absolute;

    right: 16px;

    top: 50%;

    transform: translateY(-50%);

    color: #4d5c75;

    font-size: 18px;

    cursor: pointer;

    z-index: 3;

}


/* =========================================================
   CAPTCHA
========================================================= */

.qci-captcha-row {

    display: grid;

    grid-template-columns:
        1fr 1.35fr;

    gap: 30px;

    align-items: center;

}


.qci-captcha-image {

    height: 36px;

    border: 1px solid #d9dee7;

    border-radius: 6px;

    background:

        radial-gradient(
            circle,
            #d0d0d0 1px,
            transparent 1px
        );

    background-size: 8px 8px;

    display: flex;

    align-items: center;

    justify-content: center;

    font-family:
        Georgia,
        serif;

    font-size: 28px;

    letter-spacing: 8px;

    color: #222;

    transform: rotate(-1deg);

}


.qci-captcha-input {

    height: 36px;

    width: 100%;

    border: 1px solid #d5dce6;

    border-radius: 6px;

    padding: 0 14px;

    outline: none;

    font-size: 15px;

}


.qci-captcha-input:focus {

    border-color: #1c62ca;

}


/* CAPTCHA REFRESH */

.qci-captcha-wrapper {

    position: relative;

}


.qci-refresh {

    position: absolute;

    right: -25px;

    top: 50%;

    transform: translateY(-50%);

    color: #263c67;

    font-size: 22px;

    cursor: pointer;

}


/* =========================================================
   REMEMBER / FORGOT
========================================================= */

.qci-login-options {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin: 22px 0;

}


.qci-remember {

    display: flex;

    align-items: center;

    gap: 8px;

    font-size: 14px;

    color: #222;

}


.qci-remember input {

    width: 18px;

    height: 18px;

    accent-color: #1659c8;

}


.qci-forgot {

    color: #145bd0;

    font-size: 14px;

    font-weight: 500;

    text-decoration: none;

}


.qci-forgot:hover {

    text-decoration: underline;

}


/* =========================================================
   LOGIN BUTTON
========================================================= */

.qci-login-button {

    width: 100%;

    height: 36px;

    border: 0;

    border-radius: 5px;

    background:
        linear-gradient(
            90deg,
            #153f83,
            #184a96
        );

    color: #ffffff;

    font-size: 18px;

    font-weight: 600;

    cursor: pointer;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    transition: .2s;

}


.qci-login-button:hover {

    background:
        linear-gradient(
            90deg,
            #10356f,
            #143f83
        );

}


/* =========================================================
   OR
========================================================= */

.qci-or {

    display: flex;

    align-items: center;

    gap: 15px;

    margin: 17px 0;

    color: #667085;

    font-size: 13px;

}


.qci-or::before,
.qci-or::after {

    content: "";

    height: 1px;

    background: #dfe4eb;

    flex: 1;

}


/* =========================================================
   OTP
========================================================= */

.qci-otp-button {

    width: 100%;

    height: 36px;

    border: 1px solid #8198bd;

    background: #ffffff;

    border-radius: 5px;

    color: #0d4fc3;

    font-size: 16px;

    font-weight: 500;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    cursor: pointer;

}


.qci-otp-button:hover {

    background: #f5f8ff;

}


/* =========================================================
   HELP BOX
========================================================= */

.qci-help-box {

    margin-top: 22px;

    min-height: 68px;

    padding: 12px 16px;

    border-radius: 6px;

    background: #eef6ff;

    border: 1px solid #d8eaff;

    display: flex;

    align-items: center;

    gap: 15px;

}


.qci-help-icon {

    color: #125acb;

    font-size: 31px;

}


.qci-help-title {

    font-size: 14px;

    color: #182d55;

    font-weight: 600;

    margin-bottom: 3px;

}


.qci-help-text {

    font-size: 13px;

    color: #263d64;

}


.qci-help-text a {

    color: #145bcf;

    text-decoration: none;

    font-weight: 500;

}


/* =========================================================
   BOTTOM SECURITY STRIP
========================================================= */

.qci-bottom-strip {

    position: absolute;

    bottom: 0;

    left: 0;

    right: 0;

    height: 72px;

    background: rgba(255,255,255,.94);

    border-top: 1px solid #e1e7ef;

    display: flex;

    align-items: center;

    justify-content: center;

    z-index: 10;

}


.qci-bottom-items {

    display: flex;

    align-items: center;

    justify-content: center;

}


.qci-bottom-item {

    min-width: 210px;

    padding: 0 30px;

    display: flex;

    align-items: center;

    gap: 13px;

    color: #162c56;

}


.qci-bottom-item + .qci-bottom-item {

    border-left: 1px solid #dce3eb;

}


.qci-bottom-item i {

    color: #145bc8;

    font-size: 29px;

}


.qci-bottom-item strong {

    display: block;

    font-size: 13px;

    line-height: 17px;

}


/* =========================================================
   RESPONSIVE - 1400
========================================================= */

@media (max-width: 1400px) {

    .qci-left-panel {

        width: 47%;

    }


    .qci-right-panel {

        width: 53%;

        padding: 25px 35px;

    }


    .qci-left-content {

        padding-left: 25px;

        padding-right: 25px;

    }


    .qci-portal-heading {

        font-size: 48px;

    }


    .qci-administration {

        font-size: 19px;

    }


    .qci-login-card {

        padding: 25px 35px 20px;

    }

}


/* =========================================================
   RESPONSIVE - 1100
========================================================= */

@media (max-width: 1100px) {

    .qci-left-panel {

        width: 45%;

    }


    .qci-right-panel {

        width: 55%;

        padding: 20px;

    }


    .qci-portal-heading {

        font-size: 42px;

    }


    .qci-administration {

        font-size: 17px;

        letter-spacing: 6px;

    }


    .qci-description {

        font-size: 15px;

    }


    .qci-feature-icon {

        width: 65px;

        height: 65px;

    }


    .qci-feature-icon i {

        font-size: 29px;

    }


    .qci-login-card {

        padding: 22px 28px 18px;

    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .qci-login-page {

        padding: 0;

    }


    .qci-login-container {

        min-height: 100vh;

        border-radius: 0;

    }


    .qci-left-panel {

        display: none;

    }


    .qci-right-panel {

        width: 100%;

        min-height: 100vh;

        padding: 30px 20px;

        background:
            linear-gradient(
                135deg,
                #f4f8ff,
                #edf5ff
            );

    }


    .qci-login-card {

        max-width: 570px;

        padding: 30px;

    }


    .qci-bottom-strip {

        display: none;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .qci-right-panel {

        padding: 15px;

    }


    .qci-login-card {

        padding: 24px 18px;

        border-radius: 10px;

    }


    .qci-login-icon {

        width: 60px;

        height: 70px;

    }


    .qci-login-icon i {

        font-size: 30px;

    }


    .qci-login-title {

        font-size: 28px;

    }


    .qci-login-subtitle {

        font-size: 14px;

        margin-bottom: 20px;

    }


    .qci-form-label {

        font-size: 14px;

    }


    .qci-input {

        height: 49px;

        font-size: 14px;

    }


    .qci-captcha-row {

        grid-template-columns: 1fr;

        gap: 10px;

    }


    .qci-captcha-image {

        width: 100%;

    }


    .qci-refresh {

        right: 12px;

    }


    .qci-login-options {

        margin: 17px 0;

    }


    .qci-login-button {

        height: 50px;

        font-size: 16px;

    }


    .qci-otp-button {

        height: 50px;

        font-size: 14px;

    }


    .qci-help-box {

        padding: 10px;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .qci-login-card {

        padding: 20px 14px;

    }


    .qci-login-title {

        font-size: 25px;

    }


    .qci-login-subtitle {

        font-size: 13px;

    }


    .qci-login-options {

        font-size: 12px;

    }


    .qci-forgot {

        font-size: 12px;

    }

}

</style>

</head>


<body>


<div class="qci-login-page">

    <div class="qci-login-container">


        <!-- =================================================
             LEFT PANEL
        ================================================= -->

        <section class="qci-left-panel">

            <div class="qci-left-content">


                <!-- LOGO -->

                <img
                    src="assets/images/qci.png"
                    class="qci-main-logo"
                    alt="Quality Council of India"
                >


                <!-- TITLE -->

                <div class="qci-portal-heading">
                    QCI PORTAL
                </div>


                <div class="qci-administration">
                    ADMINISTRATION
                </div>


                <div class="qci-blue-line"></div>


                <div class="qci-quality-title">
                    Quality Council of India
                </div>


                <div class="qci-description">

                    Integrated Application Management
                    <br>

                    &amp; Evaluation Portal

                </div>


                <!-- FEATURES -->

                <div class="qci-features">


                    <div class="qci-feature">

                        <div class="qci-feature-icon">

                            <i class="bi bi-shield-lock-fill"></i>

                        </div>

                        <div class="qci-feature-text">
                            Secure
                        </div>

                    </div>


                    <div class="qci-feature">

                        <div class="qci-feature-icon">

                            <i class="bi bi-people-fill"></i>

                        </div>

                        <div class="qci-feature-text">
                            Role Based Access
                        </div>

                    </div>


                    <div class="qci-feature">

                        <div class="qci-feature-icon">

                            <i class="bi bi-clipboard2-check-fill"></i>

                        </div>

                        <div class="qci-feature-text">
                            Transparent
                        </div>

                    </div>


                    <div class="qci-feature">

                        <div class="qci-feature-icon">

                            <i class="bi bi-bar-chart-fill"></i>

                        </div>

                        <div class="qci-feature-text">
                            Efficient Workflow
                        </div>

                    </div>


                    <div class="qci-feature">

                        <div class="qci-feature-icon">

                            <i class="bi bi-file-earmark-text-fill"></i>

                        </div>

                        <div class="qci-feature-text">
                            Data Driven Reports
                        </div>

                    </div>

                </div>


                <!-- SECURITY -->

                <div class="qci-security-box">

                    <div class="qci-security-icon">

                        <i class="bi bi-lock-fill"></i>

                    </div>

                    <div>

                        <div class="qci-security-title">
                            This is a secured admin portal.
                        </div>

                        <div class="qci-security-text">
                            All activities are monitored and logged.
                        </div>

                    </div>

                </div>


            </div>

        </section>



        <!-- =================================================
             RIGHT PANEL
        ================================================= -->

        <section class="qci-right-panel">

            <div class="qci-login-card">


                <!-- LOGIN ICON -->

                <div class="qci-login-icon">

                    <i class="bi bi-person"></i>

                </div>


                <h1 class="qci-login-title">
                    Admin Login
                </h1>


                <div class="qci-login-subtitle">
                    Sign in to access QCI Portal Administration
                </div>



                <!-- ERROR -->

                <?php if ($error != "") { ?>

                    <div class="qci-error">
                        <?= htmlspecialchars($error) ?>
                    </div>

                <?php } ?>



                <form method="POST" action="">


                    <!-- USERNAME -->

                    <label class="qci-form-label">
                        Username / Official Email
                    </label>

                    <div class="qci-input-wrapper">

                        <i class="bi bi-person-fill qci-input-icon"></i>

                        <input
                            type="email"
                            name="email"
                            class="qci-input"
                            placeholder="Enter your username or official email"
                            required
                        >

                    </div>



                    <!-- PASSWORD -->

                    <label class="qci-form-label">
                        Password
                    </label>

                    <div class="qci-input-wrapper">

                        <i class="bi bi-lock-fill qci-input-icon"></i>

                        <input
                            type="password"
                            name="password"
                            id="qciPassword"
                            class="qci-input"
                            placeholder="Enter your password"
                            required
                        >

                        <i
                            class="bi bi-eye qci-password-eye"
                            id="qciPasswordToggle">
                        </i>

                    </div>



                    <!-- CAPTCHA -->

                    <label class="qci-form-label">
                        Captcha
                    </label>


                    <div class="qci-captcha-row">


                        <div class="qci-captcha-wrapper">

                            <div class="qci-captcha-image"
                                 id="qciCaptchaText">

                                47KP8

                            </div>

                          <span>
                              <i
                                class="bi bi-arrow-clockwise qci-refresh"
                                id="qciRefresh">
                            </i>
                          </span>

                        </div>


                        <input
                            type="text"
                            class="qci-captcha-input"
                            placeholder="Enter captcha"
                            id="qciCaptchaInput"
                            required
                        >

                    </div>



                    <!-- OPTIONS -->

                    <div class="qci-login-options">

                        <label class="qci-remember">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            <span>
                                Remember Me
                            </span>

                        </label>


                        <a href="#" class="qci-forgot">
                            Forgot Password?
                        </a>

                    </div>



                    <!-- LOGIN -->

                    <button
                        type="submit"
                        class="qci-login-button">

                        <i class="bi bi-shield-lock-fill"></i>

                        Secure Login

                    </button>



                    <!-- OR -->

                    <div class="qci-or">
                        OR
                    </div>



                    <!-- OTP -->

                    <button
                        type="button"
                        class="qci-otp-button">

                        <i class="bi bi-shield-check"></i>

                        Login with OTP
                        (Two-Factor Authentication)

                    </button>



                    <!-- HELP -->

                    <div class="qci-help-box">

                        <div class="qci-help-icon">

                            <i class="bi bi-headset"></i>

                        </div>

                        <div>

                            <div class="qci-help-title">
                                Need Help?
                            </div>

                            <div class="qci-help-text">

                                Contact QCI IT Support:

                                <a href="mailto:support@qcin.org">
                                    support@qcin.org
                                </a>

                                &nbsp; | &nbsp;

                                <a href="tel:01141723000">
                                    011-41723000
                                </a>

                            </div>

                        </div>

                    </div>


                </form>

            </div>

        </section>



        <!-- =================================================
             BOTTOM SECURITY BAR
        ================================================= -->

        <div class="qci-bottom-strip">

            <div class="qci-bottom-items">


                <div class="qci-bottom-item">

                    <i class="bi bi-lock-fill"></i>

                    <strong>
                        256-bit SSL<br>
                        Encryption
                    </strong>

                </div>


                <div class="qci-bottom-item">

                    <i class="bi bi-people-fill"></i>

                    <strong>
                        Role-Based<br>
                        Access Control
                    </strong>

                </div>


                <div class="qci-bottom-item">

                    <i class="bi bi-shield-check"></i>

                    <strong>
                        Secure<br>
                        Authentication
                    </strong>

                </div>


                <div class="qci-bottom-item">

                    <i class="bi bi-file-earmark-text-fill"></i>

                    <strong>
                        Audit Trail &amp;<br>
                        Activity Logs
                    </strong>

                </div>


            </div>

        </div>


    </div>

</div>



<script>

/* =========================================================
   PASSWORD SHOW / HIDE
========================================================= */

const qciPassword =
    document.getElementById("qciPassword");

const qciPasswordToggle =
    document.getElementById("qciPasswordToggle");


if (qciPasswordToggle) {

    qciPasswordToggle.addEventListener(
        "click",
        function () {

            if (qciPassword.type === "password") {

                qciPassword.type = "text";

                qciPasswordToggle.classList.remove(
                    "bi-eye"
                );

                qciPasswordToggle.classList.add(
                    "bi-eye-slash"
                );

            } else {

                qciPassword.type = "password";

                qciPasswordToggle.classList.remove(
                    "bi-eye-slash"
                );

                qciPasswordToggle.classList.add(
                    "bi-eye"
                );

            }

        }
    );

}


/* =========================================================
   CAPTCHA
========================================================= */

const captchaCharacters =
    "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";


function generateCaptcha() {

    let result = "";

    for (let i = 0; i < 5; i++) {

        result += captchaCharacters[
            Math.floor(
                Math.random() *
                captchaCharacters.length
            )
        ];

    }

    return result;

}


const captchaText =
    document.getElementById("qciCaptchaText");

const captchaInput =
    document.getElementById("qciCaptchaInput");

const refreshCaptcha =
    document.getElementById("qciRefresh");


if (refreshCaptcha) {

    refreshCaptcha.addEventListener(
        "click",
        function () {

            captchaText.innerText =
                generateCaptcha();

            captchaInput.value = "";

        }
    );

}

</script>

</body>
</html>