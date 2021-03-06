<section class="section pt-4" style="margin-top: 50px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5">
                <span style="float: right; font-size: 40px;" class="text-white bx-tada" @click="content = 'island'"><i class='bx bxs-x-circle'></i></span>
                    <h4 class="text-white">Events</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <img class="img-fluid" src="assets/images/programme.png" style="width: 90%; height: auto;">
            </div>
            <div class="col-md-8" data-simplebar style="height: 60vh; overflow-x: hidden;">
            <div class="row">
            <h6 class="text-warning mb-4"><i class="bx bx-news me-1"></i> SATELLITE SESSIONS</h6>
                <div class="col-xl-3" v-for="(list,index) in lists2.first" v-bind:key="list.index">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <h5 @click="viewsession(list.images)" class="text-truncate font-size-12"><a href="#" class="text-dark">{{ list.title}}</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Due Date">
                                    <i class="bx bx-calendar mr-1"></i> {{list.date}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    

                <hr></hr>
                <h6 class="text-warning mb-4"><i class="bx bx-news me-1"></i> PRE-CONFERENCE SESSIONS</h6>
                <div class="col-xl-4" v-for="(list,index) in lists2.sixth" v-bind:key="list.id">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <h6 @click="viewsession(list.images)" class="text-truncate font-size-12"><a href="#" class="text-dark">{{ list.main }}</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Due Date">
                                    <i class="bx bx-calendar mr-1"></i> {{list.date}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                
                <hr></hr>
                <h6 class="text-warning mb-4"><i class="bx bx-news me-1"></i>  MAIN CONFERENCE SESSIONS</h6>
                
                <div class="col-xl-4" v-for="(list,index) in lists2.seventh" v-bind:key="list.id">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <h6  @click="viewsession(list.images)" class="text-truncate font-size-12"><a href="#" class="text-dark">{{ list.main }}</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Due Date">
                                    <i class="bx bx-calendar mr-1"></i> {{list.date}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    

               
            </div>
            </div>
        </div>               
    </div>
</section>






