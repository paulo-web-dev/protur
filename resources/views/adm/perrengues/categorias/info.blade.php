@extends('assets.adm.header')

@section('content')

  <form action="{{route('adm-upd-perrengue-categoria', ['perrengueCategoria' => $perrengueCategoria->id])}}" enctype="multipart/form-data" data-single="true" method="post">
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-12">
                <!-- BEGIN: Personal Information -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Editar Categoria de Perrengue
                        </h2>
                    </div>
                    <div class="p-5">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                                <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i> {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i data-feather="x" class="w-4 h-4"></i>
                                </button>
                            </div>
                        @endforeach
                        <div class="grid grid-cols-12 gap-x-5">
                            @csrf

                            <div class="col-span-12 xl:col-span-6">
                                <div class="mt-3">
                                    <label for="update-profile-form-7" class="form-label"><strong>Nome</strong></label>
                                    <input id="update-profile-form-7" type="text" name="nome" class="form-control"
                                        placeholder="Nome do perrengue" value="{{$perrengueCategoria->nome}}">
                                </div>
                                <div class="mt-3">
                                       <label for="status" class="form-label"><strong>Status</strong></label>
                                <div class="relative">
                                    <select class="form-control" name="status" id="status"
                                       >
                                    @if ($perrengueCategoria->status == 'able')
                                         <option value="able" selected>Habilitado</option>
                                         <option value="disable" >Desabilitado</option>
                                    @else
                                    
                                         <option value="able" >Habilitado</option>
                                         <option value="disable"selected >Desabilitado</option>
                                    @endif
                                       
                                      
                                    </select>
                                    <br><br>
                                    </div>
</div>
                               <br>
                        <div class="text-center">
                            <input type="submit" value="Editar Categoria" class="btn btn-primary mr-auto mb-2">

                        </div>
                        </div>
                    </div>
                    
            
                    
                    
                    <!-- END: Personal Information -->

                   <!-- END: Personal Information -->

                </div> 
                <div class="intro-y box mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                Lista de Modulos
            </h2>
        </div>
        <div class="p-5">
            <div class="grid grid-cols-12 gap-x-5">
                <div class="col-span-12 xl:col-span-12">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Posto de Trabalho</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Editar</th>
                                    <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap text-center">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                @foreach ($perrengueCategoria->perrengues as $perrengues) 
                                    <tr class="hover:bg-gray-200">
                                        <td class="border">{{$perrengues->id}}</td>
                                        <td class="border">{{$perrengues->nome}}</td>
                                        <td class="border">
                                            <div class="flex justify-center">
                                                <a class="flex text-theme-1 mr-3"
                                                    href="{{route('adm-info-perrengues', ['perrengue' => $perrengues->id])}}">
                                                    <i data-feather="share-2" class="w-4 h-4 mr-1"></i> Ver Mais
                                                </a>
                                              
                                            </div>
                                           
                                        </td>
                                      
                                               <td class="border">
                                            <div class="flex justify-center">
                                               <a href="javascript:void(0);" class="flex text-theme-1 mr-3" onclick="event.preventDefault(); document.getElementById('delete-perrengue-{{ $perrengues->id }}').submit();">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Excluir
                                                </a>

                                                <form id="delete-perrengue-{{ $perrengues->id }}" action="{{ route('adm-info-perrengue-destroy', $perrengues->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                              
                                            </div>
                                           
                                        </td>
                                      
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('adm-form-perrengues')}}" class="btn btn-primary mr-auto mb-2">Cadastrar Perrengue</a>
            </div>
            </div>
    </form>
@endsection
@push('custom-scripts')
    @if (session()->get('message'))
        <script>
            cash(function() {
                cash('#modalInfo').modal('show');
            });
        </script>
    @endif
    @push('custom-scripts')
        @if (session()->get('message'))
            <script>
                cash(function() {
                    cash('#modalInfo').modal('show');
                });
            </script>
        @endif
        <script>
            (function(cash) {
                document.getElementById('file').onchange = function() {
                    var arquivo = document.getElementById('file').value;
                    var nomearquivo = arquivo.substring(12);
                    var modeloArquivo =
                        '<div class="file box rounded-md px-5 sm:px-5 relative zoom-in">' +
                        '<p class="w-1/5 file__icon file__icon--file mx-auto">' +
                        '</p>' +
                        '<p class="block font-medium mt-4 text-center truncate">' + nomearquivo + '</p>' +
                        '</div>';
                    cash('#areaArquivo').html(modeloArquivo);
                }
            })(cash);
        </script>
        <script>
            cash(".data").each(function() {
                let options = {
                    autoApply: true,
                    singleMode: false,
                    lang: "pt-BR",
                    numberOfColumns: 2,
                    numberOfMonths: 2,
                    resetButton: true,
                    format: 'DD/MM/YYYY',
                    dropdowns: {
                        minYear: 1990,
                        maxYear: null,
                        months: true,
                        years: true,
                    },
                };
                if (cash(this).data("single-mode")) {
                    options.singleMode = true;
                    options.numberOfColumns = 1;
                    options.numberOfMonths = 1;
                }

                const picker = new Litepicker({
                    element: this,
                    ...options
                });

            });
        </script>
    @endpush

@endpush
