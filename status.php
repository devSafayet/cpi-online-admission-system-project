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

//<img src='./images/Tick.png' width='20px'>
//style='background-color:transparent;border:none;'


if(isset($_REQUEST["appr"]))
{
    
    $sql  = "insert into t_status values(";
    $sql .= "'" . $getid . "',";
    $sql .= "'Approved')";
    
    
  
    
    
    mysqli_query($con, $sql);
    echo $sql;
    
    
}



?>