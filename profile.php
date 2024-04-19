<?php
    include('includes/header.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
    </div>
    <!-- code update start -->
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <td>Student ID</td>
                                <td><strong>A00000</strong></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><strong>Meet Panchal</strong></td>
                            </tr>
                            <tr>
                                <td>Course</td>
                                <td><strong>Mobile Application Development</strong></td>
                            </tr>
                            <tr>
                                <td>Campus</td>
                                <td><strong>Scarborough</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>    
        </div>

        <div class="col-md-4">
            <div class="d-sm-flex"><h4 class="h4 mb-1 text-gray-800"><strong>ID Card</strong></h4><p><a href="img/id_card_sample.png" download>(Click here to download)</a></p></div>
            <img src="img/id_card_sample.png" style="border:1px solid; border-radius: 10px; height: 77%; width: 80%;">
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" value="example@canadore.com">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" value="+1 (437)566-1641">
                        </div>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="study_permit_expiry_date">Study Permit Expiry Date(yyyy-mm-dd)</label>
                            <input type="text" class="form-control" id="study_permit_expiry_date" placeholder="Enter study permit expiry date" value="2024-09-30">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="study_permit_file">Upload Study Permit</label>
                            <input type="file" class="form-control" id="study_permit_file">
                        </div>
                    </div>    
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>        
        </div>
    </div>
        
</div>
<!-- End of Main Content -->
<?php include('includes/footer.php'); ?>