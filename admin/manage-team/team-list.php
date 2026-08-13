<?php
require_once "../includes/auth.php";
include "../db.php";

$stmt = $pdo->query("SELECT * FROM team ORDER BY id DESC");

?>


<?php include "../includes/header.php"; ?>

    <style>
        table.table-bordered.dataTable th{
            background-color: #000 !important;
            background-color: #fff !important;
        }
    </style>

<?php include "../includes/sidebar.php"; ?>

<div class="main">

    <?php include "../includes/navbar.php"; ?>

    <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="card w-100 p-0">
                            <div class="card-header">
                                <h3 class="card-title" style="display:flex; align-items:center;">Team Lists<a
                                        href="add-team.php"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"
                                            style="margin-left:5px;color:teal;"></i></a></h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead
                                        style="postion:sticky;">
                                        <tr>
                                            <th class="text-nowrap">Id</th>
                                            <th class="text-nowrap">Team Name</th>
                                            <th class="text-nowrap">Image</th>
                                            <th class="text-nowrap">Profile</th>
                                            <th class="text-nowrap">LinkedIn</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $index = 1; while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <tr>
                                            <td class="text-nowrap"><?php echo $index++; ?></td>
                                            <td class="text-nowrap"><?php echo $row['team_name']; ?></td>
                                            <td class="text-nowrap">
                                                <img src="../uploads/<?php echo $row['image']; ?>" width="80">
                                            </td>
                                            <td class="text-nowrap">
                                                <?php echo $row['profile']; ?>
                                            </td>
                                            <td class="text-nowrap"><?php echo $row['linkedin']; ?></td>
                                            <td class="text-nowrap">
                                                <a href="team-edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                                Edit
                                                </a>

                                                <a href="javascript:void(0)"
                                                   class="btn btn-danger btn-sm"
                                                   onclick="deleteRecord(<?= $row['id']; ?>)">
                                                    Delete
                                                </a>


                                            </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include "../includes/footer.php"; ?>

</div>

    <script src="<?= BASE_URL ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>

    <script src="<?= BASE_URL ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= BASE_URL ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function() {
        $("#example1").DataTable({
            "responsive": false,
            paging: true,
            pageLength: 10,
            searching: true,
            ordering: true,
            info: true,
            "lengthChange": false,
            "autoWidth": false,

            initComplete: function () {
            $('#example1_filter input')
                .attr('placeholder', 'Search ...');
        }

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function deleteRecord(id) {

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to recover this record!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {

        if (result.isConfirmed) {
            window.location.href = "delete-team.php?id=" + id;
        }

    });

}
</script>


<?php if(isset($_GET['deleted'])){ ?>

<script>
Swal.fire({
    icon: 'success',
    title: 'Deleted!',
    text: 'Record deleted successfully.',
    confirmButtonColor: '#3085d6'
});
</script>

<?php } ?>
