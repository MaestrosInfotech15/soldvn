
<?php
include('../common/config.php');

///print_r($setting);
//if(isset($_POST['submit'])){


 extract($_POST);
 
 $pass=strlen($password); 	
  if($pass <=5)
		{
		  echo "Password length minimum 5 character long "; 
		}


 $dsgf = mysqli_query($conn,"INSERT INTO `user`(`fname`,`lname`,`email`,`password`,`mobile`,`username`,`role`)VALUES('$fname','$lname','$email','$pass','$mobile','$username','$role')");

  if($dsgf){

echo"<span style='color:green'>Successfully</span>";
   echo '<script>window.location="user.php?msg=add new text.."</script>';


  }


//}
?>