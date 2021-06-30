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
        <script src="./js/main.js"></script>
        <style>
        body {
            background-color: #80F0F9;
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
        .cloud3 {
            width: 10%;
            height: auto;
            top: 100px;
            left: 100px;
        }
        .sun {

        }
        #clouds{
            padding: 100px 0;
        }
        /*Time to finalise the cloud shape*/
        .cloud {
            width: 200px; height: 60px;
            background: #fff;
            border-radius: 200px;
            -moz-border-radius: 200px;
            -webkit-border-radius: 200px;
            position: relative; 
        }

        .cloud:before, .cloud:after {
            content: '';
            position: absolute; 
            background: #fff;
            width: 100px; height: 80px;
            position: absolute; top: -15px; left: 10px;
            border-radius: 100px;
            -moz-border-radius: 100px;
            -webkit-border-radius: 100px;
            -webkit-transform: rotate(30deg);
            transform: rotate(30deg);
            -moz-transform: rotate(30deg);
        }

        .cloud:after {
            width: 120px; height: 120px;
            top: -55px; left: auto; right: 15px;
        }

        /*Time to animate*/
        .x1 {
            -webkit-animation: moveclouds 20s linear infinite;
            -moz-animation: moveclouds 20s linear infinite;
            -o-animation: moveclouds 20s linear infinite;
        }

        /*variable speed, opacity, and position of clouds for realistic effect*/
        .x2 {
            left: 200px;
            
            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 0.6; /*opacity proportional to the size*/
            
            /*Speed will also be proportional to the size and opacity*/
            /*More the speed. Less the time in 's' = seconds*/
            -webkit-animation: moveclouds 30s linear infinite;
            -moz-animation: moveclouds 30s linear infinite;
            -o-animation: moveclouds 30s linear infinite;
        }

        .x3 {
            left: -250px; top: -200px;
            
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            transform: scale(0.8);
            opacity: 0.8; /*opacity proportional to the size*/
            
            -webkit-animation: moveclouds 20s linear infinite;
            -moz-animation: moveclouds 20s linear infinite;
            -o-animation: moveclouds 20s linear infinite;
        }

        .x4 {
            left: 470px; top: -250px;
            
            -webkit-transform: scale(0.75);
            -moz-transform: scale(0.75);
            transform: scale(0.75);
            opacity: 0.75; /*opacity proportional to the size*/
            
            -webkit-animation: moveclouds 18s linear infinite;
            -moz-animation: moveclouds 18s linear infinite;
            -o-animation: moveclouds 18s linear infinite;
        }

        .x5 {
            left: -150px; top: -150px;
            
            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            transform: scale(0.8);
            opacity: 0.8; /*opacity proportional to the size*/
            
            -webkit-animation: moveclouds 20s linear infinite;
            -moz-animation: moveclouds 20s linear infinite;
            -o-animation: moveclouds 20s linear infinite;
        }

        @-webkit-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
        @-moz-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
        @-o-keyframes moveclouds {
            0% {margin-left: 1000px;}
            100% {margin-left: -1000px;}
        }
        
        </style>

    
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <center id="sg1">
      

        <section class="section bgback" style="height: 100vh;">
    
            <div id="clouds">
                <div class="cloud x1"></div>
                <div class="cloud x2"></div>
                <div class="cloud x3"></div>
                <div class="cloud x4"></div>
                <div class="cloud x5"></div>
            </div>
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
        </div>
    </body>
</html>
