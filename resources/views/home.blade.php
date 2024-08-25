@include('assets.painel.header')
@include('assets.painel.menu-lateral')
       
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

     <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Protur</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                      
                                    </ol>
                                </div>
                                <h4 class="page-title">Home</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xxl-3 col-lg-6 order-lg-1 order-xxl-1">
                            <!-- start profile info -->
                            <div class="card">
                                <div class="card-body">
                                   <h4 class="header-title">{{$home->titulo_foto}}</h4>
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        {{-- <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Edit Profile</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        </div> --}}
                                    </div>

                                <img src ="{{ asset('fotos-home/' . $home->foto) }}">
                                </div>
                            </div>
                            <!-- end profile info -->

                            <!-- event info -->
                            {{-- <div class="card">
                                <div class="card-body p-2">
                                    <div class="list-group list-group-flush my-2">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='uil uil-calendar-alt me-1'></i> 3 events this week</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='uil uil-calender me-1'></i> Eva's birthday today</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0"><i class='uil uil-bookmark me-1'></i> Jenny's wedding tomorrow</a>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- end event info -->

                            <!-- news -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h4 class="header-title">Próximos Eventos</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                @foreach ($eventos as $evento)
                                    
                                
                                    <div class="d-flex mt-3">
                                        <i class='uil uil-arrow-growth me-2 font-18 text-primary'></i>
                                        <div>
                                            <a class="mt-1 font-14" href="javascript:void(0);">
                                                <strong>{{$evento->titulo}}</strong>
                                                <span class="text-muted">
                                                    {{ \Carbon\Carbon::parse($evento->data)->format('d/m/Y') }}

                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                   
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-xxl-6 col-lg-12 order-lg-2 order-xxl-1">
                      

                            <!-- loader -->
                            <div class="text-center mb-3">
                                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1 font-16"></i> Load more </a>
                            </div>
                            <!-- end loader -->
                        </div>

                        <div class="col-xxl-3 col-lg-6 order-lg-1 order-xxl-2">
                            <!-- video -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="header-title">{{$home->titulo_video}}</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            {{-- <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div> --}}
                                        </div>
                                    </div>
                            @php
                                $videoUrl = $home->video;
                                parse_str(parse_url($videoUrl, PHP_URL_QUERY), $videoParams);
                                $videoId = $videoParams['v'];
                            @endphp
                                    <div class="mt-3">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/{{ $videoId }}"></iframe>
                                        </div>
                                    </div>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end video -->

                            <!-- video -->
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h4 class="header-title">Próximos aniversários</h4>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                {{-- <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">View All</a> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="inbox-widget">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">Carlos Silva</p>
                                            <p class="inbox-item-text">20/08</p>
                                            <p class="inbox-item-date">
                                                <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='uil uil-user-plus font-16'></i> </button>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">David Oliveira </p>
                                            <p class="inbox-item-text">21/08 </p>
                                            <p class="inbox-item-date">
                                                <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='uil uil-user-plus font-16'></i> </button>
                                            </p>
                                        </div>
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">João Souza</p>
                                            <p class="inbox-item-text">27/08</p>
                                            <p class="inbox-item-date">
                                                <button type="button" class="btn btn-sm btn-outline-primary px-1 py-0"> <i class='uil uil-user-plus font-16'></i> </button>
                                            </p>
                                        </div>

                                      
                                    </div> <!-- end inbox-widget -->

                                    <div class="mt-2 mb-3 text-center">
                                        <a href="#">Ver Mais<i class='uil uil-arrow-right ms-1'></i></a>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end video -->
                        </div> <!-- end col -->
                    </div> <!--end row -->

                </div> <!-- container -->

            </div> <!-- content -->

@include('assets.painel.footer')