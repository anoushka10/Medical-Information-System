<?php
session_start();//************
//used when we want to fetch data from database
		include_once("do-connect-index.php");
		$uid=$_GET["a"];
        $pwd=$_GET["b"];
   $pwd=md5($pwd);
//echo $pwd;
	$query="select * from signup where uid='$uid' and pwd='$pwd'";
//echo $query;
    
    $table=mysqli_query($dbRef,$query);//return table
//echo mysqli_query($dbRef,$query); 
//echo $table;

		$count=mysqli_num_rows($table);

//$count=1;
 //echo $count;  
 if($count==1)	
{
    while($row=mysqli_fetch_array($table))
    {$_SESSION["uid"]=$uid;//**************
    echo $row["registered"];
    }
}
else
      {
			echo "invalid user id or password";
}


			?>