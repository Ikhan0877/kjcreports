
<div class="modal" id="myModal">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
                                <div class="modal-header">
                                <h4 style="color: #06367E;">STATUS OF RESEARCH PROJECT</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
		<div class="container card-2 py-3 my-2 px-5">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TITLE </label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="" id="rtitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">PARTICIPANT NAME</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="" id="rpi">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FUNDING AGENCY</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="" id="rfa">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">AMOUNT SANCTIONED</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="" id="ras">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FROM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date"  min="<?php echo $row['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $row['year']; ?>-<?php echo $temp; ?>-31" class="form-control" name="" id="rfrom">
							<input type="text" hidden class="form-control" value="<?php echo $row['yearid']; ?>" name="adyearid" id="adyearid">
							<input type="text" hidden class="form-control" value="<?php echo $row['monthid']; ?>" name="admonthid" id="admonthid">
					
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">END</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date"  min="<?php echo $row['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $row['year']; ?>-<?php echo $temp; ?>-31" class="form-control" name="" id="rend">
						</div>
					</div>
				</div>
               
                <div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">STATUS</label>
						</div>
						<div class="col-md-6 mt-4">
							<select name="" id="rstatus" class="form-control">
								<option value="Completed">Completed</option>
								<option value="Ongoing">Ongoing</option>
								<option value="Applied">Applied</option>
							</select>
						</div>
					</div>
                </div>
              
            </div>
           

		</div>
		
		<div class="container card-2 mb-5">
		<button type="button" class="btn mx-2 w-30 my-4 p-2" data-dismiss="modal" style="float: right;background-color: red; width: 10%; color: white;">CANCLE</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: #26CFE9; width: 10%; color: white;" id="addresearch">ADD</button>
		    </div>
        
</div>
</div>
</div>