<?php

$sname="localhost";
$user="root";
$pass="root";
$dbname="test";

$conn=new mysqli($sname,$user,$pass,$dbname);

 if($conn->connect_error){
	echo "error";
}
//echo "Successful";

   $stmt="select * from logincheck where loginid='".$_POST['name']."'";
  //echo $stmt;
      $result=$conn->query($stmt);
		
		   if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
				if($row['pass']==$_POST['password']&&$row['status']=='admin'){
					
					header("Location:adminmenu.html");
					
				}
				else if($row['pass']==$_POST['password']&&$row['status']=='faculty'){
			
					header("Location:facultymenu.html");
				}
				else if($row['pass']==$_POST['password']&&$row['status']=='student')
				{
					header("Location:stdmenu.html");
				}
				else {				
					header("Location:loginform.html");
			         
				 }
		  }
		} 
		$conn->close();
?>