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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-slick-carousel@1.0.6/dist/vue-slick-carousel.umd.min.js"></script>
        <script src="./js/main.js"></script>
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=258059077674129&autoLogAppEvents=1" nonce="KXzFAhvD"></script>
    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <div id="app">
            <?php require_once("includes/modal.php"); ?>
            <?php require_once("includes/navigation.php"); ?>

            <?php require_once("sections/first.php"); ?>
            <?php require_once("sections/second.php"); ?>
        
            <?php require_once("includes/footer.php"); ?>

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
            <script>
            var heightSlider = $('.hero-section').height();
            if(heightSlider < 250){
                $('.hero-section').css({ paddingTop : '230px' });
            }else if(heightSlider < 420){
                $('.hero-section').css({ paddingTop : '265px' });
            }else{
                $('.hero-section').css({ paddingTop : '300px' });
            }

            $(window).resize(function(){
                var heightSlider = $('.hero-section').height();
                if(heightSlider < 250){
                    $('.hero-section').css({ paddingTop : '230px' });
                }else if(heightSlider < 420){
                    $('.hero-section').css({ paddingTop : '2650px' });
                }else{
                    $('.hero-section').css({ paddingTop : '300px' });
                }
            });
        </script>
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' defer>
        </div>
    </body>
    
</html>
