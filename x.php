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
	padding-left:38%;
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
	left:54.5%;
	
	}
	
	.contact{color:white;
		font-size:100%;
	position:absolute;
	top:0px;
	left:44%;
	
	}
	.logo{
	position:absolute;
	top:10%;
	}
	.mail{color:white;
		font-size:150%;
	position:absolute;
	top:11px;
	left:90%;
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
		top:50%;
		left:7%;
	}
	
	#location{
	position:absolute;
	top:180%;
	left:25%;
	
	}
.searchbar2{
		position:absolute;
		top:-0%;
		left:180%;
	}
	.searchbar3{
		position:absolute;
		top:350%;
		left:8%;
	}

.searchbar4{
		position:absolute;
		top:150%;
		left:-170%;
	}
.submit{
	position:absolute;
	left:35%;
	top:240%;
	}
	.button{
	position:absolute;		
		left:79.5%;
		top:7%;
		}
	
	.footer{
	font-size:70%;
	position:absolute;
	top:100%;
	left:0px;
	padding-left:5%;
	padding-right:95%;
	padding-top:0%;
	padding-bottom:0%
	}
	
	.copyright{font-color:orange;
		font-size:150%;
	position:absolute;
	top:80%;
	left:34%;
	
	}
	.about2{color:black;
		font-size:150%;
	position:absolute;
	top:0px;
	left:28%;
	
	}
	.home2{font-color:black;
		font-size:150%;
	position:absolute;
	top:0px;
	left:11%;
	
	
	}
	
	.contact2{font-color:black;
		font-size:150%;
	position:absolute;
	top:0px;
	left:18%;
	
	}
	.mail2{font-color:orange;
		font-size:150%;
	position:absolute;
	top:px;
	left:90%;
	

	
	select	{
	
	padding-right:50%}

	</style>

	</head>
	<link rel="shortcut icon" href="logo.ico" type="image/x-icon" /> 

	<body>

	<marquee behavior="scroll" direction="left"><strong><img src="doc.png" height=5%>(Ambulance service no - 08560001948 , 07367020595 ) (24 hour service - 0141 516 4000)</strong></marquee>
	
<!--php connection ravi-->
		<?php
		$con = mysqli_connect("localhost","root","","binarymeds");
		if(!$con){
			die("Can't Connect:" . mysql_error());
		}
		echo " <td>";


		
  	
		echo "<table style="."margin-top:10px;margin-left:20%;"." border=1>
		<tr>
		<th>name</th>
		<th>brand</th>
		<th>composition</th>
		<th>presentation</th>
		<th>strength</th>
		<th>pharmacy</th>
		<th>address</th>
		<th>location</th>

		</tr>";
		$t="Please Provide Drug Name";
		$a=$_POST['drug'];
		mysqli_select_db($con,"binarymeds");
		if(isset($_POST['search'])){
		$searchQuery = "Select * from medicine where name = '%Dena%'";	
		
		}

		$sql= "Select composition from medicine where name='$a'";	
		$mydata = mysqli_query($con,$sql);

		while ($record = mysqli_fetch_array($mydata)){
			
		}
echo "<p style="."margin-top:500px;text-align:center;>".$t."</p>";

	$sql= "Select * from medicine where composition='$t'";	
		$mydata = mysqli_query($con,$sql);
		while ($record = mysqli_fetch_array($mydata)){
			echo "<tr><th>".$record['name']."</th><th>".$record['brand']."</th><th>".$record['composition']."</th><th>".$record['presentation']."</th><th>".$record['strength']."</th><th>".$record['pharmacy']."</th><th>".$record['address']."</th><th><a href=".$record['location']."><input type="."submit "." value="."location"."></a></th></tr>";
		}
		echo "</table>";
		mysqli_close($con);
		


		?>

		



 
<form action="x.php" method="post">
	<div class="wrapper">
 
	<div class="status">
	<a href="other home.html"><font color="white"><h2>HOME</h2></a>
	
	<div class="mail"><a href="mailto:infomedi95@gmail.com"><font color="white">Mail us</a></div>
	
	<div class="contact"><a href="contact.html" title="Contact us"><font color="white"><h2>CONTACT US</h2></font></a></div>
	
	<div class="about"><a href="aboutus.html" title="about us"><font color="white"><h2>ABOUT US</h2></a></div>
	</div>
<div class="logo">
	<a href="other home.html"><img src="logo.png" height="50px"/></a>
 </div>	
<div class="doc">
 <a><img src="doc.png" height="50%"></a>
 </div>
 <form action="x.php" method="post">
<div class="mediname"><h style="font-size:150%"> <strong>ENTER YOUR MEDICINE NAME</strong></h></br>
	
<div class="searchbar"><label> <br  /><input  type="text" name="drug"  style="width: 450px; height: 28px" placeholder="search here"  	required> </label
	<br  /><br  />
	
	</div>
<p id="location">ENTER YOUR LOCATION:</p>
<div class="searchbar3"><label>State : - <br  /><input  type="text" name="state"  style="width: 150px; height: 25px" value ="Rajasthan" disabled="disabled"> </label</div>	

<div class="searchbar2"><label>City : - <input  type="text" name="city"  style="width: 150px; height: 25px"  value="jaipur" disabled="disabled"> </label</div>	

<div class="searchbar4"><label> <input  type="text" name="location"  style="width: 370px; height: 25px" placeholder="Enter Address"  	required> </label</div>	


<div class="submit"><input type="submit" value="search" style="height:30px;width:150px"name="search" > </a></div></form>
</div>

</div>

</div>
</form>

	
	</body>



</html>