<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
 ?>
 <div class="container mt-4">
    <!-- <h1 class="d-inline">Welcome,</h1><p class="d-inline">Admin</p> -->
 </div>
 <div class="container mt-4">
     <p class="text-light bg-primary px-5 py-2" style="border-radius:30px;">ADD USER LOGIN DETAILS</p>
 </div>
 <div class="container px-4">
    <div class="card p-3">
    <div class="row">
        <div class="col-md-6">
            <div class="row mt-2">
                        <div class="col-md-6 text-primary">  
                            <label for="usr">Username:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="usr">
                        </div>
            </div>
            <div class="row mt-2">
                        <div class="col-md-6 text-primary">  
                            <label for="usr">UserId:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="usr">
                        </div>
            </div>
            <div class="row mt-2">
                        <div class="col-md-6 text-primary">  
                            <label for="usr">Department:</label>
                            <p class="text-danger">*If department not found cilck here!</p>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="sel1">
                                <option>Staff</option>
                                <option>Student</option>
                                <option>Admin</option>
                                
                            </select>
                        </div>
            </div>
            <div class="row mt-2 mb-5">
                        <div class="col-md-6 text-primary">  
                            <label for="usr">Role:</label>
                            
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="sel1">
                                <option>Staff</option>
                                <option>Student</option>
                                <option>Admin</option>
                                
                            </select>
                        </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row mt-2">
                    <div class="col-md-6 text-primary">  
                        <label for="usr">Password:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="usr">
                    </div>
             </div>
             <div class="row mt-2">
                    <div class="col-md-6 text-primary">  
                        <label for="usr"> Confirm Password:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="usr">
                    </div>
             </div>
             <div class="row mt-2">
                    <div class="col-md-6 text-primary">  
                        <label for="usr"> Status:</label>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control" id="sel1">
                                <option>Enabled</option>
                                <option>DisEnabled</option>
                                                           
                            </select>
                    </div>
             </div>
        </div>
        <div class="col-md-12">
            <a href="" class="btn btn-success mx-auto d-block w-50"> Add User</a>
        </div>
    </div>
    </div>
 </div>
<!-- user details views -->
 <div class="container mt-4">
     <p class="text-light bg-primary px-5 py-2" style="border-radius:30px;">USER LOGIN DETAILS</p>
 </div>
 <div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
            <select class="form-control" id="sel1">
                                <option>Select department</option>
                                <option>Student</option>
                                <option>Admin</option>
                                
                            </select>
                <div class="input-group-append">
                    <button class="btn btn-success">Filter</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
            <select class="form-control" id="sel1">
                                <option>Select Role</option>
                                <option>Student</option>
                                <option>Admin</option>
                                
                            </select>
                <div class="input-group-append">
                    <button class="btn btn-success">Filter</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter userId">
                <div class="input-group-append">
                    <button class="btn btn-info">Search</button>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="container">
    <table class="table table-bordered table-hover table-striped    ">
        <tr class="table-info">
            <td>Name</td>
            <td>UserId</td>
            <td>Password</td>
            <td>Department</td>
            <td>Role</td>
            <td>Operations</td>
            <td>Status</td>
            </tr>
            <tr ">
            <td>Name</td>
            <td>UserId</td>
            <td>Password</td>
            <td>Department</td>
            <td>Role</td>
            <td><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td>
            <td>Status</td>
            </tr>
    </table>
 </div>