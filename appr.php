<?php
    error_reporting(0);
$getid= $_GET["id"];

//data-----------1

$con=mysqli_connect("localhost","root","","cpiadmission");
//$con=mysqli_connect("localhost","biuadmis_admission","S2YIIGZ4o","biuadmis_admission");
if(!isset($con))
{
    die("Database Not Found");
}



    //update t_usermark set s_mark='12' where s_id='CUTM00003';
    $sql  = "update t_status set s_stat=";
    $sql .= "'Approved'";
    $sql .= " where s_id='" . $getid . "'";
    
    mysqli_query($con, $sql);
    echo $sql;
    
?>
<html>
    
    <head>
        
        
    </head>
    
</html>