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
    
        <!-- <form id="#year" method="post"> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="row mt-2">
                                <div class="col-md-6 text-primary">  
                                    <label for="usr">YEAR:</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="yearval">
                                </div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                
                </div>
                <div class="col-md-12 mt-4">
                    <button type="submit" id="addyear" class="btn btn-success mx-auto d-block w-50"> Add Year</button>
                </div>
            </div>
        <!-- </form> -->
    
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
            
            <td>Year</td>
           
            <td>Operations</td>
            
            </tr>
            <tr >
            <td>Name</td>
     
            <td>Department</td>
           
            <td><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td>
            
            </tr>
    </table>
 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
    $(document).ready(function(){
		// showUser();
		//Add New
		$(document).on('click', '#addyear', function(){
            if ($('#yearval').val()=="" )
            {
				alert('Please insert year');
			}
            else
            {
			 $yearval=$('#yearval').val();		
				$.ajax({
					type: "POST",
					url: "inserting/year.php",
					data: {
                        year: $yearval,
                        status : 'enable', 
						add: 1,
					},
					success: function(){
                        showyear();
                        alert('Successfully added!');
					}
				});
            }
            // function showuser(){

            // }
        });
        
        
    });
</script>

 <?php include 'includes/footer.php'?>