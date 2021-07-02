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
        <style>
            body {
                background-color: #4ea8ff;
                overflow: hidden;
            }
            .slick-prev {
                margin-left: -25px;
            }
            .slick-next {
                margin-right: -25px;
            }

            .slide-2 p {
                cursor: pointer;
            }
            .slide-3 p {
                cursor: pointer;
            }
            .slide-4 p {
                cursor: pointer;
            }
        </style>

    
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <div id="sg1">
      

        <section class="section" v-bind:class="(show) ? 'bgback' : 'nobgback'" style="height: 100vh;">
            <transition name="fade">
                <div v-if="show">
                    <div class="container-sun">
                        <svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
                            <circle cx="50" cy="50" r="35" id="sun"></circle>
                        </svg>
                    </div>
                
                    <div id="clouds">
                        <div class="cloud x1"></div>
                        <div class="cloud x2"></div>
                        <div class="cloud x3"></div>
                        <div class="cloud x4"></div>
                        <div class="cloud x5"></div>
                    </div>

                    <img @click="openmodal('Zamboanga Port')" id="port" class="port" src="assets/images/landing/port.png">
                    <img id="airport" class="airport" src="assets/images/landing/airport.png">
                    <img id="terminal" class="terminal" src="assets/images/landing/terminal.png">
                    <img id="island" class="island" src="assets/images/landing/island.png">
                    <img id="cityhall" class="cityhall" src="assets/images/landing/cityhall.png">
                    <img id="vinta1" class="vinta1" src="assets/images/landing/vinta.png">
                    <img id="vinta2" class="vinta2" src="assets/images/landing/vinta.png">
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
