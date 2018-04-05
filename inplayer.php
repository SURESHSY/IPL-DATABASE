<body>
<?php 



$conn=new mysqli("localhost","root","","ipldb");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
$pname=$_POST['pname'];
$tname=$_POST['tname'];
$matches=$_POST['matches_played'];
$role=$_POST['role'];
$runs=$_POST['runs'];
$wickets=$_POST['wickets'];
$high=$_POST['highscore'];
$bbi=$_POST['bbi'];
$ducks=$_POST['ducks'];

$sql="insert into players(pname,tname,matches_played,role,runs,wickets,highscore,BBI,ducks)
 values('$pname','$tname','$matches','$role','$runs','$wickets','$high','$bbi','$ducks');";
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