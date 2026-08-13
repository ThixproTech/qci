<?php
require_once "includes/auth.php";
?>

<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>


<div class="main"
     style="
        /* margin-left:215px; */
        min-height:100vh;
        background:#fff;
        color:#152957;
        font-family:Arial,Helvetica,sans-serif;
        box-sizing:border-box;
     ">
   <?php include "includes/navbar.php"; ?>
    <div class="content"
         style="
            max-width:1600px;
            margin:auto;
            padding:18px 24px 95px;
            box-sizing:border-box;
         ">


        <!-- =====================================================
             BREADCRUMB
        ====================================================== -->

        <div style="
            display:flex;
            align-items:center;
            gap:13px;
            color:#55709e;
            font-size:11px;
            margin-bottom:20px;
        ">

            <span style="color:#155bd1;">
                My Assignments
            </span>

            <i class="bi bi-chevron-right"
               style="font-size:8px;"></i>

            <span style="color:#155bd1;">
                Application Details
            </span>

            <i class="bi bi-chevron-right"
               style="font-size:8px;"></i>

            <span>
                Review
            </span>

        </div>



        <!-- =====================================================
             PAGE HEADER + RESTRICTED ALERT
        ====================================================== -->

        <div class="review-header"
             style="
                display:grid;
                grid-template-columns:minmax(0,1fr) 440px;
                gap:25px;
                align-items:start;
                margin-bottom:19px;
             ">


            <div>

                <div style="
                    display:flex;
                    align-items:center;
                    flex-wrap:wrap;
                    gap:12px;
                ">

                    <h1 style="
                        margin:0;
                        color:#091e53;
                        font-size:24px;
                        line-height:30px;
                        font-weight:700;
                    ">
                        Application Review
                    </h1>


                    <span style="
                        display:inline-flex;
                        align-items:center;
                        height:28px;
                        padding:0 12px;
                        border-radius:15px;
                        background:#fff2dc;
                        border:1px solid #ffd08a;
                        color:#dc8500;
                        font-size:11px;
                        font-weight:600;
                    ">
                        Under Review
                    </span>

                </div>


                <div style="
                    color:#536686;
                    font-size:13px;
                    margin-top:7px;
                ">
                    Review ID: REV-QC-2025-00056
                </div>

            </div>



            <!-- RESTRICTED -->

            <div style="
                min-height:96px;
                border:1px solid #ff9da5;
                background:#fff5f5;
                border-radius:7px;
                padding:14px 18px;
                box-sizing:border-box;
                display:flex;
                gap:15px;
                align-items:flex-start;
            ">

                <div style="
                    color:#df252e;
                    font-size:22px;
                    line-height:25px;
                ">
                    <i class="bi bi-lock"></i>
                </div>

                <div>

                    <div style="
                        color:#c7252c;
                        font-size:14px;
                        font-weight:700;
                        margin-bottom:6px;
                    ">
                        Download Restricted
                    </div>

                    <div style="
                        color:#43577d;
                        font-size:12px;
                        line-height:19px;
                    ">
                        All documents are available for authorized online viewing only.
                        Downloading, saving, copying or printing is strictly prohibited.
                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             APPLICATION SUMMARY + WORKFLOW
        ====================================================== -->

        <div class="row g-3"
             style="margin-bottom:18px;">


            <!-- APPLICATION SUMMARY -->

            <div class="col-12 col-xl-6">

                <div style="
                    height:190px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px;
                    box-sizing:border-box;
                ">

                    <div class="summary-grid"
                         style="
                            display:grid;
                            grid-template-columns:1.25fr 1fr 1fr;
                            height:100%;
                         ">


                        <!-- COLUMN 1 -->

                        <div style="
                            padding-right:25px;
                            border-right:1px solid #e4eaf2;
                        ">

                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Application ID
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                font-weight:600;
                                margin-bottom:15px;
                            ">
                                APP-QCI-2025-01478
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Organization Name
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                font-weight:600;
                                margin-bottom:15px;
                            ">
                                Excellence Certifiers LLP
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Category
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                font-weight:600;
                            ">
                                Conformity Assessment Body (CAB)
                            </div>

                        </div>



                        <!-- COLUMN 2 -->

                        <div style="
                            padding:0 25px;
                            border-right:1px solid #e4eaf2;
                        ">

                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Date Submitted
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                margin-bottom:15px;
                            ">
                                18 Apr 2025
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Assigned On
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                margin-bottom:15px;
                            ">
                                21 Apr 2025
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Due Date
                            </div>

                            <div style="
                                font-size:13px;
                                color:#ed3038;
                                font-weight:600;
                            ">
                                30 Apr 2025
                            </div>

                        </div>



                        <!-- COLUMN 3 -->

                        <div style="
                            padding-left:25px;
                        ">

                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Assigned By
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                margin-bottom:15px;
                            ">
                                QCI Admin
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Current Stage
                            </div>

                            <div style="
                                font-size:13px;
                                color:#12295a;
                                margin-bottom:15px;
                            ">
                                QC Review
                            </div>


                            <div style="
                                font-size:11px;
                                color:#526482;
                                margin-bottom:5px;
                            ">
                                Application Status
                            </div>

                            <span style="
                                display:inline-flex;
                                padding:4px 10px;
                                background:#e9f3ff;
                                border:1px solid #bcd8ff;
                                border-radius:5px;
                                color:#1660ca;
                                font-size:10px;
                            ">
                                Under Review
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- WORKFLOW -->

            <div class="col-12 col-xl-6">

                <div style="
                    height:190px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:21px 20px;
                    box-sizing:border-box;
                ">

                    <h3 style="
                        margin:0 0 23px;
                        color:#10255b;
                        font-size:15px;
                        font-weight:700;
                    ">
                        Application Workflow
                    </h3>


                    <div style="
                        display:flex;
                        align-items:flex-start;
                        width:100%;
                    ">


                        <!-- STEP 1 -->

                        <div style="
                            width:72px;
                            text-align:center;
                            position:relative;
                            flex-shrink:0;
                        ">

                            <div style="
                                width:29px;
                                height:29px;
                                margin:auto;
                                border-radius:50%;
                                background:#0aa267;
                                color:#fff;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:13px;
                                position:relative;
                                z-index:2;
                            ">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <div style="
                                position:absolute;
                                top:14px;
                                left:60px;
                                width:80px;
                                height:2px;
                                background:#0aa267;
                            "></div>

                            <div style="
                                font-size:11px;
                                color:#263961;
                                font-weight:600;
                                margin-top:10px;
                                white-space:nowrap;
                            ">
                                Submitted
                            </div>

                            <div style="
                                font-size:10px;
                                color:#687793;
                                margin-top:9px;
                            ">
                                18 Apr 2025
                            </div>

                        </div>



                        <!-- STEP 2 -->

                        <div style="
                            width:100px;
                            text-align:center;
                            position:relative;
                            flex-shrink:0;
                        ">

                            <div style="
                                width:29px;
                                height:29px;
                                margin:auto;
                                border-radius:50%;
                                background:#0aa267;
                                color:#fff;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:13px;
                                position:relative;
                                z-index:2;
                            ">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <div style="
                                position:absolute;
                                top:14px;
                                left:64px;
                                width:90px;
                                height:2px;
                                background:#0aa267;
                            "></div>

                            <div style="
                                font-size:11px;
                                color:#263961;
                                font-weight:600;
                                margin-top:10px;
                                white-space:nowrap;
                            ">
                                Pre-Scrutiny
                            </div>

                            <div style="
                                font-size:10px;
                                color:#687793;
                                margin-top:9px;
                            ">
                                20 Apr 2025
                            </div>

                        </div>



                        <!-- STEP 3 -->

                        <div style="
                            width:100px;
                            text-align:center;
                            position:relative;
                            flex-shrink:0;
                        ">

                            <div style="
                                width:29px;
                                height:29px;
                                margin:auto;
                                border-radius:50%;
                                background:#4024d7;
                                color:#fff;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:12px;
                                font-weight:700;
                                position:relative;
                                z-index:2;
                            ">
                                3
                            </div>

                            <div style="
                                position:absolute;
                                top:14px;
                                left:64px;
                                width:90px;
                                height:2px;
                                background:#cbd4e3;
                            "></div>

                            <div style="
                                font-size:11px;
                                color:#4024d7;
                                font-weight:700;
                                margin-top:10px;
                                white-space:nowrap;
                            ">
                                QC Review
                            </div>

                            <div style="
                                font-size:10px;
                                color:#4024d7;
                                margin-top:9px;
                                font-weight:600;
                            ">
                                In Progress
                            </div>

                        </div>



                        <!-- STEP 4 -->

                        <div style="
                            width:100px;
                            text-align:center;
                            position:relative;
                            flex-shrink:0;
                        ">

                            <div style="
                                width:29px;
                                height:29px;
                                margin:auto;
                                border-radius:50%;
                                background:#f4f6fa;
                                border:1px solid #cbd4e3;
                                color:#1f3155;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:11px;
                                position:relative;
                                z-index:2;
                            ">
                                4
                            </div>

                            <div style="
                                position:absolute;
                                top:14px;
                                left:64px;
                                width:90px;
                                height:2px;
                                background:#cbd4e3;
                            "></div>

                            <div style="
                                font-size:11px;
                                color:#61708d;
                                margin-top:10px;
                                white-space:nowrap;
                            ">
                                Ranking
                            </div>

                        </div>



                        <!-- STEP 5 -->

                        <div style="
                            width:100px;
                            text-align:center;
                            flex-shrink:0;
                        ">

                            <div style="
                                width:29px;
                                height:29px;
                                margin:auto;
                                border-radius:50%;
                                background:#f4f6fa;
                                border:1px solid #cbd4e3;
                                color:#1f3155;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:11px;
                            ">
                                5
                            </div>

                            <div style="
                                font-size:11px;
                                color:#61708d;
                                margin-top:10px;
                                white-space:nowrap;
                            ">
                                Final Approval
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             LOWER CONTENT
        ====================================================== -->

        <div class="row g-3">


            <!-- LEFT DOCUMENT AREA -->

            <div class="col-12 col-xl-9">

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    overflow:hidden;
                ">


                    <!-- TABS -->

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:34px;
                        height:53px;
                        padding:0 20px;
                        border-bottom:1px solid #e2e8f0;
                        overflow-x:auto;
                        white-space:nowrap;
                    ">

                        <div style="
                            height:53px;
                            display:flex;
                            align-items:center;
                            color:#243a62;
                            font-size:11px;
                        ">
                            Application Information
                        </div>


                        <div style="
                            height:53px;
                            display:flex;
                            align-items:center;
                            border-bottom:3px solid #4820d6;
                            color:#3820be;
                            font-size:11px;
                            font-weight:700;
                        ">
                            Documents
                        </div>


                        <div style="
                            height:53px;
                            display:flex;
                            align-items:center;
                            color:#243a62;
                            font-size:11px;
                        ">
                            Review &amp; Scoring
                        </div>


                        <div style="
                            height:53px;
                            display:flex;
                            align-items:center;
                            color:#243a62;
                            font-size:11px;
                        ">
                            Comments
                        </div>


                        <div style="
                            height:53px;
                            display:flex;
                            align-items:center;
                            color:#243a62;
                            font-size:11px;
                        ">
                            Activity Log
                        </div>

                    </div>



                    <!-- DOCUMENT CONTENT -->

                    <div style="padding:20px;">


                        <h3 style="
                            margin:0 0 10px;
                            color:#10255b;
                            font-size:16px;
                            font-weight:700;
                        ">
                            Application Documents
                        </h3>


                        <!-- IMPORTANT -->

                        <div style="
                            min-height:69px;
                            border:1px solid #9bc3ff;
                            background:#eaf4ff;
                            border-radius:6px;
                            padding:12px 14px;
                            display:flex;
                            gap:12px;
                            align-items:flex-start;
                            box-sizing:border-box;
                            margin-bottom:15px;
                        ">

                            <div style="
                                width:23px;
                                height:23px;
                                border-radius:50%;
                                background:#075bdc;
                                color:#fff;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                flex-shrink:0;
                                font-size:13px;
                            ">
                                i
                            </div>

                            <div>

                                <div style="
                                    color:#1252b7;
                                    font-size:12px;
                                    font-weight:700;
                                    margin-bottom:5px;
                                ">
                                    Important
                                </div>

                                <div style="
                                    color:#465c80;
                                    font-size:11px;
                                    line-height:17px;
                                ">
                                    You can view all documents in the secure viewer.
                                    Downloading, saving, printing or taking screenshots is not allowed.
                                </div>

                            </div>

                        </div>



                        <!-- DOCUMENT TABLE -->

                        <div style="
                            width:100%;
                            overflow-x:auto;
                        ">

                            <table style="
                                width:100%;
                                min-width:720px;
                                border-collapse:collapse;
                                font-size:11px;
                                color:#304366;
                            ">

                                <thead>

                                    <tr style="
                                        background:#f8fafd;
                                        border-top:1px solid #e4eaf2;
                                        border-bottom:1px solid #e4eaf2;
                                    ">

                                        <th style="
                                            padding:12px 15px;
                                            text-align:left;
                                        ">
                                            Document Name
                                        </th>

                                        <th style="
                                            padding:12px 15px;
                                            text-align:left;
                                        ">
                                            Type
                                        </th>

                                        <th style="
                                            padding:12px 15px;
                                            text-align:left;
                                        ">
                                            Uploaded On
                                        </th>

                                        <th style="
                                            padding:12px 15px;
                                            text-align:left;
                                        ">
                                            Action
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>


                                    <!-- DOCUMENT 1 -->

                                    <tr style="
                                        border-bottom:1px solid #edf1f6;
                                    ">

                                        <td style="padding:12px 15px;">

                                            <div style="
                                                display:flex;
                                                align-items:center;
                                                gap:11px;
                                            ">

                                                <div style="
                                                    width:27px;
                                                    height:31px;
                                                    border-radius:3px;
                                                    background:#ed252d;
                                                    color:#fff;
                                                    display:flex;
                                                    align-items:center;
                                                    justify-content:center;
                                                    font-size:8px;
                                                    font-weight:700;
                                                ">
                                                    PDF
                                                </div>

                                                <div>

                                                    <div style="
                                                        font-weight:600;
                                                        color:#233861;
                                                    ">
                                                        Submitted Application
                                                    </div>

                                                    <div style="
                                                        font-size:9px;
                                                        color:#687893;
                                                        margin-top:3px;
                                                    ">
                                                        Application Form
                                                    </div>

                                                </div>

                                            </div>

                                        </td>


                                        <td style="padding:12px 15px;">
                                            PDF
                                        </td>


                                        <td style="padding:12px 15px;">
                                            18 Apr 2025
                                            <br>
                                            11:24 AM
                                        </td>


                                        <td style="padding:12px 15px;">

                                            <button style="
                                                height:36px;
                                                padding:0 15px;
                                                border:1px solid #cfdced;
                                                background:#fff;
                                                color:#0754c7;
                                                border-radius:5px;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                <i class="bi bi-eye"
                                                   style="margin-right:7px;"></i>
                                                View Only
                                            </button>

                                        </td>

                                    </tr>



                                    <!-- DOCUMENT 2 -->

                                    <tr style="
                                        border-bottom:1px solid #edf1f6;
                                    ">

                                        <td style="padding:12px 15px;">

                                            <div style="
                                                display:flex;
                                                align-items:center;
                                                gap:11px;
                                            ">

                                                <div style="
                                                    width:27px;
                                                    height:31px;
                                                    border-radius:3px;
                                                    background:#ed252d;
                                                    color:#fff;
                                                    display:flex;
                                                    align-items:center;
                                                    justify-content:center;
                                                    font-size:8px;
                                                    font-weight:700;
                                                ">
                                                    PDF
                                                </div>

                                                <div>

                                                    <div style="
                                                        font-weight:600;
                                                        color:#233861;
                                                    ">
                                                        Certificate of Incorporation
                                                    </div>

                                                    <div style="
                                                        font-size:9px;
                                                        color:#687893;
                                                    ">
                                                        Certificate
                                                    </div>

                                                </div>

                                            </div>

                                        </td>

                                        <td style="padding:12px 15px;">
                                            PDF
                                        </td>

                                        <td style="padding:12px 15px;">
                                            18 Apr 2025
                                            <br>
                                            11:25 AM
                                        </td>

                                        <td style="padding:12px 15px;">

                                            <button style="
                                                height:36px;
                                                padding:0 15px;
                                                border:1px solid #cfdced;
                                                background:#fff;
                                                color:#0754c7;
                                                border-radius:5px;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                <i class="bi bi-eye"
                                                   style="margin-right:7px;"></i>
                                                View Only
                                            </button>

                                        </td>

                                    </tr>



                                    <!-- DOCUMENT 3 -->

                                    <tr style="
                                        border-bottom:1px solid #edf1f6;
                                    ">

                                        <td style="padding:12px 15px;">

                                            <div style="
                                                display:flex;
                                                align-items:center;
                                                gap:11px;
                                            ">

                                                <div style="
                                                    width:27px;
                                                    height:31px;
                                                    border-radius:3px;
                                                    background:#0b9d58;
                                                    color:#fff;
                                                    display:flex;
                                                    align-items:center;
                                                    justify-content:center;
                                                    font-size:8px;
                                                    font-weight:700;
                                                ">
                                                    JPG
                                                </div>

                                                <div>

                                                    <div style="
                                                        font-weight:600;
                                                        color:#233861;
                                                    ">
                                                        Organization Photograph
                                                    </div>

                                                    <div style="
                                                        font-size:9px;
                                                        color:#687893;
                                                    ">
                                                        Image
                                                    </div>

                                                </div>

                                            </div>

                                        </td>

                                        <td style="padding:12px 15px;">
                                            JPG
                                        </td>

                                        <td style="padding:12px 15px;">
                                            18 Apr 2025
                                            <br>
                                            11:26 AM
                                        </td>

                                        <td style="padding:12px 15px;">

                                            <button style="
                                                height:36px;
                                                padding:0 15px;
                                                border:1px solid #cfdced;
                                                background:#fff;
                                                color:#0754c7;
                                                border-radius:5px;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                <i class="bi bi-eye"
                                                   style="margin-right:7px;"></i>
                                                View Only
                                            </button>

                                        </td>

                                    </tr>



                                    <!-- DOCUMENT 4 -->

                                    <tr style="
                                        border-bottom:1px solid #edf1f6;
                                    ">

                                        <td style="padding:12px 15px;">

                                            <div style="
                                                display:flex;
                                                align-items:center;
                                                gap:11px;
                                            ">

                                                <div style="
                                                    width:27px;
                                                    height:31px;
                                                    border-radius:3px;
                                                    background:#168b55;
                                                    color:#fff;
                                                    display:flex;
                                                    align-items:center;
                                                    justify-content:center;
                                                    font-size:9px;
                                                    font-weight:700;
                                                ">
                                                    X
                                                </div>

                                                <div>

                                                    <div style="
                                                        font-weight:600;
                                                        color:#233861;
                                                    ">
                                                        Financial Statements
                                                    </div>

                                                    <div style="
                                                        font-size:9px;
                                                        color:#687893;
                                                    ">
                                                        Financial Document
                                                    </div>

                                                </div>

                                            </div>

                                        </td>

                                        <td style="padding:12px 15px;">
                                            Excel
                                        </td>

                                        <td style="padding:12px 15px;">
                                            18 Apr 2025
                                            <br>
                                            11:27 AM
                                        </td>

                                        <td style="padding:12px 15px;">

                                            <button style="
                                                height:36px;
                                                padding:0 15px;
                                                border:1px solid #cfdced;
                                                background:#fff;
                                                color:#0754c7;
                                                border-radius:5px;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                <i class="bi bi-grid-3x3-gap"
                                                   style="margin-right:7px;"></i>
                                                Portal View Only
                                            </button>

                                        </td>

                                    </tr>



                                    <!-- DOCUMENT 5 -->

                                    <tr>

                                        <td style="padding:12px 15px;">

                                            <div style="
                                                display:flex;
                                                align-items:center;
                                                gap:11px;
                                            ">

                                                <div style="
                                                    width:27px;
                                                    height:31px;
                                                    border-radius:3px;
                                                    background:#ed252d;
                                                    color:#fff;
                                                    display:flex;
                                                    align-items:center;
                                                    justify-content:center;
                                                    font-size:8px;
                                                    font-weight:700;
                                                ">
                                                    PDF
                                                </div>

                                                <div>

                                                    <div style="
                                                        font-weight:600;
                                                        color:#233861;
                                                    ">
                                                        Technical Capability Document
                                                    </div>

                                                    <div style="
                                                        font-size:9px;
                                                        color:#687893;
                                                    ">
                                                        Supporting Document
                                                    </div>

                                                </div>

                                            </div>

                                        </td>

                                        <td style="padding:12px 15px;">
                                            PDF
                                        </td>

                                        <td style="padding:12px 15px;">
                                            18 Apr 2025
                                            <br>
                                            11:28 AM
                                        </td>

                                        <td style="padding:12px 15px;">

                                            <button style="
                                                height:36px;
                                                padding:0 15px;
                                                border:1px solid #cfdced;
                                                background:#fff;
                                                color:#0754c7;
                                                border-radius:5px;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                <i class="bi bi-eye"
                                                   style="margin-right:7px;"></i>
                                                View Only
                                            </button>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>



                        <!-- DOCUMENT SECURITY -->

                        <div style="
                            border-top:1px solid #edf1f6;
                            padding-top:10px;
                            margin-top:0;
                            color:#687893;
                            font-size:10px;
                        ">

                            <i class="bi bi-lock"
                               style="margin-right:8px;"></i>

                            All documents are watermarked and access-controlled.
                            Unauthorized access is monitored.

                        </div>

                    </div>

                </div>

            </div>



            <!-- =====================================================
                 RIGHT SIDEBAR
            ====================================================== -->

            <div class="col-12 col-xl-3">


                <!-- DOCUMENT ACCESS POLICY -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px;
                    margin-bottom:16px;
                ">

                    <h3 style="
                        margin:0 0 17px;
                        color:#10255b;
                        font-size:15px;
                        font-weight:700;
                    ">
                        Document Access Policy (QC Reviewers)
                    </h3>


                    <!-- POLICY 1 -->

                    <div style="
                        display:flex;
                        gap:12px;
                        margin-bottom:16px;
                    ">

                        <div style="
                            width:30px;
                            height:30px;
                            min-width:30px;
                            border-radius:50%;
                            background:#ffe6e7;
                            color:#ed3038;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                        ">
                            <i class="bi bi-file-earmark-x"></i>
                        </div>

                        <div style="
                            color:#3e5275;
                            font-size:11px;
                            line-height:17px;
                        ">
                            You are not allowed to download, print, copy,
                            save or share any document.
                        </div>

                    </div>


                    <!-- POLICY 2 -->

                    <div style="
                        display:flex;
                        gap:12px;
                        margin-bottom:16px;
                    ">

                        <div style="
                            width:30px;
                            height:30px;
                            min-width:30px;
                            border-radius:50%;
                            background:#ffe6e7;
                            color:#ed3038;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                        ">
                            <i class="bi bi-house-lock"></i>
                        </div>

                        <div style="
                            color:#3e5275;
                            font-size:11px;
                            line-height:17px;
                        ">
                            Documents can be viewed in the portal only.
                        </div>

                    </div>


                    <!-- POLICY 3 -->

                    <div style="
                        display:flex;
                        gap:12px;
                        margin-bottom:16px;
                    ">

                        <div style="
                            width:30px;
                            height:30px;
                            min-width:30px;
                            border-radius:50%;
                            background:#ffe6e7;
                            color:#ed3038;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                        ">
                            <i class="bi bi-shield-lock"></i>
                        </div>

                        <div style="
                            color:#3e5275;
                            font-size:11px;
                            line-height:17px;
                        ">
                            After you submit the review, you will not be able
                            to view this application or its documents.
                        </div>

                    </div>


                    <!-- POLICY 4 -->

                    <div style="
                        display:flex;
                        gap:12px;
                    ">

                        <div style="
                            width:30px;
                            height:30px;
                            min-width:30px;
                            border-radius:50%;
                            background:#ffe6e7;
                            color:#ed3038;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                        ">
                            <i class="bi bi-shield-exclamation"></i>
                        </div>

                        <div style="
                            color:#3e5275;
                            font-size:11px;
                            line-height:17px;
                        ">
                            Any attempt to bypass restrictions is strictly
                            prohibited and monitored.
                        </div>

                    </div>

                </div>



                <!-- AFTER SUBMISSION -->

                <div style="
                    border:1px solid #a8dfc2;
                    background:#f4fff8;
                    border-radius:7px;
                    padding:18px;
                    margin-bottom:16px;
                ">

                    <div style="
                        display:flex;
                        gap:12px;
                    ">

                        <div style="
                            color:#0b9d58;
                            font-size:22px;
                        ">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <div style="
                                color:#183e2b;
                                font-size:14px;
                                font-weight:700;
                                margin-bottom:7px;
                            ">
                                After Review Submission
                            </div>

                            <div style="
                                color:#536d5f;
                                font-size:11px;
                                line-height:18px;
                            ">
                                Once you submit your review, access to this
                                application and its documents will be
                                permanently restricted.
                            </div>

                            <div style="
                                color:#09854c;
                                font-size:11px;
                                line-height:18px;
                                font-weight:600;
                                margin-top:8px;
                            ">
                                Please ensure your review is accurate before
                                submission.
                            </div>

                        </div>

                    </div>

                </div>



                <!-- HELP -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:10px;
                        color:#0754c7;
                        margin-bottom:13px;
                    ">

                        <i class="bi bi-headset"
                           style="font-size:22px;"></i>

                        <span style="
                            color:#10255b;
                            font-size:15px;
                            font-weight:700;
                        ">
                            Need Help?
                        </span>

                    </div>


                    <div style="
                        font-size:11px;
                        line-height:22px;
                        color:#33496f;
                    ">

                        For any assistance, please contact

                        <br>

                        <strong>
                            Email:
                        </strong>

                        <span style="
                            color:#0754c7;
                            margin-left:12px;
                        ">
                            support@qcin.org
                        </span>

                        <br>

                        <strong>
                            Phone:
                        </strong>

                        <span style="
                            color:#0754c7;
                            margin-left:12px;
                        ">
                            0120-XXX-XXXX
                        </span>

                        <br>

                        (Mon - Fri : 09:30 AM to 06:00 PM)

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- =====================================================
         BOTTOM ACTION BAR
    ====================================================== -->

    <div class="review-action-bar"
         style="
            position:fixed;
            bottom:0;
            right:0;
            left:252px;
            min-height:74px;
            background:#fff;
            border-top:1px solid #dce5f0;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:10px 24px;
            box-sizing:border-box;
            z-index:900;
         ">


        <!-- BACK -->

        <button type="button"
                style="
                    height:50px;
                    min-width:200px;
                    padding:0 18px;
                    border:1px solid #9bbaf0;
                    background:#fff;
                    color:#0754c7;
                    border-radius:5px;
                    font-size:12px;
                    font-weight:600;
                ">

            <i class="bi bi-arrow-left"
               style="margin-right:8px;"></i>

            Back to Assignments

        </button>



        <div style="
            display:flex;
            align-items:center;
            gap:18px;
        ">

            <!-- SAVE -->

            <button type="button"
                    style="
                        height:50px;
                        min-width:185px;
                        padding:0 20px;
                        border:1px solid #a8c5f5;
                        background:#fff;
                        color:#244fc4;
                        border-radius:5px;
                        font-size:12px;
                        font-weight:600;
                    ">
                Save as Draft
            </button>



            <!-- SUBMIT -->

            <button type="button"
                    style="
                        height:50px;
                        min-width:275px;
                        padding:0 22px;
                        border:0;
                        background:linear-gradient(90deg,#4920d9,#6318d7);
                        color:#fff;
                        border-radius:5px;
                        font-size:12px;
                        font-weight:600;
                        box-shadow:0 3px 7px rgba(72,25,180,.25);
                    ">

                <div>
                    <i class="bi bi-lock"
                       style="margin-right:7px;"></i>
                    Submit Review
                </div>

                <div style="
                    font-size:10px;
                    margin-top:2px;
                    font-weight:400;
                ">
                    (Access will be restricted)
                </div>

            </button>

        </div>

    </div>

</div>



<!-- =========================================================
     RESPONSIVE
========================================================= -->

<style>

@media (max-width: 1200px) {

    .review-header {
        grid-template-columns:1fr !important;
    }

    .review-header > div:last-child {
        width:100%;
    }

    .summary-grid {
        grid-template-columns:1fr 1fr 1fr !important;
    }

}


@media (max-width: 991px) {

    .main {
        margin-left:215px !important;
    }

    .summary-grid {
        grid-template-columns:1fr !important;
        height:auto !important;
    }

    .summary-grid > div {
        border-right:0 !important;
        border-bottom:1px solid #e4eaf2;
        padding:12px 0 !important;
    }

}


@media (max-width: 767px) {

    .main {
        margin-left:0 !important;
    }

    .content {
        padding:15px 12px 105px !important;
    }


    /* HEADER */

    .review-header {
        display:block !important;
    }

    .review-header > div:last-child {
        margin-top:15px;
    }


    /* SUMMARY */

    .summary-grid {
        display:block !important;
    }

    .summary-grid > div {
        border-right:0 !important;
        border-bottom:1px solid #e4eaf2;
        padding:10px 0 !important;
    }


    /* WORKFLOW */

    .workflow-card {
        overflow-x:auto;
    }


    /* DOCUMENT TABS */

    .document-tabs {
        overflow-x:auto;
    }


    /* ACTION BAR */

    .review-action-bar {
        left:0 !important;
        min-height:auto !important;
        padding:8px 10px !important;
        gap:8px;
        flex-direction:column;
    }

    .review-action-bar > button {
        width:100% !important;
        min-width:0 !important;
    }

    .review-action-bar > div {
        width:100%;
        display:grid !important;
        grid-template-columns:1fr 1.5fr;
        gap:8px !important;
    }

    .review-action-bar > div button {
        min-width:0 !important;
        width:100% !important;
    }


    /* PAGE HEADER */

    h1 {
        font-size:20px !important;
    }

}


@media (max-width: 575px) {

    .content {
        padding-left:9px !important;
        padding-right:9px !important;
    }


    .review-header h1 {
        font-size:19px !important;
    }


    .review-header > div:first-child > div:first-child {
        align-items:flex-start !important;
        flex-direction:column;
    }


    .review-action-bar > div {
        grid-template-columns:1fr !important;
    }


    .review-action-bar {
        position:fixed !important;
    }

}

</style>



<script>

document.addEventListener("DOMContentLoaded", function () {

    /*
     * Prevent accidental download actions
     */

    document.querySelectorAll("a").forEach(function (link) {

        if (
            link.getAttribute("download") ||
            (link.href && link.href.toLowerCase().includes("download"))
        ) {

            link.addEventListener("click", function (e) {
                e.preventDefault();

                alert(
                    "Downloading documents is restricted. Documents can only be viewed securely in the portal."
                );
            });

        }

    });


    /*
     * View Only buttons
     */

    document.querySelectorAll(
        'button'
    ).forEach(function (button) {

        const text = button.innerText.trim();

        if (text === "View Only" || text === "Portal View Only") {

            button.addEventListener("click", function () {

                alert(
                    "Secure document viewer will open here."
                );

            });

        }

    });


    /*
     * Submit Review confirmation
     */

    const submitButtons = document.querySelectorAll(
        'button'
    );

    submitButtons.forEach(function (button) {

        if (
            button.innerText.includes("Submit Review")
        ) {

            button.addEventListener("click", function () {

                const confirmed = confirm(
                    "Are you sure you want to submit this review?\n\nAfter submission, access to this application and its documents will be permanently restricted."
                );

                if (!confirmed) {
                    return;
                }

                alert(
                    "Review submitted successfully."
                );

            });

        }

    });

});

</script>