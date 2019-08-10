<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
 ?>
    
<section class="container">
    <div class="card" style="width:50%;margin: 10vh  auto;">
        <div class="label" style="position:relative;bottom:10px;">
            <p class="bg-primary text-white text-center w-75 mx-auto p-2 shadow-sm" style="border-radius:30px;">Login</p>
        </div>
        <div class="card-body">
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
                        <label for="usr">Password:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6 text-primary">  
                        <label for="usr">Role</label>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" id="sel1">
                            <option>Staff</option>
                            <option>Student</option>
                            <option>Admin</option>
                            
                        </select>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 ">  
                        <button class="btn-sm btn-primary text-white w-50 mx-auto d-block">Login</button>
                    </div>
                </div>
        </div>
    </div>
</section>