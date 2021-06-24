<!doctype html>
<html lang="en">

<head>
        
        <meta charset="utf-8" />
        <title>4th PNHRS Week</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Health R and D in the New Normal : Moving towards universal health care" name="description" />
        <meta content="kradyfatty" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
        <script src="./js/main.js"></script>

    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        <div id="sg1">
        <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
            <div class="container">
                <a class="navbar-logo" href="index-2.html">
                    <img src="assets/images/logo-dark.png" alt="" height="19" class="logo logo-dark">
                    <img src="assets/images/logo-light.png" alt="" height="19" class="logo logo-light">
                </a>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
              
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav ms-auto" id="topnav-menu" >
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faqs">FAQs</a>
                        </li>
                    </ul>

                    <div class="my-2 ms-lg-2">
                        <a href="javascript: void(0);" class="btn btn-outline-success w-xs">Register</a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="section hero-section bg-ico-hero" id="home" style="height: 100vh;">
            <div class="bg-overlay bg-primary"></div>
            <div class="container" v-bind:style="[!isMobile() ? {'margin-top' : '-100px'} : {}]">
                <div class="row" v-if="!isMobile()">
                    <div class="col-lg-5">
                        <div class="text-white-50">
                            <div class="">
                                <img src="assets/images/krad/logo.png" class="img-fluid" alt="Responsive image" style="max-width: 85%; height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-white-50" v-if="type == 'main'">
                            <h1 class="text-white fw-semibold mb-3"><span style="font-size : 24px;">Health R&D in the New Normal :</span><br><span style="font-size : 32px;"> Moving towards Universal Health Care</span></h1>
                            <span class="font-size-14" style="margin-right: 20px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
                            <span class="font-size-14"><i class='bx bx-map-pin'></i> Zamboanga City</span>
                            <br class="mb-5">
                            <div class="tab-content mt-4">
                                <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel">
                                    <div>
                                        <div id="gen-ques-accordion" class="accordion custom-accordion">
                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(1)" class="accordion-list">
                                                    <div>Sattelite Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>

                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(2)" class="accordion-list">
                                                    <div>Main Conference Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>

                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(3)" class="accordion-list">
                                                    <div>Pre-Conference Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-white-50" v-else-if="type == 1">
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                            <h1 class="text-white fw-semibold mb-4">Sattelite Sessions :</h1>
                            <hr>
                            <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','August 03, 2021')" class="mb-2 text-truncate" ><i class="mdi mdi-circle-medium text-warning me-1"></i>Financing for National Health Security and Pandemic Preparedness</p>
                                <p @click="openmodal('','August 04, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Strengthening the National Health Research System’s Capacity for Response and Research</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_BUZ-ntn_SI-I9qMJyMVuKA','August 05, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing Regional Preparedness for Public Health Emergencies</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_6k1-qA-5RUe7F231-IPuow','August 06, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Ensuring Good Governance and Accountability in the New Normal</p>
                            </div>
                        </div>
                        <div class="text-white-50" v-else-if="type == 2"> 
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                            <h1 class="text-white fw-semibold mb-4">Pre-Conference Sessions :</h1>
                            <hr>
                            <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_HSzgJC2YSMKtazgiE_MFiA','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Student</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_wvTDUmJWQV23CQEbFnm3DQ','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Professional</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_4V-Qlp41TyCDokWC1bot3A','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Talk on Social Innovation in Health Research</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_s-isBFZESkinjrB_YXkQ8g','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Moral Compass for Emergency Research and the Importance and Nature of Community Consultation</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_aut-ZSkBRAOMB6cFyigSjg','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Undergraduate Thesis Grant in Natural Products Competition</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_E0AnW6IsT6mNE-O7tZmxTw','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>HERDIN</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_ROZhY35mR36O0AOiHoe1yQ','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Research Ethics Secretariat Training</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_KvBNGA_GT3q9TGLaxFEjIg','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>3-Minute Pitch to Policymakers Competition</p>
                            </div>
                        </div>
                        <div class="text-white-50" v-else>
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                             <h1 class="text-white fw-semibold mb-4">Main Conference Sessions :</h1>
                             <hr>
                             <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_5aRz2YXGQBa_bxW6RRTdJg', 'August 12, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>14th PNHRS Week Celebration - Opening and Plenary 1</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Implications of the New Normal on Health Technology Assessment</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing the Country’s Bio-Preparedness for COVID-19 and other Emerging Infectious Diseases</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Harnessing International Collaborations and Engagement of Stakeholders to Maximize Health Research Impact</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Plenary II and 14th PNHRS Week Celebration Closing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" v-else>
                    <div class="col-lg-12">
                        <div class="media">
                            <div class="media-body float-end" style="margin-left: -10px;">
                                <div class="text-white">
                                    <p style="margin-bottom: -1px;">Health R&D in the New Normal :</p>
                                    <h6 class="text-white mb-1">Moving towards Universal Health Care</h6>                 
                                    <span class="font-size-10" style="margin-right: 20px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
                                    <span class="font-size-10"><i class='bx bx-map-pin'></i> Zamboanga City</span>
                                </div>
                            </div>
                            <div>
                                <img src="assets/images/krad/logo.png" alt="" class="avatar-md rounded-circle img-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="text-white-50" v-if="type == 'main'">
                            <br><br>
                            <div class="tab-content mt-4">
                                <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel">
                                    <div>
                                        <div id="gen-ques-accordion" class="accordion custom-accordion">
                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(1)" class="accordion-list">
                                                    <div>Sattelite Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>

                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(2)" class="accordion-list">
                                                    <div>Main Conference Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>

                                            <div class="mb-3">
                                                <a style="cursor: pointer;" @click="openhaha(3)" class="accordion-list">
                                                    <div>Pre-Conference Sessions</div>
                                                    <i class="bx bx-plus accor-plus-icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-white-50" v-else-if="type == 1">
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                            <h1 class="text-white fw-semibold mb-4">Sattelite Sessions :</h1>
                            <hr>
                            <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','August 03, 2021')" class="mb-2 text-truncate" ><i class="mdi mdi-circle-medium text-warning me-1"></i>Financing for National Health Security and Pandemic Preparedness</p>
                                <p @click="openmodal('','August 04, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Strengthening the National Health Research System’s Capacity for Response and Research</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_BUZ-ntn_SI-I9qMJyMVuKA','August 05, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing Regional Preparedness for Public Health Emergencies</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_6k1-qA-5RUe7F231-IPuow','August 06, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Ensuring Good Governance and Accountability in the New Normal</p>
                            </div>
                        </div>
                        <div class="text-white-50" v-else-if="type == 2"> 
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                            <h1 class="text-white fw-semibold mb-4">Pre-Conference Sessions :</h1>
                            <hr>
                            <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_HSzgJC2YSMKtazgiE_MFiA','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Student</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_wvTDUmJWQV23CQEbFnm3DQ','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Professional</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_4V-Qlp41TyCDokWC1bot3A','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Talk on Social Innovation in Health Research</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_s-isBFZESkinjrB_YXkQ8g','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Moral Compass for Emergency Research and the Importance and Nature of Community Consultation</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_aut-ZSkBRAOMB6cFyigSjg','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Undergraduate Thesis Grant in Natural Products Competition</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_E0AnW6IsT6mNE-O7tZmxTw','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>HERDIN</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_ROZhY35mR36O0AOiHoe1yQ','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Research Ethics Secretariat Training</p>
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_KvBNGA_GT3q9TGLaxFEjIg','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>3-Minute Pitch to Policymakers Competition</p>
                            </div>
                        </div>
                        <div class="text-white-50" v-else>
                            <div class="avatar-sm mx-auto mb-4 float-end" @click="openhaha('main')" style="cursor:pointer;">
                                <span class="avatar-title rounded-circle bg-light font-size-24">
                                    <i class="bx bx-x-circle text-danger"></i>
                                </span>
                            </div>
                             <h1 class="text-white fw-semibold mb-4">Main Conference Sessions :</h1>
                             <hr>
                             <div class="text-white mt-4" style="cursor:pointer">
                                <p @click="openmodal('https://us02web.zoom.us/webinar/register/WN_5aRz2YXGQBa_bxW6RRTdJg', 'August 12, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>14th PNHRS Week Celebration - Opening and Plenary 1</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Implications of the New Normal on Health Technology Assessment</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing the Country’s Bio-Preparedness for COVID-19 and other Emerging Infectious Diseases</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Harnessing International Collaborations and Engagement of Stakeholders to Maximize Health Research Impact</p>
                                <p @click="openmodal('','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Plenary II and 14th PNHRS Week Celebration Closing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <section class="section bg-white" id="about">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog-box mb-4 mb-xl-0">
                            <div class="mt-4 text-muted">
                                <h5 class="text-primary mb-3"><i class="bx bx-news me-1"></i> SATELLITE SESSIONS</h5>
                                <div class="text-muted mt-4" style="cursor:pointer">
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','August 03, 2021')" class="mb-2 text-truncate" ><i class="mdi mdi-circle-medium text-warning me-1"></i>Financing for National Health Security and Pandemic Preparedness</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_0wrnbsM1R5iGsWKqRt8oCQ','August 04, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Strengthening the National Health Research System’s Capacity for Response and Research</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_BUZ-ntn_SI-I9qMJyMVuKA','August 05, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing Regional Preparedness for Public Health Emergencies</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_6k1-qA-5RUe7F231-IPuow','August 06, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Ensuring Good Governance and Accountability in the New Normal</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="blog-box mb-4 mb-xl-0">
                            <div class="mt-4 text-muted">
                                <h5 class="text-danger mb-3"><i class="bx bx-news me-1"></i> PRE-CONFERENCE SESSION</h5>
                                <div class="text-muted mt-4" style="cursor:pointer">
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_HSzgJC2YSMKtazgiE_MFiA','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Student</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_wvTDUmJWQV23CQEbFnm3DQ','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Oral Research Presentation Contest - Professional</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_4V-Qlp41TyCDokWC1bot3A','August 09, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Talk on Social Innovation in Health Research</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_s-isBFZESkinjrB_YXkQ8g','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Moral Compass for Emergency Research and the Importance and Nature of Community Consultation</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_aut-ZSkBRAOMB6cFyigSjg','August 10, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Undergraduate Thesis Grant in Natural Products Competition</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_E0AnW6IsT6mNE-O7tZmxTw','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>HERDIN</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_ROZhY35mR36O0AOiHoe1yQ','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Research Ethics Secretariat Training</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_KvBNGA_GT3q9TGLaxFEjIg','August 11, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>3-Minute Pitch to Policymakers Competition</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="blog-box mb-4 mb-xl-0">
                            <div class="mt-4 text-muted">
                                <h5 class="text-warning mb-3"><i class="bx bx-news me-1"></i> MAIN CONFERENCE SESSIONS</h5>
                                <div class="text-muted mt-4" style="cursor:pointer">
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_5aRz2YXGQBa_bxW6RRTdJg', 'August 12, 2021')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>14th PNHRS Week Celebration - Opening and Plenary 1</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Implications of the New Normal on Health Technology Assessment</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Enhancing the Country’s Bio-Preparedness for COVID-19 and other Emerging Infectious Diseases</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Harnessing International Collaborations and Engagement of Stakeholders to Maximize Health Research Impact</p>
                                    <p @click="openmodal1('https://us02web.zoom.us/webinar/register/WN_B1HGEtFjQjyqjJQXl_KWGw','n/a')" class="mb-2 text-truncate"><i class="mdi mdi-circle-medium text-warning me-1"></i>Plenary II and 14th PNHRS Week Celebration Closing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Register Now!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <span class="font-size-20 mt-5"><i class='bx bx-calendar'></i> {{date}} </span>
                            </div>
                            <div class="col-md-4">
                                <a :href="link" target="_blank"><button @click="close" type="button" class="btn btn-primary waves-effect btn-label waves-light"><i class='bx bxl-zoom bx-flashing label-icon'></i> Zoom Link</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="landing-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                        </div>
    
                        <p class="mb-2"><script>document.write(new Date().getFullYear())</script> © PNHRS. Developed by DOST-IX</p>
                    </div>
                </div>
            </div>
        </footer>
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
