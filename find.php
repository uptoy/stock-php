<?php
$con=mysqli_connect("localhost","root","","stock");
if(mysqli_connect_error())
{
    echo "Failed to connect to MySQL:".mysqli_connect_error();
}
$campany =$_REQUEST['name'];
$sql="SELECT * FROM campany where name LIKE '%$campany%'";
if($result=mysqli_query($con,$sql))
{
    $i=1;
 
    while($row=mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[0]."</td>";
    echo "</tr>";
    $i++;
}
}
mysqli_close($con);
?>