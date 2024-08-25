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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Membros</a></li>
                                       
                                    </ol>
                                </div>
                                <h4 class="page-title">Membros</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                @foreach ($membros as $membro )
                    <div class="row">
                        <div class="col-md-6 col-xxl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="{{route('perfil-membros', ['membro' => $membro->id])}}" class="dropdown-item">Ver Perfil</a>
                                            <!-- item-->
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <img src="https://static.vecteezy.com/ti/vetor-gratis/p3/11186876-simbolo-de-foto-de-perfil-masculino-vetor.jpg" class="rounded-circle avatar-md img-thumbnail" alt="friend">
                                        <h4 class="mt-3 my-1"><a href="pages-profile-2.html" class="text-reset">{{$membro->nome}}<i class="mdi mdi-check-decagram text-success"></i></a></h4>
                                        <p class="mb-0 text-muted"><i class="mdi mdi-email-outline me-1"></i>{{$membro->email}}</p>
                                        <hr class="bg-dark-lighten my-3">
                                        <h5 class="mt-3 fw-semibold text-muted">{{$membro->status}}</h5>
                                  
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <a href="{{route('perfil-membros', ['membro' => $membro->id])}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Perfil"><i class="mdi mdi-message-processing-outline"></i></a>
                                            </div>
                                            <div class="col-4">
                                                <a href="tel:+55{{$membro->celular}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Ligar">
                                                    <i class="mdi mdi-phone"></i>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="mailto:{{$membro->email}}" class="btn w-100 btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Email">
                                                    <i class="mdi mdi-email-outline"></i>
                                                </a>
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