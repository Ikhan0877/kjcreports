<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
include 'inserting/confiq.php';
	$sql = "SELECT yearid,year,status FROM year";
	$result = mysqli_query($conn, $sql);


?>

			<h3 class="text-center text-primary mt-2"> DEPARTMENT OF COMPUTER SCIENCE (UG)</h3>
			<div class="container bg-light p-1">
				<p style="">Overall Details</p>
			</div>
			<div class="container mt-4 mb-4">
				<div class="row">
				<div class="col-md-4 text-center">
					<div class="card bg-primary">
						<div class="card-body">
							<label style="color:white;">TOTAL EVENTS </label>
							<span class="d-block bg-white" style="color:black;">
								0000
							</span>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 text-center">
					<div class="card" style="background-color: #E606FF">
						<div class="card-body">
							<label style="color:white;">TOTAL EVENTS </label>
							<span class="d-block bg-white" style="color:black;">
								0000
							</span>
						</div>
					</div>
					
				</div>
				<div class="col-md-4 text-center">
					<div class="card bg-primary">
						<div class="card-body">
							<label style="color:white;">TOTAL EVENTS </label>
							<span class="d-block bg-white" style="color:black;">
								0000
							</span>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="container bg-light p-1">
				<a href="" class="bg-light p-1" style="text-decoration: none; color: black">Home</a>
			</div>

			<div class="container p-3">
				<div class="row">
				<?php if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {?>
					<div class="col-md-6">
						<div class="row mt-1">
						
							<div class="col-md-6 p-0 text-center">
								<div class="card m-0">
									<div class="card-body">
										<h4 class="text-primary mb-5"><?php echo $row['year'] ?></h4>
										<a class="btn btn-success " style="" href="admin-month.php?yearid=<?php echo $row['yearid']?>">View/Add Report </a>
									</div>
									<div class="card-footer p-2 bg-primary" style="height: 50px;">
										<a href="" style="color: white; text-decoration: none;">Generate Report</a>
										
									</div>

								</div>
								
								
							</div>
							
							<div class="col-md-6 p-0">
								<div class="card m-0">
									<div class="card-header">
										<h5 class="text-primary"><?php echo $row['year'] ?> status</h5>
									</div>
									<div class="card-body">
										<button class="btn btn-primary form-rounded " style="font-size: 10px; margin-bottom: 5px;"> Totak Events 0000</button><br>
										<button class="btn form-rounded" style="font-size: 10px; margin-bottom: 5px; background-color: #E606FF; color: white;"> Totak Resource person 0000</button><br>
										<button class="btn btn-primary form-rounded" style="font-size: 10px; margin-bottom: 5px;"> Totak Overalls 0000</button>
									</div>
								</div>	
							</div>
								
							
						</div>
						
					</div>
					<?php		
								}
							}?>
				</div>
			</div>


	
	</body>
</html>