<html>
<head> 
<title>IPL Database</title>
<style>
table,th,td{
	border :1px dashed black;
	color:black;
	background-color:white;
}
body{ background-color:cyan;font-size:25;
         
}
h1{
color:red;text-decoration:underline;
margin-left:200px;
margin-right:200px;
}

#m1{
font-size:20px;
color:green;}


#b1{
size:50px;}

#slider{
border:2px outset yellow;
width:600px;
position:relative;
float:right;
margin-top:50px;
transition:width 2s,transform 2s;
}



#slider:hover{
width:630px;
transform:rotate(5deg);
}


#bigwrapper{
	width:1340px;
	margin-top:10px;
}


#left{
float:left;
width:550px;
padding-left:35px;
position:relative;
text-shadow:2px 2px pink;}
footer{
margin-bottom:0px;
position:absolute;
top:650px;
left:10px;
border-top:2px solid black;
width:1340px;
text-align:center;
font-size:20px;
color:blue;
padding-top:13px;
}

.asx{
background-image:url("s5.jpg");



background-size:cover;
}
</style>
</head>
<body>
<H1>WELOME TO OUR IPL STATISTICS</H1>
<hr>
<marquee direction="right" id="m1">INDIAN PREMIER LEAGUE-2017 statitics</marquee>
<hr>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body bgcolor="red" CLASS="asx">
<div id="bigwrapper">
<div  id="slider">
  <img class="mySlides" src="w1.jpg" style="width:100% " >
  <img class="mySlides" src="w2.jpg" style="width:100% " >
  <img class="mySlides" src="w3.jpg" style="width:100% " >
  <img class="mySlides" src="w4.jpg" style="width:100% " >
  <img class="mySlides" src="w5.jpg" style="width:100% " >
  <img class="mySlides" src="w6.jpg" style="width:100% " >
  <img class="mySlides" src="w7.jpg" style="width:100% " >
  <img class="mySlides" src="w8.jpg" style="width:100% " >
  <img class="mySlides" src="w9.jpg" style="width:100% " >
</div>
<script>
	var myIndex = 0;
	carousel();
	function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel,2000); // Change image every 2 seconds
}


</script>
<div id="left">
<form action="orange.php" method="get">

1.RESULTS for your search:
<?php 
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



$sql="SELECT *  FROM points ";
$result=$conn->query($sql);
if($result->num_rows >0)
{
	echo  "<table><tr><th>Team name</th><th>Matches played</th><th>Points</th></tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["tname"]."</td>".
		"<td>".$row["matches_played"]."</td>".
		"<td>".$row["points"]."</td>"."</tr>";
	}
}
else{
	echo "0 results";
}

$conn->close();
?>
</form>
</br>
</br>

</form>
</div>
</div>
</body>