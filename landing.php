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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="./js/landing.js"></script>
        <link href="assets/css/animation.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/buildings.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/designs.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/police.css" id="app-style" rel="stylesheet" type="text/css" />
        <style>
            body {
                /* background-color: #4ea8ff; */
                overflow: hidden;
            }
        </style>

    
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <div id="sg1" :style="myStyle">
      
        
        <section class="section" v-bind:class="(show) ? 'bgback' : 'nobgback'" style="height: 100vh;">
            <transition name="fade">
                <div v-if="show">
                    <div class="container-sun">
                        <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                            <circle cx="50" cy="50" r="35" id="sun"></circle>
                        </svg>
                    </div>
                    
                    <div class="pyro"> 
                        <div class="before"></div>
                        <div class="after"></div>
                    </div>

                  
                    <img id="dipolog" class="dipolog" src="assets/images/landing/island2.png">

                    <img id="bg" class="bg" src="assets/images/landing/bg.png">


                        
                    
                    <img class="coconut" src="assets/images/landing/new/designs/coconut.png">
                    <img class="jungle" src="assets/images/landing/new/designs/jungle.png">
                    <img class="camping" src="assets/images/landing/new/designs/camping.png">

                    <img id="cityhall" class="cityhall" src="assets/images/landing/new/cityhall.png">
                    <img id="bush1" class="bush1" src="assets/images/landing/new/bush.png">
                    <img id="bush2" class="bush2" src="assets/images/landing/new/bush.png">
                    <img id="garden" class="garden" src="assets/images/landing/new/garden.png">

                    <img id="store" class="store" src="assets/images/landing/new/store.png">
                    <img id="sm" class="sm" src="assets/images/landing/new/sm.png">
                    <img id="kcc" class="kcc" src="assets/images/landing/new/kcc.png">
                    <img id="barter" class="barter" src="assets/images/landing/new/barter.png">
                    <img id="adzu" class="adzu" src="assets/images/landing/new/adzu.png">
                    <img id="dmc" class="dmc" src="assets/images/landing/new/dmc.png">
                    <img id="airport" class="airport" src="assets/images/landing/new/airport.png">
                    <img id="zcmc" class="zcmc" src="assets/images/landing/new/zcmc.png">
                    <img id="brent" class="brent" src="assets/images/landing/new/brent.png">
                    <img id="dswd" class="dswd" src="assets/images/landing/new/dswd.png">
                    <img id="ciudad" class="ciudad" src="assets/images/landing/new/ciudad.png">
                    <img id="psa" class="psa" src="assets/images/landing/new/psa.png">
                    <img id="ched" class="ched" src="assets/images/landing/new/ched.png">
                    <img id="doh" class="doh" src="assets/images/landing/new/doh.png">
                    <img id="seaport" class="seaport" src="assets/images/landing/new/seaport.png">
                    <img id="treehouse" class="treehouse" src="assets/images/landing/new/treehouse.png">
                    <img id="merloquet" class="merloquet" src="assets/images/landing/new/merloquet.png">
                    <img id="yakan" class="yakan" src="assets/images/landing/new/yakan.png">
                    <img id="cho" class="cho" src="assets/images/landing/new/cho.png">
                    <img id="uz" class="uz" src="assets/images/landing/new/uz.png">
                    <img id="church" class="church" src="assets/images/landing/new/church.png">
                    <img id="mosque" class="mosque" src="assets/images/landing/new/mosque.png">
                    <img id="gas" class="gas" src="assets/images/landing/new/gas.png">
                    <img id="bus" class="bus" src="assets/images/landing/new/bus.png">
                    <img id="fire" class="fire" src="assets/images/landing/new/fire.png">
                    <img id="police" class="police" src="assets/images/landing/new/police.png">
                    <img id="policetree" class="policetree" src="assets/images/landing/new/policetree.png">



                    
                    <img class="cityhalllyt" src="assets/images/landing/new/designs/lytscityhall.png">
                    <img class="solo1" src="assets/images/landing/new/designs/solo.png">
                    <img class="solo2" src="assets/images/landing/new/designs/solo.png">
                    <img class="double1" src="assets/images/landing/new/designs/double.png">
                    <img class="double2" src="assets/images/landing/new/designs/double.png">
                    <img class="sign1" src="assets/images/landing/new/designs/sign.png">
                    <img class="pot1" src="assets/images/landing/new/designs/pot.png">
                    <img class="policecar1" src="assets/images/landing/new/designs/policecar.png">
                    <img class="policecar2" src="assets/images/landing/new/designs/policecar.png">
                    <img class="ambulance1" src="assets/images/landing/new/designs/ambulance.png">
                    <img class="firetruck1" src="assets/images/landing/new/designs/firetruck.png">
                    <img class="policemotor1" src="assets/images/landing/new/designs/policemotor.png">
                    <img class="policemotor2" src="assets/images/landing/new/designs/policemotor2.png">
                    <img class="stone1" src="assets/images/landing/new/designs/stones.png">
                    <img class="stone2" src="assets/images/landing/new/designs/stones.png">

                    <img class="police1" src="assets/images/landing/new/designs/police.png">
                    <img class="police2" src="assets/images/landing/new/designs/police.png">
                    <img class="police3" src="assets/images/landing/new/designs/police.png">
                    <img class="police4" src="assets/images/landing/new/designs/police.png">
                    <img class="police5" src="assets/images/landing/new/designs/police.png">
                    
                    <img class="policeshield1" src="assets/images/landing/new/designs/policeshield2.png">
                    <img class="policeshield2" src="assets/images/landing/new/designs/policeshield2.png">
                    <img class="policeshield3" src="assets/images/landing/new/designs/policeshield2.png">


                    <img class="vinta2" src="assets/images/landing/vinta.png">
                    <img class="vinta3" src="assets/images/landing/vinta.png">

                    <div id="clouds">
                        <div class="cloud x1"></div>
                        <div class="cloud x2"></div>
                        <div class="cloud x3"></div>
                        <div class="cloud x4"></div>
                        <div class="cloud x5"></div>
                    </div>

                    <img class="plane" src="assets/images/landing/new/designs/plane.png">
                </div>

                <div v-else>
                    <div class="row align-items-center pt-4">
                        <div class="col-md-6 col-sm-8">
                            <div>
                                <img @click="openmodal('test')" src="assets/images/landing/3d/port.png" alt="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                        <div class="col-md-5 ml-auto">
                            <div class="mt-4 mt-md-auto">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="features-number font-weight-semibold display-4 mr-3">01</div>
                                    <h4 class="mb-0">Lending</h4>
                                </div>
                                <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than of the individual will be more simple and regular than the existing.</p>
                                <div class="text-muted mt-4">
                                    <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel aliquet</p>
                                    <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </transition>
        </section>
     
    
        <div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">{{title}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center pt-4">
                            <div class="col-md-6 col-sm-8">
                                <div>
                                    <img src="assets/images/landing/3d/port.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-md-5 ml-auto">
                                <div class="mt-4 mt-md-auto">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="features-number font-weight-semibold display-4 mr-3">01</div>
                                        <h4 class="mb-0">Lending</h4>
                                    </div>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than of the individual will be more simple and regular than the existing.</p>
                                    <div class="text-muted mt-4">
                                        <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel aliquet</p>
                                        <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
