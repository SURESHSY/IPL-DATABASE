<?php 
header("content-type:image/jpeg");
$servername="localhost";
$username="root";
$password="";
$dbname="ipldb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
echo "";
//$search_name=$_POST['sname'];

$sql="select * from images ";
$result=$conn->query($sql);
if($result->num_rows >0)
{
	
	while($row=$result->fetch_assoc()){
		   echo $row[1]."<br/></br><br/></br><br/></br><br/></br>";
	}
	
	echo "<img src='$row[1]'/>";
}
else{
	echo "0 results";
}

$conn->close();
?>