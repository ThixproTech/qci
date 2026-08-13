<?php
require_once "../includes/auth.php";
include "../db.php";

$stmt = $pdo->query("SELECT * FROM portfolio WHERE development_type = 'UI/UX Design' ORDER BY id DESC");

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
                                <h3 class="card-title" style="display:flex; align-items:center;">UI/UX Design Lists<a
                                        href="ux-add.php"><i class="fa fa-plus-circle fa-lg" aria-hidden="true"
                                            style="margin-left:5px;color:teal;"></i></a></h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead
                                        style="postion:sticky;">
                                        <tr>
                                            <th class="text-nowrap">Id</th>
                                            <th class="text-nowrap">Title</th>
                                            <th class="text-nowrap">Image 1</th>
                                            <th class="text-nowrap">Description</th>
                                            <th class="text-nowrap">URL Link</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $index = 1; while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <tr>
                                            <td class="text-nowrap"><?php echo $index++; ?></td>
                                            <td class="text-nowrap"><?php echo $row['heading']; ?></td>
                                            <td class="text-nowrap">
                                                <img src="../uploads/<?php echo $row['image1']; ?>" width="80">
                                            </td>
                                            <td class="text-nowrap">
                                                <?php if (!empty($row['description'])): ?>
                                                    <button
                                                        type="button"
                                                        class="btn btn-info btn-sm viewDescription"
                                                        data-toggle="modal"
                                                        data-target="#descriptionModal"
                                                        data-description="<?= htmlspecialchars($row['description'], ENT_QUOTES, 'UTF-8'); ?>">
                                                        View Description
                                                    </button>
                                                <?php else: ?>
                                                    No Description
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-nowrap"><?php echo $row['url']; ?></td>
                                            <td class="text-nowrap">
                                                <a href="ux-edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
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

</div>

<div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header justify-content-between">
                    <h5 class="modal-title">Description</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p id="modalDescription"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>

            </div>
        </div>
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

    <script>
        $(document).on("click", ".viewDescription", function () {
            $("#modalDescription").html($(this).data("description"));
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
            window.location.href = "ux-delete.php?id=" + id;
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
}).then(() => {
    window.history.replaceState({}, document.title, "ux-list.php");
});
</script>

<?php } ?>
