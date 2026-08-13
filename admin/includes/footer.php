<!-- Footer -->
<footer class="footer mt-4">

    <div class="container-fluid">

        <div class="row align-items-center">

            <div class="col-md-6">

                <span class="text-muted">
                    © <?php echo date("Y"); ?> Admin Dashboard. All Rights Reserved.
                </span>

            </div>

            <div class="col-md-6 text-md-end mt-2 mt-md-0">

                <a href="#" class="text-decoration-none me-3">Privacy</a>

                <a href="#" class="text-decoration-none me-3">Terms</a>

                <a href="#" class="text-decoration-none">Support</a>

            </div>

        </div>

    </div>

</footer>

</div> <!-- End Content -->

</div> <!-- End Main -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Dashboard JS -->
<script src="<?= BASE_URL ?>assets/js/dashboard.js"></script>

<script>

// ===============================
// Sidebar Toggle
// ===============================

const menuBtn = document.getElementById("menuBtn");
const sidebar = document.querySelector(".sidebar");
const overlay = document.querySelector(".sidebar-overlay");
const closeBtn = document.querySelector(".close-sidebar");

if(menuBtn){

    menuBtn.addEventListener("click",function(){

        sidebar.classList.add("show");

        if(overlay){
            overlay.classList.add("show");
        }

    });

}

if(closeBtn){

    closeBtn.addEventListener("click",function(){

        sidebar.classList.remove("show");

        if(overlay){
            overlay.classList.remove("show");
        }

    });

}

if(overlay){

    overlay.addEventListener("click",function(){

        sidebar.classList.remove("show");
        overlay.classList.remove("show");

    });

}

// ===============================
// Fullscreen
// ===============================

const fullscreen = document.getElementById("fullscreen");

if(fullscreen){

    fullscreen.addEventListener("click",function(){

        if(!document.fullscreenElement){

            document.documentElement.requestFullscreen();

        }else{

            document.exitFullscreen();

        }

    });

}

// ===============================
// Active Sidebar Menu
// ===============================

let currentPage = window.location.pathname.split("/").pop();

document.querySelectorAll(".menu a").forEach(function(item){

    if(item.getAttribute("href")===currentPage){

        document.querySelectorAll(".menu a").forEach(function(link){

            link.classList.remove("active");

        });

        item.classList.add("active");

    }

});

// ===============================
// Bootstrap Tooltips
// ===============================

document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(el){

    new bootstrap.Tooltip(el);

});

// ===============================
// Notification Animation
// ===============================

setInterval(function(){

    const notify=document.querySelector(".notify");

    if(notify){

        notify.classList.add("animate");

        setTimeout(function(){

            notify.classList.remove("animate");

        },800);

    }

},8000);

</script>

</body>

</html>