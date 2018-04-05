
<html>
<head></head>
<body style="font-size:30px;color:blue;background-color:cyan;text-align:center;">
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="ipldb";



$conn=new mysqli("localhost","root","","ipldb");
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
$sql="INSERT INTO  matches(mnumber,
sixer,mostruns,BBI ,MOM ,team1,
team2 ,winner) values (1,'Chris Gayle','Virat Kohli','Bhuvaneshwar Kumar','Virat Kohli','RCB',
'SRH','RCB'),(2,'Rohit Sharma','Steven Smith','Jasprith Bumrah','Rohit Sharma','RPS','MI','MI'),
(3,'Suresh Raina','Suresh Raina','Umesh Yadav','Umesh Yadav','KKR','GL','KKR');";

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