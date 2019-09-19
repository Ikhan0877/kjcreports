<?php
include_once 'confiq.php';


if(isset($_POST['add']))  
{  
	$achtndays=$_POST['achtndays'];
	$achfrom=$_POST['achfrom'];
	$achto=$_POST['achto'];
	$achpname=$_POST['achpname'];
	$achduration=$_POST['achduration'];
	$achvenue=$_POST['achvenue'];
	$achby=$_POST['achby'];
	$achprogramtitle=$_POST['achprogramtitle'];
	$achpapertitle=$_POST['achpapertitle'];
	$achparticipant=$_POST['achparticipant'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];

	$query=mysqli_query($conn,"INSERT INTO `achievements`(`ach_name`, `ach_days`, `ach_from`, `ach_to`, `participantname`, `ach_type`, `ach_info`, `ach_venue`, `natureofpart`, `monthid`, `yearid`,`userid`,`verified`) VALUES ('$achprogramtitle','$achtndays','$achfrom','$achto','$achpname','$achby','$achpapertitle','$achvenue','$achparticipant','$monthid','$yearid','1','0')");

}

if(isset($_POST['showstudent'])){
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];
	$sql1 = "SELECT * FROM `achievements` where  `yearid`='$yearid' and `monthid`='$monthid' and `ach_type`='Student'";
    $result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
?>
                                    	

                                  <tr class="table-info">
                                    <td>Date</td>
                                    <td>Name of Student</td>
                                    <td>Verified</td>
                                    <td>Title of the programme/venue</td>
                                    <td class="p-0 text-center pt-2 text-lowercase">TITLE OF THE PRESENTED/
                                        PUBLISHED/ANYOTHER
                                    </td>
                                
                                    <td>Operations</td>
                                    
                                    <td>User</td>
                                   </tr>
                                    <?php

                         
                            while($row = mysqli_fetch_assoc($result1)) {?>
                                    <tr >
                                    <td><?php echo $row['ach_from'] ?> to <?php echo $row['ach_to'] ?></h4></h4></td>
                                    <td><?php echo $row['participantname'] ?></h4></td>
									<td><?php
									if($row['verified']== "0"){?>
										<span class="badge badge-danger">Unverified</span><?php
									}else{?>
									<span class="badge badge-success">verified</span>
									<?php
								}?>
									
                                    <td><?php echo $row['ach_name'] ?></h4></td>
                                    <td class=" text-center "><?php echo $row['ach_info'] ?></h4>
                                       
                                    </td>
                                    <td > <div class="btn-group"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editstudent<?php echo $row['achievementid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> <button class="btn btn-sm btn-danger Deletestudent" id="" value="<?= $row['achievementid']?>">Delete</button> <a href="" class="btn btn-sm btn-success">Report</a></div>
									
									
<?php
	include_once 'confiq.php';
   $result2=mysqli_query($conn,"SELECT * FROM `achievements` WHERE achievementid='".$row['achievementid']."'");
   $row1=mysqli_fetch_array($result2); {
	 $yearid=$row1['yearid'];
	 $monthid=$row['monthid'];
	 $sqlpp = "SELECT y.yearid, y.year, m.monthid, m.monthname FROM month m, year y where y.yearid = $yearid and m.monthid =  $monthid and m.yearid = y.yearid";
		$mm = mysqli_query($conn, $sqlpp); 
		$my = mysqli_fetch_assoc($mm); 
		$temp=$my['monthname'];
if($temp=="Jan"){
    
    $temp="01";
}elseif($temp=="Feb"){
    $temp="02";
}elseif($temp=="Mar"){
    $temp="03";
}elseif($temp=="Apr"){
    $temp="04";
}elseif($temp=="May"){
    $temp="05";
}elseif($temp=="Jun"){
    $temp="06";
}elseif($temp=="Jul"){
    $temp="07";
}elseif($temp=="Aug"){
    $temp="08";
}elseif($temp=="Sep"){
    $temp="09";
}elseif($temp=="Oct"){
    $temp="10";
}elseif($temp=="Nov"){
    $temp="11";
}elseif($temp=="Dec"){
    $temp="12";
}

	   ?>
   <div class="modal fade mod" id="editstudent<?php echo $row['achievementid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-xl" id="edmodal" role="document" >
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
                                <div class="modal-header">
                                <h4 style="color: #06367E;">STUDENTS/ FACULTY ACHIVEMENTS</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
    
    <div class="container card-2 py-3 my-2 px-5">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TOTAL NO.OF.DAYS</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="uachtndays" value="<?php echo $row1['ach_days'] ?>" id="achtndays">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FROM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date" min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" value="<?php echo $row1['ach_from'] ?>" name="uachfrom" id="achfrom">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TO</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date" min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" value="<?php echo $row1['ach_to'] ?>" name="uachto" id="achto">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">DURATION</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_days'] ?>" name="uachduration" id="achduration">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">VENUE</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_venue'] ?>" name="uachvenue" id="achvenue">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">PARTICIPANT NAME</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="uachpname" value="<?php echo $row1['participantname'] ?>" id="achpname">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">ACHIEVMENT BY</label>
						</div>
						<div class="col-md-6">
							<select name="uachby" id="achby">
								<option value="Student">Student</option>
								<option value="Faculty">Faculty</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container card-2 py-3 my-2 px-5">
			<h4 class="text-primary mb-4">ABOUT THE ACHIEVMENT</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TITLE OF THE PROGRAM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_name'] ?>" name="uachprogramtitle" id="achprogramtitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TITLE OF PAPER ACHIEVMENT</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_info'] ?>" name="uachpapertitle" id="achpapertitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">NATURE OF PARTICIPANT</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="uachparticipant" value="<?php echo $row1['natureofpart'] ?>" id="achparticipant">
							<input type="text" hidden class="form-control" value="<?php echo $row1['yearid']; ?>" name="uyearid" id="yearid">
							<input type="text" hidden class="form-control" value="<?php echo $row1['monthid']; ?>" name="umonthid" id="monthid">
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>

		<div class="container card-2 mb-5">
			<button type="button" class="btn mx-2 w-30 my-4 p-2" data-dismiss="modal" style="float: right;background-color: red; width: 10%; color: white;">CANCLE</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: #26CFE9; width: 10%; color: white;" value="<?php echo $row1['achievementid'] ?>" id="updateacheiment">UPDATE</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: lightgreen; width: 10%; color: white;" value="<?php echo $row1['achievementid'] ?>" id="verifyacheiment">VERIFY</button>
		</div>
	</div>
	</div>
</div>
</div>
   
</div>
<?php
    }


?>

									
									
									 </td>
                                    <td><?php echo $row['userid'] ?></h4></td>
                                
                                    </tr>
                                    <?php       
                                }
                            }
}


if(isset($_POST['delstudent'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"delete from `achievements` where achievementid='$id'");
}

if(isset($_POST['verifystudent'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"UPDATE `achievements` SET `verified`='1' WHERE `achievementid` = '$id'");
}
?>
<?php
include_once 'confiq.php';
if(isset($_POST['editstudent']))  
{  
	$id=$_POST['id'];
	$achtndays=$_POST['achtndays'];
	$achfrom=$_POST['achfrom'];
	$achto=$_POST['achto'];
	$achpname=$_POST['achpname'];
	$achduration=$_POST['achduration'];
	$achvenue=$_POST['achvenue'];
	$achby=$_POST['achby'];
	$achprogramtitle=$_POST['achprogramtitle'];
	$achpapertitle=$_POST['achpapertitle'];
	$achparticipant=$_POST['achparticipant'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];

	$query=mysqli_query($conn,"UPDATE `achievements` SET `ach_name`='$achprogramtitle',`ach_days`='$achtndays',`ach_from`='$achfrom',`ach_to`='$achto',`participantname`='$achpname',`ach_type`='$achby',`ach_info`='$achpapertitle',`ach_venue`='$achvenue',`natureofpart`='$achparticipant',`monthid`='$monthid',`yearid`='$yearid' WHERE `achievementid` = '$id'");


	
}

 
if(isset($_POST['showfaculty'])){
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];
	$sql1 = "SELECT * FROM `achievements`  where  `yearid`='$yearid' and `monthid`='$monthid' and `ach_type`='Faculty' ";
    $result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
?>
                                    	

                                  <tr class="table-info">
                                    <td>Date</td>
                                    <td>Name of Student</td>
                                    <td>Verified</td>
                                    <td>Title of the programme/venue</td>
                                    <td class="p-0 text-center pt-2 text-lowercase">TITLE OF THE PRESENTED/
                                        PUBLISHED/ANYOTHER
                                    </td>
                                
                                    <td>Operations</td>
                                    
                                    <td>User</td>
                                   </tr>
                                    <?php

                         
                            while($row = mysqli_fetch_assoc($result1)) {?>
                                    <tr >
                                    <td><?php echo $row['ach_from'] ?> to <?php echo $row['ach_to'] ?></h4></h4></td>
                                    <td><?php echo $row['participantname'] ?></h4></td>
                                    <td><?php
									if($row['verified']== "0"){?>
										<span class="badge badge-danger">Unverified</span><?php
									}else{?>
									<span class="badge badge-success">verified</span>
									<?php
								}?>
									</td>
                                    <td><?php echo $row['ach_name'] ?></h4></td>
                                    <td class=" text-center "><?php echo $row['ach_info'] ?></h4>
                                       
                                    </td>
                                    <td><div class="btn-group"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editfaculty<?php echo $row['achievementid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> <button class="btn btn-sm btn-danger Deletefaculty" id="" value="<?= $row['achievementid']?>">Delete</button> <a href="" class="btn btn-sm btn-success">Report</a></div>
									
									
<?php
	include_once 'confiq.php';
   $result2=mysqli_query($conn,"SELECT * FROM `achievements` WHERE achievementid='".$row['achievementid']."'");
   $row1=mysqli_fetch_array($result2); {
	$yearid=$row1['yearid'];
	$monthid=$row['monthid'];
	$sqlpp = "SELECT y.yearid, y.year, m.monthid, m.monthname FROM month m, year y where y.yearid = $yearid and m.monthid =  $monthid and m.yearid = y.yearid";
	   $mm = mysqli_query($conn, $sqlpp); 
	   $my = mysqli_fetch_assoc($mm); 
	   $temp=$my['monthname'];
if($temp=="Jan"){
   
   $temp="01";
}elseif($temp=="Feb"){
   $temp="02";
}elseif($temp=="Mar"){
   $temp="03";
}elseif($temp=="Apr"){
   $temp="04";
}elseif($temp=="May"){
   $temp="05";
}elseif($temp=="Jun"){
   $temp="06";
}elseif($temp=="Jul"){
   $temp="07";
}elseif($temp=="Aug"){
   $temp="08";
}elseif($temp=="Sep"){
   $temp="09";
}elseif($temp=="Oct"){
   $temp="10";
}elseif($temp=="Nov"){
   $temp="11";
}elseif($temp=="Dec"){
   $temp="12";
}
 
	   ?>
   <div class="modal" id="editfaculty<?php echo $row['achievementid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-xl" id="edmodal" role="document" >
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
                                <div class="modal-header">
                                <h4 style="color: #06367E;">STUDENTS/ FACULTY ACHIVEMENTS</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
    
    <div class="container card-2 py-3 my-2 px-5">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TOTAL NO.OF.DAYS</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="achtndays" value="<?php echo $row1['ach_days'] ?>" id="achtndays">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FROM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date" min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" value="<?php echo $row1['ach_from'] ?>" name="achfrom" id="achfrom">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TO</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date" min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" value="<?php echo $row1['ach_to'] ?>" name="achto" id="achto">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">DURATION</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_days'] ?>" name="achduration" id="achduration">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">VENUE</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_venue'] ?>" name="achvenue" id="achvenue">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">PARTICIPANT NAME</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="achpname" value="<?php echo $row1['participantname'] ?>" id="achpname">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">ACHIEVMENT BY</label>
						</div>
						<div class="col-md-6">
							<select name="achby" id="achby">
								<option value="Student">Student</option>
								<option value="Faculty">Faculty</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container card-2 py-3 my-2 px-5">
			<h4 class="text-primary mb-4">ABOUT THE ACHIEVMENT</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TITLE OF THE PROGRAM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_name'] ?>" name="achprogramtitle" id="achprogramtitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">TITLE OF PAPER ACHIEVMENT</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['ach_info'] ?>" name="achpapertitle" id="achpapertitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">NATURE OF PARTICIPANT</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" name="achparticipant" value="<?php echo $row1['natureofpart'] ?>" id="achparticipant">
							<input type="text" hidden class="form-control" value="<?php echo $row1['yearid']; ?>" name="yearid" id="yearid">
							<input type="text" hidden class="form-control" value="<?php echo $row1['monthid']; ?>" name="monthid" id="monthid">
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>

		<div class="container card-2 mb-5">
		<button type="button" class="btn mx-2 w-30 my-4 p-2" data-dismiss="modal" style="float: right;background-color: red; width: 10%; color: white;">CANCLE</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: #26CFE9; width: 10%; color: white;" value="<?php echo $row1['achievementid'] ?>" id="updatefacultyacheiment">UPDATE</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: lightgreen; width: 10%; color: white;" value="<?php echo $row1['achievementid'] ?>" id="verifyfacultyacheiment">VERIFY</button>
		</div>
	</div>
	</div>
</div>
</div>
   
</div>
<?php
    }


?>

									
									
									 </td>
                                    <td><?php echo $row['userid'] ?></h4></td>
                                
                                    </tr>
                                    <?php       
                                }
                            }
}



if(isset($_POST['delfaculty'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"delete from `achievements` where achievementid='$id'");
}
if(isset($_POST['verifyfaculty'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"UPDATE `achievements` SET `verified`='1' WHERE `achievementid` = '$id'");
}
?>
<?php
include_once 'confiq.php';
if(isset($_POST['editfaculty']))  
{  
	$id=$_POST['id'];
	$achtndays=$_POST['achtndays'];
	$achfrom=$_POST['achfrom'];
	$achto=$_POST['achto'];
	$achpname=$_POST['achpname'];
	$achduration=$_POST['achduration'];
	$achvenue=$_POST['achvenue'];
	$achby=$_POST['achby'];
	$achprogramtitle=$_POST['achprogramtitle'];
	$achpapertitle=$_POST['achpapertitle'];
	$achparticipant=$_POST['achparticipant'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];

	$query=mysqli_query($conn,"UPDATE `achievements` SET `ach_name`='$achprogramtitle',`ach_days`='$achtndays',`ach_from`='$achfrom',`ach_to`='$achto',`participantname`='$achpname',`ach_type`='$achby',`ach_info`='$achpapertitle',`ach_venue`='$achvenue',`natureofpart`='$achparticipant' WHERE `achievementid` = '$id'");


	
}
?>

<?php
include_once 'confiq.php';


if(isset($_POST['addr']))  
{  
	$rtitle=$_POST['rtitle'];
	$rpi=$_POST['rpi'];
	$rfa=$_POST['rfa'];
	$ras=$_POST['ras'];
	$rfrom=$_POST['rfrom'];
	$rend=$_POST['rend'];
	$rstatus=$_POST['rstatus'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];

	$query=mysqli_query($conn,"INSERT INTO `researchproject`(`title`, `participantsname`, `fundingagency`, `fromtodate`, `amount`, `status`, `monthid`, `yearid`, `deptid`, `userid`, `verfied`) VALUES ('$rtitle','$rpi','$rfa','$rfrom''to''$rend','$ras','$rstatus','$monthid','$yearid','1','1','0')");

}
if(isset($_POST['showresearch'])){
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];
	$sql1 = "SELECT * FROM `researchproject` where `yearid`='$yearid' and `monthid`='$monthid'";
    $result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
?>
 <tr class="table-info">
                                    <td>Title</td>
                                    <td>Participant Name</td>
                                    <td>Funding Agency</td>
                                    <td>Verified</td>
                                    <td class="p-0 text-center pt-2 text-lowercase">Amount Sanctioned
                                    </td>
                                
                                    <td>Operations</td>
                                    
                                    <td>User</td>
                                    </tr>
									<?php

                         
                            while($row = mysqli_fetch_assoc($result1)) {?>
                                    <tr >
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['participantsname'] ?></td>
                                    <td><?php echo $row['fundingagency'] ?></td>
                                    <td><?php
									if($row['verfied']== "0"){?>
										<span class="badge badge-danger">Unverified</span><?php
									}else{?>
									<span class="badge badge-success">verified</span>
									<?php
								}?></td>
                                    <td class=" text-center "><?php echo $row['amount'] ?>
                                    </td>
                                    <td><div class="btn-group"> <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editres<?php echo $row['projid']; ?>"><span class = "glyphicon glyphicon-pencil"></span>Edit</button> <button class="btn btn-sm btn-danger deleteresearch" value="<?= $row['projid']?>">Delete</button> <a href="" class="btn btn-sm btn-success">Report</a> </div>
									
									<?php
include_once 'confiq.php';
   $result2=mysqli_query($conn,"SELECT * FROM `researchproject` WHERE projid='".$row['projid']."'");
   $row1=mysqli_fetch_array($result2); {
	   
	$yearid=$row1['yearid'];
	$monthid=$row['monthid'];
	$sqlpp = "SELECT y.yearid, y.year, m.monthid, m.monthname FROM month m, year y where y.yearid = $yearid and m.monthid =  $monthid and m.yearid = y.yearid";
	   $mm = mysqli_query($conn, $sqlpp); 
	   $my = mysqli_fetch_assoc($mm); 
	   $temp=$my['monthname'];
if($temp=="Jan"){
   
   $temp="01";
}elseif($temp=="Feb"){
   $temp="02";
}elseif($temp=="Mar"){
   $temp="03";
}elseif($temp=="Apr"){
   $temp="04";
}elseif($temp=="May"){
   $temp="05";
}elseif($temp=="Jun"){
   $temp="06";
}elseif($temp=="Jul"){
   $temp="07";
}elseif($temp=="Aug"){
   $temp="08";
}elseif($temp=="Sep"){
   $temp="09";
}elseif($temp=="Oct"){
   $temp="10";
}elseif($temp=="Nov"){
   $temp="11";
}elseif($temp=="Dec"){
   $temp="12";
}
 

	 
	 ?>
   <div class="modal fade mod" id="editres<?php echo $row['projid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog modal-xl"  role="document" >
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
							<input type="text" class="form-control" value="<?php echo $row1['title']; ?>" name="" id="ertitle">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">PARTICIPANT NAME</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control"value="<?php echo $row1['participantsname']; ?>" name="" id="erpi">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FUNDING AGENCY</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="text" class="form-control" value="<?php echo $row1['fundingagency']; ?>" name="" id="erfa">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">AMOUNT SANCTIONED</label>
						</div>
						<div class="col-md-6 mt-4">
				
							
							<input type="text" class="form-control" value="<?php echo $row1['amount']; ?>" name="" id="eras">
						</div>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">FROM</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date"  min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" name="" id="efrom">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">END</label>
						</div>
						<div class="col-md-6 mt-4">
							<input type="date"  min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control" name="" id="eend">
						</div>
					</div>
				</div>
               
                <div class="col-md-6">
					<div class="row">
						<div class="col-md-6 mt-4">
							<label class="form-label">STATUS</label>
						</div>
						<div class="col-md-6 mt-4">
							<select name="" id="erstatus" class="form-control">
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
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: #26CFE9; width: 10%; color: white;" value="<?php echo $row1['projid'] ?>" id="editresearch">update</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: lightgreen; width: 10%; color: white;" value="<?php echo $row1['projid'] ?>" id="resourceverify">VERIFY</button>

		    </div>
      
</div>
</div>
</div>
								   
<?php
    }


?>							   
</td>
								    <td>Status</td>
                               	<?php
									}?>
                                    </tr><?php
								
	}
}

?>


<?php
include_once 'confiq.php';
if(isset($_POST['delres'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"delete from `researchproject` where projid='$id'");
}

if(isset($_POST['verifyresearch'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"UPDATE `researchproject` SET `verfied`='1' WHERE `projid` = '$id'");
}


if(isset($_POST['editr']))  
{  
	$id=$_POST['id'];
	$rtitle=$_POST['rtitle'];
	$rpi=$_POST['rpi'];
	$rfa=$_POST['rfa'];
	$ras=$_POST['ras'];
	$rfrom=$_POST['rfrom'];
	$rend=$_POST['rend'];

	$rstatus=$_POST['rstatus'];
	

	$query=mysqli_query($conn,"UPDATE `researchproject` SET `title`='$rtitle',`participantsname`='$rpi',`fundingagency`='$rfa',`fromtodate`='$rfrom''to''$rend',`amount`='$ras',`status`='$rstatus' WHERE `projid`='$id'");

}
?>


<?php
include_once 'confiq.php';


if(isset($_POST['addpub']))  
{  
	$title=$_POST['title'];
	$detail=$_POST['detail'];
	$type=$_POST['type'];
	$date=$_POST['date'];
	$ugc=$_POST['ugc'];
	$biblo=$_POST['biblo'];
	$isbn=$_POST['isbn'];
	$venue=$_POST['venue'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];
	$sql1 ="INSERT INTO `publication`(`publicationname`, `pubtype`, `venue`, `title`, `details`, `isbn`, `biblimeteric`, `ugc`, `date`, `deptid`, `userid`, `verified`, `monthid`, `yearid`) VALUES ('$detail','$type','$venue','$title','$detail','$isbn','$biblo','$ugc','$date','1','1','0','$monthid','$yearid')";
	// $query=mysqli_query($conn,$sql1);
	if (mysqli_query($conn, $sql1)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}
}

if(isset($_POST['showpub'])){
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];
	$sql1 = "SELECT * FROM `publication` where `yearid`='$yearid' and `monthid`='$monthid'";
    $result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
?>
 <tr class="table-info">
                                    <td>Date</td>
                                    <td>Name </td>
                                    <td>Verified</td>
                                    <td>detail of publish</td>
                                    <td class="p-0 text-center pt-2 text-lowercase">Month /Year /ISBN no
                                    </td>
                                
                                    <td>Operations</td>
                                    
                                    <td>User</td>
                                    </tr>
									<?php

                         
                            while($row = mysqli_fetch_assoc($result1)) {?>
                                    <tr >
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['publicationname'] ?></td>
                                    <td><?php
									if($row['verified']== "0"){?>
										<span class="badge badge-danger">Unverified</span><?php
									}else{?>
									<span class="badge badge-success">verified</span>
									<?php
								}?>
								</td>
                                    <td><?php echo $row['pubtype'] ?></td>
                                    <td class=" text-center ">
                                       
                                    </td>
                                    <td><a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editpub<?php echo $row['publicationid']; ?>">Edit</a> <a href="" class="btn btn-sm btn-danger Deletepub" value="<?= $row['publicationid']?>">Delete</a> <a href="" class="btn btn-sm btn-success">Report</a> 
									<div class="modal fade mod" id="editpub<?php echo $row['publicationid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

									<?php
include_once 'confiq.php';
   $result2=mysqli_query($conn,"SELECT * FROM `publication` WHERE `publicationid`='".$row['publicationid']."'");
   $row1=mysqli_fetch_array($result2); {
	$yearid=$row1['yearid'];
	$monthid=$row['monthid'];
	$sqlpp = "SELECT y.yearid, y.year, m.monthid, m.monthname FROM month m, year y where y.yearid = $yearid and m.monthid =  $monthid and m.yearid = y.yearid";
	   $mm = mysqli_query($conn, $sqlpp); 
	   $my = mysqli_fetch_assoc($mm); 
	   $temp=$my['monthname'];
if($temp=="Jan"){
   
   $temp="01";
}elseif($temp=="Feb"){
   $temp="02";
}elseif($temp=="Mar"){
   $temp="03";
}elseif($temp=="Apr"){
   $temp="04";
}elseif($temp=="May"){
   $temp="05";
}elseif($temp=="Jun"){
   $temp="06";
}elseif($temp=="Jul"){
   $temp="07";
}elseif($temp=="Aug"){
   $temp="08";
}elseif($temp=="Sep"){
   $temp="09";
}elseif($temp=="Oct"){
   $temp="10";
}elseif($temp=="Nov"){
   $temp="11";
}elseif($temp=="Dec"){
   $temp="12";
}  
	 
	 ?>

   <div class="modal-dialog modal-xl"  role="document" >
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
                                <div class="modal-header">
                                <h4 style="color: #06367E;">BOOK / ARTICLE / CHAPTER / PAPER PUBLICATION</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
		<div class="container card-2 py-3 my-2 px-5">
			<div class="row">
				<div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">TITLE OF PUBLISH</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<input type="text" class="form-control w-100" value="<?php echo $row1['title']; ?>" name="" id="title">
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">DETAILS OF PUBLISHER</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<input type="text" class="form-control w-100" value="<?php echo $row1['publicationname']; ?>" name="" id="detail">
						</div>
					</div>
				</div>
				<div class="col-md-6  mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">TYPE</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<!-- <input type="text" class="form-control" name=""> -->
							<select class="form-control" id="type">
                                <option>BOOK</option>
                                <option>CHAPTER</option>
                                <option>PAPER</option>
                                <option>ARTICLE</option>
                            </select>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">DATE</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<input type="date"  min="<?php echo $my['year']; ?>-<?php echo $temp; ?>-01"  max="<?php echo $my['year']; ?>-<?php echo $temp; ?>-31" class="form-control w-100" value="<?php echo $row1['date']; ?>" name="" id="date">
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">UGC APPROVAL</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<!-- <input type="text" class="form-control w-100" name=""> -->
							<select name="" id="ugc" class="form-control">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<!-- <option value="Applied">Applied</option> -->
							</select>
						</div>
					</div>
				</div>
                <div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">BIBLIOGRAPHY</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<input type="text" class="form-control w-100" value="<?php echo $row1['biblimeteric']; ?>" name="" id="biblo">
						</div>
					</div>
                </div>
                <div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 ">
							<label class="form-label pl-2">ISBN NO.</label>
						</div>
						<div class="col-md-6 p-0 ">
						<input type="text" hidden class="form-control" value="<?php echo $row1['yearid']; ?>" name="adyearid" id="yearid">
							<input type="text" hidden class="form-control" value="<?php echo $row1['monthid']; ?>" name="admonthid" id="monthid">
					
							<input type="text" class="form-control w-100" name="" value="<?php echo $row1['isbn']; ?>" id="isbn">
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-2">
					<div class="row">
						<div class="col-md-6 p-0 mt-2">
							<label class="form-label pl-2">VENUE</label>
						</div>
						<div class="col-md-6 p-0 mt-2">
							<input type="text" class="form-control w-100" value="<?php echo $row1['venue']; ?>" name="" id="venue">
						</div>
					</div>
                </div>
            <!-- </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 mt-4">
                            <label for="sel1" class="form-label">TYPE OF PUBLICATIONS</label>
                    </div>
                    <div class="col-md-6 mt-4">
                      
                    </div>
                </div>
            </div> -->
</div>
		</div>
		
		<div class="container card-2 mb-5">
		<button type="button" class="btn mx-2 w-30 my-4 p-2" data-dismiss="modal" style="float: right;background-color: red; width: 10%; color: white;">CANCLE</button>
			<button class="btn mx-2 w-30 my-4" style="float: right;background-color: #26CFE9; width: 10%; color: white;" value="<?php echo $row1['publicationid'] ?>" id="updatepub">Update</button>
			<button type="submit" class="btn mx-2 w-30 my-4" style="float: right;background-color: lightgreen; width: 10%; color: white;" value="<?php echo $row1['publicationid'] ?>" id="pubverify">VERIFY</button>
		</div>
        
</div>
</div>
</div>
<?php
    }


?>		
									
									
									</td>
                                    <td>Status</td>
                               
									<?php
									}?>
                                    </tr><?php
								
	}
}
?>
<?php
include_once 'confiq.php';
if(isset($_POST['delpub'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"delete from `publication` where `publicationid`='$id'");
}

if(isset($_POST['verifypub'])){
	
	$id=$_POST['id'];
		mysqli_query($conn,"UPDATE `publication` SET `verified`='1' WHERE `publicationid` = '$id'");
}



if(isset($_POST['updatepub']))  
{  
	$id=$_POST['id'];
	$title=$_POST['title'];
	$detail=$_POST['detail'];
	$type=$_POST['type'];
	$date=$_POST['date'];
	$ugc=$_POST['ugc'];
	$biblo=$_POST['biblo'];
	$isbn=$_POST['isbn'];
	$venue=$_POST['venue'];
	$yearid=$_POST['yearid'];
	$monthid=$_POST['monthid'];

	$query=mysqli_query($conn,"UPDATE `publication` SET `publicationname`='$detail',`pubtype`='$type',`venue`='$venue',`title`='$title',`details`='$detail',`isbn`='$isbn',`biblimeteric`='$biblo',`ugc`='$ugc',`date`='$date' WHERE `publicationid`='$id'");

}
?>