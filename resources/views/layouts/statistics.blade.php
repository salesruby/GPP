<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body dashboard-tabs p-0">
                <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                           role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                </ul>
                <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                         aria-labelledby="overview-tab">
                        <div class="d-flex flex-wrap justify-content-xl-between">
                            <div
                                class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-muted">Today</small>
                                    <h5 class="mb-0 d-inline-block">{{\Carbon\Carbon::today()->format('M d Y')}}</h5>
                                </div>
                            </div>
                            <div
                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                <i class="mdi mdi-cart mr-3 icon-lg text-danger"></i>
                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-muted">New Orders</small>
                                    <h5 class="mr-2 mb-0">{{$new_order}}</h5>
                                </div>
                            </div>
                            <div
                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                <i class="mdi mdi-account mr-3 icon-lg text-warning"></i>
                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-muted">New Contacts</small>
                                    <h5 class="mr-2 mb-0">{{$new_contact}}</h5>
                                </div>
                            </div>
                            <div
                                class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                <i class="mdi mdi-account-circle mr-3 icon-lg text-success"></i>
                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-muted">Num. of Clients</small>
                                    <h5 class="mr-2 mb-0">{{$new_client}}</h5>
                                </div>
                            </div>
                            <div
                                class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                <i class="mdi mdi-account-multiple mr-3 icon-lg text-danger"></i>
                                <div class="d-flex flex-column justify-content-around">
                                    <small class="mb-1 text-muted">Num. of Admins</small>
                                    <h5 class="mr-2 mb-0">{{$admins}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
