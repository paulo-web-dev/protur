@extends('assets.adm.header')

@section('content')


 <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1 class="intro-y text-lg font-medium mt-10">
  
    </h1>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

            <a href="{{ route('adm-form-evento') }} " class="text-right btn btn-primary w-49 mr-5 mt-2 mb-2 "> <i
                    data-feather="plus" class="w-4 h-4 mr-2"></i> Adicionar Evento
            </a>
        

        </div>
    </div>
    <div style="width: 350px" class="w-56 relative text-gray-700 dark:text-gray-300 mt-3">

        @csrf
        <input type="text" name="search" class="form-control w-56 box pr-10 placeholder-theme-13"
            placeholder="Pesquisar...">
        <button id="tabulator-html-filter-go" class="btn btn-primary ">Filtrar</button>
        </form>
    </div>


    <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
        @foreach ($eventos as $evento)
            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 xxl:col-span-2">
                <div class="file box rounded-md px-5 pt-8 pb-5 sm:px-5 relative zoom-in">

                        <a href="{{ route('adm-info-evento', ['evento' => $evento->id]) }}">
                            <img alt="" class="rounded-md"
                                src="{{ url("fotos-eventos/$evento->foto") }}">
                        </a>
                
                    

                    <div class="text-gray-900 text-sm text-left mt-0.5">
                        <a href="{{ route('adm-info-evento', ['evento' => $evento->id]) }}" target="_blank">
                            {{ $evento->titulo }}
                        </a> <br>
                        Inicio: {{$evento->data}} - {{$evento->horario}}
                      <br>

                
                      

                    </div>
                    <div class="absolute  top-0 mr-5 mt-3 dropdown">
                        <div class="flex items-center justify-center text-theme-9" style="color:green">
                          
                        </div>
                    </div>
                    <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i>
                        </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="{{ route('adm-info-evento', ['evento' => $evento->id]) }}"
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Editar
                                </a>
                                <a href="javascript:;" data-toggle="modal"
                                    
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Excluir
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Modal Content -->
            <div id="excluirCurso" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" method="POST">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center"> <i data-feather="x-circle"
                                        class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Você realmente quer excluir este curso ?</div>
                                    <div class="text-gray-600 mt-2">
                                        Esse processo não poderá ser desfeito.
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-dismiss="modal"
                                        class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancelar</button>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-24">Excluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div><br>

    <!-- END: Users Layout -->

    @if (session()->get('message') == 'course_deleted')
        <!-- BEGIN: Modal Content -->
        <div id="modalInfo" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="p-5 text-center"> <i data-feather="check-circle"
                            class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Bom trabalho!</div>
                        <div class="text-gray-600 mt-2">O curso foi excluído com sucesso!</div>
                    </div>
                    <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal"
                            class="btn btn-primary w-24">Ok</button> </div>
                </div>
            </div>
        </div> <!-- END: Modal Content -->
    @endif
    @if (session()->get('message') == 'course_delete_error')
        <!-- BEGIN: Modal Content -->
        <div id="modalInfo" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center"> <i data-feather="check-circle"
                                class="w-16 h-16 text-theme-9 mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Erro!</div>
                            <div class="text-gray-600 mt-2">Não foi possível excluir o curso!</div>
                        </div>
                        <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal"
                                class="btn btn-primary w-24">Ok</button> </div>
                    </div>
                </div>
            </div>
        </div> <!-- END: Modal Content -->
    @endif
    <script>
        function filtro(ordem) {
            $('#ordem').val(ordem);
            $('#formfiltro').submit();
        }
    </script>
@endsection

@push('custom-scripts')
    @if (session()->get('message'))
        <script>
            cash(function() {
                cash('#modalInfo').modal('show');
            });
        </script>
    @endif
@endpush
