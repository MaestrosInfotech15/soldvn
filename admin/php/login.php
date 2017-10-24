<?php

include('../common/config.php');


$email=$_POST['email'];

$pass=$_POST['password'];


$us=mysqli_query($conn, "SELECT * FROM `user` WHERE (`email`='$email' OR `username`='$email') AND `role`='1'");

$us_count=mysqli_num_rows($us);


if($us_count)

{

$us_fetch=mysqli_fetch_array($us);


if($us_fetch['password'] == $pass)

{

$_SESSION['admin_id']=$us_fetch['id'];


echo '<span style="color:green;">Successfully Login. Please Wait...</span>';



echo "<script>function auto_refresh(){

       window.location='index.php';

    }

    var refreshId = setInterval(auto_refresh, 2000);

</script>";

}

else

{

echo '<span style="color:red;">Please Enter Correct Password</span>';

}


}

else

{
echo '<span style="color:red;">Please Enter Correct Username or Email</span>';

}

?>