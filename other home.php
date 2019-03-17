<html>
	<head>
			<title>info medicine</title>
			
			<style type="text/css">
	body{
		 background-color:rgb(226,226,254);
		 background-image:url(medi3.jpg);
		 background-size:cover;
		 background-repeat:no-repeat;
		 background-height:400%;
}
	.status{color:white;
	font-size:70%;
	background-color:black;
	position:absolute;
	top:10%;
	left:0px;
	padding-left:35%;
	padding-right:62%;
	padding:;
	}
	
	
	.doc{
	position:absolute;
	top:30%;
	left:75%;
	}
	.about{color:white;
		font-size:100%;
	position:absolute;
	top:0px;
	left:51%;
	
	}
	
	.contact{color:white;
		font-size:100%;
	position:absolute;
	top:0px;
	left:41%;
	
	}
	.logo{
	position:absolute;
	top:10%;
	}
	.mail{color:white;
		font-size:150%;
	position:absolute;
	top:11px;
	left:92%;
	}
	.top{color:rgb(78,162,211);
	position:absolute;
		font-size:140%;
		text-shadow: 2px 1px black;
	top:25%;
	left:3%;
	}

	.mediname{color:rgb(78,162,211);
	position:absolute;
		font-size:140%;
		text-shadow: 1px 0.5px black;
	top:25%;
	left:30%;
	}
	.searchbar{
		position:absolute;
		top:70%;
		left:7%;
	}
	
	#location{
	position:absolute;
	left:25%;
	top:200%;
	}


.searchbar4{
		position:absolute;
		top:300%;
		left:8%;
	}
.submit{
	position:absolute;
	left:50%;
	top:500%;
	}

	select	{
	
	padding-right:50%}

	</style>

	</head>

	<body>
		<!--php connection ravi-->
		<?php
		$con = mysqli_connect("localhost","root","sn1p3r rifle","binarymeds");
		if(!$con){
			die("Can't Connect:" . mysql_error());
		}
		mysql_select_db("binarymeds",$con);
		$sql = select name,brand,presentation from `medicine` where composition = (select composition from `medicine` where name=$medicine);
		$mydata = mysql_query($sql,$con);
		echo "<table border=1>
		<tr>
		<th>NAME</th>
		<th>BRAND</th>
		<th>PRESENTATION</th>

		</tr>";
		while($record= mysql_fetch_array($mydata)){
			echo "<tr>";
			echo "<td>" . $record['NAME'] . "</td>";
			echo "<td>" . $record['BRAND'] . "</td>";
			echo "<td>" . $record['PRESENTATION'] . "</td>";
			echo "</tr>";
		}
		mysql_close($con);
		?>
<!--ravi end editing-->
<form>
	<div class="wrapper">
 
	<div class="status">
	<a href="new 1.html"><h2>HOME</h2></a>
	
	<div class="mail"><a href="mailto:infomedi95@gmail.com">Mail us</a></div>
	
	<div class="contact"><a href="contact.html" title="Contact us"><h2>CONTACT US</h2></a></div>
	
	<div class="about"><a href="aboutus.html" title="about us"><h2>ABOUT US</h2></a></div>
	</div>
<div class="logo">
	<a href="new 1.html"><img src="logo.png" height="50px"/></a>
 </div>	
<div class="doc">
 <a><img src="doc.png" height="50%"></a>
 </div>
<div class="mediname"><h style="font-size:150%"> <strong>ENTER YOUR MEDICINE NAME</strong></h></br>
	
<div class="searchbar"><label> <br  /><input  type="text" name="medicine" value=" . $record['name'] . style= "width: 450px; height: 28px" placeholder="search here"  	required> </label</div>	

	<br  /><br  />
	
	</div>
<p id="location">ENTER YOUR LOCATION:</p>

<div class="searchbar4"><label> <br  /><input  type="text" name="location" value=" . $record[location] . style= "width: 370px; height: 25px" placeholder="enter location"  	required> </label</div>	


<button onclick="getLocation()">NEAR BY</button>

<script>
var x = document.getElementById("");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;  
}
</script>

</div>

 
		
<div><a href="submit.html" class="submit"><input type="Button" value="search" name="search" > </a>
</div>
	</body>



</html>