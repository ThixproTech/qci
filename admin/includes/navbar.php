<nav class="qci-navbar">

    <!-- LEFT SIDE -->
    <div class="qci-left">

        <!-- Mobile Menu -->
        <button type="button" id="menuBtn" class="qci-menu-btn">
            <i class="bi bi-list"></i>
        </button>


        <!-- QCI LOGO -->
        <div class="qci-logo-box">

            <img
                src="<?= BASE_URL ?>assets/images/qci.png"
                alt="Quality Council of India"
            >
        <div class="d-flex flex-column">
                <span class="text-nowrap" style="font-weight:800;font-size: 14px;">QUALITY COUNCIL OF INDIA </span>
             <span style="font-size:12px"  >Creating an Ecosystem for Quality</span>

        </div>
        </div>


        <!-- DIVIDER -->
        <div class="qci-divider"></div>


        <!-- PORTAL TITLE -->
        <div class="qci-portal">

            <div class="qci-portal-title">
                Integrated Application Management &amp; Evaluation Portal
            </div>

            <div class="qci-portal-subtitle">
                QC Reviewer Dashboard
            </div>

        </div>

    </div>


    <!-- RIGHT SIDE -->
    <div class="qci-right">


        <!-- SEARCH -->
        <div class="qci-search">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Search application, organization..."
            >

        </div>


        <!-- NOTIFICATION -->
        <button class="qci-icon-button">

            <i class="bi bi-bell"></i>

            <span class="qci-notification">
                12
            </span>

        </button>


        <!-- DIVIDER -->
        <div class="qci-small-divider"></div>


        <!-- HELP -->
        <button class="qci-icon-button qci-help">

            <i class="bi bi-question-circle"></i>

        </button>


        <!-- DIVIDER -->
        <div class="qci-small-divider"></div>


        <!-- PROFILE -->
        <div class="qci-profile">

            <div class="qci-avatar">
                RK
            </div>

            <div class="qci-profile-info">

                <div class="qci-profile-name">
                    QC Reviewer
                </div>

                <div class="qci-profile-role">
                    QC Reviewer
                </div>

            </div>

            <i class="bi bi-chevron-down qci-profile-arrow"></i>

        </div>

    </div>

</nav>


<!-- MOBILE OVERLAY -->
<div id="qciOverlay"></div>


<style>

/* =========================================================
   RESET
========================================================= */

.qci-navbar,
.qci-navbar * {
    box-sizing:border-box;
}


/* =========================================================
   HEADER
========================================================= */

.qci-navbar {

    position:fixed;

    top:0;
    left:0;
    right:0;

    width:100%;

    height:92px;

    background:#ffffff;

    border-bottom:1px solid #e5e9ef;

    display:flex;

    align-items:center;

    justify-content:space-between;

    padding:0 27px;

    z-index:2000;

    font-family:Arial, Helvetica, sans-serif;

}


/* =========================================================
   LEFT SECTION
========================================================= */

.qci-left {

    height:100%;

    display:flex;

    align-items:center;

    min-width:0;

}


/* =========================================================
   MENU
========================================================= */

.qci-menu-btn {

    display:none;

    width:38px;

    height:38px;

    border:0;

    background:transparent;

    color:#10275b;

    font-size:23px;

    cursor:pointer;

    align-items:center;

    justify-content:center;

    margin-right:8px;

}


/* =========================================================
   QCI LOGO
========================================================= */

.qci-logo-box {

    width:330px;

    height:92px;

    display:flex;

    align-items:center;

    justify-content:flex-start;

    flex-shrink:0;

}


.qci-logo-box img {

    /* width:315px; */

    height:auto;

    max-height:82px;

    object-fit:contain;

    object-position:left center;

    display:block;

}


/* =========================================================
   MAIN DIVIDER
========================================================= */

.qci-divider {

    width:1px;

    height:52px;

    background:#e0e5ec;

    margin-left:11px;

    margin-right:26px;

    flex-shrink:0;

}


/* =========================================================
   PORTAL TITLE
========================================================= */

.qci-portal {

    display:flex;

    flex-direction:column;

    justify-content:center;

    min-width:0;

}


.qci-portal-title {

    color:#10296d;

    font-size:21px;

    line-height:25px;

    font-weight:500;

    white-space:nowrap;

}


.qci-portal-subtitle {

    color:#10296d;

    font-size:18px;

    line-height:22px;

    font-weight:700;

    margin-top:4px;

    white-space:nowrap;

}


/* =========================================================
   RIGHT
========================================================= */

.qci-right {

    display:flex;

    align-items:center;

    height:100%;

    /* gap:20px; */

    flex-shrink:0;

}


/* =========================================================
   SEARCH
========================================================= */

.qci-search {

    width:354px;

    height:46px;

    border:1px solid #d8e0eb;

    border-radius:6px;

    background:#fff;

    display:flex;

    align-items:center;

    padding:0 14px;

}


.qci-search i {

    font-size:18px;

    color:#536785;

    margin-right:13px;

}


.qci-search input {

    width:100%;

    height:100%;

    border:0;

    outline:0;

    background:transparent;

    font-size:13px;

    color:#263a62;

}


.qci-search input::placeholder {

    color:#78859a;

}


/* =========================================================
   ICON BUTTON
========================================================= */

.qci-icon-button {

    position:relative;

    width:38px;

    height:44px;

    border:0;

    background:transparent;

    color:#0d2457;

    display:flex;

    align-items:center;

    justify-content:center;

    cursor:pointer;

    padding:0;

}


.qci-icon-button i {

    font-size:24px;

}


/* =========================================================
   NOTIFICATION
========================================================= */

.qci-notification {

    position:absolute;

    top:0px;

    right:-2px;

    min-width:19px;

    height:19px;

    padding:0 4px;

    border-radius:50%;

    background:#e31f2a;

    color:#ffffff;

    border:2px solid #ffffff;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:8px;

    font-weight:700;

}


/* =========================================================
   SMALL DIVIDER
========================================================= */

.qci-small-divider {

    width:1px;

    height:38px;

    background:#e3e7ed;

}


/* =========================================================
   PROFILE
========================================================= */

.qci-profile {

    display:flex;

    align-items:center;

    gap:11px;

    height:60px;

    cursor:pointer;

}


.qci-avatar {

    width:49px;

    height:49px;

    border-radius:50%;

    background:#4d1fc7;

    color:#ffffff;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:15px;

    font-weight:700;

    flex-shrink:0;

}


.qci-profile-info {

    display:flex;

    flex-direction:column;

    justify-content:center;

}


.qci-profile-name {

    color:#182d5d;

    font-size:13px;

    line-height:17px;

    font-weight:600;

    white-space:nowrap;

}


.qci-profile-role {

    color:#536583;

    font-size:11px;

    line-height:17px;

    margin-top:1px;

    white-space:nowrap;

}


.qci-profile-arrow {

    color:#132a5b;

    font-size:11px;

    margin-left:5px;

}


/* =========================================================
   YOUR MAIN CONTENT
========================================================= */

.main {

    margin-left:215px !important;

    padding-top:92px;

    min-height:100vh;

    box-sizing:border-box;

}


/* =========================================================
   SIDEBAR
========================================================= */

.sidebar {

    position:fixed !important;

    top:92px !important;
height:89vh !important;
    left:0 !important;

    bottom:0 !important;

    width:215px !important;

    z-index:1900;

    transition:transform .25s ease;

} 


/* =========================================================
   DESKTOP SIDEBAR COLLAPSE
========================================================= */
/* 
body.sidebar-collapsed .sidebar {

    transform:translateX(-100%);

}


body.sidebar-collapsed .main {

    margin-left:0 !important;

} */


/* =========================================================
   MOBILE OVERLAY
========================================================= */

#qciOverlay {

    display:none;

}


/* =========================================================
   1600px
========================================================= */

@media(max-width:1600px) {

    .qci-logo-box {

        width:285px;

    }


    .qci-logo-box img {

        /* width:275px; */

    }


    .qci-divider {

        margin-right:20px;

    }


    .qci-portal-title {

        font-size:18px;

    }


    .qci-portal-subtitle {

        font-size:16px;

    }


    .qci-search {

        width:200px;

    }

}


/* =========================================================
   1400px
========================================================= */

/* @media(max-width:1400px) {

    .qci-navbar {

        padding:0 18px;

    }


    .qci-logo-box {

        width:255px;

    }


    .qci-logo-box img {

        width:245px;

    }


    .qci-divider {

        margin-left:5px;

        margin-right:18px;

    }


    .qci-portal-title {

        font-size:14px;

    }


    .qci-portal-subtitle {

        font-size:12px;

    }


    .qci-search {

        width:270px;

    }


    .qci-right {

        gap:13px;

    }

} */


/* =========================================================
   1200px
========================================================= */

@media(max-width:1200px) {

    .qci-logo-box {

        width:220px;

    }


    .qci-logo-box img {

        width:210px;

    }


    .qci-divider {

        display:none;

    }


    .qci-portal-title {

        font-size:14px;

    }


    .qci-portal-subtitle {

        font-size:13px;

    }


    .qci-search {

        width:230px;

    }


    .qci-profile-info {

        display:none;

    }


    .qci-profile-arrow {

        display:none;

    }

}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:991px) {

    .qci-navbar {

        height:70px;

        padding:0 15px;

    }


    .qci-menu-btn {

        display:flex;

    }


    .qci-logo-box {

        width:190px;

        height:70px;

    }


    .qci-logo-box img {

        width:180px;

        max-height:62px;

    }


    .qci-portal {

        display:none;

    }


    .qci-search {

        width:220px;

        height:40px;

    }


    .qci-right {

        gap:8px;

    }


    .qci-small-divider {

        display:none;

    }


    .main {

        margin-left:0 !important;

        padding-top:70px;

    }


    .sidebar {

        top:70px !important;

        transform:translateX(-100%);

    }


    body.sidebar-open .sidebar {

        transform:translateX(0);

    }


    body.sidebar-open #qciOverlay {

        display:block;

        position:fixed;

        top:70px;

        left:0;

        right:0;

        bottom:0;

        background:rgba(0,0,0,.35);

        z-index:1800;

    }

}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:767px) {

    .qci-navbar {

        height:62px;

        padding:0 10px;

    }


    .qci-menu-btn {

        width:34px;

        height:34px;

        font-size:21px;

        margin-right:3px;

    }


    .qci-logo-box {

        width:145px;

        height:62px;

    }


    .qci-logo-box img {

        width:140px;

        max-height:54px;

    }


    .qci-search {

        display:none;

    }


    .qci-right {

        gap:3px;

    }


    .qci-icon-button {

        width:34px;

        height:38px;

    }


    .qci-icon-button i {

        font-size:20px;

    }


    .qci-avatar {

        width:39px;

        height:39px;

        font-size:12px;

    }


    .qci-profile {

        gap:0;

    }


    .qci-profile-arrow {

        display:none;

    }


    .main {

        padding-top:62px;

        margin-left:0 !important;

    }


    .sidebar {

        top:62px !important;

        width:280px !important;

        max-width:85vw;

    }


    body.sidebar-open #qciOverlay {

        top:62px;

    }

}


/* =========================================================
   SMALL PHONE
========================================================= */

@media(max-width:400px) {

    .qci-logo-box {

        width:120px;

    }


    .qci-logo-box img {

        width:115px;

    }


    .qci-help {

        display:none;

    }

}

</style>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const menuBtn =
        document.getElementById("menuBtn");

    const overlay =
        document.getElementById("qciOverlay");

    const closeBtn =
        document.querySelector(".close-sidebar");


    /* =========================================
       MENU
    ========================================= */

    if (menuBtn) {

        menuBtn.addEventListener("click", function () {

            if (window.innerWidth <= 991) {

                document.body.classList.toggle(
                    "sidebar-open"
                );

            } else {

                document.body.classList.toggle(
                    "sidebar-collapsed"
                );

            }

        });

    }


    /* =========================================
       OVERLAY
    ========================================= */

    if (overlay) {

        overlay.addEventListener("click", function () {

            document.body.classList.remove(
                "sidebar-open"
            );

        });

    }


    /* =========================================
       SIDEBAR CLOSE BUTTON
    ========================================= */

    if (closeBtn) {

        closeBtn.addEventListener("click", function () {

            document.body.classList.remove(
                "sidebar-open"
            );

            if (window.innerWidth > 991) {

                document.body.classList.add(
                    "sidebar-collapsed"
                );

            }

        });

    }


    /* =========================================
       ESC
    ========================================= */

    document.addEventListener("keydown", function (e) {

        if (e.key === "Escape") {

            document.body.classList.remove(
                "sidebar-open"
            );

        }

    });


    /* =========================================
       RESIZE
    ========================================= */

    window.addEventListener("resize", function () {

        if (window.innerWidth > 991) {

            document.body.classList.remove(
                "sidebar-open"
            );

        }

    });

});

</script>