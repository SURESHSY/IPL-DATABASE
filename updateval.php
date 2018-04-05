<body>
<?php 



$conn=new mysqli("localhost","root","","ipldb");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
$tname=$_POST['tname'];
$coach=$_POST['coach'];
$cap=$_POST['captain'];
$sponsors=$_POST['sponsors'];
$mentor=$_POST['mentor'];
$owner=$_POST['owner'];
$home=$_POST['home'];

$sql="update teams  set coach='$coach',captain='$captain',sponsors='$sponsors',mentor='$mentor',
owner='$owner',Homeground='$home' where tname='$tname'";
$result=$conn->query($sql);
if($result->num_rows >0)
{
	echo "you have logged in succesfully</br>";
	header("Location:search.html");
	
}
else{
	echo "problem with login";
	header("Location: ipl.html");
}

$conn->close();
?>


</body>
</html>