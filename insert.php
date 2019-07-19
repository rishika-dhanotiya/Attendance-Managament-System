<?php
 $sname="localhost";
 $user="root";
 $pass="root";
 $dbname="test";
 $conn=new mysqli($sname,$user,$pass,$dbname);
 if($conn->connect_error)
 {
	 echo "Error Occured";
 }

  $query="INSERT into userdetails values('".$_POST['stdname']."','".$_POST['rollno']."', '".$_POST['cour']."', '".$_POST['sem']."','".$_POST['contact_no']."', '".$_POST['addr']."')";
   if($conn->query($query))
 {
	 echo "<h2><b>Student Record Added successfully...!</b></h2>";
	 header("Refresh:4;url=addstudent.html");
 }
 else
 {
	 echo "<h2><b>There was a problem occur..while adding student record</b></h2>";
	 header("Refresh:4;url=addstudent.html");
 }
 
  $conn->close();
?>