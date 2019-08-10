<?php 
    include_once 'confiq.php';
    if(isset($_POST['add']))
    {
        $year = $_POST['year'];
        $status = $_POST['status'];
        mysqli_query($conn,"insert into `year` (year , status) values ('$year','$status')");
        $result = mysqli_query($conn,"select yearid from year where year = '$year' ");
        while($row = mysqli_fetch_assoc($result)) {
            $yearid = $row['yearid'];
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Jan','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Feb','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Mar','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Apr','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','May','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Jun','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Jul','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Aug','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Sep','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Oct','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Nov','$status')");
            mysqli_query($conn,"insert into `month` (yearid,monthname,status) values ('$yearid','Dec','$status')");
        }
       
    }


    if(isset($_POST['add'])){
        
    }