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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Eventos</a></li>
                                       
                                    </ol>
                                </div>
                                <h4 class="page-title">Lista de Eventos </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mb-2">
                        <div class="col-sm-4">
                           
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <div class="btn-group mb-3">
                                    <button type="button" class="btn btn-primary">Todos</button>
                                </div>
                                <div class="btn-group mb-3 ms-1">
                                    <button type="button" class="btn btn-light">Agendados</button>
                                    <button type="button" class="btn btn-light">Encerrados</button>
                                </div>
                                {{-- <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                                    <button type="button" class="btn btn-secondary"><i class="ri-function-line"></i></button>
                                </div>
                                <div class="btn-group mb-3 d-none d-sm-inline-block">
                                    <button type="button" class="btn btn-link text-muted"><i class="ri-list-check-2"></i></button>
                                </div> --}}
                            </div>
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                    @foreach ($eventos as $evento )
                        
                   
                        <div class="col-md-6 col-xxl-3">
                            <!-- project card -->
                            <div class="card d-block">
                                <!-- project-thumbnail -->
                                <img class="card-img-top" src="{{ asset('fotos-eventos/' . $evento->foto) }}" alt="project image cap">
                                <div class="card-img-overlay">
                                    <div class="badge text-bg-secondary p-1">  {{ \Carbon\Carbon::parse($evento->data)->format('d/m/Y') }}</div>
                                </div>

                                <div class="card-body position-relative">
                                    <!-- project title-->
                                    <h4 class="mt-0">
                                        <a href="apps-projects-details.html" class="text-title">{{$evento->titulo}}</a>
                                    </h4>

                                 

                                    <!-- project progress-->
                                   <a href="apps-projects-add.html" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i> Adicionar Aviso</a>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                     @endforeach
                        

                       
                </div> <!-- container -->

            </div> <!-- content -->



@include('assets.painel.footer')