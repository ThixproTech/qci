<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coming Soon</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef5fc;
            color: #132b5c;
        }

        .coming-page {
            width: 100%;
            height: 100dvh;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;

            position: relative;
            overflow: hidden;

            background:
                radial-gradient(
                    circle at 15% 20%,
                    rgba(35, 105, 210, 0.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 85% 80%,
                    rgba(35, 105, 210, 0.12),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #f8fbff,
                    #eaf3ff
                );
        }

        /* Decorative circles */

        .circle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .circle-one {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -100px;
            border: 1px solid rgba(20, 91, 207, 0.15);
        }

        .circle-two {
            width: 450px;
            height: 450px;
            bottom: -250px;
            right: -180px;
            border: 1px solid rgba(20, 91, 207, 0.12);
        }

        .circle-three {
            width: 120px;
            height: 120px;
            top: 15%;
            right: 12%;
            background: rgba(20, 91, 207, 0.04);
        }

        /* Main card */

        .coming-card {
            position: relative;
            z-index: 5;

            width: 100%;
            max-width: 850px;

            background: rgba(255, 255, 255, 0.94);

            border: 1px solid rgba(255, 255, 255, 0.9);

            border-radius: 24px;

            padding: 55px 50px;

            text-align: center;

            box-shadow:
                0 20px 60px rgba(26, 63, 110, 0.12);

            backdrop-filter: blur(10px);
        }

        /* Logo */

        .logo-box {
            width: 90px;
            height: 90px;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #153f83,
                #1b64c8
            );

            border-radius: 22px;

            color: white;

            box-shadow:
                0 12px 30px rgba(21, 63, 131, 0.22);
        }

        .logo-box i {
            font-size: 42px;
        }

        /* Small label */

        .coming-label {
            display: inline-block;

            padding: 7px 18px;

            border-radius: 50px;

            background: #eaf3ff;

            color: #145bc8;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1.5px;

            text-transform: uppercase;

            margin-bottom: 18px;
        }

        /* Heading */

        h1 {
            margin: 0;

            color: #12376f;

            font-size: clamp(42px, 6vw, 72px);

            line-height: 1.05;

            font-weight: 800;

            letter-spacing: -2px;
        }

        h1 span {
            color: #145bc8;
        }

        /* Description */

        .description {
            max-width: 600px;

            margin: 20px auto 0;

            color: #52627b;

            font-size: 17px;

            line-height: 1.7;
        }

        /* Progress */

        .progress-area {
            max-width: 520px;

            margin: 32px auto 0;
        }

        .progress-text {
            display: flex;

            justify-content: space-between;

            margin-bottom: 8px;

            color: #52627b;

            font-size: 13px;

            font-weight: 600;
        }

        .progress-bar-bg {
            width: 100%;
            height: 8px;

            background: #e3ebf6;

            border-radius: 20px;

            overflow: hidden;
        }

        .progress-bar-fill {
            width: 78%;
            height: 100%;

            border-radius: 20px;

            background: linear-gradient(
                90deg,
                #153f83,
                #2878dc
            );
        }

        /* Notify */

        .notify-box {
            max-width: 500px;

            margin: 30px auto 0;

            display: flex;

            gap: 10px;
        }

        .notify-input {
            flex: 1;

            height: 48px;

            padding: 0 17px;

            border: 1px solid #d5dfea;

            border-radius: 8px;

            outline: none;

            font-size: 14px;

            color: #243752;
        }

        .notify-input:focus {
            border-color: #1b64c8;

            box-shadow:
                0 0 0 3px rgba(27, 100, 200, 0.08);
        }

        .notify-button {
            height: 48px;

            padding: 0 24px;

            border: 0;

            border-radius: 8px;

            background: linear-gradient(
                90deg,
                #153f83,
                #1b64c8
            );

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.2s;
        }

        .notify-button:hover {
            transform: translateY(-1px);

            box-shadow:
                0 8px 18px rgba(21, 63, 131, 0.2);
        }

        /* Footer */

        .footer {
            margin-top: 32px;

            padding-top: 20px;

            border-top: 1px solid #e6edf5;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 25px;

            color: #68788f;

            font-size: 12px;
        }

        .footer-item {
            display: flex;

            align-items: center;

            gap: 7px;
        }

        .footer-item i {
            color: #145bc8;

            font-size: 15px;
        }

        /* Mobile */

        @media (max-width: 600px) {

            .coming-page {
                padding: 15px;
            }

            .coming-card {
                padding: 35px 22px;
                border-radius: 18px;
            }

            .logo-box {
                width: 70px;
                height: 70px;
                border-radius: 17px;
            }

            .logo-box i {
                font-size: 32px;
            }

            h1 {
                font-size: 44px;
                letter-spacing: -1px;
            }

            .description {
                font-size: 14px;
                line-height: 1.6;
            }

            .notify-box {
                flex-direction: column;
            }

            .notify-input,
            .notify-button {
                width: 100%;
            }

            .footer {
                flex-direction: column;
                gap: 8px;
            }
        }

        /* Small screen height */

        @media (max-height: 700px) and (min-width: 601px) {

            .coming-card {
                padding: 28px 40px;
            }

            .logo-box {
                width: 65px;
                height: 65px;
                margin-bottom: 12px;
            }

            .logo-box i {
                font-size: 30px;
            }

            .coming-label {
                margin-bottom: 10px;
            }

            .description {
                margin-top: 12px;
                font-size: 14px;
            }

            .progress-area {
                margin-top: 20px;
            }

            .notify-box {
                margin-top: 20px;
            }

            .footer {
                margin-top: 20px;
                padding-top: 12px;
            }
        }
    </style>
</head>

<body>

<div class="coming-page">

    <!-- Decorative Background -->
    <div class="circle circle-one"></div>
    <div class="circle circle-two"></div>
    <div class="circle circle-three"></div>


    <!-- Main Content -->
    <div class="coming-card">

        <div class="logo-box">
            <i class="bi bi-rocket-takeoff-fill"></i>
        </div>

        <div class="coming-label">
            Website Under Development
        </div>

        <h1>
            Coming <span>Soon</span>
        </h1>

        <p class="description">
            We are working hard to bring you something amazing.
            Our new website is currently under development and
            will be available very soon.
        </p>


        <!-- Progress -->
        <div class="progress-area">

            <div class="progress-text">
                <span>Development Progress</span>
                <span>78%</span>
            </div>

            <div class="progress-bar-bg">
                <div class="progress-bar-fill"></div>
            </div>

        </div>


        <!-- Email -->
        <form class="notify-box">

            <input
                type="email"
                class="notify-input"
                placeholder="Enter your email address"
                required
            >

            <button
                type="submit"
                class="notify-button"
            >
                Notify Me
            </button>

        </form>


        <!-- Footer -->
        <div class="footer">

            <div class="footer-item">
                <i class="bi bi-shield-check"></i>
                Secure Platform
            </div>

            <div class="footer-item">
                <i class="bi bi-clock"></i>
                Launching Soon
            </div>

            <div class="footer-item">
                <i class="bi bi-envelope"></i>
                Stay Connected
            </div>

        </div>

    </div>

</div>

</body>
</html>