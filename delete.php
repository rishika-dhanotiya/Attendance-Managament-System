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

$name=$_POST["name"];
//echo $name;


	$sql="select * from userdetails where sname='".$name."'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		$query="DELETE from userdetails where sname='".$name."'";
		if($conn->query($query)){
			echo "<h2><b>Student Record Deleted Successfully....!</b></h2>";
			header("Refresh:5;url=removestd.html");
		}
		else{
			echo "Some problem Occured..!";
		}
	}
	else{
		echo "<h2><b>Student Name doesn't exist...!</b></h2>";
		header("Refresh:4;url=removestd.html");
	}
 		
/* if($conn->query($query)=== TRUE)
 {
	 echo "<h1><b>Student Record Deleted Successfully....!</b></h1>";
			header("Refresh:5;url=removestd.html");
 }
 else
 {
	 echo "<h1><b>There was a problem occur..while deleting student record</b></h1>";
	 header("Refresh:5;url=removestd.html");
 }*/
$conn->close();
?>