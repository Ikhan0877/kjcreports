<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
include 'inserting/confiq.php';
if(isset($_GET['yearid'])){
	$yearid = $_GET['yearid'];
	$sql = "SELECT yearid,monthid, monthname FROM month where yearid = $yearid";
$result = mysqli_query($conn, $sql);

}
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
				<a href="" class="bg-light p-1" style="text-decoration: none; color: black;">Home</a>
				<a href="" class="bg-light p-0" style="text-decoration: none; color:#0D365A; float: right; margin-left: 10px;"><span>&lt;</span>Back</a>
		</div><br>
		<div class="container p-3 bg-light">
			<div class="bg-white text-center" style="width: 40%; margin-left: 300px;">
					<label style="font-size: 13PX; color: blue;">SELECT THE MONTHTO ADD/VIEW THE MONTHLY AND INDIVDUAL REPORT</label>
			</div>
			<div class="row text-center">
			<?php if (mysqli_num_rows($result) > 0) {
    			// output data of each row
    			while($row = mysqli_fetch_assoc($result)) {?>

				
				<div class="col-md-3 p-5">
					<div class="card m-0">
						<div class="card-body">
							<h4 class="text-primary"><?php echo $row['monthname'] ?></h4><br>
							<a class="anchor_design btn btn-success" style="text-decoration: none; color: black;" href="list-event-details.php">View/Add Report </a><br><br>
						</div>
						<div class="card-footer p-2 bg-primary" style="height: 50px;">
							<a href="" style="color: white; text-decoration: none;">Generate Report</a>
										
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