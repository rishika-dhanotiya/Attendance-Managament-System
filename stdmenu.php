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
$query="(Select *from attendance where rollno='".$_POST['rno']."')UNION ALL(Select  *from csv1 where rollno='".$_POST['rno']."')";
 $result=mysqli_query($conn,$query);
 if($result->num_rows>0)
 {
 echo "<table border=4><tr><th>RollNo</th><th>FirstName</th><th>LastName</th><th>Subject</th><th>Present</th><th>No.Of Classes</th></tr>";
 
 foreach($result as $row)
 {
	 echo "<tr><td>" .$row['rollno']. "</td><td>" .$row['fname']. "</td>
		  <td>" .$row['lname']. "</td><td>" .$row['subject']. "</td>
		  <td>" .$row['present']. "</td><td>" .$row['NOC']. "</td></tr>";
 }
 echo "</table";
 }
 else
 {
	 echo "<h3><b>Please Enter Correct Roll Number...!</b></h3>";
	 header("Refresh:4;url=stdmenu.html");
 }
$conn->close();
?>