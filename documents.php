<?php


error_reporting(0);
session_start();

include 'fileupload.php';   
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            
            function send()
            {
                if(document.getElementById('dec').checked)
                    {
                        window.location='admsnreport.php';
                        return false;
                    }
                    return true;
            }
        </script>
    </head>
    <body style="background-image:url('./images/inbg.jpg');">
        <form id="docup" enctype="multipart/form-data" name="docup" action="documents.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/cpi-logo.png" width="100%" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div>
			 <br> <br> <br> <br> 
            <div class="container" style="margin-left:100px;">
            <table class="table table-striped">
			<p align="left" style="color:red"> Please upload Transcript/Certificate in PDF format,Photo and sign must be in jpg/jpeg format. After attach file Click On "Submit" Button after successfull upload click on Declaration check point "I accept" </p> 
                            <thead>
                                       <tr>
                                           <th >
                                       <font style=" font-family: Verdana;  font-size:19px; color:green;"> Upload Your Documents</font>
                                           </th>
                                        </tr>            
                            </thead>
                            <tbody>
                            <tr>
                                 <td>Applicant Passport Size Image :</td>
                                 <td><input type="file" id="fpic" name="fpic" ><br>
                                     </td>
                            </tr> 
                           
                             <tr>
                                <td>SSC or Equavalent Mark Sheet :</td>
                                <td>
                                     <input type="file" id="ftndoc" name="ftndoc"><br>
                                     
                                 </td>
                             </tr>
                             
                             <tr>
                                 <td>
                                     SSC or Equavalent Certificate :
                                 </td>
                                 <td>
                                     <input type="file" id="ftcdoc" name="ftcdoc"><br>
                                     
                                 </td>
                             </tr>
                              
                             <tr>
                                 <td>
                                     HSC/Diploma or Equvalent Mark Sheet :
                                 </td>
                             
                            
                                 <td>
                                     <input type="file" id="fdmdoc" name="fdmdoc"><br>
                                     
                                 </td>
                             </tr>
                             <tr>
                                <td>
                                    HSC/Diploma or Equvalent Certificate :
                                </td>
                             
                                <td><input type="file" id="fdcdoc" name="fdcdoc"><br>
                                 </td>
                             </tr>
                             
                            <tr>
                                <td>
                                    Graduation or Equvalent Transcript/Certificate 
                                </td>
                            
                                 <td>
                                    <input type="file" id="fide" name="fide"><br>
                                 
                                </td>
                            </tr> 
                            
                            <tr>
                                <td>
                                    Applicant Signature
                                </td>
                            
                                 <td>
                                    <input type="file" id="fsig" name="fsig"><br>
                                 
                                </td>
                            </tr>
                            
                            <tr>
                                
                                <td colspan="2"><input type="submit" id="fpicup" name="fpicup" class="toggle btn btn-primary"></td>
                            </tr>
                           
                           </tbody>
                       </table>
        </div>
            <div class="container">
              <center> <div class="jumbotron" style="width:100%; box-shadow: -3px 3px 10px #999999;   margin-top:10px;">
                      <h3>
                          <b> <font style=" font-family: Verdana;  font-size:19px;"> Declaration By The Applicant</font></b>
                      </h3>
                           <p><font style=" font-family: Verdana;font-size:medium">
                                    I hereby solemnly declare that all the particulars given in this form are true to the best of my knowledge
                                    and belief. I shall abide by the rules and regulations laid down by the university from time to time.
                                    In case the particulars furnished by me are found false, my admission stands canceled.
                          
                                </font></p>
                           
                           <input type="checkbox" id="dec" name="dec" value="I accept" onclick="send()"><font style=" font-family: Verdana;font-size:medium">
                           I accept declaration </font> 
                               
                           
                         
                  </div>
            </div>
        </form>
    </body>
</html>
