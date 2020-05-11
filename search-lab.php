
<html lang="en" >
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bulb-icon-122x122.png" type="image/x-icon">
   <link rel="stylesheet" href="style/bootstrap1.css">
  <meta name="description" content="Website Generator Description">
  <title>Document</title>
   <script src="JS/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="style/bootstrap1.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
    .column {
      float: left;
      padding: 10px;
      height: 300px;
    }

    .left {
      width: 19%;
    }

    .right {
      width: 81%;
    }
    </style>
    <script>
		var module = angular.module("mymodule", []);
		module.controller("mycontroller", function($scope, $http) { 
           
            $scope.doFetchAll = function() {
				//alert("fecgfd");
               // var gender=$("#gender").val();
                var time=$("#time").val();
                var state=$("#state").val();
                var city=$("#city").val();
                $scope.jsonAry;
                
				$http.get("search-lab-process.php?city="+city+"&state="+state+"&time="+time).then(fine, notfine);

				function fine(response) {
					//alert(JSON.stringify(response));
					//alert(JSON.stringify(response.data)); //== jsonAry
                    if(JSON.stringify(response.data)=="[]")
                        {
                            alert("There is some error :(");
                        }
					$scope.jsonAry = response.data;
					console.log(JSON.stringify(response)); 

				}

				function notfine(response) {
					//alert(JSON.stringify(response));
				}
			}
			//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $scope.oneRecord;
			$scope.doShowOne=function(uid)
			{
				$http.get("lab-profile-json.php?uid=" + uid).then(fine, notfine);

					function fine(response) {
					//	alert(JSON.stringify(response.data));
                        if(JSON.stringify(response.data)=="[]")
                        {
                            alert("There is some error :(");
                        }
						$scope.oneRecord=response.data;
						//alert($scope.oneRecord[0].uid);
						$("#modal-details").modal("show");
						
					}

					function notfine(response) {
						//alert(JSON.stringify(response));
                         alert("Sorry,there is some error");
					}
			}
        });
    </script>
   <script>
        $(document).ready(function() {



            loadState();

            function loadState() {

                $.getJSON("json-fetch-state-lab.php", function(jsonAry) {

                    // alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].state;
                        item.value = jsonAry[i].state;
                        document.getElementById("state").append(item);
                    }
                });
            }
            loadcity();

            function loadcity() {

                $.getJSON("json-fetch-city-lab.php", function(jsonAry) {

                   // alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].city;
                        item.value = jsonAry[i].city;
                        document.getElementById("city").append(item);
                    }
                });
            }
            loadtime();
            function loadtime() {

                $.getJSON("json-fetch-time-lab.php", function(jsonAry) {

                   // alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].time;
                        item.value = jsonAry[i].time;
                        document.getElementById("time").append(item);
                    }
                });
            }
            
        });

    </script>

</head>
<body ng-app="mymodule" ng-controller="mycontroller">
    
<div class="row">
  <div class="column left">
          <!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>MIS</b></h3>
  </div>
    
<!--    filters list -->
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
      
<!--      filter 1-->
      <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-bar-item w3-button w3-white" ><p style = "color:#5f6769">
          State<i class="fa fa-caret-down"></i></p>
    </a>
   <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
     
      <select class="form-control" name="state" id="state">
      
  <option value="select">select</option>
                            </select>
      </div>
<!--      <a href="#" class="w3-bar-item w3-button">Patiala</a>
      <a href="#" class="w3-bar-item w3-button">Chandigarh</a>
      <a href="#" class="w3-bar-item w3-button">New Delhi</a>
      <a href="#" class="w3-bar-item w3-button">Other</a>---->
    <!--</div>-->
     <!--      filter 1-->
      <a onclick="myAccFunc1()" href="javascript:void(0)" class="w3-bar-item w3-button w3-white" ><p style = "color:#5f6769">
          City<i class="fa fa-caret-down"></i></p>
    </a>
    <div id="demoAcc1" class="w3-bar-block w3-hide w3-padding-large w3-medium">
     <select class="form-control" name="city" id="city">
    <option value="select">select</option>
        </select>
<!--
      <a href="#" class="w3-bar-item w3-button">Patiala</a>
      <a href="#" class="w3-bar-item w3-button">Chandigarh</a>
      <a href="#" class="w3-bar-item w3-button">New Delhi</a>
      <a href="#" class="w3-bar-item w3-button">Other</a>
-->
    </div>
      
<!--      filter 2-->
<!--
      <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-bar-item w3-button w3-white"><p style = "color:#5f6769">
          Gender <i class="fa fa-caret-down"></i></p>
    </a>
    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
    <select class="form-control" name="gender" id="gender">
    <option value="select">select</option>
     <option value="male">MALE</option>
      <option value="female">FEMALE</option>
        </select>
        
    
      <a href="#" class="w3-bar-item w3-button">Male</a>
      <a href="#" class="w3-bar-item w3-button">Female</a>
    </div>
-->
      
      
    <!--      filter 3-->
      <a onclick="myAccFunc3()" href="javascript:void(0)" class="w3-bar-item w3-button w3-white"><p style = "color:#5f6769">
          Available Time <i class="fa fa-caret-down"></i></p>
    </a>
    <div id="demoAcc3" class="w3-bar-block w3-hide w3-padding-large w3-medium">
    <select class="form-control" name="time" id="time">
        <option value="select">select</option>
    </select>
    
<!--
      <a href="#" class="w3-bar-item w3-button">8:00 - 12:00</a>
      <a href="#" class="w3-bar-item w3-button">12:00 - 16:00</a>
      <a href="#" class="w3-bar-item w3-button">16:00 - 20:00</a>
-->
    </div>
      <div class="col-md-8 offset-2  btn btn-primary" ng-click="doFetchAll();">
                   Search

                    </div> 
      
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="#footer" class="w3-bar-item w3-button w3-padding">About Us</a>
</nav>

<!-- end sidebar -->
    </div>
  <div class="column right">
     
  <section class="menu cid-rELPVgs9mt" once="menu" id="menu2-x">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="assets/images/bulb-icon-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    
                </span>
                <span class=" navbar-caption navbar-caption-wrap text-secondary display-5">MIS</span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-danger display-4" href="https://mobirise.com">
                        About Us
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-danger display-4" href="https://mobirise.com">Sign Up&nbsp;</a></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary-outline display-7" href="tel:+1-234-567-8901">Login</a></div>
        </div>
    </nav>
</section>
<section class="mbr-section info3 cid-rHwwDhsZrv" id="info3-13">
   
    <div class="container">
       
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-md-10">
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">LOOKING FOR A LABORARTORY?</h2>
                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5"  style="color:black">
                    We are here to help you.
                </h3>
                
<!--
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="https://mobirise.com">LEARN MORE</a></div>
            </div>
-->
        </div>
    </div>
    
    </div>
</section>

<section class="cid-rHwL5xgboy" id="pricing-tables1-14">

    

    
    <div class="container">
        <div class="media-container-row">
        
				<div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4" ng-repeat="oneObj in jsonAry ">
					<div class="card border shadow bg-white rounded border-dark" style="margin-top:10px;margin-left:10px;margin-bottom:10px">
					<img src="assets/images/{{oneObj.picname}}" class="card-img-top" width="150" height="150" alt="...">
					<div class="card-body">
						<h5 class="card-title plan-title mbr-fonts-style display-5">{{oneObj.name}}</h5>
						<p class="card-text mbr-fonts-style display-7"><span class="text-danger">Lab Name:</span>{{oneObj.hName}}
						<br>
						
						<span class="text-danger mbr-fonts-style display-7"> Time Availability:</span>{{oneObj.time}}<br>
						<span class="text-danger mbr-fonts-style display-7"> Contact:</span>{{oneObj.contact}}</p>
						
						
						<div class="mbr-section-btn text-center pt-4"><div 
						 ng-click="doShowOne(oneObj.uid);" class=" btn btn-danger-outline text-center shadow" style="float:center" >DETAILS</div></div>
					</div>
				</div>
            </div>
            <!---------
            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        clinic name
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            ₹
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                              35</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per hr
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                Specialist in skin-care. No extra charges for multiple visits.
                            </li>
                            <li class="list-group-item">
                                8:00 - 12:00
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4"><a href="https://mobirise.com" class="btn btn-danger-outline display-4">DETAILS</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Clinic name
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            ₹
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            65</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per visit
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                add info
                            </li>
                            <li class="list-group-item">
                                time slot
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4"><a href="https://mobirise.com" class="btn btn-danger-outline display-4">DETAILS</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        clinic name
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            ₹
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            90</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per visit
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                add info
                            </li>
                            <li class="list-group-item">
                                time slot
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4"><a href="https://mobirise.com" class="btn btn-danger-outline display-4">DETAILS</a></div>
                </div>
            </div>

            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-3">
                <div class="plan-header text-center pt-5">
                    <h3 class="plan-title mbr-fonts-style display-5">
                        Ultimate
                    </h3>
                    <div class="plan-price">
                        <span class="price-value mbr-fonts-style display-5">
                            ₹
                        </span>
                        <span class="price-figure mbr-fonts-style display-1">
                            15</span>
                        <small class="price-term mbr-fonts-style display-7">
                            per hour
                        </small>
                    </div>
                </div>
                <div class="plan-body pb-5">
                    <div class="plan-list align-center">
                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
                            <li class="list-group-item">
                                add info
                            </li>
                            <li class="list-group-item">
                                time slot
                            </li>
                        </ul>
                    </div>
                    <div class="mbr-section-btn text-center pt-4"><a href="https://mobirise.com" class="btn btn-danger-outline display-4">DETAILS</a></div>
                </div>
            </div>
-->
            
    </div>
    </div>
    <!------------------details------------------------------------------>
        <!----------------------------------------------------->
    <!-----modal-->
<div class="modal" id="modal-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <img src="uploads/{{oneRecord[0].picname}}" width="200" height="200" class="card-img-top" alt="...">
                 

        NAME: {{oneRecord[0].name}}<br>
        MOBILE: {{oneRecord[0].mobile}}<br>
        LAB NAME: {{oneRecord[0].hName}}<br>       
        TIME AVAILABITLITY: {{oneRecord[0].time}}<br>
        LAB CONTACT: {{oneRecord[0].contact}}<br>
        ADDRESS: {{oneRecord[0].addr}}<br>
        CITY: {{oneRecord[0].city}}<br>
        STATE: {{oneRecord[0].state}}<br>
    
        
              
        GALLERY:<br>
        <img src="assets/images/{{oneRecord[0].picname4}}" width="200" height="200" class="card-img-top" alt="...">
         <img src="assets/images/{{oneRecord[0].picname5}}" width="200" height="200" class="card-img-top" alt="...">
         <img src="assets/images/{{oneRecord[0].picname6}}" width="200" height="200" class="card-img-top" alt="...">   
        
        
      </div>
      <div class="modal-footer"><center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
       
      </div>
    </div>
  </div>
</div>
</section>
    
    </div>
</div>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
    
    <script>
        // Accordion 
        function myAccFunc() {
          var x = document.getElementById("demoAcc");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
        function myAccFunc1() {
          var x = document.getElementById("demoAcc1");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
        
        function myAccFunc2() {
          var x = document.getElementById("demoAcc2");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
        
        function myAccFunc3() {
          var x = document.getElementById("demoAcc3");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
        
        //document.getElementById("myBtn").click();

        // Open and close sidebar
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }
        
</script>
  
  
</body>
</html>