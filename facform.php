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
$query="select *from facultytable where facultyname='".$_POST['facultyname']."'";
$result=$conn->query($query);
  if($result->num_rows>0){
	 while($row=$result->fetch_assoc()){
   if($row['facultyname']== $_POST['facultyname'])
   {
	header("Location:takeatten.php?fc=".$row['facultyname']);
   } 
  else
  {
	header("Location:facform.html");
  }
  }
  }
  else {
	header("Location:facform.html");
  }
$conn->close();
?>