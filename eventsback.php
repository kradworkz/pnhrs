<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>14th  PNHRS Week</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Health R and D in the New Normal : Moving towards universal health care" name="description" />
        <meta content="kradyfatty" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/animation.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/main.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="./js/landing.js"></script>
        <link href="assets/css/plane.css" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            body {
                /* background-color: #4ea8ff; */
                background-image: url('assets/images/landing/images/bg.png'); background-size: contain;
                overflow: hidden;
            }
            div.satellite {
			  display: block; /* the default for span */
			  float: left;
			  color: white;
			  font-size: 15px;
			  width: 200px;
			  text-align: center;
			  margin: 5px;
			  padding: 15px;
			  background-color: black; 
			}
			div.satellite:hover{
				cursor: pointer;
			}

			div.precon {
			  display: inline-block; /* the default for span */
			  color: white;
			  font-size: 15px;
			  width: 250px;
			  height: 60px;
			  text-align: center;
			  vertical-align: middle;
			  margin: auto;
			  padding: 8px 0;
			  background-color: black; 
			}
			div.precon:hover{
				cursor: pointer;
			}

			div.maincon {
			  display: inline-block; /* the default for span */
			  color: white;
			  font-size: 20px;
			  width: 200px;
			  height: 100px;
			  text-align: center;
			  vertical-align: middle;
			  margin: 20px;
			  padding: 35px 0;
			  background-color: black; 
			}
			div.maincon:hover{
				cursor: pointer;
			}

			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			}

			/* Modal Content/Box */
			.modal-content {
			  background-color: #fefefe;
			  margin: 15% auto; /* 15% from the top and centered */
			  padding: 20px;
			  border: 1px solid #888;
			  width: 80%; /* Could be more or less, depending on screen size */
			}

			/* The Close Button */
			.close {
			  color: #aaa;
			  float: right;
			  font-size: 28px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: black;
			  text-decoration: none;
			  cursor: pointer;
			}
        </style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    
    
    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60" >
    
        <div id="sg1">
            <section class="section" v-bind:class="(show) ? 'bgback' : 'nobgback'" style="height: 100vh;">
                <transition name="fade">
                    <div v-if="show" style="margin-top: -50px;">

                        <a href="https://14thpnhrsweekcelebration.dost9.ph/" target="_blank"><img class="logo" src="assets/images/landing/logo.png"></a>
                        <img class="logos" src="assets/images/landing/logos.png">


                        <div style="margin: 0 auto; width: 80%; margin-top: 50px;">
                        	<center><h1>EVENTS</h1></center>

	                        <div style="float: left; width: 25%; margin-right:50px;">
	                        	<img style="width:100%; height:100%; margin-top: 25px;" src="assets/images/programme.png">
	                        </div>

							<div style="float: left; width: 70%; height:100%; margin-top: 25px;">
								<div style="margin: 0 auto; width: 100%; padding-bottom: 25px;">

									<h4 style="text-align: center; text-decoration: underline; font-style: italic;">Satellite Sessions</h4>

									<div style="margin: 0 auto; width: 100%; text-align: center;">
										<div class="satellite" id="myBtn">SOUTH LUZON<br/>CLUSTER</div>
										<div id="myModal" class="modal">
										  <!-- Modal content -->
										  <div class="modal-content">
										    <span class="close">&times;</span>
										    <iframe src="assets/session_details/01_south_luzon.pdf" width="800px" height="600px">
										  </div>

										</div>


										<div class="satellite">NORTH LUZON<br/>CLUSTER</div>
										<div class="satellite">VISAYAS<br/>CLUSTER</div>
										<div class="satellite">MINDANAO<br/>CLUSTER</div>
									</div>
								</div>
								
								<div style="margin: 0 auto; width: 100%; margin-top: 20px;">
									<h4 style="text-align: center; text-decoration: underline; font-style: italic;">Pre-Conference</h4>

									<div style="margin: 0 auto; width: 100%; text-align: center;">
										<div class="precon">ORAL RESEARCH<br/>PAPER PRESENTATION</div>
										<div class="precon">RESEARCH IN GLOBAL<br/>HEALTH EMERGENCIES</div>
										<div class="precon">PRACTICAL TRAINING FOR<br/>REC MEMBERS AND STAFF</div>
									</div>
									<div style="margin: 0 auto; text-align: center; width: 100%; margin-top: 20px;">
										<div class="precon">SESSION ON SOCIAL INNOVATION <br/>IN HEALTH RESEARCH</div>
										<div class="precon">3-MINUTE PITCH<br/>TO POLICYMAKERS</div>
										<div class="precon">VISUAL ABSTRACT<br/>POSTER COMPETITION</div>
									</div>
								</div>

								<div style="margin: 0 auto; width: 100%; margin-top: 20px;">
									<h4 style="text-align: center; text-decoration: underline; font-style: italic;">Main Conference</h4>

									<div style="margin: 0 auto; text-align: center; width: 100%; margin-top: 20px;">
										<div class="maincon">DAY 1</div>
										<div class="maincon">DAY 2</div>
									</div>
								</div>
	                        </div>

                    	</div>

                    </div>

                    <div v-else>
                    <img class="top-left" src="assets/images/landing/images/bg.png">
                    <!-- <img class="top-right" src="assets/images/landing/images/top-right.png">

                    <img class="bottom-right" src="assets/images/landing/images/bottom-right.png">
                    <img class="bottom-left" src="assets/images/landing/images/bottom-left.png"> -->
                        <div class="row align-items-center pt-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="mt-4 mt-md-0">
                                    <vue-slick-carousel :autoplay="true" :autoplaySpeed="10000" :dots="true" :options="slickOptions">
                                        <div v-for="(land,index) in landmark.images" :class="'slide-'+index">
                                            <img :src="land.name" class="rounded img-fluid" alt="..">
                                        </div>
                                    </vue-slick-carousel>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5" style="margin-left: -60px;">
                                <div style="margin-right: 50px;">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0" style="color: #fdd200; text-shadow: rgb(0, 0, 0) 1px 1px 1px;">"{{landmark.name}}"</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                          <i @click="openmodal('test')" style="text-shadow: rgb(0, 0, 0) 1px 1px 1px;" class='font-size-24 bx bx-scan text-white'></i>
                                        </ol>
                                    </div>

                                </div>
                               
                                    <p class="text-white" style="text-indent: 50px;  text-align: justify; text-justify: inter-word;">{{landmark.description}}</p>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </transition>
            </section>

        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/js/pages/ico-landing.init.js"></script>
        <script src="assets/js/app.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' defer>
        <style>
            .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
            }
            .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
            }
        </style>
        </div>

    </div>
    </body>
</html>
<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>14th  PNHRS Week</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Health R and D in the New Normal : Moving towards universal health care" name="description" />
        <meta content="kradyfatty" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/animation.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/main.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="./js/landing.js"></script>
        <link href="assets/css/plane.css" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            body {
                /* background-color: #4ea8ff; */
                background-image: url('assets/images/landing/images/bg.png'); background-size: contain;
                overflow: hidden;
            }
        </style>

    
    </head>
    
    
    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60" >
    
        <div id="sg1">
            <section class="section" v-bind:class="(show) ? 'bgback' : 'nobgback'" style="height: 100vh;">
                <transition name="fade">
                    <div v-if="show" style="margin-top: -50px;">
                        <div class="container-sun">
                            <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                                <circle cx="50" cy="50" r="35" id="sun"></circle>
                            </svg>
                        </div>

                        <div class="pyro"> 
                            <ul>
                              <li><a href="#news">ABOUT<br/>PNHRS WEEK</a></li>
                              <li><a href="#contact">EVENTS</a></li>
                              <li><a href="#about">EXHIBIT</a></li>
                            </ul>
                        </div>

                        <div class="pyro"> 
                            <div class="before"></div>
                            <div class="after"></div>
                        </div>

                        <ul id="map" style="margin-top: -100px;">
                            <li @click="openmodal(1)" class="dakak zoom"></li>    
                            <li @click="openmodal(1)" class="stacruz zoom"></li>
                            <li class="vinta3"></li>
                            <li @click="openmodal(8)" class="merloquet zoom"></li>
                            <li @click="openmodal(8)" class="cityhall zoom"></li>
                            <li @click="openmodal(13)" class="sm zoom"></li>
                            <li @click="openmodal(14)" class="kcc zoom"></li>
                            <li class="adzu zoom"></li>
                            <li  @click="openmodal(9)" class="fortpillar zoom"></li>
                            <li class="barter zoom"></li>
                            <li class="police zoom"></li>
                            <li @click="openmodal(19)" class="airport zoom"></li>
                            <li class="zcmc zoom"></li>
                            <li class="brent zoom"></li>
                            <li class="ciudad zoom"></li>
                            <li class="cho zoom"></li>
                            <li class="dost zoom"></li>
                            <li class="mosque zoom"></li>
                            <li class="church zoom"></li>
                            <li class="uz zoom"></li>
                            <li class="dswd zoom"></li>
                            <li class="bus zoom"></li>
                            <li class="psa zoom"></li>
                            <li class="yakan zoom"></li>
                            <li class="ched zoom"></li>
                            <li class="doh zoom"></li>
                            <li class="seaport zoom"></li>
                            <li class="zscmst zoom"></li>
                            <li class="fire zoom"></li>
                            <li class="treehouse zoom"></li>
                            <li class="vinta2"></li>
                            <a href="register.php" target="_blank"><li class="register bx-tada"></li></a>
                        </ul>

                        <div id="clouds" style="margin-top: -350px;">
                            <div class="cloud x1"></div>
                            <div class="cloud x2"></div>
                            <div class="cloud x3"></div>
                            <div class="cloud x4"></div>
                            <div class="cloud x5"></div>
                        </div>  

                        <a href="https://14thpnhrsweekcelebration.dost9.ph/" target="_blank"><img class="logo" src="assets/images/landing/logo.png"></a>
                        <img class="logos" src="assets/images/landing/logos.png">
                        <img class="plane" src="assets/images/landing/new/designs/plane.png">
<!-- 
                        <img class="vinta2" src="assets/images/landing/vinta.png">
                        <img class="vinta3" src="assets/images/landing/vinta.png"> -->
                        
                    </div>

                    <div v-else>
                    <img class="top-left" src="assets/images/landing/images/bg.png">
                    <!-- <img class="top-right" src="assets/images/landing/images/top-right.png">

                    <img class="bottom-right" src="assets/images/landing/images/bottom-right.png">
                    <img class="bottom-left" src="assets/images/landing/images/bottom-left.png"> -->
                        <div class="row align-items-center pt-4">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="mt-4 mt-md-0">
                                    <vue-slick-carousel :autoplay="true" :autoplaySpeed="10000" :dots="true" :options="slickOptions">
                                        <div v-for="(land,index) in landmark.images" :class="'slide-'+index">
                                            <img :src="land.name" class="rounded img-fluid" alt="..">
                                        </div>
                                    </vue-slick-carousel>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5" style="margin-left: -60px;">
                                <div style="margin-right: 50px;">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0" style="color: #fdd200; text-shadow: rgb(0, 0, 0) 1px 1px 1px;">"{{landmark.name}}"</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                          <i @click="openmodal('test')" style="text-shadow: rgb(0, 0, 0) 1px 1px 1px;" class='font-size-24 bx bx-scan text-white'></i>
                                        </ol>
                                    </div>

                                </div>
                               
                                    <p class="text-white" style="text-indent: 50px;  text-align: justify; text-justify: inter-word;">{{landmark.description}}</p>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </transition>
            </section>

        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/js/pages/ico-landing.init.js"></script>
        <script src="assets/js/app.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' defer>
        <style>
            .fade-enter-active, .fade-leave-active {
            transition: opacity .5s;
            }
            .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
            }
        </style>
        </div>

    </div>
    </body>
</html>
<script>
$(document).ready(function() {
    var btn = document.getElementById("myBtn");
    btn.hide();
});
	
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
