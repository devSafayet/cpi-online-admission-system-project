<?php

//data--------1


//$con=mysqli_connect("localhost","biuadmis_admission","S2YIIGZ4o","biuadmis_admission");
$con=mysqli_connect("localhost","root","","cpiadmission"); or die(mysqli_error());
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysqli_query($con,"select s_name from t_user_data where s_id like '%$q%' order by s_id LIMIT 5");
while($row=mysqli_fetch_array($sql_res))
{
$username=$row['s_name'];

$b_username='<strong>'.$q.'</strong>';

$final_username = str_ireplace($q, $b_username, $username);

?>
<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/>
</div>
<?php
}
}
?>