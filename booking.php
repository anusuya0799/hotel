<?php
$roomno=$_POST["roomno"];
$first=$_POST["first"];
$last=$_POST["last"];
$address=$_POST["address"];
$aadhar=$_POST["aadhar"];
$phone=$_POST["phone"];
$bedtype=$_POST["bedtype"];
$accomdation=$_POST["accomdation"];
$food=$_POST["food"];
$additionalaccomdation=$_POST["additionalaccomdation"];
$dateofbooking=$_POST["dateofbooking"];
$dateofleaving=$_POST["dateofleaving"];
$paymentoption=$_POST["paymentoption"];

$connection=mysqli_connect("localhost","root","","booking");
if($connection===false)
{
    echo "connection error";
}
$result="insert into customer values('$roomno','$first','$last','$address','$aadhar','$phone','$bedtype','$accomdation',
'$food','$additionalaccomdation','$dateofbooking','$dateofleaving','$paymentoption')";
if(mysqli_query($connection,$result))
{
    echo "<center>".'booked sucessfully'."<br/>";
    echo 'roomno:'.$roomno ."<br/>".'firstname:'. $first."<br/>".' lastname:'.$last."<br/>".' address:'.$address."<br/>".'aadhar no:'.$aadhar."<br/>".'phone no:'.$phone."<br/>".'bedtype:'.$bedtype."<br/>".'accomdation:'.$accomdation."<br/>".'food:'.$food."<br/>".'additional accomdation:'.$additionalaccomdation."<br/>".'date of booking:'.$dateofbooking."<br/>".'date of leaving:'.$dateofleaving."<br/>".'payment option:'.$paymentoption ."</center";
}
else{
    echo "error in inserting data";
}
$connection->close();
?>