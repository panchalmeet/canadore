<?php
    include('includes/header.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Study Breaks</h1>
    </div>
    <!-- code update start -->

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Resume Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Resume Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
<?php include('includes/footer.php'); ?>