<?php
require_once "includes/auth.php";
?>

<?php include "includes/header.php"; ?>

<?php include "includes/sidebar.php"; ?>


<!-- MAIN CONTENT -->
<div class="main"
    
     style="
        margin-left:215px;
        min-height:100vh;
        background:#fff;
        color:#10244b;
        box-sizing:border-box;
        font-family:Arial,Helvetica,sans-serif;
     ">
     <?php include "includes/navbar.php"; ?>

    <!-- CONTENT -->
    <div class="content"
         style="
            padding:20px 28px 0 28px;
            box-sizing:border-box;
            max-width:1600px;
            /* margin:auto; */
         ">


        <!-- =====================================================
             TOP HEADER
        ====================================================== -->

        <div class="d-flex justify-content-between align-items-center flex-wrap"
             style="gap:15px;margin-bottom:22px;">

            <div>

                <h3 style="
                    margin:0;
                    font-size:19px;
                    line-height:25px;
                    font-weight:700;
                    color:#10245a;
                ">
                    Welcome, Admin User 👋
                </h3>

                <p style="
                    margin:3px 0 0;
                    color:#68758e;
                    font-size:12px;
                ">
                    Here's what's happening with the applications today.
                </p>

            </div>


            <div class="d-flex"
                 style="gap:10px;">

                <button type="button"
                        style="
                            height:38px;
                            padding:0 17px;
                            border:1px solid #d8e1ef;
                            background:#fff;
                            color:#0754c7;
                            border-radius:5px;
                            font-size:12px;
                            font-weight:600;
                            cursor:pointer;
                        ">

                    <i class="bi bi-upload"
                       style="margin-right:7px;font-size:14px;"></i>

                    Upload Nominee Master

                </button>


                <button type="button"
                        style="
                            height:38px;
                            padding:0 20px;
                            border:1px solid #0754c7;
                            background:#0754c7;
                            color:#fff;
                            border-radius:5px;
                            font-size:12px;
                            font-weight:600;
                            cursor:pointer;
                            box-shadow:0 2px 5px rgba(0,70,180,.15);
                        ">

                    <i class="bi bi-plus-lg"
                       style="margin-right:7px;font-size:12px;"></i>

                    Assign Reviewer

                </button>

            </div>

        </div>



        <!-- =====================================================
             STATISTICS CARDS
        ====================================================== -->

        <div class="row g-3"
             style="margin-bottom:18px;">


            <!-- TOTAL APPLICATIONS -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    box-sizing:border-box;
                    position:relative;
                    box-shadow:0 1px 3px rgba(30,50,80,.03);
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#075bdc;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:22px;
                        ">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Total Applications
                            </div>

                            <div style="
                                font-size:21px;
                                line-height:25px;
                                font-weight:700;
                                color:#111d39;
                                margin-top:3px;
                            ">
                                1,254
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        View all applications
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- QC REVIEW -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    position:relative;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#0b9f65;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:21px;
                        ">
                            <i class="bi bi-clipboard-check"></i>
                        </div>

                        <div>

                            <div style="
                                font-size:9px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Pending with QC Review
                            </div>

                            <div style="
                                font-size:21px;
                                font-weight:700;
                                color:#111d39;
                            ">
                                86
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        Assigned to reviewers
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- ADMIN REVIEW -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    position:relative;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#ff9800;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:21px;
                        ">
                            <i class="bi bi-person"></i>
                        </div>

                        <div>

                            <div style="
                                font-size:11px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Pending with Admin
                            </div>

                            <div style="
                                font-size:21px;
                                font-weight:700;
                                color:#111d39;
                            ">
                                28
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        For your review
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- SUPER ADMIN -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    position:relative;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#6738d4;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:21px;
                        ">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <div style="
                                font-size:9px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Pending with Super Admin
                            </div>

                            <div style="
                                font-size:21px;
                                font-weight:700;
                                color:#111d39;
                            ">
                                14
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        For approval
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- APPROVED -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    position:relative;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#12aed1;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:21px;
                        ">
                            <i class="bi bi-check-circle"></i>
                        </div>

                        <div>

                            <div style="
                                font-size:10px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Approved Applications
                            </div>

                            <div style="
                                font-size:21px;
                                font-weight:700;
                                color:#111d39;
                            ">
                                1,102
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        View approved
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- REJECTED -->

            <div class="col-12 col-sm-6 col-lg-4 col-xl-2">

                <div style="
                    height:124px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    position:relative;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:12px;
                    ">

                        <div style="
                            width:45px;
                            height:45px;
                            min-width:45px;
                            border-radius:8px;
                            background:#ed2733;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            color:#fff;
                            font-size:21px;
                        ">
                            <i class="bi bi-x-circle"></i>
                        </div>

                        <div>

                            <div style="
                                font-size:10px;
                                color:#33415e;
                                white-space:nowrap;
                            ">
                                Rejected Applications
                            </div>

                            <div style="
                                font-size:21px;
                                font-weight:700;
                                color:#111d39;
                            ">
                                24
                            </div>

                        </div>

                    </div>


                    <div style="
                        position:absolute;
                        bottom:14px;
                        left:16px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        View rejected
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             MIDDLE SECTION
        ====================================================== -->

        <div class="row g-3"
             style="margin-bottom:18px;">


            <!-- APPLICATION STATUS -->

            <div class="col-12 col-xl-4">

                <div style="
                    height:315px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    box-sizing:border-box;
                ">

                    <h5 style="
                        margin:0 0 16px;
                        font-size:15px;
                        font-weight:700;
                        color:#10245a;
                    ">
                        Application Status Overview
                    </h5>


                    <div style="
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        gap:20px;
                        height:205px;
                    ">


                        <!-- DONUT -->

                        <div style="
                            width:155px;
                            height:155px;
                            border-radius:50%;
                            background:
                            conic-gradient(
                                #0b9f65 0deg 316deg,
                                #ff9800 316deg 340deg,
                                #6738d4 340deg 344deg,
                                #ed2733 344deg 351deg,
                                #075bdc 351deg 360deg
                            );
                            position:relative;
                            flex-shrink:0;
                        ">

                            <div style="
                                position:absolute;
                                width:95px;
                                height:95px;
                                border-radius:50%;
                                background:#fff;
                                top:30px;
                                left:30px;
                                display:flex;
                                flex-direction:column;
                                align-items:center;
                                justify-content:center;
                            ">

                                <strong style="
                                    font-size:21px;
                                    color:#111d39;
                                ">
                                    1,254
                                </strong>

                                <span style="
                                    font-size:11px;
                                    color:#69768c;
                                ">
                                    Total
                                </span>

                            </div>

                        </div>


                        <!-- LEGEND -->

                        <div style="
                            min-width:145px;
                            font-size:10px;
                        ">

                            <div style="
                                display:flex;
                                align-items:center;
                                margin-bottom:14px;
                            ">
                                <span style="
                                    width:7px;
                                    height:7px;
                                    border-radius:50%;
                                    background:#ff9800;
                                    margin-right:7px;
                                "></span>

                                <span style="flex:1;">
                                    QC Review
                                </span>

                                <strong>86</strong>

                                <span style="margin-left:12px;">
                                    6.9%
                                </span>
                            </div>


                            <div style="
                                display:flex;
                                align-items:center;
                                margin-bottom:14px;
                            ">
                                <span style="
                                    width:7px;
                                    height:7px;
                                    border-radius:50%;
                                    background:#ff9800;
                                    margin-right:7px;
                                "></span>

                                <span style="flex:1;">
                                    Admin Review
                                </span>

                                <strong>28</strong>

                                <span style="margin-left:12px;">
                                    2.2%
                                </span>
                            </div>


                            <div style="
                                display:flex;
                                align-items:center;
                                margin-bottom:14px;
                            ">
                                <span style="
                                    width:7px;
                                    height:7px;
                                    border-radius:50%;
                                    background:#6738d4;
                                    margin-right:7px;
                                "></span>

                                <span style="flex:1;">
                                    Super Admin Review
                                </span>

                                <strong>14</strong>

                                <span style="margin-left:12px;">
                                    1.1%
                                </span>
                            </div>


                            <div style="
                                display:flex;
                                align-items:center;
                                margin-bottom:14px;
                            ">
                                <span style="
                                    width:7px;
                                    height:7px;
                                    border-radius:50%;
                                    background:#0b9f65;
                                    margin-right:7px;
                                "></span>

                                <span style="flex:1;">
                                    Approved
                                </span>

                                <strong>1,102</strong>

                                <span style="margin-left:12px;">
                                    87.9%
                                </span>
                            </div>


                            <div style="
                                display:flex;
                                align-items:center;
                            ">
                                <span style="
                                    width:7px;
                                    height:7px;
                                    border-radius:50%;
                                    background:#ed2733;
                                    margin-right:7px;
                                "></span>

                                <span style="flex:1;">
                                    Rejected
                                </span>

                                <strong>24</strong>

                                <span style="margin-left:12px;">
                                    1.9%
                                </span>
                            </div>

                        </div>

                    </div>


                    <div style="
                        border-top:1px solid #edf1f6;
                        padding-top:11px;
                        text-align:right;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        View detailed report
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- CATEGORY CHART -->

            <div class="col-12 col-xl-4">

                <div style="
                    height:315px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    box-sizing:border-box;
                ">

                    <h5 style="
                        margin:0;
                        font-size:15px;
                        font-weight:700;
                        color:#10245a;
                    ">
                        Applications by Category
                    </h5>


                    <div style="
                        height:230px;
                        display:flex;
                        align-items:flex-end;
                        justify-content:space-around;
                        padding:20px 10px 5px;
                        border-bottom:1px solid #edf1f6;
                        position:relative;
                    ">

                        <!-- GRID -->

                        <div style="
                            position:absolute;
                            top:25px;
                            left:10px;
                            right:10px;
                            height:170px;
                            border-top:1px solid #e8edf4;
                            border-bottom:1px solid #e8edf4;
                            pointer-events:none;
                        "></div>


                        <!-- BAR A -->

                        <div style="
                            height:75px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>


                        <!-- BAR B -->

                        <div style="
                            height:112px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>


                        <!-- BAR C -->

                        <div style="
                            height:160px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>


                        <!-- BAR D -->

                        <div style="
                            height:68px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>


                        <!-- BAR E -->

                        <div style="
                            height:137px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>


                        <!-- BAR OTHER -->

                        <div style="
                            height:42px;
                            width:26px;
                            background:#0873d9;
                            z-index:2;
                        "></div>

                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-around;
                        font-size:8px;
                        color:#45536d;
                        margin-top:-1px;
                    ">

                        <span>Category A</span>
                        <span>Category B</span>
                        <span>Category C</span>
                        <span>Category D</span>
                        <span>Category E</span>
                        <span>Others</span>

                    </div>


                    <div style="
                        margin-top:8px;
                        font-size:11px;
                        color:#0754c7;
                    ">
                        View category wise report
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>



            <!-- RECENT ANNOUNCEMENTS -->

            <div class="col-12 col-xl-4">

                <div style="
                    height:315px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 16px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        margin-bottom:10px;
                    ">

                        <h5 style="
                            margin:0;
                            font-size:15px;
                            font-weight:700;
                            color:#10245a;
                        ">
                            Recent Announcements
                        </h5>

                        <span style="
                            color:#0754c7;
                            font-size:10px;
                        ">
                            View All
                        </span>

                    </div>


                    <!-- ANNOUNCEMENT 1 -->

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:10px;
                        padding:10px 0;
                        border-bottom:1px solid #edf1f6;
                    ">

                        <div style="
                            width:35px;
                            height:35px;
                            border-radius:7px;
                            background:#f0f6ff;
                            color:#075bdc;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            flex-shrink:0;
                            font-size:16px;
                        ">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>

                        <div style="min-width:0;">

                            <div style="
                                font-size:10px;
                                color:#23314d;
                                white-space:nowrap;
                                overflow:hidden;
                                text-overflow:ellipsis;
                            ">
                                Round B (Field Assessment) guidelines updated
                            </div>

                            <div style="
                                font-size:9px;
                                color:#758198;
                                margin-top:4px;
                            ">
                                12 May 2025 | By Super Admin
                            </div>

                        </div>

                    </div>


                    <!-- ANNOUNCEMENT 2 -->

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:10px;
                        padding:10px 0;
                        border-bottom:1px solid #edf1f6;
                    ">

                        <div style="
                            width:35px;
                            height:35px;
                            border-radius:7px;
                            background:#f0f6ff;
                            color:#075bdc;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            flex-shrink:0;
                            font-size:16px;
                        ">
                            <i class="bi bi-image"></i>
                        </div>

                        <div style="min-width:0;">

                            <div style="
                                font-size:10px;
                                color:#23314d;
                                white-space:nowrap;
                                overflow:hidden;
                                text-overflow:ellipsis;
                            ">
                                System will be under maintenance on 18 May 2025
                            </div>

                            <div style="
                                font-size:9px;
                                color:#758198;
                                margin-top:4px;
                            ">
                                10 May 2025 | By Admin
                            </div>

                        </div>

                    </div>


                    <!-- ANNOUNCEMENT 3 -->

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:10px;
                        padding:10px 0;
                    ">

                        <div style="
                            width:35px;
                            height:35px;
                            border-radius:7px;
                            background:#f0f6ff;
                            color:#075bdc;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            flex-shrink:0;
                            font-size:16px;
                        ">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>

                        <div style="min-width:0;">

                            <div style="
                                font-size:10px;
                                color:#23314d;
                                white-space:nowrap;
                                overflow:hidden;
                                text-overflow:ellipsis;
                            ">
                                Last date for submission extended to 30 June 2025
                            </div>

                            <div style="
                                font-size:9px;
                                color:#758198;
                                margin-top:4px;
                            ">
                                08 May 2025 | By Super Admin
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             APPLICATIONS + RIGHT SIDEBAR
        ====================================================== -->

        <div class="row g-3"
             style="margin-bottom:18px;">


            <!-- APPLICATION TABLE -->

            <div class="col-12 col-xl-9">

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:16px 13px 12px;
                    box-sizing:border-box;
                    overflow:hidden;
                ">

                    <div class="d-flex justify-content-between align-items-center flex-wrap"
                         style="gap:10px;margin-bottom:8px;">

                        <h5 style="
                            margin:0;
                            font-size:15px;
                            font-weight:700;
                            color:#10245a;
                        ">
                            Applications Awaiting Action
                        </h5>

                        <div style="
                            display:flex;
                            align-items:center;
                            gap:14px;
                            color:#0754c7;
                            font-size:10px;
                        ">

                            <span>View All</span>

                            <button style="
                                width:28px;
                                height:28px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                background:#fff;
                                color:#68758e;
                            ">
                                <i class="bi bi-funnel"></i>
                            </button>

                        </div>

                    </div>


                    <!-- TABS -->

                    <div style="
                        display:flex;
                        gap:24px;
                        border-bottom:1px solid #e5eaf1;
                        overflow-x:auto;
                        white-space:nowrap;
                    ">

                        <div style="
                            padding:8px 8px;
                            border-bottom:2px solid #075bdc;
                            color:#0754c7;
                            font-size:10px;
                            font-weight:600;
                        ">
                            Pending with QC Reviewer
                        </div>

                        <div style="
                            padding:8px 0;
                            color:#69768c;
                            font-size:10px;
                        ">
                            Pending with Admin
                        </div>

                        <div style="
                            padding:8px 0;
                            color:#69768c;
                            font-size:10px;
                        ">
                            Pending with Super Admin
                        </div>

                        <div style="
                            padding:8px 0;
                            color:#69768c;
                            font-size:10px;
                        ">
                            Clarification
                        </div>

                    </div>


                    <!-- RESPONSIVE TABLE -->

                    <div style="
                        overflow-x:auto;
                        width:100%;
                    ">

                        <table style="
                            width:100%;
                            min-width:800px;
                            border-collapse:collapse;
                            font-size:10px;
                            color:#30405f;
                        ">

                            <thead>

                                <tr style="
                                    background:#f8fafd;
                                    border-bottom:1px solid #e5eaf1;
                                ">

                                    <th style="padding:10px;text-align:left;">
                                        Application No.
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Nominee Name
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Category
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        QC Reviewer
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Date Assigned
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Due Date
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Status
                                    </th>

                                    <th style="padding:10px;text-align:left;">
                                        Action
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                <!-- ROW 1 -->

                                <tr style="
                                    border-bottom:1px solid #edf1f6;
                                ">

                                    <td style="padding:10px;color:#0754c7;">
                                        APP2025/000123
                                    </td>

                                    <td style="padding:10px;">
                                        ABC Quality Solutions Pvt. Ltd.
                                    </td>

                                    <td style="padding:10px;">
                                        Category A
                                    </td>

                                    <td style="padding:10px;">
                                        Dr. Rajeev Kumar
                                    </td>

                                    <td style="padding:10px;">
                                        10 May 2025
                                    </td>

                                    <td style="
                                        padding:10px;
                                        color:#ed2733;
                                    ">
                                        17 May 2025
                                    </td>

                                    <td style="padding:10px;">

                                        <span style="
                                            background:#fff5dd;
                                            color:#e68a00;
                                            padding:5px 8px;
                                            border-radius:10px;
                                            font-size:9px;
                                            white-space:nowrap;
                                        ">
                                            Pending Review
                                        </span>

                                    </td>

                                    <td style="padding:10px;">

                                        <button style="
                                            width:30px;
                                            height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#65728a;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;
                                            height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#65728a;
                                        ">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </button>

                                        <button style="
                                            width:30px;
                                            height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#65728a;
                                        ">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- ROW 2 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:10px;color:#0754c7;">
                                        APP2025/000122
                                    </td>

                                    <td style="padding:10px;">
                                        Excellence Certifiers LLP
                                    </td>

                                    <td style="padding:10px;">
                                        Category B
                                    </td>

                                    <td style="padding:10px;">
                                        Ms. Neha Sharma
                                    </td>

                                    <td style="padding:10px;">
                                        11 May 2025
                                    </td>

                                    <td style="padding:10px;color:#ed2733;">
                                        18 May 2025
                                    </td>

                                    <td style="padding:10px;">

                                        <span style="
                                            background:#fff5dd;
                                            color:#e68a00;
                                            padding:5px 8px;
                                            border-radius:10px;
                                            font-size:9px;
                                        ">
                                            Pending Review
                                        </span>

                                    </td>

                                    <td style="padding:10px;">

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- ROW 3 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:10px;color:#0754c7;">
                                        APP2025/000121
                                    </td>

                                    <td style="padding:10px;">
                                        Quality First Pvt. Ltd.
                                    </td>

                                    <td style="padding:10px;">
                                        Category C
                                    </td>

                                    <td style="padding:10px;">
                                        Mr. Amit Verma
                                    </td>

                                    <td style="padding:10px;">
                                        11 May 2025
                                    </td>

                                    <td style="padding:10px;color:#ed2733;">
                                        18 May 2025
                                    </td>

                                    <td style="padding:10px;">

                                        <span style="
                                            background:#fff5dd;
                                            color:#e68a00;
                                            padding:5px 8px;
                                            border-radius:10px;
                                            font-size:9px;
                                        ">
                                            Pending Review
                                        </span>

                                    </td>

                                    <td style="padding:10px;">

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- ROW 4 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:10px;color:#0754c7;">
                                        APP2025/000120
                                    </td>

                                    <td style="padding:10px;">
                                        Pioneer Assessments
                                    </td>

                                    <td style="padding:10px;">
                                        Category A
                                    </td>

                                    <td style="padding:10px;">
                                        Dr. Rajeev Kumar
                                    </td>

                                    <td style="padding:10px;">
                                        12 May 2025
                                    </td>

                                    <td style="padding:10px;color:#ed2733;">
                                        19 May 2025
                                    </td>

                                    <td style="padding:10px;">

                                        <span style="
                                            background:#fff5dd;
                                            color:#e68a00;
                                            padding:5px 8px;
                                            border-radius:10px;
                                            font-size:9px;
                                        ">
                                            Pending Review
                                        </span>

                                    </td>

                                    <td style="padding:10px;">

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>

                                    </td>

                                </tr>


                                <!-- ROW 5 -->

                                <tr>

                                    <td style="padding:10px;color:#0754c7;">
                                        APP2025/000119
                                    </td>

                                    <td style="padding:10px;">
                                        Trust &amp; Verify Services
                                    </td>

                                    <td style="padding:10px;">
                                        Category D
                                    </td>

                                    <td style="padding:10px;">
                                        Ms. Neha Sharma
                                    </td>

                                    <td style="padding:10px;">
                                        12 May 2025
                                    </td>

                                    <td style="padding:10px;color:#ed2733;">
                                        19 May 2025
                                    </td>

                                    <td style="padding:10px;">

                                        <span style="
                                            background:#fff5dd;
                                            color:#e68a00;
                                            padding:5px 8px;
                                            border-radius:10px;
                                            font-size:9px;
                                        ">
                                            Pending Review
                                        </span>

                                    </td>

                                    <td style="padding:10px;">

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:27px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-arrow-right"></i>
                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <!-- TABLE FOOTER -->

                    <div class="d-flex justify-content-between align-items-center flex-wrap"
                         style="
                            margin-top:10px;
                            gap:10px;
                            font-size:10px;
                            color:#65728a;
                         ">

                        <span>
                            Showing 1 to 5 of 86 entries
                        </span>


                        <div style="
                            display:flex;
                            gap:5px;
                            align-items:center;
                        ">

                            <button style="
                                width:29px;
                                height:29px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                            ">
                                <i class="bi bi-chevron-left"></i>
                            </button>

                            <button style="
                                width:29px;
                                height:29px;
                                background:#075bdc;
                                color:#fff;
                                border:1px solid #075bdc;
                                border-radius:5px;
                            ">
                                1
                            </button>

                            <button style="
                                width:29px;
                                height:29px;
                                background:#fff;
                                border:0;
                            ">
                                2
                            </button>

                            <button style="
                                width:29px;
                                height:29px;
                                background:#fff;
                                border:0;
                            ">
                                3
                            </button>

                            <span>...</span>

                            <button style="
                                width:29px;
                                height:29px;
                                background:#fff;
                                border:0;
                            ">
                                18
                            </button>

                            <button style="
                                width:29px;
                                height:29px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                            ">
                                <i class="bi bi-chevron-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>



            <!-- RIGHT SIDE -->

            <div class="col-12 col-xl-3">


                <!-- QUICK ACTIONS -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:16px 14px;
                    margin-bottom:14px;
                ">

                    <h5 style="
                        margin:0 0 13px;
                        font-size:15px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Quick Actions
                    </h5>


                    <div style="
                        display:flex;
                        align-items:center;
                        gap:11px;
                        height:37px;
                        font-size:11px;
                        color:#273653;
                    ">
                        <i class="bi bi-upload"
                           style="font-size:16px;color:#52617c;"></i>

                        Upload Nominee Master
                    </div>


                    <div style="
                        display:flex;
                        align-items:center;
                        gap:11px;
                        height:37px;
                        font-size:11px;
                        color:#273653;
                    ">
                        <i class="bi bi-person"
                           style="font-size:16px;color:#52617c;"></i>

                        Assign QC Reviewer
                    </div>


                    <div style="
                        display:flex;
                        align-items:center;
                        gap:11px;
                        height:37px;
                        font-size:11px;
                        color:#273653;
                    ">
                        <i class="bi bi-file-earmark-text"
                           style="font-size:16px;color:#52617c;"></i>

                        View All Applications
                    </div>


                    <div style="
                        display:flex;
                        align-items:center;
                        gap:11px;
                        height:37px;
                        font-size:11px;
                        color:#273653;
                    ">
                        <i class="bi bi-download"
                           style="font-size:16px;color:#52617c;"></i>

                        Download Reports
                    </div>


                    <div style="
                        display:flex;
                        align-items:center;
                        gap:11px;
                        height:37px;
                        font-size:11px;
                        color:#273653;
                    ">
                        <i class="bi bi-gear"
                           style="font-size:16px;color:#52617c;"></i>

                        System Settings
                    </div>

                </div>



                <!-- SHORTCUTS -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:16px 14px;
                    margin-bottom:14px;
                ">

                    <h5 style="
                        margin:0 0 10px;
                        font-size:15px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Shortcuts
                    </h5>


                    <div style="
                        height:34px;
                        display:flex;
                        align-items:center;
                        gap:11px;
                        font-size:11px;
                    ">
                        <i class="bi bi-book"
                           style="font-size:16px;color:#52617c;"></i>
                        Application Guidelines
                    </div>


                    <div style="
                        height:34px;
                        display:flex;
                        align-items:center;
                        gap:11px;
                        font-size:11px;
                    ">
                        <i class="bi bi-file-earmark-text"
                           style="font-size:16px;color:#52617c;"></i>
                        User Manual
                    </div>


                    <div style="
                        height:34px;
                        display:flex;
                        align-items:center;
                        gap:11px;
                        font-size:11px;
                    ">
                        <i class="bi bi-list-ul"
                           style="font-size:16px;color:#52617c;"></i>
                        Assessment Criteria
                    </div>


                    <div style="
                        height:34px;
                        display:flex;
                        align-items:center;
                        gap:11px;
                        font-size:11px;
                    ">
                        <i class="bi bi-headset"
                           style="font-size:16px;color:#52617c;"></i>
                        Support / Helpdesk
                    </div>

                </div>



                <!-- HELP & SUPPORT -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:16px 14px;
                ">

                    <h5 style="
                        margin:0 0 12px;
                        font-size:15px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Help &amp; Support
                    </h5>


                    <div style="
                        font-size:10px;
                        color:#33415e;
                        line-height:22px;
                    ">

                        For any assistance, please contact

                        <br>

                        Email:
                        <span style="color:#0754c7;">
                            support@qcin.org
                        </span>

                        <br>

                        Phone:
                        <span style="color:#0754c7;">
                            0120-XXX-XXXX
                        </span>

                        <br>

                        (Mon - Fri : 09:30 AM to 06:00 PM)

                    </div>


                    <button style="
                        width:100%;
                        height:35px;
                        margin-top:10px;
                        border:1px solid #a9c8f7;
                        background:#fff;
                        color:#0754c7;
                        border-radius:5px;
                        font-size:10px;
                        font-weight:600;
                    ">

                        <i class="bi bi-link-45deg"
                           style="margin-right:5px;"></i>

                        Raise a Ticket

                    </button>

                </div>

            </div>

        </div>


    </div>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <div style="
        border-top:1px solid #e7ebf1;
        min-height:55px;
        margin-top:8px;
        padding:15px 28px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        flex-wrap:wrap;
        gap:10px;
        box-sizing:border-box;
        color:#68758e;
        font-size:10px;
    ">

        <div style="flex:1;text-align:center;">
            © 2025 Quality Council of India. All rights reserved.
        </div>

        <div style="
            display:flex;
            gap:25px;
        ">

            <span>Privacy Policy</span>

            <span>|</span>

            <span>Terms &amp; Conditions</span>

            <span>|</span>

            <span>Disclaimer</span>

        </div>

    </div>

</div>


<!-- =========================================================
     RESPONSIVE BEHAVIOR
========================================================= -->

<script>

(function () {

    function responsiveDashboard() {

        const sidebar = document.querySelector('.sidebar');
        const main = document.querySelector('.main');

        if (!sidebar || !main) {
            return;
        }

        if (window.innerWidth <= 767) {

            main.style.marginLeft = "0";

            sidebar.style.width = "0";
            sidebar.style.overflow = "hidden";

        } else {

            main.style.marginLeft = "215px";

            sidebar.style.width = "215px";
            sidebar.style.overflow = "hidden";

        }

    }

    responsiveDashboard();

    window.addEventListener("resize", responsiveDashboard);

})();

</script>