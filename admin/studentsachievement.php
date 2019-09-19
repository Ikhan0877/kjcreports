<?php 
include 'includes/header.php';
include 'includes/nav-bar.php';
 include 'inserting/confiq.php';
if(isset($_GET['yearid']) and ($_GET['monthid'])){
    $yearid = $_GET['yearid'];
    $monthid = $_GET['monthid'];
     $sql = "SELECT y.yearid, y.year, m.monthid, m.monthname FROM month m, year y where y.yearid = $yearid and m.monthid =  $monthid and m.yearid = y.yearid";
$result = mysqli_query($conn, $sql);

}
$row = mysqli_fetch_assoc($result);

$temp=$row['monthname'];
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
  <div class="container mt-4">
    <div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Note!</strong> Click on the report to download the event report. <br>
  
    </div>
 </div>
<div class="container mt-4 ">
     <div class="row">
        <div class="col-md-6">
             <a href="" class="text-info bg-light p-2">YEAR <?php echo $row['year']; ?></a> &gt; <a href="" class="text-info bg-light p-2"> MONTH <?php echo $row['monthname']; ?></a> &gt; <a href="" class="text-info bg-light p-2">STUDENTS ACHIEVEMENTS</a>
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
                    <h4 class="font-weight-light text-center text-primary">PROGRAMME STATS MONTH <?php echo $row['monthname']; ?></h4>    
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
                             <h6>Students Achievements Programme</h6>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered  table-striped p-0 m-0" id="achtbl">
                                
                            </table>
                        </div>
                        <div class="card-footer p-0 bg-primary">
                            <button class="btn d-block w-100 mx-auto" data-toggle="modal" data-target="#myModal" >ADD</button>
                        </div>
                        <?php include 'inserting/insertacheivment.php' ?>
                        <input type="text" hidden class="form-rounded-1" value="<?php echo $row['yearid']; ?>" id="tyearid">
						<input type="text" hidden class="form-rounded-1" value="<?php echo $row['monthid']; ?>" id="tmonthid">


                    </div>
                </div>
        </div>
    </div>
 </section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script >
    $(document).ready(function(){
         // showUser();
        showachievement(); 
        //Add New
        $(document).on('click','#addacheiment', function(){
            if ($('#adachparticipant').val()=="" || $('#adachby').val()=="" || $('#adachpapertitle').val()=="" || $('#adachprogramtitle').val()=="" || $('#adachpname').val()=="" || $('#adachvenue').val()=="" || $('#adachduration').val()=="" || $('#adachto').val()=="" || $('#adachfrom').val()=="" || $('#adachtndays').val()=="" )
            {
                  alert('Please insert all values');
            }
            else
            {
            
                $achtndays=$('#adachtndays').val();
                $achfrom=$('#adachfrom').val();
                $achto=$('#adachto').val();
                $achpname=$('#adachpname').val();
                $achduration=$('#adachduration').val();
                $achvenue=$('#adachvenue').val();
                $achby=$('#adachby').val();
                $achprogramtitle=$('#adachprogramtitle').val();
                $achpapertitle=$('#adachpapertitle').val();
                $achparticipant=$('#adachparticipant').val();
                $yearid=$('#adyearid').val();
                $monthid=$('#admonthid').val();

                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        
                        achtndays:$achtndays,
                        achfrom:$achfrom,
                        achto:$achto,
                        achpname:$achpname,
                        achduration:$achduration,
                        achvenue:$achvenue,
                        achby:$achby,
                        achprogramtitle:$achprogramtitle,
                        achpapertitle:$achpapertitle,
                        achparticipant:$achparticipant,
                        yearid:$yearid,
                        monthid:$monthid,
                        status : 'enable', 
                        add: 1,
                    },
                    success: function(){
                        showachievement();
                        $('#achparticipant').val()=="" || $('#achby').val()=="" || $('#achpapertitle').val()=="" || $('#achprogramtitle').val()=="" || $('#achpname').val()=="" || $('#achvenue').val()=="" || $('#achduration').val()=="" || $('#achto').val()=="" || $('#achfrom').val()=="" ||$('#achtndays').val()=="" 

                        alert('Successfully added!');
                         $("#myModal").modal("hide");
                    }
                });
               
            }
            
        });
        

            $(document).on('click', '.Deletestudent', function(){
            $id=$(this).val();

            var r = confirm("Press a button!");
            if (r == true) {
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                        delstudent: 1,
                    },
                    success: function(){
                        showachievement();
                    }
                });
            } 
                
        });
        $(document).on('click', '.editstudent', function(){
            $id=$(this).val();
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                       editstudent:1,
                       
                    },
                    success: function(){
                        showachievement();
                    }
                });
             
                
        });
        
   

    //update
    $(document).on('click', '#updateacheiment', function(){
			$uid=$(this).val();
            $('#editstudent'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#achparticipant').val()=="" || $('#achby').val()=="" || $('#achpapertitle').val()=="" || $('#achprogramtitle').val()=="" || $('#achpname').val()=="" || $('#achvenue').val()=="" || $('#achduration').val()=="" || $('#achto').val()=="" || $('#achfrom').val()=="" || $('#achtndays').val()=="" )
            {
                alert('Please insert all values');
            }
            else
            {
            
                $achtndays=$('#achtndays').val();
                $achfrom=$('#achfrom').val();
                $achto=$('#achto').val();
                $achpname=$('#achpname').val();
                $achduration=$('#achduration').val();
                $achvenue=$('#achvenue').val();
                $achby=$('#achby').val();
                $achprogramtitle=$('#achprogramtitle').val();
                $achpapertitle=$('#achpapertitle').val();
                $achparticipant=$('#achparticipant').val();
                $yearid=$('#yearid').val();
                $monthid=$('#monthid').val();

                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $uid,
                        achtndays:$achtndays,
                        achfrom:$achfrom,
                        achto:$achto,
                        achpname:$achpname,
                        achduration:$achduration,
                        achvenue:$achvenue,
                        achby:$achby,
                        achprogramtitle:$achprogramtitle,
                        achpapertitle:$achpapertitle,
                        achparticipant:$achparticipant,
                        yearid:$yearid,
                        monthid:$monthid,
                        status : 'enable', 
                        editstudent: 1,
                    },
                    success: function(){
                        $('#achparticipant').val()=="" || $('#achby').val()=="" || $('#achpapertitle').val()=="" || $('#achprogramtitle').val()=="" || $('#achpname').val()=="" || $('#achvenue').val()=="" || $('#achduration').val()=="" || $('#achto').val()=="" || $('#achfrom').val()=="" ||$('#achtndays').val()=="" 

                        
                        alert('Successfully Updated!');
                      
                      
                        showachievement();
                       
                    }
            });
            }
        });

        $(document).on('click', '#verifyacheiment', function(){
			$uid=$(this).val();
            $('#editstudent'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#achparticipant').val()=="" || $('#achby').val()=="" || $('#achpapertitle').val()=="" || $('#achprogramtitle').val()=="" || $('#achpname').val()=="" || $('#achvenue').val()=="" || $('#achduration').val()=="" || $('#achto').val()=="" || $('#achfrom').val()=="" || $('#achtndays').val()=="" )
            {
                alert('Please insert all values');
            }
            else
            {
            
               
                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $uid,
                        status : 'enable', 
                        verifystudent: 1,
                    },
                    success: function(){
                        $('#achparticipant').val()=="" || $('#achby').val()=="" || $('#achpapertitle').val()=="" || $('#achprogramtitle').val()=="" || $('#achpname').val()=="" || $('#achvenue').val()=="" || $('#achduration').val()=="" || $('#achto').val()=="" || $('#achfrom').val()=="" ||$('#achtndays').val()=="" 

                        
                        alert('Successfully verified');
                      
                      
                        showachievement();
                       
                    }
            });
            }
        });

        function showachievement(){
                $yearid=$('#tyearid').val();
                $monthid=$('#tmonthid').val();
                    $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        yearid:$yearid,
                        monthid:$monthid,
 
                        showstudent: 1,
                    },
                    success: function(response){
                            $('#achtbl').html(response);
                            $(".mod").modal("hide");
                        }
                });
            }
            
	});
    


</script>
 <?php include 'includes/footer.php' ?>
 