<?php
    include('includes/header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .initial-avatar {
        /* Center the content */
        align-items: center;
        display: flex;
        justify-content: center;

        /* Colors */
        background-color: #d1d5db;
        color: #fff;

        /* Rounded border */
        border-radius: 50%;
        height: 3rem;
        width: 3rem;
    }

    .text-singleline{
        text-overflow: ellipsis; 
        overflow: hidden; 
        white-space: nowrap;
    }
    .email-list-warpper{
        background-color: #f2f4f6;
    }
    .list-group{
        border: none;
    }
    .list-group-item{
        background-color: transparent;
        border: none;
    }
    .list-group-item.active{
        background-color: #fff;
    }
    .res-height {
        height: 100%;
        max-height: 650px;
        overflow-y: scroll;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Messages</h1>

<div class="container col-12">
        <div class="border shadow-sm rounded">
            <div class="row">
                <div class="col-sm-4">
                    <div class="email-list-warpper p-2 pt-4">
                        <form class="row row-cols-lg-auto g-3 align-items-center mb-3">
                            <div class="col-12 w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
                                    <div class="input-group-text bg-success text-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                                </div>
                            </div>
                        </form>
                    
                        <ul class="list-group res-height">
                            <li class="list-group-item active shadow-sm rounded">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline text-dark">nilesh@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Instruction to join online Classes - Joining your online ZOOM Classes !</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">16 Jan 2024 17:45:03</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">nilesh@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Student GO - Transit Discount Pass</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 11:34:19</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div>
                                            <p class="mb-1 text-singleline">riyaz@scbt.ca</p>
                                            <p class="text-muted mb-0 text-singleline">Parking information at Scarborough Campus</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div>
                                            <p class="mb-1 text-muted">15 Jan 2024 10:16:06</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="p-2 pt-4">
                        <p class="text-muted mb-1">Tue, 16 Jan 2024 17:45:03 EST -05:00 (4 days ago)</p>
                        <h5 class="mb-3">Instruction to join online Classes - Joining your online ZOOM Classes !</h5>
                        <div>
                            <p class="mb-0"><span class="text-muted">From : </span> Nilesh Patel < nilesh@scbt.ca ></p>
                        </div>

                        <div>
                            <p>Greetings from Canadore at Stanford, </p>
                    
                            <p>Firstly we would like to thank you all for your cooperation and understanding during such a difficult phase we all are going through. Some of the Classes will be delivered online through the Zoom platform and you are required to be prepared with a good internet connection and a laptop/desktop device for online class delivery.</p>
                    
                            <p>Please find attached the tutorial with step-by-step instructions for joining your classes through the Canadore-stanford.com portal. The document outlines the detailed steps and instructions that you are required to follow without any exceptions. Please Click On the this link  =   Instruction to join online classes Please go through the important policies and Tips to join an online class that helps you, your instructor, and your classmates displeased the environment. Policy_and_tips _to_attend_Online_class.pdf</p>

                            <p>Please find attached the tutorial with step-by-step instructions for joining your classes through the Canadore-stanford.com portal. The document outlines the detailed steps and instructions that you are required to follow without any exceptions. Please Click On the this link  =   Instruction to join online classes Please go through the important policies and Tips to join an online class that helps you, your instructor, and your classmates displeased the environment. Policy_and_tips _to_attend_Online_class.pdf</p>

                            <p>Thank you</p>
                    
                            <p>IT  - Team Canadore @ Stanford</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


</div>
<!-- /.container-fluid -->
<?php include('includes/footer.php'); ?>
