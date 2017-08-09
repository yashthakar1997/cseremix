<?php
error_reporting(0);
if(isset($_POST['submit']))
{
echo "data sucessfully added ";
$a = $_POST['name'];
$b = $_POST['city'];
$c = $_POST['location_lat'];
$d = $_POST['location_lon'];
$e = $_POST['created_at'];

$g = $_POST['password'];
$h = $_POST['type'];


$con=mysql_connect("localhost","root");
// Check connection
if (!$con)
  {
  echo"You Cannot Connect To MYSQL";
  }
mysql_select_db("nbl",$con);

 $sql="INSERT INTO cafes(name,city,location_lat,location_lon,created_at) VALUES('$a','$b','$c','$d','$e')";

 $sql1="INSERT INTO login(id,username,password,type) VALUES('','$a','$g','$h')";
 
$i=mysql_query($sql1);
if (isset($i))
{
	echo"user added sucessfully";
}
mysql_close($con);


$f=mysql_query($sql);
if (isset($F))
{
	echo"Location added sucessfully";
}
mysql_close($con);
}
?>