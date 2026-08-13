<div class="sidebar"
     style="
        position:fixed;
        top:0;
        left:0;
        width:250px;
        height:100vh;
        background:#032653;
        color:#fff;
        overflow-y:auto;
        z-index:9999;
        display:flex;
        flex-direction:column;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
     ">

    <!-- HEADER -->
    <div class="logo"
         style="
            height:75px;
            min-height:75px;
            display:flex;
            align-items:center;
            padding:0 22px;
            box-sizing:border-box;
         ">

        <div class="logo-icon"
             style="
                width:34px;
                height:34px;
                border-radius:8px;
                background:#0d5be1;
                display:flex;
                align-items:center;
                justify-content:center;
                margin-right:12px;
             ">
            <i class="bi bi-grid"
               style="font-size:18px;color:#fff;"></i>
        </div>

        <div class="logo-text"
             style="
                font-size:18px;
                font-weight:700;
                color:#fff;
                letter-spacing:.2px;
             ">
            Admin Panel
        </div>

        <button type="button"
                class="close-sidebar"
                style="
                    margin-left:auto;
                    background:none;
                    border:0;
                    color:#fff;
                    font-size:18px;
                    cursor:pointer;
                    display:none;
                ">
            <i class="bi bi-x-lg"></i>
        </button>

    </div>


    <!-- MENU -->
 <div class="menu"
     style="
        flex:1;
        overflow:auto;
        padding:8px 10px 60px 10px;
        box-sizing:border-box;
     ">

    <!-- DASHBOARD -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px 9px;
        color:#fff;
    ">
        DASHBOARD
    </div>

    <a href="<?= BASE_URL ?>dashboard.php"
       style="
          height:34px;
          display:flex;
          align-items:center;
          padding:0 13px;
          margin-bottom:10px;
          border-radius:5px;
          background:#075bdc;
          color:#fff;
          text-decoration:none;
          font-size:12px;
          font-weight:600;
          box-sizing:border-box;
       ">

        <i class="bi bi-speedometer2"
           style="
              width:22px;
              margin-right:8px;
              font-size:14px;
           "></i>

        Dashboard
    </a>


    <!-- APPLICATION MANAGEMENT -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px 5px;
    ">
        APPLICATION MANAGEMENT
    </div>


    <a href="<?= BASE_URL ?>application-queue.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-briefcase"
           style="width:22px;font-size:14px;"></i>

        <span style="flex:1;">Application Queue</span>

        <span style="
            background:#075bdc;
            min-width:23px;
            height:19px;
            border-radius:12px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:10px;
            font-weight:700;
        ">86</span>

    </a>


    <a href="<?= BASE_URL ?>all-applications.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-file-earmark-text"
           style="width:22px;font-size:14px;"></i>

        All Applications
    </a>


    <a href="<?= BASE_URL ?>search-application.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-search"
           style="width:22px;font-size:14px;"></i>

        Search Application
    </a>


    <a href="<?= BASE_URL ?>application-categories.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-folder"
           style="width:22px;font-size:14px;"></i>

        Application Categories
    </a>


    <!-- SEPARATOR -->

    <div style="
        height:1px;
        background:rgba(255,255,255,.12);
        margin:5px 8px;
    "></div>


    <!-- REVIEW MANAGEMENT -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px;
    ">
        REVIEW MANAGEMENT
    </div>


    <a href="<?= BASE_URL ?>reviewer-management.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-people"
           style="width:22px;font-size:14px;"></i>

        Reviewer Management
    </a>


    <a href="<?= BASE_URL ?>reviewer-assignment.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-diagram-3"
           style="width:22px;font-size:14px;"></i>

        Reviewer Assignment
    </a>


    <a href="<?= BASE_URL ?>review-status.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-list-check"
           style="width:22px;font-size:14px;"></i>

        Review Status
    </a>


    <div style="
        height:1px;
        background:rgba(255,255,255,.12);
        margin:5px 8px;
    "></div>


    <!-- APPROVAL & GOVERNANCE -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px;
    ">
        APPROVAL &amp; GOVERNANCE
    </div>


    <a href="<?= BASE_URL ?>admin-review.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-file-earmark"
           style="width:22px;font-size:14px;"></i>

        <span style="flex:1;">Admin Review</span>

        <span style="
            background:#ff9800;
            min-width:23px;
            height:19px;
            border-radius:12px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:10px;
        ">28</span>

    </a>


    <a href="<?= BASE_URL ?>clarification.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-chat-square-text"
           style="width:22px;font-size:14px;"></i>

        <span style="flex:1;">Clarification</span>

        <span style="
            background:#713bd1;
            min-width:23px;
            height:19px;
            border-radius:12px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:10px;
        ">14</span>

    </a>


    <a href="<?= BASE_URL ?>super-admin-status.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-person-badge"
           style="width:22px;font-size:14px;"></i>

        Super Admin Status
    </a>


    <div style="
        height:1px;
        background:rgba(255,255,255,.12);
        margin:5px 8px;
    "></div>


    <!-- SCORING & EVALUATION -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px;
    ">
        SCORING &amp; EVALUATION
    </div>


    <a href="<?= BASE_URL ?>scoring.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-clipboard2-check"
           style="width:22px;font-size:14px;"></i>

        Scoring
    </a>


    <a href="<?= BASE_URL ?>ranking.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-bar-chart-line"
           style="width:22px;font-size:14px;"></i>

        Ranking
    </a>


    <div style="
        height:1px;
        background:rgba(255,255,255,.12);
        margin:5px 8px;
    "></div>


    <!-- DOCUMENTS & REPORTS -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px;
    ">
        DOCUMENTS &amp; REPORTS
    </div>


    <a href="<?= BASE_URL ?>reports-mis.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-file-earmark-bar-graph"
           style="width:22px;font-size:14px;"></i>

        Reports &amp; MIS
    </a>


    <a href="<?= BASE_URL ?>downloads.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-file-earmark-arrow-down"
           style="width:22px;font-size:14px;"></i>

        Downloads
    </a>


    <div style="
        height:1px;
        background:rgba(255,255,255,.12);
        margin:5px 8px;
    "></div>


    <!-- SYSTEM MANAGEMENT -->

    <div style="
        font-size:11px;
        font-weight:700;
        padding:5px 14px;
    ">
        SYSTEM MANAGEMENT
    </div>


    <a href="<?= BASE_URL ?>user-management.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-person"
           style="width:22px;font-size:14px;"></i>

        User Management
    </a>


    <a href="<?= BASE_URL ?>roles-permissions.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-person-check"
           style="width:22px;font-size:14px;"></i>

        Roles &amp; Permissions
    </a>


    <a href="<?= BASE_URL ?>audit-logs.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-journal-text"
           style="width:22px;font-size:14px;"></i>

        Audit Logs
    </a>


    <a href="<?= BASE_URL ?>website-settings.php"
       style="
          height:30px;
          display:flex;
          align-items:center;
          padding:0 13px;
          color:#fff;
          text-decoration:none;
          font-size:11px;
       ">

        <i class="bi bi-gear"
           style="width:22px;font-size:14px;"></i>

        System Settings
    </a>

</div>


<!-- COLLAPSE MENU -->

<div style="
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:54px;
    border-top:1px solid rgba(255,255,255,.12);
    background:#032653;
    display:flex;
    align-items:center;
    padding:0 20px;
    box-sizing:border-box;
">

    <button type="button"
            style="
                background:none;
                border:0;
                color:#fff;
                font-size:11px;
                display:flex;
                align-items:center;
                cursor:pointer;
                padding:0;
            ">

        <i class="bi bi-chevron-double-left"
           style="
              font-size:13px;
              margin-right:14px;
           "></i>

        Collapse Menu

    </button>

</div>


    <!-- ================= BOTTOM COLLAPSE ================= -->

    <div style="
        position:fixed;
        bottom:0;
        left:0;
        width:250px;
        height:60px;
        background:#062653;
        border-top:1px solid rgba(255,255,255,.12);
        display:flex;
        align-items:center;
        padding:0 22px;
        box-sizing:border-box;
        z-index:10000;
     ">

        <button type="button"
                id="collapseMenu"
                style="
                    width:100%;
                    height:50px;
                    display:flex;
                    align-items:center;
                    background:none;
                    border:0;
                    color:#fff;
                    cursor:pointer;
                    font-size:14px;
                    font-weight:500;
                    padding:0;
                ">

            <i class="bi bi-chevron-double-left"
               style="
                    font-size:18px;
                    margin-right:18px;
                "></i>

            Collapse Menu

        </button>

    </div>

</div>


<script>

document.addEventListener("DOMContentLoaded", function () {

    /* ==========================================
       HOVER EFFECT
    ========================================== */

    document.querySelectorAll(".sidebar-link").forEach(function(link) {

        link.addEventListener("mouseenter", function () {

            if (!this.classList.contains("active")) {

                this.style.background = "rgba(255,255,255,0.07)";

            }

        });

        link.addEventListener("mouseleave", function () {

            if (!this.classList.contains("active")) {

                this.style.background = "transparent";

            }

        });

    });


    /* ==========================================
       COLLAPSE MENU
    ========================================== */

    const collapseButton = document.getElementById("collapseMenu");
    const sidebar = document.querySelector(".sidebar");

    let collapsed = false;

    collapseButton.addEventListener("click", function () {

        collapsed = !collapsed;

        if (collapsed) {

            sidebar.style.width = "75px";

            document.querySelectorAll(
                ".logo-text, .sidebar-section-title, .sidebar-link:not(.active) span, #collapseMenu"
            ).forEach(function(el) {
                el.style.display = "none";
            });

            document.querySelectorAll(".sidebar-link").forEach(function(link) {
                link.style.justifyContent = "center";
                link.style.padding = "0";
            });

            document.querySelectorAll(".sidebar-link i").forEach(function(icon) {
                icon.style.marginRight = "0";
            });

            collapseButton.innerHTML =
                '<i class="bi bi-chevron-double-right" style="font-size:18px;"></i>';

            collapseButton.style.justifyContent = "center";

        } else {

            sidebar.style.width = "270px";

            document.querySelectorAll(
                ".logo-text, .sidebar-section-title, .sidebar-link:not(.active) span, #collapseMenu"
            ).forEach(function(el) {
                el.style.display = "";
            });

            document.querySelectorAll(".sidebar-link").forEach(function(link) {
                link.style.justifyContent = "";
                link.style.padding = "0 22px";
            });

            document.querySelectorAll(".sidebar-link i").forEach(function(icon) {
                icon.style.marginRight = "14px";
            });

            collapseButton.innerHTML =
                '<i class="bi bi-chevron-double-left" style="font-size:18px;margin-right:18px;"></i>Collapse Menu';

            collapseButton.style.justifyContent = "";

        }

    });

});

</script>