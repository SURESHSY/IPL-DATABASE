<body>
<?php 



$conn=new mysqli("localhost","root","","ipldb");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM DBA WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
if($result->num_rows >0)
{
	echo "you have logged in succesfully</br>";
	header("Location:option.html");
	
}
else{
	echo "problem with login";
	header("Location: nolog.html");
}

$conn->close();
?>


</body>
</html>