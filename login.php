<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>QCI Portal - Login</title>

    <link
        rel="stylesheet"
        href="./assets/css/qci-login.css"
    >

</head>


<body class="qci-login-body">


    <main class="qci-login-page">


        <div class="qci-login-container">


            <!-- =====================================================
                 LEFT BRANDING PANEL
            ====================================================== -->

            <section class="qci-login-brand-panel">


                <!-- DOT PATTERN -->

                <div class="qci-login-dots"></div>


                <!-- BRAND -->

                <div class="qci-login-brand">

                    <div class="qci-login-logo">

                        <img
                            src="./assets/image/qci-logo.png"
                            alt="Quality Council of India"
                        >

                    </div>


                    <h1>
                        QCI PORTAL
                    </h1>

                    <div class="qci-login-brand-line"></div>

                    <h2>
                        Quality Council of India
                    </h2>

                    <p>
                        A unified digital platform for application management,
                        evaluation, approval, ranking and reporting.
                    </p>

                </div>

                <!-- =================================================
                    LOGIN ILLUSTRATION
                ================================================== -->

                <div class="qci-login-illustration">

                    <img
                        src="./assets/image/qci-login-illustration.png"
                        alt="QCI Portal Secure Application"
                        class="qci-login-illustration-image"
                    >

                </div>

            </section>



            <!-- =====================================================
                 RIGHT LOGIN PANEL
            ====================================================== -->

            <section class="qci-login-form-panel">


                <div class="qci-login-form-wrapper">


                    <!-- HEADING -->

                    <div class="qci-login-heading">

                        <h2>
                            Welcome to QCI Portal
                        </h2>

                        <p>
                            Please login to continue
                        </p>

                    </div>


                    <form
                        class="qci-login-form"
                        method="POST"
                        action=""
                    >


                        <!-- =================================================
                             ROLE
                        ================================================== -->

                        <div class="qci-login-field">

                            <label>
                                User Type / Role
                            </label>


                            <div class="qci-login-role-grid">


                                <!-- APPLICANT -->

                                <label class="qci-login-role active">

                                    <input
                                        type="radio"
                                        name="user_role"
                                        value="applicant"
                                        checked
                                    >

                                    <span class="qci-login-role-icon">
                                        ♟
                                    </span>

                                    <span class="qci-login-role-name">
                                        Applicant
                                    </span>

                                </label>


                                <!-- ADMIN -->

                                <label class="qci-login-role">

                                    <input
                                        type="radio"
                                        name="user_role"
                                        value="admin"
                                    >

                                    <span class="qci-login-role-icon">
                                        ♟
                                    </span>

                                    <span class="qci-login-role-name">
                                        QCI Admin
                                    </span>

                                </label>


                                <!-- REVIEWER -->

                                <label class="qci-login-role">

                                    <input
                                        type="radio"
                                        name="user_role"
                                        value="reviewer"
                                    >

                                    <span class="qci-login-role-icon">
                                        ♟
                                    </span>

                                    <span class="qci-login-role-name">
                                        Reviewer
                                    </span>

                                </label>


                                <!-- SUPER ADMIN -->

                                <label class="qci-login-role">

                                    <input
                                        type="radio"
                                        name="user_role"
                                        value="super_admin"
                                    >

                                    <span class="qci-login-role-icon">
                                        ♛
                                    </span>

                                    <span class="qci-login-role-name">
                                        Super Admin
                                    </span>

                                </label>

                            </div>

                        </div>



                        <!-- =================================================
                             EMAIL
                        ================================================== -->

                        <div class="qci-login-field">

                            <label for="qci-login-username">
                                Email ID / Username
                            </label>


                            <div class="qci-login-input-wrapper">

                                <span class="qci-login-input-icon">
                                    ♟
                                </span>

                                <input
                                    type="text"
                                    id="qci-login-username"
                                    name="username"
                                    placeholder="Enter your email ID / username"
                                    autocomplete="username"
                                    required
                                >

                            </div>

                        </div>



                        <!-- =================================================
                             PASSWORD
                        ================================================== -->

                        <div class="qci-login-field">

                            <label for="qci-login-password">
                                Password
                            </label>


                            <div class="qci-login-input-wrapper">

                                <span class="qci-login-input-icon">
                                    🔒
                                </span>

                                <input
                                    type="password"
                                    id="qci-login-password"
                                    name="password"
                                    placeholder="Enter your password"
                                    autocomplete="current-password"
                                    required
                                >

                                <button
                                    type="button"
                                    class="qci-login-password-toggle"
                                    id="qciLoginPasswordToggle"
                                    aria-label="Show password"
                                >
                                    ◉
                                </button>

                            </div>

                        </div>



                        <!-- =================================================
                             CAPTCHA
                        ================================================== -->

                        <div class="qci-login-field">

                            <label>
                                Captcha
                            </label>


                            <div class="qci-login-captcha-row">


                                <div class="qci-login-captcha-image">

                                    <span>7</span>
                                    <span>K</span>
                                    <span>8</span>
                                    <span>P</span>
                                    <span>3</span>

                                    <div class="qci-login-captcha-line"></div>
                                    <div class="qci-login-captcha-line line-two"></div>

                                </div>


                                <button
                                    type="button"
                                    class="qci-login-captcha-refresh"
                                    id="qciLoginCaptchaRefresh"
                                    aria-label="Refresh captcha"
                                >
                                    ↻
                                </button>


                                <div class="qci-login-captcha-input">

                                    <input
                                        type="text"
                                        name="captcha"
                                        placeholder="Enter captcha"
                                        required
                                    >

                                </div>

                            </div>

                        </div>



                        <!-- =================================================
                             OPTIONS
                        ================================================== -->

                        <div class="qci-login-options">

                            <label class="qci-login-remember">

                                <input
                                    type="checkbox"
                                    name="remember"
                                >

                                <span>
                                    Remember Me
                                </span>

                            </label>


                            <a
                                href="#"
                                class="qci-login-forgot"
                            >
                                Forgot Password?
                            </a>

                        </div>



                        <!-- =================================================
                             LOGIN BUTTON
                        ================================================== -->

                        <button
                            type="submit"
                            class="qci-login-submit"
                        >

                            <span>
                                🔒
                            </span>

                            Login

                        </button>



                        <!-- =================================================
                             DIVIDER
                        ================================================== -->

                        <div class="qci-login-divider">

                            <span></span>

                            <strong>
                                or
                            </strong>

                            <span></span>

                        </div>



                        <!-- =================================================
                             REGISTER
                        ================================================== -->

                        <div class="qci-login-register">

                            <span>
                                New user?
                            </span>

                            <a href="#">
                                Register Now
                            </a>

                        </div>



                        <!-- =================================================
                             HELP
                        ================================================== -->

                        <div class="qci-login-help">

                            <div class="qci-login-help-icon">
                                ♧
                            </div>

                            <div>

                                <strong>
                                    Need Help?
                                </strong>

                                <p>
                                    Contact QCI Support:
                                    <a href="mailto:support@qcin.org">
                                        support@qcin.org
                                    </a>

                                    <span>|</span>

                                    <a href="tel:01141723000">
                                        011-41723000
                                    </a>
                                </p>

                            </div>

                        </div>


                    </form>

                </div>

            </section>

        </div>


        <!-- =====================================================
             COPYRIGHT
        ====================================================== -->

        <div class="qci-login-copyright">

            © 2024 Quality Council of India (QCI).
            All rights reserved.

        </div>

    </main>


    <script>

        const qciPassword =
            document.getElementById("qci-login-password");

        const qciPasswordToggle =
            document.getElementById("qciLoginPasswordToggle");


        qciPasswordToggle.addEventListener("click", function () {

            if (qciPassword.type === "password") {

                qciPassword.type = "text";

                this.textContent = "◉";

            } else {

                qciPassword.type = "password";

                this.textContent = "◉";

            }

        });


        /*
         * Role selection
         */

        const qciRoles =
            document.querySelectorAll(".qci-login-role");


        qciRoles.forEach(function (role) {

            role.addEventListener("click", function () {

                qciRoles.forEach(function (item) {
                    item.classList.remove("active");
                });

                this.classList.add("active");

            });

        });


        /*
         * Demo captcha refresh
         *
         * Replace this with your PHP/backend captcha
         * implementation.
         */

        const qciCaptchaRefresh =
            document.getElementById("qciLoginCaptchaRefresh");

        const qciCaptchaNumbers =
            document.querySelectorAll(
                ".qci-login-captcha-image span"
            );


        const qciCaptchaCharacters =
            "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";


        function qciGenerateCaptcha() {

            let captcha = "";

            for (let i = 0; i < 5; i++) {

                captcha +=
                    qciCaptchaCharacters[
                        Math.floor(
                            Math.random() *
                            qciCaptchaCharacters.length
                        )
                    ];

            }

            qciCaptchaNumbers.forEach(
                function (element, index) {

                    element.textContent =
                        captcha[index];

                }
            );

        }


        qciCaptchaRefresh.addEventListener(
            "click",
            qciGenerateCaptcha
        );

    </script>

</body>

</html>