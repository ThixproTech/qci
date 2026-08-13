<?php
    require_once "includes/auth.php";
?>



<?php include "includes/header.php"; ?>

<?php include "includes/sidebar.php"; ?>

<div class="main">

    <?php include "includes/navbar.php"; ?>

    <div class="content">

        <!-- Page Heading -->

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h3 class="fw-bold mb-1">Dashboard</h3>
                <p class="text-muted mb-0">
                    Welcome back, Admin 👋
                </p>
            </div>

            <button class="btn btn-primary px-4">
                <i class="bi bi-download me-2"></i>
                Export Report
            </button>

        </div>

        <!-- Statistic Cards -->

        <div class="row g-4">

            <div class="col-xl-3 col-md-6">

                <div class="stats-card bg-primary">

                    <div>

                        <h6>Total Users</h6>

                        <h2>26K</h2>

                        <p>
                            <i class="bi bi-arrow-up"></i>
                            +12.5%
                        </p>

                    </div>

                    <div class="stats-icon">

                        <i class="bi bi-people-fill"></i>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="stats-card bg-success">

                    <div>

                        <h6>Revenue</h6>

                        <h2>$18.2K</h2>

                        <p>
                            <i class="bi bi-arrow-up"></i>
                            +8.2%
                        </p>

                    </div>

                    <div class="stats-icon">

                        <i class="bi bi-currency-dollar"></i>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="stats-card bg-warning">

                    <div>

                        <h6>Orders</h6>

                        <h2>4,381</h2>

                        <p>
                            <i class="bi bi-arrow-down"></i>
                            -2.1%
                        </p>

                    </div>

                    <div class="stats-icon">

                        <i class="bi bi-cart-fill"></i>

                    </div>

                </div>

            </div>

            <div class="col-xl-3 col-md-6">

                <div class="stats-card bg-danger">

                    <div>

                        <h6>Visitors</h6>

                        <h2>91K</h2>

                        <p>
                            <i class="bi bi-arrow-up"></i>
                            +18%
                        </p>

                    </div>

                    <div class="stats-icon">

                        <i class="bi bi-graph-up-arrow"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- Chart & Analytics -->

        <div class="row mt-4">

            <div class="col-lg-8">

                <div class="card-box p-4">

                    <div class="d-flex justify-content-between mb-3">

                        <h5 class="fw-bold">
                            Traffic Analytics
                        </h5>

                        <button class="btn btn-sm btn-light">
                            This Month
                        </button>

                    </div>

                    <canvas id="trafficChart" height="120"></canvas>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card-box p-4">

                    <h5 class="fw-bold mb-4">
                        Sales Progress
                    </h5>

                    <div class="mb-4">

                        <div class="d-flex justify-content-between">

                            <span>Website</span>

                            <strong>78%</strong>

                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar bg-primary"
                                style="width:78%"></div>

                        </div>

                    </div>

                    <div class="mb-4">

                        <div class="d-flex justify-content-between">

                            <span>Mobile App</span>

                            <strong>61%</strong>

                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar bg-success"
                                style="width:61%"></div>

                        </div>

                    </div>

                    <div>

                        <div class="d-flex justify-content-between">

                            <span>Marketing</span>

                            <strong>93%</strong>

                        </div>

                        <div class="progress mt-2">

                            <div class="progress-bar bg-danger"
                                style="width:93%"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

