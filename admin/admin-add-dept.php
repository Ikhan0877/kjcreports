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
                            <label for="usr">Department:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="usr">
                        </div>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="row mt-2">
                    <div class="col-md-6 text-primary">  
                        <label for="usr">Pg/Ug:</label>
                    </div>
                    <div class="col-md-6">
                        <select name="" id="" class="form-control">
                            <option value="">PG</option>
                            <option value="">UG</option>
                        </select>
                    </div>
             </div>
             
        </div>
        <div class="col-md-12 mt-4">
            <a href="" class="btn btn-success mx-auto d-block w-50"> Add Department</a>
        </div>
    </div>
    </div>
 </div>
<!-- user details views -->
 <div class="container mt-4">
     <p class="text-light bg-primary px-5 py-2" style="border-radius:30px;">USER LOGIN DETAILS</p>
 </div>
 <div class="container mt-4">
   
 <div class="container">
    <table class="table table-bordered table-hover table-striped    ">
        <tr class="table-info">
            <td>Si.No.</td>
            
            <td>Department</td>
            <td>PG/UG</td>
            <td>Operations</td>
            
            </tr>
            <tr >
            <td>Name</td>
     
            <td>Department</td>
            <td></td>
            <td><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td>
            
            </tr>
    </table>
 </div>