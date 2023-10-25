<?php
$connection=mysqli_connect("localhost","root","","booking");
if($connection===false)
{
    echo "connection error";
}
$result="select * from customer";
$result1=mysqli_query($connection,$result);

echo "<html><head><title>SQL Table in HTML</title></head><body style='background-image:url(pics/sideview.jpg);background-size:cover;background-repeat:no-repeat;backdrop-filter:blur(1px)brightness(80%)'>";
    echo "<center><table border='1'style='background-color:cadetblue;padding:5px 2px 2px;' ><form>";
    echo "<tr><th>roomno</th><th>first</th><th>last</th><th>address</th><th>aadhar</th><th>phone</th><th>bedtype</th><th>accomdation</th><th>food</th><th>additionalaccomdation</th><th>dateofbooking</th><th>dateofleaving</th><th>paymentoption</th></tr>"; // Add more headers as needed
while($row=$result1 -> fetch_assoc()){
    echo "<tr><td>". $row["roomno"]."</td><td>". $row["firstname"]."</td><td>". $row["lastname"]."</td><td>". $row["address"]."</td><td>". $row["aadhar"]."</td><td>". $row["phone"]."</td><td>". $row["bedtype"]."</td><td>". $row["accomdation"]."</td><td>". $row["food"]."</td><td>". $row["additionalaccomdation"]."</td><td>". $row["dateofbooking"]."</td><td>".
    $row["dateofleaving"]."</td><td>". $row["paymentoption"]."</td></tr>";   
}

    echo "</table></form></center><br/><br/> ";
    
    echo "</body></html>";
   

$connection->close();
echo "<div style='width: 300px;height: 300px;background-color:cadetblue;padding:5px ><form action='update.php' method='post'><center><h1>update</h1>roomno: <input type='number' name='roomno'/><br/><br/>date of booking: <input type='date' name='dateofbooking'/><br/><br/>date of leaving: <input type='date' name='dateofleaving'/><br/><br/><input type='submit' value='submit'/></center></form></div>";
echo "<div style='width: 300px;height: 300px;background-color:cadetblue;padding:5px ><form action='delete.php' method='post'><center><h1>delete</h1>roomno: <input type='number' name='roomno'/><br/><br/><input type='submit' value='submit'/></center></form></div>";
?>