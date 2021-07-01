<div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title mt-0" id="myExtraLargeModalLabel">{{date}} (<span class="text-info">{{time}}</span>)</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <h6 class="mt-4 font-weight-semibold">{{title}}</h6>
                            <p class="text-muted mt-3">Please click here to register.</p>

                            <div class="mt-4 mb-4">
                                <!-- Button trigger modal -->
                                <a :href="link" target="_blank">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verificationModal">
                                        <i class='bx bxl-zoom bx-flashing label-icon mr-2'></i> Zoom Link
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-8">
                        <span class="font-size-20 mt-5"><i class='bx bx-calendar'></i>{{date}} </span>
                    </div>
                    <div class="col-md-4">
                        <a :href="link" target="_blank"><button @click="close" type="button" class="btn btn-primary waves-effect btn-label waves-light"><i class='bx bxl-zoom bx-flashing label-icon'></i> Zoom Link</button></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>