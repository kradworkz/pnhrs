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
        <link href="assets/css/lobby.css" id="app-style" rel="stylesheet" type="text/css" />
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
                /* background-image: url('assets/images/landing/images/bg.png'); background-size: contain; */
                /* overflow: hidden; */
            }
        </style>

    
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60" >
        <div id="sg1">
        <?php require_once("includes/modal2.php"); ?>
        
            <section class="section" v-bind:class="(show) ? 'bgback' : 'nobgback'" style="height: 100vh;">
                <transition name="fade">
                    <div v-if="show" style="margin-top: -50px; margin-left: 50px;">
                        <div v-if="content == 'island'">
                            <div class="container-sun">
                                <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                                    <circle cx="50" cy="50" r="35" id="sun"></circle>
                                </svg>
                            </div>
                            
                            <div class="pyro"> 
                                <div class="before"></div>
                                <div class="after"></div>
                            </div>

                            <ul id="map">
                                <!-- <li @click="openmodal(1)" class="dakak zoom"></li>     -->
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
                                <!-- <li href="register.php" target="_blank"><li class="register bx-tada"></li></a> -->
                            </ul>

                            <div id="clouds" style="margin-top: -350px;">
                                <div class="cloud x1"></div>
                                <div class="cloud x2"></div>
                                <div class="cloud x3"></div>
                                <div class="cloud x4"></div>
                                <div class="cloud x5"></div>
                            </div> 

                            <img class="menu" src="assets/images/landing/new/designs/menu.png">
                            <a @click="view('about')"><img class="about" src="assets/images/landing/new/designs/about.png" onmouseover="this.src='assets/images/landing/new/designs/e-3.png'" onmouseout="this.src='assets/images/landing/new/designs/about.png'"></a>
                            <a @click="view('events')"><img class="events" src="assets/images/landing/new/designs/events.png" onmouseover="this.src='assets/images/landing/new/designs/e-2.png'" onmouseout="this.src='assets/images/landing/new/designs/events.png'"></a>
                            <a @click="view('exhibit')"><img class="exhibit" src="assets/images/landing/new/designs/exhibit.png"  onmouseover="this.src='assets/images/landing/new/designs/e-1.png'" onmouseout="this.src='assets/images/landing/new/designs/exhibit.png'"></a>
                            <a href="register.php" target="_blank"><img class="registerw" src="assets/images/landing/new/designs/register.png" onmouseover="this.src='assets/images/landing/new/designs/e-4.png'" onmouseout="this.src='assets/images/landing/new/designs/register.png'"></a>
                            <a @click="view('faqs')"><img class="faq" src="assets/images/landing/new/designs/faq.png" onmouseover="this.src='assets/images/landing/new/designs/e-5.png'" onmouseout="this.src='assets/images/landing/new/designs/faq.png'"></a> 
                        </div>
                        <div v-else-if="content == 'exhibit'">
                            <?php require_once("exhibit.php");?>
                        </div>
                        <div v-else-if="content == 'about'">
                            <?php require_once("about.php");?>
                        </div>
                        <div v-else-if="content == 'events'">
                            <?php require_once("events.php");?>
                        </div>
                        <div v-else>
                            <?php require_once("faqs.php");?>
                        </div>

                        <a href="https://14thpnhrsweekcelebration.dost9.ph/" target="_blank"><img class="logo" src="assets/images/landing/logo.png"></a>
                        <!-- <img class="logos" src="assets/images/landing/logos.png"> -->
                        <img class="l-1" src="assets/images/krad/dost.png">
                        <img class="l-2" src="assets/images/krad/pchrd.png">
                        <img class="l-3" src="assets/images/krad/zchrd.png">
                        <img class="l-4" src="assets/images/krad/up.png">
                        <img class="l-5" src="assets/images/krad/doh.png">
                        <img class="l-6" src="assets/images/krad/ched.png">
                        <!-- <img class="registerwood" src="assets/images/landing/register.png"> -->
                        <!-- <a href="register.php" target="_blank"><img class="registerw" src="assets/images/landing/new/designs/register.png" onmouseover="this.src='assets/images/landing/new/designs/e-4.png'" onmouseout="this.src='assets/images/landing/new/designs/register.png'"></a> -->
                        <!-- <img class="faqs" src="assets/images/landing/new/designs/faqs.png" >
                        <a @click="view('faqs')"><img class="faq" src="assets/images/landing/new/designs/faq.png" onmouseover="this.src='assets/images/landing/new/designs/e-5.png'" onmouseout="this.src='assets/images/landing/new/designs/faq.png'"></a> -->
                        <!-- <img class="copy" src="assets/images/landing/new/designs/copyright.png" > -->
                        <img class="plane" src="assets/images/landing/new/designs/plane.png">
                     
                        
                        
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
    </body>
</html>
