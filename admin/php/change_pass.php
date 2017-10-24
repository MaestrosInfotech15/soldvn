<?php 
   include('../common/config.php');

	//if(isset($_POST['submit'])){
    extract($_POST);
	$login=$_SESSION['admin_id'];
		$cpassword=$_POST['cpassword'];
		$sql="select * from `user` where `id`='$login'";
		$result=mysqli_query($conn,$sql) or die(mysql_error());
		$row=mysqli_fetch_array($result);
		if($row['password']==$cpassword)
		{
			if($_POST['confirm']==$_POST['npwd'])
			{
				
			$sql="update `user` SET `password`='$npwd' where `id`='$login'";
			mysqli_query($conn,$sql);
			echo $message="<span style='font-size:12px; color:green;font-weight: 600;'>Updated successfully</span>";
			}
			else{
				echo $message="<span style='font-size:12px; color:#F00;font-weight: 600;'>password mismatch</span>";
			
			}
		}
		else{
			echo $message="<span style='font-size:12px; color:#F00;font-weight: 600;'>old password is incorrect</span>";
		}
	
		
?>