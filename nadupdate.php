<?php
$sname="localhost";
$user="root";
$pass="root";
$dbname="test1";

$conn=new mysqli($sname,$user,$pass,$dbname);

 if($conn->connect_error){
	echo "error";
}
//echo "Successful";
 $sql1 = "TRUNCATE TABLE csv1";
 $sql2 = "LOAD DATA LOCAL INFILE 'nadcsv.csv'
 INTO TABLE csv1
 FIELDS TERMINATED BY ','

(rollno,fname,lname,subject,present,NOC)";

 /*$con = mysqli_connect("localhost","root","root","test1");

  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
};*/

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
 
if (mysqli_affected_rows($conn) === 1) {
  $message = "Data updation was failed..!";
} else {
  $message = "<h2><b>The Data was successfully added!</b></h2>";
 // $message .= mysqli_error($conn); 
};

echo $message;

$conn->close(); 

?>