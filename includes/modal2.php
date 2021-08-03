

<div class="modal fade" id="viewsession" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="margin-top: -30px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" data-simplebar style="height: 70vh;">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div v-for="(land,index) in images">
                                <center><img :src="land.name" class="rounded img-fluid" alt=".."></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="margin-top: -30px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" data-simplebar style="height: 70vh;">
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>