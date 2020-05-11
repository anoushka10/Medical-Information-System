<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bulb-icon-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Document</title>
  <script src="JS/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="JS/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style/bootstrap1.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script>
    $(document).ready(function()
    {
        $("#btnSignup").click(function(){
           // alert("ok");
            var uid=$("#txtUid").val();
            var pwd=$("#txtPwd").val();
            var conpwd=$("#txtconPwd").val();
            var mobile=$("#mob").val();
            var cont=$("#txtcont").val();
            $.get("signup-process.php?u="+uid+"&v="+pwd+"&w="+conpwd+"&x="+mobile+"&y="+cont,function(response){
                  alert(response);
        });
    });
        //-------------------------------------------------
        $("#btnlogin").click(function(){
            //alert("ok");
            
            var uid=$("#txtUidlogin").val();
            var pwd=$("#txtPwdlogin").val();
            $.get("ajax-login.php?a="+uid+"&b="+pwd,function(res){
             
               $ ("#errUidlogin").html(res);
                //alert( $ ("#errUidlogin").html(res))
                  alert(res);
                 //alert("ok");
                alert(res.trim());
                if(res.trim()=="Doctor")
                    {
                        alert("Welcome Sir!!,You have login succesfully");
                       location.href="doctormain.php";
                    }
                else if(res.trim()=="Laborartor")
                  {
                     alert("Welcome Sir!!,You have login succesfully");
                       location.href="labmain.php";
                    }  
        });
    });
        
        /*check_pass();
       function check_pass() {
    if (document.getElementById("txtPwd").value ==
            document.getElementById("txtconPwd").value) {
        document.getElementById("btnSignup").disabled = false;
    } else {
        document.getElementById("btnSignup").disabled = true;
        
    }
}*/
         $("#btnSearch").click(function(){
            //alert("ok");
            
            var reg=$("#txtreg").val();
           
            $.get("ajax-select.php?a="+reg,function(res){
             
               $ ("#errUidlogin").html(res);
                //alert( $ ("#errUidlogin").html(res))
                  alert(res);
                 //alert("ok");
              
        });
    });
        
        
        //for choosing bw lab/doctor
        $("#btnchoose").click(function(){
            //alert("ok");
            
            var uid=$("#txtreg").val();
           // var pwd=$("#txtPwdlogin").val();
//            $.get("ajax-login.php?a="+uid+"&b="+pwd,function(res){
//             
//               $ ("#errUidlogin").html(res);
//                //alert( $ ("#errUidlogin").html(res))
//                  alert(res);
//                 //alert("ok");
//                alert(res.trim());
//                if(res.trim()=="Doctor")
//                    {
//                        alert("doctor");
//                       location.href="search.php";
//                    }
//                else if(res.trim()=="Laborartory")
//                  {
//                     alert("lab");
//                       location.href="search-lab.php";
//                    }  
//        });
            
            if(uid=="Doctor")
                {
                        alert("doctor");
                 location.href="search.php";
                }
            else if(uid=="Laborartory")
          {
                     alert("lab");
                       location.href="search-lab.php";
                    }  
    });
        $("#txtimg").click(function(){
            var im=("#txtimg").val();
            slert(im);
            
        });
       
});
    </script> 
  
</head>
<body>
  <section class="menu cid-rELPVgs9mt" once="menu" id="menu2-f">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="assets/images/bulb-icon-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-5" href="http://localhost/mis/index.php">
                        MIS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="http://localhost/mis/index.php">
                        About Us
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-danger display-4" data-toggle="modal" data-target="#signup">Sign Up&nbsp;</a></li></ul>
            <div class="navbar-buttons mbr-section-btn" ><a class="btn btn-sm btn-secondary-outline display-7" data-toggle="modal" data-target="#login" >Login</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobiri.se/m">free website design templates</a></section><section class="cid-rELyJrVEst mbr-fullscreen mbr-parallax-background" id="header2-0">

    

    

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">MEDICAL INFORMATION SYSTEM</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5" style="text-shadow: 2px 2px 4px #000000"><i>" We are your friend in need. We help you get the best medical service. When you fall sick we will be there for you! "</i></p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="http://localhost/mis/search.php">Find a doctor</a></div>
            </div>
        </div>
    </div>
    
</section>

<section class="features17 cid-rEMgZ1jf96" id="features17-j">
    
    

    
    <div class="container-fluid">
        <div class="media-container-row">
            <div class="card shadow  p-3 col-12 col-md-6 col-lg-2 rounded" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img"  name="txtimg" value="kidney">
                        <img src="assets/images/kidney.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>KIDNEY</center></h4>
                        
                    </div>
                </div>
            </div>

            <div class="card shadow rounded p-3 col-12 col-md-6 col-lg-2" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img"  name="txtimg" value="cardiac">
                        <img src="assets/images/cardiac.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>CARDIAC</center></h4>
                        
                    </div>
                </div>
            </div>

            <div class="card shadow rounded p-3 col-12 col-md-6 col-lg-2" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img" name="txtimg" value="liver">
                        <img src="assets/images/liver.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>
                            LIVER</center></h4>
                        
                    </div>
                </div>
            </div>

            <div class="card shadow rounded p-3 col-12 col-md-6 col-lg-2" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img"  name="txtimg" value="stomach">
                        <img src="assets/images/stomach.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>
                            STOMACH</center></h4>
                        
                    </div>
                </div>
            </div>
            <div class="card shadow rounded p-3 col-12 col-md-6 col-lg-2" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img"  name="txtimg" value="eye">
                        <img src="assets/images/eye.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>
                            EYE</center></h4>
                        
                    </div>
                </div>
            </div>
            <div class="card shadow rounded  p-3 col-12 col-md-6 col-lg-2" data-toggle="modal" data-target="#selection">
                <div class="card-wrapper">
                    <div class="card-img"  name="txtimg" value="bone">
                        <img src="assets/images/bone.jpg" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7"><center>BONE,JOINT</center></h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header10 cid-rFjW48LLca mbr-parallax-background" id="header10-n">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(53, 176, 171);">
    </div>

    <div class="container">
        <div class="media-container-column mbr-white col-lg-8 col-md-10 ml-auto">
            <h1 class="mbr-section-title align-right mbr-bold pb-3 mbr-fonts-style display-1">Create account</h1>
            <h3 class="mbr-section-subtitle align-right mbr-light pb-3 mbr-fonts-style display-2">Have a medical service?</h3>
            <p class="mbr-text align-right pb-3 mbr-fonts-style display-5">Create an account in just a few minutes to become a part of our community and join us on our mission.</p>
            <div class="mbr-section-btn align-right"><a class="btn btn-md btn-secondary display-4" data-toggle="modal" data-target="#signup">Sign Up</a>
                <a class="btn btn-md btn-white-outline display-4" data-toggle="modal" data-target="#login">Log In</a></div>
        </div>
    </div>

    
</section>

<section class="testimonials2 cid-rEMjTqiY8m" id="testimonials2-m">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 130%;">
              <img src="assets/images/buddha.jpg">
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">"To keep the body in good health is a duty, for otherwise we shall not be able to trim the lamp of wisdom, and keep our mind strong and clear."</p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">Gautam Buddha</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       
                    </p>
            </div>
        </div>
    </div>
</section>

<section class="cid-rFk91wBbbd" id="footer1-p">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="https://google.com">
                        <img src="assets/images/bulb-icon-1-192x192.png" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: mis2019@gmail.com
                    <br>Phone: +919356202404
                    <br>Phone: +919599418354
                    <br>Phone: +919463585200
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">
                    <a class="text-info" href="http://www.thapar.edu/">About us</a>
                    <!---<br><a class="text-info" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                    <br><a class="text-info" href="https://mobirise.com/mobirise-free-mac.zip">Download for Mac</a>---->
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">Proudly made by team spamtroops 😉</p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
<!--
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-i+65confont-social"></span>
                            </a>
                        </div>
-->
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-------model of signup------->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="modelSignup" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  ">
                    <h5 class="modal-title " id="modelSignup">SIGN UP</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    
                    
                    
                    <div class="row">
			<div class="col-md-10 offset-md-1 border">
			<!--	<center>  <img src="uploads/loginlogo.png" height="150px" width="150px">  </center> -->
				          
							<div class="form-group">
								<label for="txtUid">User Id</label>
								<input type="text"  required class="form-control" id="txtUid" name="txtUid" placeholder="Enter User Id" >
								<small id="errUid" class="form-text text-primary">*</small>
							</div>
						
                   
                    
                    
							<div class="form-group">
								<label for="txtPwd">Password</label>
								<input type="password"  required class="form-control" name="txtPwd" id="txtPwd" aria-describedby="emailHelp" placeholder="Enter Password" >
								<small id="errPwd" class="form-text text-muted">*</small>
							</div>
				<div class="form-group">
								<label for="txtconPwd">Confirm Password</label>
								<input type="password"  required class="form-control" name="txtconPwd" id="txtconPwd" aria-describedby="emailHelp" placeholder="Enter Password" >
								<small id="errconPwd" class="form-text text-muted">*</small>
							</div>
                        
                        <div class="form-group">
								<label for="mob">Mobile no.</label>
								<input type="number"  required class="form-control" name="mob" id="mob" aria-describedby="emailHelp" placeholder="Enter mobile no." >
								<small id="errmob" class="form-text text-muted">*</small>
							</div>
							
						  <div class="form-group">
								Registered as
								<select name="txtcont" id="txtcont" class="form-control">
								<option value="none">Select</option>
								<option value="Doctor">Doctor</option>
								<option value="Laborartory">Laborartory</option>
								
							</select>
								
							</div>	
						</div>
                    </div>
                            
               <hr> 
                </div>
               
                    <div class="col-md-5 offset-3">
						<div class="form-group">
								<label >&nbsp;</label>
								<input type="submit" class="form-control btn btn-primary" id="btnSignup" name="btnSignup"  value="SIGN UP">
								
							</div>
                       </div>
               
            </div>
        </div>
    </div>
    <!------------------------------------------------------------>
     <!-- Modal of login -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header bg-light text-white">
                    <h5 class="modal-title" id="modalLogin">LOGIN</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    
                    
                    <div class="row" >
			<div class="col-md-10 offset-md-1 border">
								  <!--   <center>  <img src="uploads/loginlogo.png" height="150px" width="150px">  </center> --->      
							<div class="form-group">
								<label for="txtUidlogin">User Id</label>
								<input type="text"  required class="form-control" id="txtUidlogin" name="txtUidlogin" placeholder="Enter User Id" >
								<small id="errUidlogin" class="form-text text-primary">*</small>
							</div>           
                    
                    
							<div class="form-group">
								<label for="txtPwdlogin">Password</label>
								<input type="password"  class="form-control" name="txtPwdlogin" id="txtPwdlogin" aria-describedby="emailHelp" placeholder="Enter Password" >
								<small id="errPwdlogin" class="form-text text-muted">*</small>
							</div>
                 </div>
        </div> <hr>         
                </div>
                
                    
                            <div class="col-md-5 offset-3">
						<div class="form-group">
								<label > &nbsp;</label>
								<input type="submit"   class="form-control btn btn-primary" id="btnlogin" name="btnlogin"  value="LOGIN">
								
							</div>
                       </div>
               
            </div>
        </div>
    </div>
    <!----------------------------------------------------->
      <!-- Modal of selection -->
    <div class="modal fade" id="selection" tabindex="-1" role="dialog" aria-labelledby="modalselection" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header bg-light text-white">
                    <h5 class="modal-title" id="modalselection">Choose your preference</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    
                    
                    <div class="row" >
			<div class="col-md-10 offset-md-1 border">
								  <!--   <center>  <img src="uploads/loginlogo.png" height="150px" width="150px">  </center> --->      
							<!---<div class="form-group">
								<label for="txtUidlogin">User Id</label>
								<input type="text"  required class="form-control" id="txtUidlogin" name="txtUidlogin" placeholder="Enter User Id" >
								<small id="errUidlogin" class="form-text text-primary">*</small>
							</div>-------->           
                      <div class="form-group">
							Category
								<select name="txtreg" id="txtreg" class="form-control">
								<option value="none">Select</option>
								<option value="Doctor">Doctor</option>
								<option value="Laborartory">Laborartory</option>
								
							</select>
								
							</div>	
                    
							<!--<div class="form-group">
								<label for="txtPwdlogin">Password</label>
								<input type="password"  class="form-control" name="txtPwdlogin" id="txtPwdlogin" aria-describedby="emailHelp" placeholder="Enter Password" >
								<small id="errPwdlogin" class="form-text text-muted">*</small>
							</div>---------->
                 </div>
        </div> <hr>         
                </div>
                
                    
                            <div class="col-md-5 offset-3">
						<div class="form-group">
								<label > &nbsp;</label>
								<input type="submit"   class="form-control btn btn-primary" id="btnchoose" name="btnchoose"  value="SEARCH">
								
							</div>
                       </div>
               
            </div>
        </div>
    </div>
    <!------------------------------------------------------>
    
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>