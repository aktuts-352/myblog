<?php
include "dbcon.php";
if(isset($_POST['send']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$cmd = "insert into contact_details (contact_name,contact_email,contact_msg ) values ('$name','$email','$msg')";

if(mysqli_query($con,$cmd))
{
   echo "Message sent";
}
else
{
   echo "Error in ".$cmd;
}
}
?>