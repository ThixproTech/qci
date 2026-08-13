<?php
// ===============================
// Roles Data
// ===============================
$roles = [
    [
        "name" => "Super Admin",
        "type" => "System Role",
        "description" => "Full access to all modules, settings, users, roles, and system configuration.",
        "users" => "2",
        "status" => "Active",
        "date" => "15 Jan 2024",
        "color" => "purple",
        "icon" => "fa-shield-halved"
    ],
    [
        "name" => "QCI Admin",
        "type" => "System Role",
        "description" => "Manage applications, reviewers, approvals and system operations.",
        "users" => "18",
        "status" => "Active",
        "date" => "20 Jan 2024",
        "color" => "green",
        "icon" => "fa-user"
    ],
    [
        "name" => "Reviewer",
        "type" => "System Role",
        "description" => "Review and evaluate assigned applications and submit scores.",
        "users" => "142",
        "status" => "Active",
        "date" => "25 Jan 2024",
        "color" => "orange",
        "icon" => "fa-user"
    ],
    [
        "name" => "Department Admin",
        "type" => "Custom Role",
        "description" => "Department level access to manage applications and users.",
        "users" => "24",
        "status" => "Active",
        "date" => "05 Feb 2024",
        "color" => "blue",
        "icon" => "fa-users"
    ],
    [
        "name" => "Data Entry Operator",
        "type" => "Custom Role",
        "description" => "Data entry and limited access to application data.",
        "users" => "6",
        "status" => "Inactive",
        "date" => "18 Feb 2024",
        "color" => "pink",
        "icon" => "fa-user"
    ]
];
?>

<?php
require_once "includes/auth.php";
?>

<?php include "includes/header.php"; ?>

<?php include "includes/sidebar.php"; ?>

<link rel="stylesheet" href="assets/css/roles-permissions.css" />

<!-- MAIN CONTENT -->
<div class="main"
    
     style="
        margin-left:250px;
        min-height:100vh;
        background:#fff;
        color:#10244b;
        box-sizing:border-box;
        font-family:Arial,Helvetica,sans-serif;
     ">

    <?php include "includes/navbar.php"; ?>

    <!-- =====================================
         MAIN WRAPPER
    ====================================== -->

    <div class="">



        <!-- =================================
             CONTENT
        ================================== -->

        <main class="content">

            <div class="content-layout">


                <!-- =================================
                     LEFT MAIN CONTENT
                ================================== -->

                <div class="main-content">


                    <!-- Page Heading -->

                    <div class="page-heading">

                        <div>
                            <h1>Roles Management</h1>
                            <p>
                                Create, manage and configure roles and their permissions
                            </p>
                        </div>

                        <button class="create-btn">
                            <i class="fa-solid fa-plus"></i>
                            Create New Role
                        </button>

                    </div>


                    <!-- =================================
                         STAT CARDS
                    ================================== -->

                    <div class="stats-grid">


                        <!-- Card 1 -->

                        <div class="stat-card">

                            <div class="stat-icon purple">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div class="stat-info">

                                <div class="stat-title">
                                    Total Roles
                                </div>

                                <div class="stat-number">
                                    5
                                </div>

                                <div class="stat-description">
                                    All system roles
                                </div>

                                <div class="stat-link">
                                    View all roles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>

                        </div>


                        <!-- Card 2 -->

                        <div class="stat-card">

                            <div class="stat-icon green">
                                <i class="fa-regular fa-id-badge"></i>
                            </div>

                            <div class="stat-info">

                                <div class="stat-title">
                                    Active Roles
                                </div>

                                <div class="stat-number">
                                    4
                                </div>

                                <div class="stat-description">
                                    Currently active
                                </div>

                                <div class="stat-link">
                                    View active roles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>

                        </div>


                        <!-- Card 3 -->

                        <div class="stat-card">

                            <div class="stat-icon orange">
                                <i class="fa-regular fa-circle-xmark"></i>
                            </div>

                            <div class="stat-info">

                                <div class="stat-title">
                                    Inactive Roles
                                </div>

                                <div class="stat-number">
                                    1
                                </div>

                                <div class="stat-description">
                                    Currently inactive
                                </div>

                                <div class="stat-link">
                                    View inactive roles
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>

                        </div>


                        <!-- Card 4 -->

                        <div class="stat-card">

                            <div class="stat-icon pink">
                                <i class="fa-solid fa-user-group"></i>
                            </div>

                            <div class="stat-info">

                                <div class="stat-title">
                                    Total Users Assigned
                                </div>

                                <div class="stat-number">
                                    192
                                </div>

                                <div class="stat-description">
                                    Across all roles
                                </div>

                                <div class="stat-link">
                                    View role users
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =================================
                         TABLE
                    ================================== -->

                    <div class="table-card">


                        <!-- Filter Area -->

                        <div class="filter-area">

                            <div class="input-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input
                                    type="text"
                                    placeholder="Search by role name or description..."
                                >
                            </div>


                            <div class="input-box">

                                <select>
                                    <option>Status</option>
                                    <option>All</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>

                            </div>


                            <div class="input-box">

                                <select>
                                    <option>Created Date</option>
                                    <option>Newest First</option>
                                    <option>Oldest First</option>
                                </select>

                            </div>


                            <button class="filter-button">
                                <i class="fa-solid fa-filter"></i>
                                Filters
                            </button>

                        </div>


                        <!-- Table -->

                        <div class="table-wrapper">

                            <table>

                                <thead>

                                    <tr>
                                        <th>Role Name</th>
                                        <th>Description</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Created On</th>
                                        <th>Actions</th>
                                    </tr>

                                </thead>

                                <tbody>

                                <?php foreach ($roles as $role): ?>

                                    <tr>

                                        <td>

                                            <div class="role-name">

                                                <div class="role-icon <?php echo $role['color']; ?>">
                                                    <i class="fa-solid <?php echo $role['icon']; ?>"></i>
                                                </div>

                                                <div>

                                                    <div class="role-title">
                                                        <?php echo $role['name']; ?>
                                                    </div>

                                                    <span
                                                        class="role-type <?php echo $role['type'] === 'Custom Role' ? 'custom' : ''; ?>"
                                                    >
                                                        <?php echo $role['type']; ?>
                                                    </span>

                                                </div>

                                            </div>

                                        </td>


                                        <td>
                                            <div class="description">
                                                <?php echo $role['description']; ?>
                                            </div>
                                        </td>


                                        <td>
                                            <?php echo $role['users']; ?>
                                        </td>


                                        <td>

                                            <span
                                                class="status <?php echo strtolower($role['status']); ?>"
                                            >
                                                <?php echo $role['status']; ?>
                                            </span>

                                        </td>


                                        <td>
                                            <?php echo $role['date']; ?>
                                        </td>


                                        <td>

                                            <div class="actions">

                                                <button class="action-btn" title="View">
                                                    <i class="fa-regular fa-eye"></i>
                                                </button>

                                                <button class="action-btn" title="Edit">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </button>

                                                <button class="action-btn" title="More">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>

                                            </div>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                                </tbody>

                            </table>

                        </div>


                        <!-- Table Footer -->

                        <div class="table-footer">

                            <div class="entries">
                                Showing 1 to 5 of 5 entries
                            </div>

                            <div class="pagination">

                                <button class="page-btn">
                                    <i class="fa-solid fa-angles-left"></i>
                                </button>

                                <button class="page-btn">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>

                                <button class="page-btn active">
                                    1
                                </button>

                                <button class="page-btn">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>

                                <button class="page-btn">
                                    <i class="fa-solid fa-angles-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =================================
                     RIGHT SIDEBAR
                ================================== -->

                <aside class="right-sidebar">


                    <!-- Role Details -->

                    <div class="right-card">

                        <h3>
                            Role Details
                        </h3>


                        <div class="selected-role">

                            <div class="selected-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div>

                                <strong>
                                    Super Admin
                                </strong>

                                <span class="system-role">
                                    System Role
                                </span>

                            </div>

                        </div>


                        <p class="role-description">
                            Full access to all modules, settings,
                            users, roles, and system configuration.
                        </p>


                        <div class="detail-row">

                            <span class="detail-label">
                                Status
                            </span>

                            <strong>
                                <span class="green-dot"></span>
                                Active
                            </strong>

                        </div>


                        <div class="detail-row">

                            <span class="detail-label">
                                Users Assigned
                            </span>

                            <strong>
                                2
                            </strong>

                        </div>


                        <div class="detail-row">

                            <span class="detail-label">
                                Created On
                            </span>

                            <strong>
                                15 Jan 2024, 10:30 AM
                            </strong>

                        </div>


                        <div class="detail-row">

                            <span class="detail-label">
                                Last Updated
                            </span>

                            <strong>
                                10 May 2025, 03:15 PM
                            </strong>

                        </div>

                    </div>


                    <!-- Quick Actions -->

                    <div class="right-card">

                        <h3>
                            Quick Actions
                        </h3>


                        <div class="quick-action">
                            <i class="fa-regular fa-circle-plus"></i>
                            Create New Role
                        </div>

                        <div class="quick-action">
                            <i class="fa-regular fa-copy"></i>
                            Copy Existing Role
                        </div>

                        <div class="quick-action">
                            <i class="fa-solid fa-share-nodes"></i>
                            Role Hierarchy
                        </div>

                        <div class="quick-action">
                            <i class="fa-regular fa-file-lines"></i>
                            Permission Report
                        </div>

                        <div class="quick-action">
                            <i class="fa-solid fa-users"></i>
                            Manage Role Users
                        </div>

                    </div>


                    <!-- Help -->

                    <div class="right-card">

                        <div class="help-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <h3>
                            Need Help?
                        </h3>

                        <p class="help-text">
                            For any assistance, please contact
                            <br><br>

                            <span class="help-email">
                                support@qcin.org
                            </span>

                            <br><br>

                            <span class="help-email">
                                0120-XXX-XXXX
                            </span>

                            <br><br>

                            (Mon - Fri : 09:30 AM to 06:00 PM)
                        </p>

                    </div>

                </aside>

            </div>

        </main>

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