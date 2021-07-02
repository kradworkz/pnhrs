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
                                <a :href="link" target="_blank">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verificationModal">
                                        <i class='bx bxl-zoom bx-flashing label-icon mr-2'></i> Zoom Link
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="desc" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div v-if="type == 'logo'" style="padding: 10px;">
                                <p class="card-title-desc"> The 2021 <span class="text-info">PHILIPPINE NATIONAL HEALTH RESEARCH SYSTEM </span>(PNHRS) Week Celebration logo incorporates elements that showcase the diverse and united people of this year’s host – Zamboanga City. </p>

                                <p class="card-title-desc">The Vinta and its multicolored sail takes diversity front and center; an everyday means of transport, the paddleboat ferries people of various ethnicities, along with needed health and medical supplies to and from the city’s neighboring islands, whilst navigating through uneven tides and unpredictable waters.</p>

                                <p class="card-title-desc">Alluding to the encompassing reach of Universal Health Care, the umbrella represents the PNHRS’ inclusivity as an organization that champions health and health-related research via its multi-pronged programs accomplished by the various 17 REGIONAL consortia nation-wide.
                                The ring symbolizes the unity and harmony of the PNHRS in working towards holistic health care for the Filipino people. It encircles the entire logo to highlight the significance of health research in achieving universal health care in the Philippines.
                                .</p>
                            </div>
                            <div v-else>
                                Not yet Available
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>