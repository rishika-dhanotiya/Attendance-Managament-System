<?php
$subject=$_GET['subject'];
//echo $subject;

?>
<html>
 <head>
 <title> View Attendence </title>
 <style type="text/css">
 .one{
     background-image:url("mark1.jpg");
    height:100%;
   background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.three{
  z-index: 1;
 // background: #FFFFFF;
  max-width: 500px;
 // margin: 0 auto 150px;
 // padding: 35px;
 margin:22px 0 0 65px;
  font-size:22px;
 
}
 .three input{
   font-family:Arial,Helvetica,serif;
  outline: 0;
  background: #f2f2f2;
  width: 70%;
  border: 0;
  margin: 10px 0 0 8px;
  padding: 7px;	
 
  //box-sizing: border-box;
  font-size: 22px;
}
/*.four{
  // z-index: 1;
  //max-width: 550px;
 //margin:0px 0 0 280px;
 margin:0 0 0 230px;
  font-size:22px;
}
.four input{
 font-family:Arial,Helvetica,serif;
  outline: 0;
  background: #f2f2f2;
  width: 70%;
  border: 0;
  margin: 50px 0 0 8px;
  padding: 7px;	
  font-size: 22px;
}*/
 .button {
  font-family:Arial,Helvetica,sans-serif;
//  text-transform: uppercase;
   border-radius:7px;
  background-color:black;
  border: none;
  color:white;
  text-align: center;
  font-size: 20px;
  padding: 13px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin:150px 0 0 150px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


 h1{
    text-align:center;
    font-size:40px;
    text-shadow:1px 1px blue;
}
.three a{
color: white;
    font-size: 20px;
    font-family:Arial,Helvetica,sans-serif;
    padding: 3px;
    text-decoration: none;
    display: block;
}

 </style>

</head>
 <body>
 <div class="one">
  <div class="two">
  <h1> <i>Select Subject </i> </h1>
</div>
   <div class="three">
 <button class="button"><a href="AMS.xlsx"><?php echo $subject;?></a></button><br><br>
 <!--<button class="button"><a href="AMS.xlsx">Numerical analysis & Design</a></button><br><br>
 <button class="button"><a href="selsubj.html">System Programming</a></button><br><br>
 <button class="button"><a href="selsubj.html">Analog electronics</a></button><br><br>
 <button class="button"><a href="selsubj.html">Computer Graphics</a></button><br><br>
 -->
</div>
</div>
</body>
</html>