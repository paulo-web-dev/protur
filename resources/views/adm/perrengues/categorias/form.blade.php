@extends('assets.adm.header')

@section('content')

  <form action="{{route('adm-cad-perrengue-categoria')}}" enctype="multipart/form-data" data-single="true" method="post">
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-12">
                <!-- BEGIN: Personal Information -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Cadastrar Categoria de Perrengue
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
                                        placeholder="Nome do perrengue" value="">
                                </div>
                               <br>
                        <div class="text-center">
                            <input type="submit" value="Cadastrar Categoria" class="btn btn-primary mr-auto mb-2">

                        </div>
                        </div>
                    </div>
                    
            
                    
                    
                    <!-- END: Personal Information -->

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
