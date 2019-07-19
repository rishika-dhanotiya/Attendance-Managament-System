<?php
$sname="localhost";
$user="root";
$pass="root";
$dbname="test";
$conn=new mysqli($sname,$user,$pass,$dbname);
if($conn->connect_error)
{
	echo "error";
}
  $fname=$_POST["fname"];
  $sql="select * from facultytable where facultyname='".$fname."'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		$query="DELETE from facultytable where facultyname='".$fname."'";
		if($conn->query($query)){
			echo "<h2><b>Faculty Record Deleted Successfully....!</b></h2>";
			header("Refresh:5;url=removefac.html");
		}
		else{
			echo "Some problem Occured..!";
		}
	}
	else{
		echo "<h2><b>Faculty Name doesn't exist...!</b></h2>";
		header("Refresh:4;url=removefac.html");
	}
 //$query="DELETE from facultytable where facultyname='".$_POST['fname']."'";
/* if($conn->query($query)===TRUE)
 {
	 echo "<h1><b>Faculty Record Deleted Successfully....!</b></h1>";
	 header("Refresh:5;url=removefac.html");
 }
 else
 {
	 echo "<h1><b>There was a problem occur..while deleting faculty record</b></h1>";
	 header("Refresh:5;url=removefac.html");
 }*/
$conn->close();
?>