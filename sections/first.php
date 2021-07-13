<section class="section hero-section bg-ico-hero" id="home" style="height: 100vh;" >

    <div class="bg-overlay bg-info"></div>
    <div class="container">

        <div class="row align-items-center" >
            <div class="col-lg-12 mb-5" style="margin-top: -130px;">
                <div style="float: right;">
                    <ul class="list-inline user-chat-nav text-right" style="margin-top: 10px; float: right;">
                        <li class="list-inline-item" style="margin-right: -30px;">
                        <img src="assets/images/krad/pnhrs.jpg" alt="" class="rounded" style="width: 80%; height: auto;">
                        </li>
                        <li class="list-inline-item">
                        <img src="assets/images/krad/dost.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                        <li class="list-inline-item">
                            <img src="assets/images/krad/pchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                        <li class="list-inline-item">
                            <img src="assets/images/krad/zchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                        <li class="list-inline-item">
                            <img src="assets/images/krad/ched.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                        <li class="list-inline-item">
                            <img src="assets/images/krad/up.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                        <li class="list-inline-item">
                        <img src="assets/images/krad/doh.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                        </li>
                    </ul>
                </div>
                <div class="text-white-50" style="cursor: pointer;" @click="desc('title')">
                    <h1 class="text-white fw-semibold mb-2"><p style="font-size : 18px; color: #ffd311; text-shadow: 1px 1px 1px #404040;">Health R&D in the New Normal :</p><p style="font-size : 26px; color: #ff2960; text-shadow: 1px 1px 2px #000000; margin-top: -15px;"> Moving towards Universal Health Care</p></h1>
                    <p style="margin-top: -12px;  text-shadow: 1px 1px 1px #000000;"><span class="font-size-13 text-white" style="margin-right: 20px;"><i class='bx bx-calendar'></i> August 09-13, 2021 </span>
                    <span class="font-size-13 text-white"><i class='bx bx-map-pin'></i> Zamboanga City</span></p>
                </div>
            </div>
            <div v-else class="">
                <ul class="list-inline user-chat-nav text-right" style="margin-top: 10px; float: right;">
                    <li class="list-inline-item" style="margin-right: -30px;">
                    <img src="assets/images/krad/pnhrs.jpg" alt="" class="rounded" style="width: 80%; height: auto;">
                    </li>
                    <br v-if="isMobile()">
                    <li class="list-inline-item">
                    <img src="assets/images/krad/dost.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                    <li class="list-inline-item">
                        <img src="assets/images/krad/pchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                    <li class="list-inline-item">
                        <img src="assets/images/krad/zchrd.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                    <li class="list-inline-item">
                        <img src="assets/images/krad/ched.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                    <li class="list-inline-item">
                        <img src="assets/images/krad/up.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                    <li class="list-inline-item">
                    <img src="assets/images/krad/doh.png" alt="" class="rounded avatar-sm" style="height: 2rem; width: 2rem;">
                    </li>
                </ul>
            </div>
        </div>

        <div class="row align-items-center" style="margin-top: 20px;" v-if="!isMobile()">
            <div class="col-lg-4">
                <div class="text-white-50">
                    <div class="" style="cursor: pointer;" @click="desc('logo')">
                        <img src="assets/images/krad/logo.png" class="img-fluid" alt="Responsive image" style="max-width: 85%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <vue-slick-carousel :autoplay="true" :autoplaySpeed="10000" :dots="true" :options="slickOptions">
                    
                    <!-- <div class="slide-1" style="padding: 50px;">
                        <div class="text-white-50" style="margin-left: 100px;">
                            <h4 class="gratext fw-semibold mb-4">Philippine National Health Research System </h4>
                            <p class="font-size-13 mt-4 mb-5 text-white para">Anchored on the principles of the Essential National Health Research (ENHR) on inclusiveness, participation, quality, equity, and effectiveness, the Philippine National Health Research System (PNHRS) is an integrated national framework for health research in the country. It is a convergence strategy that aims to promote cooperation and integration of all health research efforts and stakeholders in the country to ensure that research contributes to evidence-informed health policies and actions.</p>
                            <ul class="list-inline user-chat-nav text-right" style="margin-top: 5rem !impotant;">
                                <li class="list-inline-item">
                                <img src="assets/images/krad/pnhrs.jpg" alt="" class="rounded" style="width: 50px; height: 50px;">
                                </li>
                                <li class="list-inline-item">
                                <img src="assets/images/krad/dost.png" alt="" class="rounded avatar-sm">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/pchrd.png" alt="" class="rounded avatar-sm">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/zchrd.png" alt="" class="rounded avatar-sm">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/ched.png" alt="" class="rounded avatar-sm">
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/images/krad/up.png" alt="" class="rounded avatar-sm">
                                </li>
                                <li class="list-inline-item">
                                <img src="assets/images/krad/doh.png" alt="" class="rounded avatar-sm">
                                </li>
                                
                            </ul>
                        </div>
                    </div> -->

                    <div class="slide-1">
                        <div class="text-white-50">
                            <h4 class="gratext fw-semibold mb-4">Satellite Sessions :</h4><hr>
                            <div v-for="(list,index) in lists.first" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                <span class="first mb-2 text-truncate" >- &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;{{ list.date }} (<span class="font-size-12">{{list.time}}</span>)</span> <span @click="openmodal(list.link)"><i class='bx bxs-caret-right-circle text-warning'></i> {{list.title}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="slide-2">
                        <div class="text-white-50">
                          
                            <h4 class="gratext fw-semibold">Pre-Conference Sessions : </h4>
                            <div style="float: right; margin-left: 30px; margin-bottom: -20px; margin-top: -20px;">
                                <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-danger'></i> August 09, 2021</span> &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-warning'></i> August 10, 2021</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-success'></i> August 11, 2021</span>
                            </div>
                            <hr> 
                            <div v-for="(list,index) in lists.fourth" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                <span @click="openmodal(list.link)" style="cursor:pointer"><i :class="'bx bxs-caret-right-circle text-'+list.color"></i> {{list.title}} <span v-if="list.option != ''" class="badge bg-danger text-white"> By Invitation Only</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="slide-3">
                        <div class="text-white-50">
                          
                            <h4 class="gratext fw-semibold">Main Conference Sessions : </h4>
                            <div style="float: right; margin-left: 30px; margin-bottom: -20px; margin-top: -20px;">
                                <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-warning'></i> Day 1</span> &nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="font-size-12 para text-white"><i class='bx bxs-calendar text-danger'></i> Day 2</span>
                            </div>
                            <hr> 
                            <div v-for="(list,index) in lists.fifth" v-bind:key="list.index" class="text-white mt-2 para" style="cursor:pointer">
                                <span @click="openmodal(list.link)"><i :class="'bx bxs-caret-right-circle text-'+list.color"></i> {{list.title}}</span>
                            </div>
                        </div>
                    </div>

                </vue-slick-carousel>
            </div>
        </div>
        <div class="row align-items-center" style="margin-top: 20px;" v-else>
            <div class="col-lg-12">
                <div class="text-white-50">
                    <div class="" style="cursor: pointer;" @click="desc('logo')">
                        <img src="assets/images/krad/logo.png" class="img-fluid" alt="Responsive image" style="max-width: 85%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

    </div>
                
</section>