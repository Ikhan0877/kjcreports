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
             <a href="" class="text-info bg-light p-2">YEAR <?php echo $row['year']; ?></a> &gt; <a href="" class="text-info bg-light p-2"> MONTH <?php echo $row['monthname']; ?></a> &gt; <a href="" class="text-info bg-light p-2">PUBLISHMENTS</a>
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
                             <h6>Books published</h6>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-bordered  table-striped p-0 m-0" id="achtbl">
                               
                            </table>
                        </div>
                        <div class="card-footer p-0 bg-primary">
                        <a href="" class="btn d-block w-100 mx-auto" data-toggle="modal" data-target="#myModal">ADD</a>
                        </div>
                    </div>
                        <?php include 'inserting/insertpublications.php' ?>
                        <input type="text" hidden class="form-rounded-1" value="<?php echo $row['yearid']; ?>" id="tyearid">
						<input type="text" hidden class="form-rounded-1" value="<?php echo $row['monthid']; ?>" id="tmonthid">

                    </div>
                </div>
        </div>
    </div>
 </section>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <?php include 'includes/footer.php' ?>
 <script>
 
 
 $(document).ready(function(){
         // showUser();
    showpublish();
        //Add New
        $(document).on('click','#addpublish', function(){
            if ($('#adtitle').val()=="" || $('#addetail').val()=="" || $('#adtype').val()=="" || $('#addate').val()=="" || $('#adugc').val()=="" || $('#adbiblo').val()=="" || $('#adisbn').val()=="" )
            {
                  alert('Please insert all values');
            }
            else
            {
            
                $title=$('#adtitle').val();
                $detail=$('#addetail').val();
                $type=$('#adtype').val();
                $date=$('#addate').val();
                $ugc=$('#adugc').val();
                $biblo=$('#adbiblo').val();
                $isbn=$('#adisbn').val();
                $venue=$('#advenue').val();
                $yearid=$('#adyearid').val();
                $monthid=$('#admonthid').val();

                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        
                        title:$title,
                        detail:$detail,
                        type:$type,
                        date:$date,
                        ugc:$ugc,
                        biblo:$biblo,
                        isbn:$isbn,
                        venue:$venue,
                        yearid:$yearid,
                        monthid:$monthid,
                        status : 'enable', 
                        addpub: 1,
                    },
                    success: function(){
                      
                        $('#adtitle').val()=="" || $('#addetail').val()=="" || $('#adtype').val()=="" || $('#addate').val()=="" || $('#adugc').val()=="" || $('#adbiblo').val()=="" || $('#adisbn').val()==""
                        showpublish();
                        alert('Successfully added!');
                         $("#myModal").modal("hide");
                    }
                });
            }
            
        });



        $(document).on('click', '.Deletepub', function(){
            $id=$(this).val();

            var r = confirm("Press a button!");
            if (r == true) {
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                        delpub: 1,
                    },
                    success: function(){
                        showpublication();
                    }
                });
            } 
                
        });

        function showpublish(){
            $yearid=$('#tyearid').val();
                $monthid=$('#tmonthid').val();
                    $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        yearid:$yearid,
                        monthid:$monthid,
                        showpub: 1,
                    },
                    success: function(response){
                            $('#achtbl').html(response);
                            $(".mod").modal("hide");
                        }
                });
            }


            $(document).on('click', '.editpub', function(){
            $id=$(this).val();
              $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $id,
                       editpub:1,
                       
                    },
                    success: function(){
                        showpublication();
                    }
                });
             
                
        });


        $(document).on('click','#updatepub', function(){
            $uid=$(this).val();
            $('#editpub'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#title').val()=="" || $('#detail').val()=="" || $('#type').val()=="" || $('#date').val()=="" || $('#ugc').val()=="" || $('#biblo').val()=="" || $('#isbn').val()=="" )
            {
                  alert('Please insert all values');
            }
            else
            {
            
                $title=$('#title').val();
                $detail=$('#detail').val();
                $type=$('#type').val();
                $date=$('#date').val();
                $ugc=$('#ugc').val();
                $biblo=$('#biblo').val();
                $isbn=$('#isbn').val();
                $venue=$('#venue').val();
                $yearid=$('#yearid').val();
                $monthid=$('#monthid').val();

                $.ajax({
                    type: "POST",
                    url: "inserting/insert.php",
                    data: {
                        id: $uid,
                        title:$title,
                        detail:$detail,
                        type:$type,
                        date:$date,
                        ugc:$ugc,
                        biblo:$biblo,
                        isbn:$isbn,
                        venue:$venue,
                        yearid:$yearid,
                        monthid:$monthid,
                        status : 'enable', 
                        updatepub: 1,
                    },
                    success: function(){
                      
                        $('#title').val()=="" || $('#detail').val()=="" || $('#type').val()=="" || $('#date').val()=="" || $('#ugc').val()=="" || $('#biblo').val()=="" || $('#isbn').val()==""                        
                        showpublish();
                        alert('Successfully added!');
                      
                    }
                });
            }
            
        });


        $(document).on('click', '#pubverify', function(){
            $uid=$(this).val();
            $('#editpub'+$uid).modal('hide');
            $('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
            if ($('#title').val()=="" || $('#detail').val()=="" || $('#type').val()=="" || $('#date').val()=="" || $('#ugc').val()=="" || $('#biblo').val()=="" || $('#isbn').val()=="" )
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
                        verifypub: 1,
                    },
                    success: function(){
                        $('#title').val()=="" || $('#detail').val()=="" || $('#type').val()=="" || $('#date').val()=="" || $('#ugc').val()=="" || $('#biblo').val()=="" || $('#isbn').val()==""
                        
                        alert('Successfully verified');
                      
                      
                        showpublish();
                       
                    }
            });
            }
        });
            

 
    });
 
 
 
 </script>