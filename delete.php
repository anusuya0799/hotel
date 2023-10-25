<?php
$roomno=$_POST['roomno'];
$connection=mysqli_connect("localhost","root","","booking");
if($connection===false)
{
    echo "connection error";
}
$result="delete from customer where roomno='$roomno'";
mysqli_query($connection,$result);
echo "Supdate successfully";
?>