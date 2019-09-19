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
             <a href="" class="text-info bg-light p-2">YEAR <?php echo $row['year']; ?></a> &gt; <a href="" class="text-info bg-light p-2"> MONTH <?php echo $row['monthname']; ?></a> &gt; <a href="" class="text-info bg-light p-2">RESEARCH PROJECTS</a>
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
                    <h4 class="font-weight-light text-center text-primary">PROGRAMME STATS MONTH JANUARY</h4>    
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
                             <h6>Research Projects</h6>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered  table-striped p-0 m-0" id="restbl">
                               
                            </table>
                        </div>
                        <div class="card-footer p-0 bg-primary">
                        <a href="" class="btn d-block w-100 mx-auto" data-toggle="modal" data-target="#myModal">ADD</a>
                                            </div>
                        <?php include 'inserting/insertresearch.php' ?>
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

    showresearch();
        //Add New
        $(document).on('click','#addresearch', function(){
            if ($('#rtitle').val()=="" || $('#rpi').val()=="" || $('#rfa').val()=="" || $('#ras').val()=="" || $('#rfrom').val()=="" || $('#rend').val()=="" || $('#rstatus').val()=="" )
            {
                  alert('Please insert all values');
            }
            else
            {
            
                $rtitle=$('#rtitle').val();
                $rpi=$('#rpi').val();
                $rfa=$('#rfa').val();
                $ras=$('#ras').val();
                $rfrom=$('#rfrom').val();
                $rend=$('#rend').val();
                $rstatus=$('#rstatus').val();
                $rend=$('#rend').val();
                $yearid=$('#adyearid').val();
                $monthid=$('#admonthid').val();

                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        
                        rtitle:$rtitle,
                        rpi:$rpi,
                        rfa:$rfa,
                        ras:$ras,
                        rfrom:$rfrom,
                        rend:$rend,
                        rstatus:$rstatus,
                        yearid:$yearid,
                        monthid:$monthid,
                        status : 'enable', 
                        addr: 1,
                    },
                    success: function(){
                        showresearch();
            
                    $('#rtitle').val()=="" || $('#rpi').val()=="" || $('#rfa').val()=="" || $('#ras').val()=="" || $('#rfrom').val()=="" || $('#rend').val()=="" || $('#rstatus').val()=="" 

                        alert('Successfully added!');
                         $("#myModal").modal("hide");
                    }
                });
               
            }
            
        });

        $(document).on('click', '.deleteresearch', function(){
            $id=$(this).val();

            var r = confirm("Press a button!");
            if (r == true) {
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                        delres: 1,
                    },
                    success: function(){
                        showresearch();
                    }
                });
            } 
                
        });


        $(document).on('click', '.editres', function(){
            $id=$(this).val();
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                       editres:1,
                       
                    },
                    success: function(){
                        showachievement();
                    }
                });
             
                
        });

        function showresearch(){
            $yearid=$('#tyearid').val();
                $monthid=$('#tmonthid').val();
                    $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        yearid:$yearid,
                        monthid:$monthid,
 
                        showresearch: 1,
                    },
                    success: function(response){
                            $('#restbl').html(response);
                            $(".mod").modal("hide");
                        }
                });
            }




            $(document).on('click','#editresearch', function(){
                $uid=$(this).val();
                
            $('#editres'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#ertitle').val()=="" || $('#erpi').val()=="" || $('#erfa').val()=="" || $('#eras').val()=="" || $('#erstatus').val()=="" )
            {
                  alert('Please insert all values');
            }
            else
            {
            
                $rtitle=$('#ertitle').val();
                $rpi=$('#erpi').val();
                $rfa=$('#erfa').val();
                $ras=$('#eras').val();
                $rfrom=$('#efrom').val();
                $rend=$('#eend').val();
                $rstatus=$('#erstatus').val();
                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $uid,
                        rtitle:$rtitle,
                        rpi:$rpi,
                        rfa:$rfa,
                        ras:$ras,
                        rfrom:$rfrom,
                        rend:$rend,
                        rstatus:$rstatus,
                        status : 'enable', 
                        editr: 1,
                    },
                    success: function(){
                        showresearch();
            
                        $('#ertitle').val()=="" || $('#erpi').val()=="" || $('#erfa').val()=="" || $('#eras').val()=="" || $('#erstatus').val()==""
                        alert('Successfully added!');
                      
                    }
                });
               
            }
            
        });


        $(document).on('click', '#resourceverify', function(){
			$uid=$(this).val();
            $('#editres'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#ertitle').val()=="" || $('#erpi').val()=="" || $('#erfa').val()=="" || $('#eras').val()=="" || $('#erstatus').val()=="" )
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
                        verifyresearch: 1,
                    },
                    success: function(){
                        $('#ertitle').val()=="" || $('#erpi').val()=="" || $('#erfa').val()=="" || $('#eras').val()=="" || $('#erstatus').val()==""
                        
                        alert('Successfully verified');
                      
                      
                        showresearch();
                       
                    }
            });
            }
        });



    });
        


 </script>
 <?php include 'includes/footer.php' ?>