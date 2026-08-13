<div class="sidebar">

    <!-- Logo -->
    <div class="logo">

        <div class="logo-icon">
            <i class="bi bi-grid"></i>
        </div>

        <div class="logo-text">
            Admin Panel
        </div>

        <button type="button" class="close-sidebar">
            <i class="bi bi-x-lg"></i>
        </button>

    </div>
    <div class="menu">
        <a href="<?= BASE_URL ?>dashboard.php">
               <i class="bi bi-speedometer2"></i>
               Dashboard
        </a>
        <div class="menu-dropdown">

            <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="bi bi-rocket"></i>
                Portfolio Manage
            </a>

            <div class="submenu">
               <div class="submenu-title">
                   Web Development
               </div>
               <a href="<?= BASE_URL ?>portfolio/web-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/web-list.php">List</a>
               <div class="submenu-title">
                   Android Development
               </div>
               <a href="<?= BASE_URL ?>portfolio/android-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/android-list.php">List</a>
               <div class="submenu-title">
                   Games Development
               </div>
               <a href="<?= BASE_URL ?>portfolio/game-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/game-list.php">List</a>
               <div class="submenu-title">
                   Software Development
               </div>
               <a href="<?= BASE_URL ?>portfolio/software-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/software-list.php">List</a>
               <div class="submenu-title">
                   SEO & Digital Marketing
               </div>
               <a href="<?= BASE_URL ?>portfolio/seo-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/seo-list.php">List</a>
               <div class="submenu-title">
                   AI & Machine Learning
               </div>
               <a href="<?= BASE_URL ?>portfolio/ai-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/ai-list.php">List</a>
               <div class="submenu-title">
                   UI/UX Design
               </div>
               <a href="<?= BASE_URL ?>portfolio/ux-add.php">Add</a>
               <a href="<?= BASE_URL ?>portfolio/ux-list.php">List</a>
            </div>

        </div>
        <a href="<?= BASE_URL ?>contact-messages.php">
                <i class="bi bi-envelope"></i>
                Contact Messages
        </a>
        <a href="<?= BASE_URL ?>hero-banner.php">
                <i class="bi bi-images"></i>
                Manage Banner 
        </a>
       <!-- Team Management -->
<div class="menu-dropdown">

    <a href="javascript:void(0)" class="dropdown-toggle">
        <i class="bi bi-people"></i>
        Team Manage
    </a>

    <div class="submenu">

        <a href="<?= BASE_URL ?>manage-team/add-team.php">
            Add Team
        </a>

        <a href="<?= BASE_URL ?>manage-team/team-list.php">
            Team List
        </a>

    </div>

</div>


<!-- Blog Management -->
<div class="menu-dropdown">

    <a href="javascript:void(0)" class="dropdown-toggle">
        <i class="bi bi-pencil-square"></i>
        Blog Manage
    </a>

    <div class="submenu">

        <a href="<?= BASE_URL ?>manage-blog/add-blog.php">
            Add Blog
        </a>

        <a href="<?= BASE_URL ?>manage-blog/blog-list.php">
            Blog List
        </a>

    </div>

</div>
        <div class="menu-dropdown">

        <a href="javascript:void(0)" class="dropdown-toggle">
                <i class="bi bi-rocket"></i>
                Carrer Page
        </a>

        <div class="submenu">

            

            <a href="<?= BASE_URL ?>career/add-career.php">Add</a>
            <a href="<?= BASE_URL ?>career/career-list.php">List</a>

           
        </div>

    </div>
        <a href="<?= BASE_URL ?>profile.php">
                <i class="bi bi-person"></i>
                Profile
        </a>
        <a href="<?= BASE_URL ?>website-settings.php">
                <i class="bi bi-gear"></i>
                Website Settings
        </a>
        <a href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                Logout
        </a>
    </div>

</div>

<script>
 document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".dropdown-toggle").forEach(function(btn){

        btn.addEventListener("click", function(e){

            e.preventDefault();

            this.parentElement.classList.toggle("active");

        });

    });

});
</script>