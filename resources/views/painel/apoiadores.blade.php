@include('assets.painel.header')
@include('assets.painel.menu-lateral')
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">apoiadores</a></li>
                                       
                                    </ol>
                                </div>
                                <h4 class="page-title">Apoiadores</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                    @foreach ($apoiadores as $apoiador)
                        
                        <div class="col-md-6 col-xxl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="{{route('apoiadores-perfil', ['apoiador' => $apoiador->id])}}" class="dropdown-item">Ver Perfil</a>
                                            <!-- item-->
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <img src="{{ asset('fotos-apoiadores/' . $apoiador->foto) }}" class="rounded-circle avatar-md img-thumbnail" alt="friend">
                                        <h4 class="mt-3 my-1"><a href="pages-profile-2.html" class="text-reset">{{$apoiador->nome}}<i class="mdi mdi-check-decagram text-success"></i></a></h4>
                                        <p class="mb-0 text-muted"><i class="mdi mdi-email-outline me-1"></i>{{$apoiador->email}}</p>
                                        <hr class="bg-dark-lighten my-3">
                                        <h5 class="mt-3 fw-semibold text-muted">apoiador</h5>

                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <a href="{{route('apoiadores-perfil', ['apoiador' => $apoiador->id])}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Perfil"><i class="mdi mdi-message-processing-outline"></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a href="tel:+55{{$apoiador->celular}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Ligar"><i class="mdi mdi-phone"></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a href="mailto:{{$apoiador->email}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i class="mdi mdi-email-outline"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End col -->
                    
                    @endforeach
                       

                      
                    <div class="row py-4">
                        <div class="col-12 text-center">
                            <i class="mdi mdi-dots-circle mdi-spin font-24 text-muted"></i>
                        </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content -->

         
@include('assets.painel.footer')