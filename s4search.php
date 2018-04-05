<html>
<head> 
<title>IPL Database</title>
<style>
table,th,td{
	border :1px dashed black;
	background-color:yellow;
	color:red;
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
  <img class="mySlides" src="ipl2008.jpg" style="width:100% " >
  <img class="mySlides" src="2009ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2010ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2011ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2012ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2013ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2014ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2015ipl.jpg" style="width:100% " >
  <img class="mySlides" src="2016ipl.jpg" style="width:100% " >
    <img class="mySlides" src="kohli.jpg" style="width:100% " >
  <img class="mySlides" src="dhoni.jpg" style="width:100% " >
  <img class="mySlides" src="abd.jpg" style="width:100% " >
  <img class="mySlides" src="brendon.jpg" style="width:100% " >
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
$m_number=$_POST['mno'];


$sql="SELECT *  FROM matches where  mnumber='$m_number'";
$result=$conn->query($sql);
if($result->num_rows >0)
{
	echo  "<table><tr><th>Match_no</th><th>Sixer</th><th>most_runs</th><th>BBI</th>
	<th>MOM</th><th>Team1</th><th>Team2</th><th>winner</th></tr>";
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row["mnumber"]."</td>".
		"<td>".$row["sixer"]."</td>".
		"<td>".$row["mostruns"]."</td>".
		"<td>".$row["BBI"]."</td>".
		"<td>".$row["MOM"]."</td>".
		"<td>".$row["team1"]."</td>".
		"<td>".$row["team2"]."</td>".
		"<td>".$row["winner"]."</td>"."</tr>";
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