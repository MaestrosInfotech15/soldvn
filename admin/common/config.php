<?php
session_start();
$conn=mysqli_connect("localhost","maestxno_halo","Abc123~");

if(!$conn)
{
   echo "Coudnt find the connection".mysqli_error($conn);	
}
else
{
   mysqli_select_db($conn,"maestxno_soldvn");	
}

?>