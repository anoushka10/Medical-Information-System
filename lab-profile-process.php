<?php
include_once("do-connect-index.php");
$uid=$_POST["txtUid"];
$name=$_POST["txtname"];
$mobile=$_POST["txtmob"];
$hName=$_POST["txthname"];
$contact=$_POST["txtcont"];
$addr=$_POST["txtadd"];
$state=$_POST["txtstate"];
$city=$_POST["txtcity"];

$time=$_POST["txttime"];
$btn=$_POST["btnsave"];

if($btn=="Save")
{
     $picname=$_FILES["ppic"]["name"];
     
     $picname4=$_FILES["ppic4"]["name"];
     $picname5=$_FILES["ppic5"]["name"];
     $picname6=$_FILES["ppic6"]["name"];
   
    $temp_name=$_FILES["ppic"]["tmp_name"];
    
    $temp_name4=$_FILES["ppic4"]["tmp_name"];
    $temp_name5=$_FILES["ppic5"]["tmp_name"];
    $temp_name6=$_FILES["ppic6"]["tmp_name"];
    
   
    move_uploaded_file($temp_name,"uploads/".$picname);
   
    move_uploaded_file($temp_name4,"uploads/".$picname4);
    move_uploaded_file($temp_name5,"uploads/".$picname5);
    move_uploaded_file($temp_name6,"uploads/".$picname6);
    
    $query="insert into lab values('$uid','$name','$mobile','$hName','$contact','$addr','$state','$city','$time','$picname4','$picname5','$picname6','$picname')";
     mysqli_query($dbRef,$query);
    $msg=mysqli_error($dbRef);
	if($msg=="")
			echo "Record Saved....";
	else
			echo $msg;
}
else
{
    $picname=$_FILES["ppic"]["name"];
    
    $picname4=$_FILES["ppic4"]["name"];
    $picname5=$_FILES["ppic5"]["name"];
    $picname6=$_FILES["ppic6"]["name"];
    
     $hdn=$_POST["hdn"];
    
    $hdn4=$_POST["hdn4"];
    $hdn5=$_POST["hdn5"];
    $hdn6=$_POST["hdn6"];
    
     $temp_name=$_FILES["ppic"]["tmp_name"]; 
   
      $temp_name4=$_FILES["ppic4"]["tmp_name"];
      $temp_name5=$_FILES["ppic5"]["tmp_name"];
      $temp_name6=$_FILES["ppic6"]["tmp_name"];
    
     if($picname=="")
		$picname=$hdn;
    else
        move_uploaded_file($temp_name,"uploads/".$picname);
    
    
  
     if($picname4=="")
		$picname4=$hdn4;
    else
         move_uploaded_file($temp_name4,"uploads/".$picname4);
     if($picname5=="")
		$picname5=$hdn5;
    else
         move_uploaded_file($temp_name5,"uploads/".$picname5);
     if($picname6=="")
		$picname6=$hdn6;
    else
         move_uploaded_file($temp_name6,"uploads/".$picname6);
    
    $query="update lab set name='$name',mobile='$mobile',hName='$hName',contact='$contact',addr='$addr',state='$state',city='$city',time='$time',picname4='$picname4',picname5='$picname5',picname6='$picname6',picname='$picname' where uid='$uid'";
     
     mysqli_query($dbRef,$query);
	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "Record Updated....";
	else
			echo $msg;

    
}
