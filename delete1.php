<body>
<?php 



$conn=new mysqli("localhost","root","","ipldb");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
$mno=$_POST['mno'];


$sql="delete from matches where mnumber='$mno';";
if($conn->query($sql)===TRUE)
{
	echo "";
	
}
else{
	echo ("error creating database:".$conn->error);
}

$conn->close();
?>



</body>
</html>