<?php
//for card filtre
include_once("do-connect-index.php");
$gender=$_GET["gender"];
$time=$_GET["time"];
$state=$_GET["state"];
$city=$_GET["city"];
$query="select* from doctor where state='$state'and city='$city' and gender='$gender'and time='$time'";







$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$ary=array();

		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);
        
				
?>