<head>

			<style type="text/css">

body{
	
	background-image:url(result.jpg);
		 background-size:cover;
		 background-repeat:no-repeat;
		 background-height:400%;
}
</style>
</head>

	<body>

		<!--php connection ravi-->
		<?php
		$con = mysqli_connect("localhost","root","sn1p3r rifle","binarymeds");
		if(!$con){
			die("Can't Connect:" . mysql_error());
		}
		echo " <td>";


		
  	
		echo "<table border=1>
		<tr>
		<th>name</th>
		<th>brand</th>
		<th>composition</th>
		<th>presentation</th>
		<th>strength</th>
		</tr>";
		
$a=$_POST['drug'];
		mysqli_select_db($con,"binarymeds");
		if(isset($_POST['search'])){
		$searchQuery = "Select * from medicine where name = '%Dena%'";	
		mysqli_query($con, $searchQuery);
		}

		$sql= "Select composition from medicine where name='$a'";	
		$mydata = mysqli_query($con,$sql);

		while ($record = mysqli_fetch_array($mydata)){
			$t=$record['composition'];
		}
echo $t;
	$sql= "Select * from medicine where composition='$t'";	
		$mydata = mysqli_query($con,$sql);
		while ($record = mysqli_fetch_array($mydata)){
			echo "<tr><th>".$record['name']."</th><th>".$record['brand']."</th><th>".$record['composition']."</th><th>".$record['strength']."</th><th>".$record['presentation']."</th></tr>";
		}
		echo "</table>";

		mysqli_close($con);
		?>

		
	</body>
<!--ravi end editing-->
<html>