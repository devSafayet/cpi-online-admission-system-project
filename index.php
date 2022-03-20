<?php
session_start();

//database-----1

$con=mysqli_connect("localhost","root","","cpiadmission");
if(!isset($con))
{
    die("Database Not Found");
}


if(isset($_REQUEST["u_sub"]))
{
    
 $id=$_POST['u_id'];
 $pwd=$_POST['u_ps'];
 if($id!=''&&$pwd!='')
 {
   $query=mysqli_query($con ,"select * from t_user_data where s_id='".$id."' and s_pwd='".$pwd."'");
   $res=mysqli_fetch_row($query);
   $query1=mysqli_query($con ,"select * from t_user where s_id='".$id."'");
   $res1=mysqli_fetch_row($query1);

   if($res)
   {
    $_SESSION['user']=$id;
    header('location:admsnform.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
   
   if($res1)
   {
    $_SESSION['user']=$id;
    header('location:homepageuser.php');
   }
   else
   {
    
    echo '<script>';
    echo 'alert("Invalid username or password")';
    echo '</script>';
   }
  }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="css/login.css"></link>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

       
        <title>Welcome On CPI Online Admission Portal </title>
        
        
        
    </head>
    <body  style="background-image:url('./images/inbg.jpg');" >
        <div id="loading1"></div>
	
        <form id="index" action="index.php" method="post">
            
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12"> 
                        <center> <img src="images/cpi-logo.png" width="96%" style="box-shadow: 1px 5px 14px #999999; "></img> <center>
                  </div>
                 </div>    
            <marquee style=color:green;font-size:15px;> Admission Going On Summer 2021 in CPI! For Apply click On Registration Now and get admission user ID and Password. 
            Then login with your credentials.For the technical support please call us If you face any problem.  </marquee>
                <div  id="divtop">
				
                    
                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                            <div id="dmain"  > 
							
                               <center><img src="./images/loginuser.png" width="120px" height="100px" ></center>
                                <br> <center> If you have user id & password you can login,otherwise click on "<a href="signup.php">  <i style="color:darkblue;font-size:20px;"> Registration For Apply</i>
 </a>" & get ID,Password. </center>
								<br>
                                    <input type="text" id="u_id" name="u_id" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your Admission User ID"><br>
                                    <input type="password" id="u_ps" name="u_ps" class="form-control" style="width:300px; margin-left: 66px;" placeholder="Enter Your Password"><br>
                                    <input type="submit" id="u_sub" name="u_sub" value="Login" class="toggle btn btn-primary" style="width:100px; margin-left: 160px;"><br>
                                    
                             </div>
                     </div>
                    </div>
               </div>
            </div>  
            </div>
        </form>  
		<br> <br> <br> <br> <center style="color:red;">*** Please use mozilla firefox or google chrome. This script is compatible with mozilla &amp; firefox.</center> <hr>
	<center style="color:blue;">Developed By 5th-group(B1)-J <br> Chittagong Polytechinic Institute &amp; Computer Technology <br> Contact: +8809638396845 <br> Email: mrishafayet003@gmail.com</center>
       </body>
</html>