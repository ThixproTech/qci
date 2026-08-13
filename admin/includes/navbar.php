<nav class="topbar">

    <!-- Left -->
    <div class="topbar-left">

        <button class="menu-btn" id="menuBtn">
            <i class="bi bi-list"></i>
        </button>

        <div class="breadcrumb-text">
            <h5>Dashboard</h5>
            <small>Home / Dashboard</small>
        </div>

    </div>

    <!-- Right -->

    <div class="topbar-right">

        <!-- Search -->

        <div class="search-box">

            <i class="bi bi-search"></i>

            <input
                type="text"
                placeholder="Search...">

        </div>

        <!-- Notification -->

        <div class="top-icon">

            <i class="bi bi-bell"></i>

            <span class="notify">3</span>

        </div>

        <!-- Mail -->

        <div class="top-icon">

            <i class="bi bi-envelope"></i>

            <span class="notify bg-success">5</span>

        </div>

        <!-- Fullscreen -->

        <div class="top-icon" id="fullscreen">

            <i class="bi bi-arrows-fullscreen"></i>

        </div>

        <!-- User -->

        <div class="profile">

            <img src="https://i.pravatar.cc/100" alt="">

            <div>

                <strong>Admin</strong>

                <small>Administrator</small>

            </div>

        </div>

    </div>

</nav>
<script>

const menuBtn=document.getElementById("menuBtn");
const sidebar=document.querySelector(".sidebar");

menuBtn.onclick=function(){

sidebar.classList.toggle("show");

}

const full=document.getElementById("fullscreen");

full.onclick=function(){

if(!document.fullscreenElement){

document.documentElement.requestFullscreen();

}else{

document.exitFullscreen();

}

}

</script>