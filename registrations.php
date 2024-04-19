<?php
    include('includes/header.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Registrations</h1>
    </div>
    <!-- code update start -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="study_permit_file">Upload Study Permit</label>
                            <input type="file" class="form-control" id="study_permit_file">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loa_file">Upload Acceptance Letter</label>
                            <input type="file" class="form-control" id="loa_file">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fees_receipt">Upload Receipt of Payment</label>
                            <input type="file" class="form-control" id="fees_receipt">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="study_permit_expiry_date">Study Permit Expiry Date(yyyy-mm-dd)</label>
                            <input type="text" class="form-control" id="study_permit_expiry_date" placeholder="Enter study permit expiry date" value="2024-09-30">
                        </div>
                    </div>
                </div>

                <div>
                    <strong>Terms and Conditions</strong>
                    <p>Your registration will be approved once we verify that all your documents and fees payment for 1st semester are submitted to the college account. You will only receive your schedule after that.</p>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="terms">
                  <label class="form-check-label" for="terms">
                    Accept the Terms and Conditions
                  </label>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>        
        </div>
    </div>
        
</div>
<!-- End of Main Content -->
<?php include('includes/footer.php'); ?>