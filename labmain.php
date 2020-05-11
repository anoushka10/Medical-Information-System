<?php
session_start();
if(!isset($_SESSION["uid"]))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<title>Document</title>
	<script src="JS/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="JS/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style/bootstrap1.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <style>
       #p
        {
            background: rgba(0,0,0,0.2);
            background-size: cover;
            
            background-repeat: no-repeat;
        }
        body
        {background-size: cover;
            background-color: beige;
            background-image: url(uploads/2272.jpg);
            background-repeat: no-repeat;

            
        }
    </style>
   <!--------------------------------------------------->
   <script>
        //----func to display image on website------
		function showpreview(file,ref) 
		{
			
			if($(file)[0].files[0].size>2097152)
				{
					alert("<=2 MB");
					return;
				}
        if (file.files && file.files[0]) 
		{
            var reader = new FileReader();
            reader.onload = function (e) {
                $(ref).prop('src', e.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }

    }
    </script>
    <script>
	$(document).ready(function()
					  {
		$(document).ajaxStart(function()
		{
			$("#loading").css("display","block");
		});
		$(document).ajaxStop(function()
		{
			$("#loading").css("display","none");
		});
		//==-=-=-=-=-=-=-=-=-=
        
		/*	$("#btnSearch").click(function(){
               var uid=$("#txtUid").val(); 
                $.getJSON("contributor-profile-json.php?uid="+uid,function(aryJson)//passing uid to fetch record
                {
                    alert(JSON.stringify(aryJson));
                     $("#txtname").val(aryJson[0].name);
                     $("#txtmob").val(aryJson[0].mobile);
                     $("#txtbname").val(aryJson[0].firmName);
                     $("#txtest").val(aryJson[0].established);
                     $("#txtadd").val(aryJson[0].addr);
                     $("#txtcont").val(aryJson[0].offcontact);
                     $("#txtstate").val(aryJson[0].	state);
                     $("#txtcity").val(aryJson[0].city);
                     $("#fun").val(aryJson[0].func);
                    $("#ser").val(aryJson[0].service);
                    
                    //image-----------------------------
                      var pic1=aryJson[0].picname1;
                     var pic2=aryJson[0].picname2;
                     var pic3=aryJson[0].picname3;

                     $("#pic1").prop("src","uploads/"+pic1);
                     $("#pic2").prop("src","uploads/"+pic2);
                     $("#pic3").prop("src","uploads/"+pic3);
			        
                    $("#hdn1").val(pic1);	
                    $("#hdn2").val(pic2);	
                    $("#hdn3").val(pic3);	
				});
                });*/
         dofetch();
        function dofetch()
        {
            var uid=$("#txtUid").val(); 
                $.getJSON("lab-profile-json.php?uid="+uid,function(aryJson)//passing uid to fetch record
                {
                     if(aryJson.length==0)
                        {
                            alert("no details found");
                            $("#btnupdate").prop("disabled",true);
                            $("#btnsave").prop("disabled",false);
                            return;
                        }
                    $("#btnupdate").prop("disabled",false);
                            $("#btnsave").prop("disabled",true);
                    
                    
                    alert(JSON.stringify(aryJson));
                     $("#txtname").val(aryJson[0].name);
                     $("#txtmob").val(aryJson[0].mobile);
                     $("#txthname").val(aryJson[0].hName);
                    $("#txtcont").val(aryJson[0].contact);
                    $("#txtadd").val(aryJson[0].addr);          
                     $("#txtstate").val(aryJson[0].	state);
                     $("#txtcity").val(aryJson[0].city);
                     
                    $("#txttime").val(aryJson[0].time);
                    
                    //image-----------------------------
                    var pic=aryJson[0].picname;
                      
                    var pic4=aryJson[0].picname4;
                     var pic5=aryJson[0].picname5;
                     var pic6=aryJson[0].picname6;

                     $("#pic").prop("src","uploads/"+pic);
                     $("#pic4").prop("src","uploads/"+pic4);
                     $("#pic5").prop("src","uploads/"+pic5);
                     $("#pic6").prop("src","uploads/"+pic6);
			        
                    $("#hdn").val(pic);
                     $("#hdn4").val(pic4);	
                    $("#hdn5").val(pic5);	
                    $("#hdn6").val(pic6);
				});
              
            
        }
         });
    </script>
    
    
    <style>
	#loading
		{
			position: absolute;
			width: 100px;height: 100px;
			background-image: url(uploads/loading.gif);
			left: 45%;top: 20%; z-index: 10;
			padding: 10px;
			display: none;
		}
	</style>
    </head>
    <body>
       
       
<!--
            <div class="row">
                <div class="col-md-12  text-center text-white  bg-dark fixed-top">
                    <h2>LABORARTORY PROFILE</h2>
                </div>
            </div>
-->
            <!--------------------------------------------------------->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <h2 class="text-center">LABORARTORY PROFILE</h2> 
                  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item dropdown">
      
        
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
            
            <button class="btn btn-outline-danger my-3 my-sm-2" type="submit"><a href="logout.php" class="text-danger">LOGOUT</a></button>
    </form>
  </div>
  
</nav>
           <h2 class="text-danger text-center"><font face="georgia">Welcome <?php echo $_SESSION["uid"];?>!!</font></h2>
            <!------------------------------------------------------>
 <div class="container" style="margin-top:10px" id="p">
            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                   <form action="lab-profile-process.php" method="post" enctype="multipart/form-data">
                  
                    <div class="form-row">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-group">
                                <label for="txtUid">User Id</label>
                                <input type="text" required class="form-control"  id="txtUid" readonly name="txtUid" placeholder="Enter User Id" value="<?php echo $_SESSION['uid'];?>">
                                <small id="errUid" class="form-text text-primary">*</small>
                            </div>
                        </div>
                       
                           </div>
        <!------------------------------------------------------------->
            <input type="hidden" name="hdn" id="hdn">
             <div class="col-md-4 offset-md-4 form-group text-center">
              
							Profile Pic: <br>
							<img src="uploads/profilepic.png" class="mt-1 mb-1" width="100" height="100" alt="" id="pic" >
							<input type="file" accept="image/*" multiple name="ppic" id="ppic" onchange="showpreview(this,pic);">

						</div>
            <!----------------------------------------------------------->
                   <div class="form-row">
                    <div class="col-md-6">
                        <label for="txtname">NAME</label>
                        <input type="text" required class="form-control" id="txtname" name="txtname" placeholder="Enter your name">
                        <small id="errname" class="form-text text-primary">*</small>
                    </div>     
                        
                    <div class="col-md-6">
                    <label for="txtmob">CONTACT NO</label>
								<input type="text" required  class="form-control" name="txtmob" id="txtmob" aria-describedby="emailHelp" placeholder="Enter mobile no." >
								<small id="errmob" class="form-text text-muted">*</small>
                    </div>
            </div>
        <!--------------------------------------------------------------->
                   <div class="form-row">
                    <div class="col-md-6">
                        <label for="txthname">LABORATORY NAME</label>
                        <input type="text" required class="form-control" id="txthname" name="txthname" placeholder="Enter your hospital/clinc name">
                        <small id="errhname" class="form-text text-primary">*</small>
                    </div> 
                       <div class="col-md-6">
                        <label for="txtcont">ALTERNATE CONTACT NO</label>
                        <input type="text" required class="form-control" id="txtcont" name="txtcont" placeholder="Enter your contact no.">
                        <small id="errcont" class="form-text text-primary">*</small>
                    </div>   
                        
                    
            </div>
                  
        <!--------------------------------------------------------------->
                  <div class="form-row">
                    <div class="col-md-12">
                        <label for="txtadd">ADDRESS</label>
                        <input type="text" required class="form-control" id="txtadd" name="txtadd" placeholder="Enter your office address">
                        <small id="erradd" class="form-text text-primary">*</small>
                    </div> 
                       </div>            
        <!--------------------------------------------------------------->
                  <div class="form-row">
                        
                        
                    <div class="col-md-4">
                    <label for="txtstate">STATE</label>
								<input type="text" required  class="form-control" name="txtstate" id="txtstate" aria-describedby="emailHelp" placeholder="Enter your state " >
								<small id="errstate" class="form-text text-muted">*</small>
                      </div>
                    
                    <div class="col-md-4">
                    <label for="txtcity">CITY</label>
								<input type="text" required  class="form-control" name="txtcity" id="txtcity" aria-describedby="emailHelp" placeholder="Enter your city" >
								<small id="errcity" class="form-text text-muted">*</small>
                    </div> 
                       <div class="col-md-4" style="margin-top:0px">
                    
							<label for="txttime">TIME AVAILABILITY</label>
								<input type="text" required  class="form-control" name="txttime" id="txttime" aria-describedby="emailHelp" placeholder="Enter your time" >
								<small id="errtime" class="form-text text-muted">*</small>
                    </div>   
            </div> 
        <!--------------------------------------------------------------->
            
    
    <!----------------------------------------------------------------->            <div class="col-mb-3 mt-100">YOUR GALLERY</div>
                  <div class="form-row">
                    <input type="hidden" name="hdn4" id="hdn4">
                     <input type="hidden" name="hdn5" id="hdn5">
                      <input type="hidden" name="hdn6" id="hdn6">
                      
                      
                    <div class="col-md-4 form-group text-center">
							 Pic1: <br>
							<img src="uploads/profilepic.png" class="mt-1 mb-1" width="150" height="150" alt="" id="pic4">
							<input type="file" accept="image/*" multiple name="ppic4" id="ppic4" onchange="showpreview(this,pic4);">

                       </div>
                       <div class="col-md-4 form-group text-center">
							 Pic2: <br>
							<img src="uploads/profilepic.png" class="mt-1 mb-1" width="150" height="150" alt="" id="pic5">
							<input type="file" accept="image/*" multiple name="ppic5" id="ppic5" onchange="showpreview(this,pic5);">

                       </div>
                       <div class="col-md-4 form-group text-center">
							 Pic3: <br>
							<img src="uploads/profilepic.png" class="mt-1 mb-1" width="150" height="150" alt="" id="pic6">
							<input type="file" accept="image/*" multiple name="ppic6" id="ppic6" onchange="showpreview(this,pic6);">

                       </div>    
                       </div>                   
    <!------------------------------------------------------------->        
                    <div class="form-row">
						<div class="col-md-12 mt-4  text-center">
							<input type="submit" value="Save" name="btnsave" class="btn btn-danger" id="btnsave">
							<input type="submit" value="Update" name="btnsave" id="btnupdate"class="btn btn-danger">
							
						</div>
					</div>
    <!------------------------------------------------------------->                                               
                    </form>
                </div>
            </div>
           </div>
        
    
    </body>