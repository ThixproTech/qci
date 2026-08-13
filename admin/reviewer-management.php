<?php
require_once "includes/auth.php";
?>

<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>


<div class="main"
     style="
        margin-left:215px;
        min-height:100vh;
        background:#fff;
        color:#142752;
        font-family:Arial,Helvetica,sans-serif;
        box-sizing:border-box;
     ">
          <?php include "includes/navbar.php"; ?>

    <div class="content"
         style="
            padding:18px 28px 0;
            max-width:1600px;
       
            box-sizing:border-box;
         ">


        <!-- =====================================================
             PAGE HEADER
        ====================================================== -->

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:15px;
            margin-bottom:24px;
            flex-wrap:wrap;
        ">

            <div>

                <h1 style="
                    margin:0;
                    color:#08245e;
                    font-size:21px;
                    line-height:27px;
                    font-weight:700;
                ">
                    Reviewer Management
                </h1>

                <div style="
                    margin-top:4px;
                    color:#61708b;
                    font-size:12px;
                ">
                    Create, manage and monitor QC reviewers and their assignments
                </div>

            </div>


            <!-- RIGHT HEADER -->

            <div style="
                display:flex;
                flex-direction:column;
                align-items:flex-end;
                gap:12px;
            ">

                <!-- BREADCRUMB -->

                <div style="
                    display:flex;
                    align-items:center;
                    gap:16px;
                    font-size:10px;
                    color:#63718b;
                ">

                    <span style="color:#2362d4;">
                        Dashboard
                    </span>

                    <i class="bi bi-chevron-right"
                       style="font-size:8px;"></i>

                    <span>
                        Reviewer Management
                    </span>

                </div>


                <!-- BUTTONS -->

                <div style="
                    display:flex;
                    gap:12px;
                ">

                    <button type="button"
                            style="
                                height:38px;
                                padding:0 20px;
                                background:#fff;
                                border:1px solid #dce4f0;
                                border-radius:5px;
                                color:#12336c;
                                font-size:12px;
                                font-weight:600;
                                cursor:pointer;
                            ">

                        <i class="bi bi-download"
                           style="margin-right:7px;"></i>

                        Export

                    </button>


                    <button type="button"
                            style="
                                height:38px;
                                padding:0 20px;
                                background:#0754c7;
                                border:1px solid #0754c7;
                                border-radius:5px;
                                color:#fff;
                                font-size:12px;
                                font-weight:600;
                                cursor:pointer;
                                box-shadow:0 2px 5px rgba(0,70,180,.15);
                            ">

                        <i class="bi bi-plus-lg"
                           style="margin-right:7px;"></i>

                        Add New Reviewer

                    </button>

                </div>

            </div>

        </div>



        <!-- =====================================================
             STATISTICS
        ====================================================== -->

        <div class="row g-3"
             style="margin-bottom:27px;">


            <!-- TOTAL -->

            <div class="col-12 col-sm-6 col-lg">

                <div style="
                    height:122px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px 18px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:14px;
                    ">

                        <div style="
                            width:46px;
                            height:46px;
                            min-width:46px;
                            border-radius:8px;
                            background:#075bdc;
                            color:#fff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                        ">
                            <i class="bi bi-people"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#263657;
                                margin-bottom:4px;
                            ">
                                Total Reviewers
                            </div>

                            <div style="
                                font-size:22px;
                                font-weight:700;
                                color:#10204a;
                            ">
                                156
                            </div>

                        </div>

                    </div>


                    <div style="
                        margin-top:13px;
                        color:#075bdc;
                        font-size:11px;
                    ">
                        View all reviewers
                        <i class="bi bi-arrow-right"
                           style="margin-left:7px;"></i>
                    </div>

                </div>

            </div>



            <!-- ACTIVE -->

            <div class="col-12 col-sm-6 col-lg">

                <div style="
                    height:122px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px 18px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:14px;
                    ">

                        <div style="
                            width:46px;
                            height:46px;
                            min-width:46px;
                            border-radius:8px;
                            background:#0aa05d;
                            color:#fff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                        ">
                            <i class="bi bi-person-check"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#263657;
                                margin-bottom:4px;
                            ">
                                Active Reviewers
                            </div>

                            <div style="
                                font-size:22px;
                                font-weight:700;
                                color:#10204a;
                            ">
                                128
                            </div>

                        </div>

                    </div>


                    <div style="
                        margin-top:13px;
                        color:#344568;
                        font-size:11px;
                    ">
                        82.05% of total
                    </div>

                </div>

            </div>



            <!-- ASSIGNED -->

            <div class="col-12 col-sm-6 col-lg">

                <div style="
                    height:122px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px 18px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:14px;
                    ">

                        <div style="
                            width:46px;
                            height:46px;
                            min-width:46px;
                            border-radius:8px;
                            background:#ff9800;
                            color:#fff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                        ">
                            <i class="bi bi-person-check"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#263657;
                                margin-bottom:4px;
                            ">
                                Assigned Reviewers
                            </div>

                            <div style="
                                font-size:22px;
                                font-weight:700;
                                color:#10204a;
                            ">
                                98
                            </div>

                        </div>

                    </div>


                    <div style="
                        margin-top:13px;
                        color:#344568;
                        font-size:11px;
                    ">
                        62.82% of total
                    </div>

                </div>

            </div>



            <!-- AVAILABLE -->

            <div class="col-12 col-sm-6 col-lg">

                <div style="
                    height:122px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px 18px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:14px;
                    ">

                        <div style="
                            width:46px;
                            height:46px;
                            min-width:46px;
                            border-radius:8px;
                            background:#6738d4;
                            color:#fff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                        ">
                            <i class="bi bi-person-x"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#263657;
                                margin-bottom:4px;
                            ">
                                Available Reviewers
                            </div>

                            <div style="
                                font-size:22px;
                                font-weight:700;
                                color:#10204a;
                            ">
                                30
                            </div>

                        </div>

                    </div>


                    <div style="
                        margin-top:13px;
                        color:#344568;
                        font-size:11px;
                    ">
                        19.23% of total
                    </div>

                </div>

            </div>



            <!-- INACTIVE -->

            <div class="col-12 col-sm-6 col-lg">

                <div style="
                    height:122px;
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:19px 18px;
                    box-sizing:border-box;
                ">

                    <div style="
                        display:flex;
                        align-items:center;
                        gap:14px;
                    ">

                        <div style="
                            width:46px;
                            height:46px;
                            min-width:46px;
                            border-radius:8px;
                            background:#ed3038;
                            color:#fff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:22px;
                        ">
                            <i class="bi bi-x-circle"></i>
                        </div>


                        <div>

                            <div style="
                                font-size:11px;
                                color:#263657;
                                margin-bottom:4px;
                            ">
                                Inactive Reviewers
                            </div>

                            <div style="
                                font-size:22px;
                                font-weight:700;
                                color:#10204a;
                            ">
                                28
                            </div>

                        </div>

                    </div>


                    <div style="
                        margin-top:13px;
                        color:#344568;
                        font-size:11px;
                    ">
                        17.95% of total
                    </div>

                </div>

            </div>

        </div>



        <!-- =====================================================
             MAIN AREA
        ====================================================== -->

        <div class="row g-3">


            <!-- LEFT TABLE AREA -->

            <div class="col-12 col-xl-10">

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:16px 15px 10px;
                    box-sizing:border-box;
                ">


                    <!-- FILTERS -->

                    <div style="
                        display:flex;
                        align-items:flex-end;
                        gap:14px;
                        flex-wrap:wrap;
                        margin-bottom:16px;
                    ">


                        <!-- SEARCH -->

                        <div style="
                            width:258px;
                            max-width:100%;
                        ">

                            <div style="
                                height:48px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                display:flex;
                                align-items:center;
                                padding:0 12px;
                                box-sizing:border-box;
                            ">

                                <i class="bi bi-search"
                                   style="
                                      color:#62718c;
                                      margin-right:9px;
                                      font-size:15px;
                                   "></i>

                                <input type="text"
                                       placeholder="Search by name, email, mobile, etc."
                                       style="
                                          width:100%;
                                          border:0;
                                          outline:none;
                                          font-size:10px;
                                          color:#283956;
                                          background:transparent;
                                       ">

                            </div>

                        </div>



                        <!-- STATUS -->

                        <div style="width:150px;">

                            <label style="
                                display:block;
                                font-size:10px;
                                color:#4f5e7b;
                                margin-bottom:5px;
                            ">
                                Status
                            </label>

                            <select style="
                                width:100%;
                                height:37px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                background:#fff;
                                color:#344568;
                                padding:0 10px;
                                font-size:10px;
                                outline:none;
                            ">
                                <option>All</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>

                        </div>



                        <!-- DEPARTMENT -->

                        <div style="width:160px;">

                            <label style="
                                display:block;
                                font-size:10px;
                                color:#4f5e7b;
                                margin-bottom:5px;
                            ">
                                Department
                            </label>

                            <select style="
                                width:100%;
                                height:37px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                background:#fff;
                                color:#344568;
                                padding:0 10px;
                                font-size:10px;
                                outline:none;
                            ">
                                <option>All</option>
                                <option>Quality Assurance</option>
                                <option>Certifications</option>
                                <option>Training & Capacity</option>
                                <option>Administration</option>
                            </select>

                        </div>



                        <!-- EXPERTISE -->

                        <div style="width:155px;">

                            <label style="
                                display:block;
                                font-size:10px;
                                color:#4f5e7b;
                                margin-bottom:5px;
                            ">
                                Expertise
                            </label>

                            <select style="
                                width:100%;
                                height:37px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                background:#fff;
                                color:#344568;
                                padding:0 10px;
                                font-size:10px;
                                outline:none;
                            ">
                                <option>All</option>
                                <option>Manufacturing</option>
                                <option>QMS</option>
                                <option>ISO</option>
                                <option>Auditing</option>
                            </select>

                        </div>



                        <!-- DESIGNATION -->

                        <div style="width:150px;">

                            <label style="
                                display:block;
                                font-size:10px;
                                color:#4f5e7b;
                                margin-bottom:5px;
                            ">
                                Designation
                            </label>

                            <select style="
                                width:100%;
                                height:37px;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                background:#fff;
                                color:#344568;
                                padding:0 10px;
                                font-size:10px;
                                outline:none;
                            ">
                                <option>All</option>
                                <option>Reviewer</option>
                                <option>Senior Reviewer</option>
                            </select>

                        </div>



                        <!-- CLEAR -->

                        <button type="button"
                                style="
                                    height:37px;
                                    padding:0 13px;
                                    background:#fff;
                                    border:1px solid #dce5f0;
                                    border-radius:5px;
                                    color:#354667;
                                    font-size:10px;
                                    white-space:nowrap;
                                ">

                            <i class="bi bi-funnel"
                               style="margin-right:5px;"></i>

                            Clear Filters

                        </button>



                        <!-- FILTER -->

                        <button type="button"
                                style="
                                    height:37px;
                                    padding:0 13px;
                                    background:#fff;
                                    border:1px solid #a8c7f6;
                                    border-radius:5px;
                                    color:#0754c7;
                                    font-size:10px;
                                    white-space:nowrap;
                                ">

                            <i class="bi bi-funnel"
                               style="margin-right:5px;"></i>

                            Filters

                        </button>

                    </div>



                    <!-- =================================================
                         TABLE
                    ================================================== -->

                    <div style="
                        width:100%;
                        overflow-x:auto;
                    ">

                        <table style="
                            width:100%;
                            min-width:1000px;
                            border-collapse:collapse;
                            font-size:10px;
                            color:#30405f;
                        ">

                            <thead>

                                <tr style="
                                    background:#f7f9fc;
                                    border-top:1px solid #edf1f6;
                                    border-bottom:1px solid #e2e8f0;
                                ">

                                    <th style="padding:13px 10px;text-align:left;">
                                        #
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Reviewer Name
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Email ID
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Mobile Number
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Department
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Expertise
                                    </th>

                                    <th style="padding:13px 10px;text-align:left;">
                                        Status
                                    </th>

                                    <th style="padding:13px 10px;text-align:center;">
                                        Assigned Applications
                                    </th>

                                    <th style="padding:13px 10px;text-align:center;">
                                        Actions
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <!-- ROW 1 -->

                              



                                <!-- ROW 2 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">2</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;
                                                height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                NS
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Ms. Neha Sharma
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        neha.sharma@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98123 45678
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Certifications
                                    </td>

                                    <td style="padding:12px 10px;">
                                        ISO, EMS, OHS
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        14
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;
                                            height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#5e6d87;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;
                                            height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#5e6d87;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;
                                            height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                            color:#5e6d87;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 3 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">3</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;
                                                height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                AV
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Mr. Amit Verma
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        amit.verma@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98987 65432
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Quality Assurance
                                    </td>

                                    <td style="padding:12px 10px;">
                                        QMS, Process Audit
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        12
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 4 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">4</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;
                                                height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                PS
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Mr. Puneet Singh
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        puneet.singh@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 99112 23344
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Certifications
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Product, QC
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#ffe5e6;
                                            color:#ed3038;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Inactive
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        0
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 5 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">5</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                SK
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Ms. Shalini Kapoor
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Senior Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        shalini.kapoor@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98711 22334
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Training &amp; Capacity
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Training, TQM
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        16
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 6 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">6</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                MA
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Mr. Manoj Agarwal
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        manoj.agarwal@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98222 33445
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Certifications
                                    </td>

                                    <td style="padding:12px 10px;">
                                        ISO, HACCP
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        10
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 7 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">7</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                PP
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Dr. Priya Patel
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        priya.patel@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 99988 77665
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Quality Assurance
                                    </td>

                                    <td style="padding:12px 10px;">
                                        QMS, Auditing
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        8
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 8 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">8</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                VB
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Mr. Vivek Bhatia
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        vivek.bhatia@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98100 88990
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Certifications
                                    </td>

                                    <td style="padding:12px 10px;">
                                        EMS, OHS
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#ffe5e6;
                                            color:#ed3038;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Inactive
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        0
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 9 -->

                                <tr style="border-bottom:1px solid #edf1f6;">

                                    <td style="padding:12px 10px;">9</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                AJ
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Mr. Arjun Joshi
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        arjun.joshi@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 98755 66778
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Training &amp; Capacity
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Kaizen, Lean
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        6
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>



                                <!-- ROW 10 -->

                                <tr>

                                    <td style="padding:12px 10px;">10</td>

                                    <td style="padding:12px 10px;">

                                        <div style="
                                            display:flex;
                                            align-items:center;
                                            gap:8px;
                                        ">

                                            <div style="
                                                width:29px;height:29px;
                                                border-radius:50%;
                                                background:#e4efff;
                                                color:#0754c7;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:10px;
                                                font-weight:600;
                                            ">
                                                RT
                                            </div>

                                            <div>

                                                <div style="
                                                    font-weight:600;
                                                    color:#182d57;
                                                ">
                                                    Ms. Ritu Tiwari
                                                </div>

                                                <div style="
                                                    font-size:8px;
                                                    color:#5e6d87;
                                                ">
                                                    Reviewer
                                                </div>

                                            </div>

                                        </div>

                                    </td>

                                    <td style="padding:12px 10px;">
                                        ritu.tiwari@qcin.org
                                    </td>

                                    <td style="padding:12px 10px;">
                                        +91 97111 55667
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Quality Assurance
                                    </td>

                                    <td style="padding:12px 10px;">
                                        Process Audit
                                    </td>

                                    <td style="padding:12px 10px;">

                                        <span style="
                                            display:inline-block;
                                            padding:5px 10px;
                                            border-radius:5px;
                                            background:#dff7e9;
                                            color:#0a9a58;
                                            font-size:9px;
                                            font-weight:600;
                                        ">
                                            Active
                                        </span>

                                    </td>

                                    <td style="
                                        padding:12px 10px;
                                        text-align:center;
                                        color:#0754c7;
                                        font-weight:600;
                                    ">
                                        5
                                    </td>

                                    <td style="padding:12px 10px;text-align:center;">

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button style="
                                            width:30px;height:30px;
                                            border:1px solid #dce5f0;
                                            background:#fff;
                                            border-radius:5px;
                                        ">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>



                    <!-- TABLE PAGINATION -->

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        flex-wrap:wrap;
                        gap:12px;
                        margin-top:12px;
                        font-size:10px;
                        color:#66748d;
                    ">

                        <div>
                            Showing 1 to 10 of 156 entries
                        </div>


                        <div style="
                            display:flex;
                            align-items:center;
                            gap:5px;
                        ">

                            <button style="
                                width:30px;
                                height:30px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                color:#52617d;
                            ">
                                <i class="bi bi-chevron-double-left"></i>
                            </button>

                            <button style="
                                width:30px;
                                height:30px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                color:#52617d;
                            ">
                                <i class="bi bi-chevron-left"></i>
                            </button>

                            <button style="
                                width:32px;
                                height:32px;
                                background:#0754c7;
                                border:1px solid #0754c7;
                                border-radius:5px;
                                color:#fff;
                            ">
                                1
                            </button>

                            <button style="
                                width:32px;
                                height:32px;
                                background:#fff;
                                border:1px solid #e0e6ef;
                                border-radius:5px;
                                color:#40506d;
                            ">
                                2
                            </button>

                            <button style="
                                width:32px;
                                height:32px;
                                background:#fff;
                                border:1px solid #e0e6ef;
                                border-radius:5px;
                                color:#40506d;
                            ">
                                3
                            </button>

                            <span style="padding:0 5px;">
                                ...
                            </span>

                            <button style="
                                width:32px;
                                height:32px;
                                background:#fff;
                                border:1px solid #e0e6ef;
                                border-radius:5px;
                                color:#40506d;
                            ">
                                16
                            </button>

                            <button style="
                                width:30px;
                                height:30px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                color:#52617d;
                            ">
                                <i class="bi bi-chevron-right"></i>
                            </button>

                            <button style="
                                width:30px;
                                height:30px;
                                background:#fff;
                                border:1px solid #dce5f0;
                                border-radius:5px;
                                color:#52617d;
                            ">
                                <i class="bi bi-chevron-double-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =====================================================
                 RIGHT SIDEBAR
            ====================================================== -->

            <div class="col-12 col-xl-2">


                <!-- REVIEWER SUMMARY -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 13px;
                    margin-bottom:14px;
                ">

                    <h5 style="
                        margin:0 0 14px;
                        font-size:13px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Reviewer Summary
                    </h5>


                    <!-- DONUT -->

                    <div style="
                        width:78px;
                        height:78px;
                        border-radius:50%;
                        margin:0 auto 14px;
                        background:
                        conic-gradient(
                            #075bdc 0deg 295deg,
                            #ff7070 295deg 360deg
                        );
                        position:relative;
                    ">

                        <div style="
                            position:absolute;
                            width:48px;
                            height:48px;
                            left:15px;
                            top:15px;
                            border-radius:50%;
                            background:#fff;
                        "></div>

                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        font-size:10px;
                        margin-bottom:10px;
                    ">

                        <span>
                            <i class="bi bi-circle-fill"
                               style="
                                  color:#075bdc;
                                  font-size:7px;
                                  margin-right:6px;
                               "></i>
                            Active
                        </span>

                        <strong>
                            128 (82.05%)
                        </strong>

                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        font-size:10px;
                    ">

                        <span>
                            <i class="bi bi-circle-fill"
                               style="
                                  color:#ff7070;
                                  font-size:7px;
                                  margin-right:6px;
                               "></i>
                            Inactive
                        </span>

                        <strong>
                            28 (17.95%)
                        </strong>

                    </div>

                </div>



                <!-- QUICK ACTIONS -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 13px;
                    margin-bottom:14px;
                ">

                    <h5 style="
                        margin:0 0 10px;
                        font-size:13px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Quick Actions
                    </h5>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-person-plus"
                           style="color:#536381;font-size:14px;"></i>
                        Add New Reviewer
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-upload"
                           style="color:#536381;font-size:14px;"></i>
                        Bulk Upload Reviewers
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-pencil-square"
                           style="color:#536381;font-size:14px;"></i>
                        Bulk Update Reviewers
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-people"
                           style="color:#536381;font-size:14px;"></i>
                        Assign Reviewers
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-gear"
                           style="color:#536381;font-size:14px;"></i>
                        Manage Expertise
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-file-earmark-excel"
                           style="color:#0a9a58;font-size:14px;"></i>
                        Download Reviewer List
                    </div>


                    <div style="
                        height:32px;
                        display:flex;
                        align-items:center;
                        gap:9px;
                        font-size:10px;
                        color:#263756;
                    ">
                        <i class="bi bi-bar-chart"
                           style="color:#536381;font-size:14px;"></i>
                        Reviewer Performance Report
                    </div>

                </div>



                <!-- DEPARTMENT DISTRIBUTION -->

                <div style="
                    border:1px solid #dce5f0;
                    border-radius:7px;
                    background:#fff;
                    padding:17px 13px;
                ">

                    <h5 style="
                        margin:0 0 15px;
                        font-size:13px;
                        color:#10245a;
                        font-weight:700;
                    ">
                        Department Wise Distribution
                    </h5>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        font-size:10px;
                        margin-bottom:11px;
                    ">
                        <span>Quality Assurance</span>
                        <strong>54</strong>
                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        font-size:10px;
                        margin-bottom:11px;
                    ">
                        <span>Certifications</span>
                        <strong>48</strong>
                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        font-size:10px;
                        margin-bottom:11px;
                    ">
                        <span>Training &amp; Capacity</span>
                        <strong>26</strong>
                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        font-size:10px;
                        margin-bottom:11px;
                    ">
                        <span>Administration</span>
                        <strong>10</strong>
                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        font-size:10px;
                        margin-bottom:14px;
                    ">
                        <span>Others</span>
                        <strong>18</strong>
                    </div>


                    <div style="
                        color:#0754c7;
                        font-size:10px;
                        font-weight:600;
                    ">
                        View Detailed Report
                        <i class="bi bi-arrow-right"
                           style="margin-left:5px;"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <div style="
        min-height:57px;
        margin-top:15px;
        border-top:1px solid #e8edf3;
        display:flex;
        justify-content:center;
        align-items:center;
        position:relative;
        padding:10px 28px;
        box-sizing:border-box;
        color:#69768d;
        font-size:10px;
    ">

        <div>
            © 2025 Quality Council of India. All rights reserved.
        </div>


        <div style="
            position:absolute;
            right:28px;
            display:flex;
            gap:20px;
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
     RESPONSIVE JAVASCRIPT
========================================================= -->

<script>

(function () {

    function responsiveReviewerPage() {

        const sidebar = document.querySelector(".sidebar");
        const main = document.querySelector(".main");

        if (!main) return;


        /*
         * DESKTOP
         */

        if (window.innerWidth > 767) {

            main.style.marginLeft = "215px";

            if (sidebar) {
                sidebar.style.width = "215px";
                sidebar.style.display = "flex";
            }

        }


        /*
         * MOBILE
         */

        if (window.innerWidth <= 767) {

            main.style.marginLeft = "0";

            if (sidebar) {

                sidebar.style.width = "0";
                sidebar.style.overflow = "hidden";

            }

        }

    }


    responsiveReviewerPage();

    window.addEventListener(
        "resize",
        responsiveReviewerPage
    );

})();

</script>