<?php
session_start();//************
//used when we want to fetch data from database
		include_once("do-connect-index.php");
		$uid=$_GET["x"];
        $pwd=$_GET["y"];
        $pwd=md5($pwd);
	$query="select * from signup where uid='$uid' and pwd='$pwd'";


			$table=mysqli_query($dbRef,$query);//return table

		$count=mysqli_num_rows($table);


 if($count==1)
{
    while($row=mysqli_fetch_array($table))
    {$_SESSION["uid"]=$uid;//**************
    echo $row["registered"];
    }
}
else

			echo "invalid user id or password";

			?>
