<?php
$sname="localhost";
$user="root";
$pass="root";
$dbname="test1";
$conn=new mysqli($sname,$user,$pass,$dbname);
if($conn->connect_error)
{
	echo "error";
}
$query="Select *from attendance";
 $result=mysqli_query($conn,$query);
 echo "<table><tr><th>RollNo.</th><th>FirstName</th><th>LastName</th><th>Subject</th><th>Present</th><th>No.Of Classes</th></tr>";
 foreach($result as $row)
 {
	 echo "<tr><td>" .$row['rollno']. "</td><td>" .$row['fname']. "</td>
		  <td>" .$row['lname']. "</td><td>" .$row['subject']. "</td>
		  <td>" .$row['present']. "</td><td>" .$row['NOC']. "</td>
		 <td>" .$row['COL 7']. "</td><td>" .$row['COL 8']. "</td>
		  <td>" .$row['COL 9']. "</td><td>" .$row['COL 10']. "</td><td>" .$row['COL 11']. "</td>
		  <td>" .$row['COL 12']. "</td>
		  <td>" .$row['COL 13']. "</td><td>" .$row['COL 14']. "</td><td>" .$row['COL 15']. "</td><td>" .$row['COL 16']. "</td>
		  <td>" .$row['COL 17']. "</td><td>" .$row['COL 18']. "</td><td>" .$row['COL 19']. "</td>
		  <td>" .$row['COL 20']. "</td>
		  <td>" .$row['COL 21']. "</td>
		  <td>" .$row['COL 22']. "</td>
		  <td>" .$row['COL 23']. "</td><td>" .$row['COL 24']. "</td>
		  <td>" .$row['COL 25']. "</td><td>" .$row['COL 26']. "</td>
		  <td>" .$row['COL 27']. "</td><td>" .$row['COL 28']. "</td>
		  <td>" .$row['COL 29']. "</td><td>" .$row['COL 30']. "</td>
		  <td>" .$row['COL 31']. "</td><td>" .$row['COL 32']. "</td>
		  <td>" .$row['COL 33']. "</td><td>" .$row['COL 34']. "</td>
		  <td>" .$row['COL 35']. "</td></tr>";
 }
 echo "</table";
 /*if($conn->query($query)===TRUE)
 {
	 echo "<h1><b>Faculty Record Deleted Successfully....!</b></h1>";
 }
 else
 {
	 echo "<h1><b>There was a problem occur..while deleting faculty record</b></h1>";
 }*/
$conn->close();
?>