@extends('assets.adm.header')

@section('content')

  <form action="{{route('adm-upd-home', ['home' => $home->id])}}" enctype="multipart/form-data" data-single="true" method="post">
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="col-span-12 lg:col-span-12">
                <!-- BEGIN: Personal Information -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Informação da Home
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
                                    <label for="update-profile-form-7" class="form-label"><strong>Título da Imagem</strong></label>
                                    <input id="update-profile-form-7" type="text" name="titulo_foto" class="form-control"
                                        placeholder="Título da imagem" value="{{$home->titulo_foto}}">
                                </div>
                               
                                 <div class="mt-3">
                                    <label for="update-profile-form-7" class="form-label"><strong>Título do Vídeo</strong></label>
                                    <input id="update-profile-form-7" type="text" name="titulo_video" class="form-control"
                                        placeholder="Título do Vídeo" value="{{$home->titulo_video}}">
                                </div>

                            
                             
                               
                            </div>
                         

                            <div class="col-span-12 xl:col-span-6">
                                 
                               
                                    <div class="col-span-12 xl:col-span-6">
                                        <label class="form-label"><strong>Adicionar Foto</strong></label>
                                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4">
                                            <div
                                                class="px-4 pt-24 pb-24 flex items-center justify-center cursor-pointer relative">
                                                <div id="areaArquivo">
                                                    <i data-feather="image" class="w-4 h-4 mr-2"></i>
                                                    <span class="mr-1 font-bold">Adicionar Foto</span>
                                                </div>
                                                <input type="file" id="file" name="file"
                                                    class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                        
                                <div class="mt-3">
                                    <label for="update-profile-form-7" class="form-label"><strong>Link do Vídeo</strong></label>
                                    <input id="update-profile-form-7" type="text" name="video" class="form-control"
                                        placeholder="Link do Vídeo" value="{{$home->video}}">
                                </div>
                                    </div>
                                </div>
                            </div><br>
                        <div class="text-center">
                            <input type="submit" value="Atualizar Home" class="btn btn-primary mr-auto mb-2">

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
