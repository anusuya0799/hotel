<?php
$roomno=$_POST['roomno'];
$dateofbooking=$_POST['dateofbooking'];
$dateofleaving=$_POST['dateofleaving'];

$connection=mysqli_connect("localhost","root","","booking");
if($connection===false)
{
    echo "connection error";
}
$result="update customer set dateofbooking='$dateofbooking' ,dateofleaving='$dateofleaving' where roomno='$roomno'";
mysqli_query($connection,$result);
echo "update successfully";
?>