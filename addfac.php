<?php
$sname="localhost";
$user="root";
$pass="root";
$dbname="test";
$conn=new mysqli($sname,$user,$pass,$dbname);
if($conn->connect_error)
{
	echo "Error Occured..!";
}
  $query="INSERT into facultytable values('".$_POST['fname']."','".$_POST['subj']."')";
   if(mysqli_query($conn,$query))
   {
	 echo "<h1><b>Faculty record added successfully....!!</b></h1>";
   }
   else{
	   	echo "<h1><b>There was a problem occured..while adding faculty details..!</b></h1>";
  }

?>