<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
 ?>
 <div class="container mt-4">
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Note!</strong> Your Viewing the Report of year 2019 and Month Janary. <br>
    *click on the Generate report to download the report. <br>
    *click on the view overall report to view all the reports <br>
    </div>
 </div>
 <!-- overall monthly report -->
 <div class="container mt-4">
     <p class="text-info bg-light p-2">OVERALL MONTHLY REPORTS</p>
 </div>
 <div class="container">
     <div class="row">
        <div class="col-md-4 text-center">
            <div class="card text-white p-2 border-0" style="background-color:#4717F6;">Total Events <span class="bg-white text-dark mt-2" style="font-size:20px;">1000</span></div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card text-white p-2 border-0" style="background-color:#E606FF;">Total Resource person <span class="bg-white text-dark mt-2" style="font-size:20px;">1000</span></div>
        </div>
        <div class="col-md-4 text-center">
        <div class="card text-white p-2 border-0" style="background-color:#177FF6;">Total Overall <span class="bg-white text-dark mt-2" style="font-size:20px;">1000</span></div>
        </div>
     </div>
 </div>
 <!-- Breadcrumps -->
 <div class="container mt-4 ">
     <div class="row">
        <div class="col-md-6">
             <a href="" class="text-info bg-light p-2">YEAR 2019</a> &gt; <a href="" class="text-info bg-light p-2"> MONTH JANUARY</a>
        </div>
        <div class="col-md-6">
            <a href="" class="bg-dark text-light p-2 d-block ml-auto w-25" > << GO BACK</a>
        </div>
     </div>
 </div>
 <div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-success">
                Generate Report
            </a>
            <a href="" class="btn btn-primary">
            View the overall report 
            </a>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
 </div>
 <div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-primary text-center font-weight-light">INTERACTIVE PROGRAMME</h2>
                    <p class="text-danger">*Please add event details which come undet this category!!</p>
                    <p class="text-info">CONFERENCE / SEMINAR / WORKSHOP / FDP / GUEST LECTURE / MDP / PANEL DISCUSSION </p>
                    
                </div>
                <div class="card-footer p-0">
                    <a class="btn btn-primary w-100 text-white" href="interactive.php">ADD / VIEW REPORT</a>
                </div> 
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card ">
                <div class="card-body">
                    <h2 class="text-primary text-center font-weight-light">CONSTRUCTIVE PROGRAMME</h2>
                    <p class="text-danger">*Please add event details which come undet this category!!</p>
                    <p class="text-info">ACADEMIC / CO-CURRICULAR ACTIVITIES / EXHIBITION / CLUB PROGRAMME </p>
                    <br/>
                </div>
                <div class="card-footer p-0">
                    <a class="btn btn-primary w-100 text-white" href="constructive.php">ADD / VIEW REPORT</a>
                </div> 
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                        <h3 class="text-primary text-center font-weight-light">EXPERIENTIAL LEARNING
                        PROGRAMME</h3>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        <p class="text-info">ACADEMIC / CO-CURRICULAR ACTIVITIES / EXHIBITION / CLUB PROGRAMME </p>
                        <br/>
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="experiential.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">add-on course's / 
                            training courses offered</h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        <p class="text-info">ACADEMIC / CO-CURRICULAR ACTIVITIES / EXHIBITION / CLUB PROGRAMME </p>
                        <br />
                        <br />
                        <br/>
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="addoncourses.php">ADD / VIEW REPORT</a>
                    </div> 
                </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">STUDENT'S ACADEMIC
                                ACHIEVEMENT'S </h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        <p class="text-info">PAPER PRESENTATION / POSTER PRESENTATION / BUSINESS PLAN / SOFTWARE DEV COMPLETION OF NET / OTHER ACHIEVEMENT'S </p>
                        <br/>
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="studentsachievement.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">FACULTY
                                ACHIEVEMENT'S <br> </h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        <p class="text-info">PAPER PRESENTATION / OTHER ACHIEVEMENT'S  </p>
                        <br/>
                        <br/>
                        <br/>
                        <br />
                        <!-- <br/> -->
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="faculty-achievement.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">Intercollegiate fest <br> </h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="intercollfest.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">Research <br> projects </h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="researchproj.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">Other ACHIEVEMENTs</h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card ">
                    <div class="card-body text-center">
                        <h2 class="text-primary text-center font-weight-light text-uppercase">PUBLICATION'S BY FACULTY MEMBERS </h2>
                        <p class="text-danger">*Please add event details which come undet this category!!</p>
                        <a class="btn btn-info">Book published!</a> <a class="btn btn-info">Chapter published!</a> <a class="btn btn-info mt-3">Article publshed</a>
                    </div>
                    <div class="card-footer p-0">
                        <a class="btn btn-primary w-100 text-white" href="publishment.php">ADD / VIEW REPORT</a>
                    </div> 
            </div>
        </div>
    </div>
 </div>