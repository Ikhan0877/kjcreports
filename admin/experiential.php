<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
 ?>
  <div class="container mt-4">
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Note!</strong> Click on the report to download the event report. <br>
  
    </div>
 </div>
<div class="container mt-4 ">
     <div class="row">
        <div class="col-md-6">
             <a href="" class="text-info bg-light p-2">YEAR 2019</a> &gt; <a href="" class="text-info bg-light p-2"> MONTH JANUARY</a> &gt; <a href="" class="text-info bg-light p-2">EXPERIENTIAL PROGRAMME</a>
        </div>
        <div class="col-md-6">
            <a href="" class="bg-dark text-light p-2 d-block ml-auto w-25" > << GO BACK</a>
        </div>
     </div>
 </div>
 <section class="container-fluid mt-5">
    <div class="row">
        <!-- PROGRAMME STATS -->
            <div class="col-md-3">
                <div class="card p-2">
                    <h4 class="font-weight-light text-center text-primary">PROGRAMME STATS MONTH JANUARY</h4>    
                    <div class="card " style="border-radius:10px;background: #473DD9;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to top, #004e92, #473DD9);  /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to top, #004e92, #473DD9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                    ">
                        <div class="card-body text-center p-0" >
                            <h6 class="text-white py-2">Constructive Programme</h6>
                            <p class="text-white m-0">Total <span class="badge badge-light">Light</span></p>
                            <p class="text-white m-0">Unverified <span class="badge badge-danger">Light</span></p>
                        </div>
                        <div class=" bg-white text-primary shadow-sm text-center mt-2" style="border-radius:30px;position:relative;">
                            ADD / VIEW 
                        </div>
                    </div>
                <div class="card mt-2" style="border-radius:10px;background: #473DD9;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #004e92, #473DD9);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #004e92, #473DD9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                ">
                    <div class="card-body text-center p-0" >
                        <h6 class="text-white py-2">Interactive Programme</h6>
                        <p class="text-white m-0">Total <span class="badge badge-light">Light</span></p>
                        <p class="text-white m-0">Unverified <span class="badge badge-danger">Light</span></p>
                    </div>
                    <div class=" bg-white text-primary shadow-sm text-center mt-2" style="border-radius:30px;position:relative;">
                        ADD / VIEW 
                    </div>
                </div>

                <div class="card mt-2" style="border-radius:10px;background: #473DD9;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #004e92, #473DD9);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #004e92, #473DD9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                ">
                    <div class="card-body text-center p-0" >
                        <h6 class="text-white py-2">Experiential Programme</h6>
                        <p class="text-white m-0">Total <span class="badge badge-light">Light</span></p>
                        <p class="text-white m-0">Unverified <span class="badge badge-danger">Light</span></p>
                    </div>
                    <div class=" bg-white text-primary shadow-sm text-center mt-2" style="border-radius:30px;position:relative;">
                        ADD / VIEW 
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Programme Details -->
        <div class="col-md-9">
            <div class="container">
                
            </div>
            <div class="container">
                    <div class="card">
                        <div class="card-header">
                             <h6>Experiential Programme</h6>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered  table-striped p-0 m-0">
                                <tr class="table-info">
                                    <td>Date</td>
                                    <td>Nature of Event</td>
                                    <td>Verified</td>
                                    <td>Resource person</td>
                                    <td class="p-0 text-center pt-2">Name of students/Total Beneficiaries
                                    </td>
                                
                                    <td>Operations</td>
                                    <td>Learning outcome</td>
                                    <td>User</td>
                                    </tr>
                                    <tr >
                                    <td>Name</td>
                                    <td>UserId</td>
                                    <td><span class="badge badge-danger">Unverified</span></td>
                                    <td>Department</td>
                                    <td class="p-0 text-center ">
                                        <table class="table table-borderless mb-0">
                                            <tr>
                                                <td>10</td>
                                                <td>5</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td><a href="" class="btn btn-sm btn-primary">Edit</a> <a href="" class="btn btn-sm btn-danger">Delete</a> <a href="" class="btn btn-sm btn-success">Report</a> </td>
                                    <td>Status</td>
                                    <td></td>
                                    </tr>
                            </table>
                        </div>
                        <div class="card-footer p-0 bg-primary">
                            <button class="btn d-block w-100 mx-auto" data-toggle="modal" data-target="#myModal">ADD</button>
                        </div>
                            <?php include 'inserting/programme.php'; ?>
                    </div>
                </div>
        </div>
    </div>
 </section>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <?php include 'includes/footer.php' ?>