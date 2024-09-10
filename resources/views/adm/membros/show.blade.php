@extends('assets.adm.header')

@section('content')


    <h2 class="intro-y text-lg font-medium mt-10">

        Lista de Membros cadastrados
           </h2> 
        <a href="{{ route('home') }}" class="btn btn-primary shadow-md mr-2"><i data-feather="skip-back" class="w-4 h-4 mr-2"></i>Voltar</a>
        
     <a href="{{ route('adm-form-membro') }}" data-theme="light" class="tooltip btn btn-primary"  title="Clique aqui para cadastrar Membros"><i data-feather="plus" class="w-4 h-4 mr-2"></i> Adicionar Membro</a>
       

 

    <div class="grid grid-cols-12 gap-6 mt-5">

       
        <!-- BEGIN: Users Layout -->

      @foreach ($membros as $membro)
    <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box h-72 relative">
            <div class="flex items-start px-5 pt-5">
                <div class="w-full flex flex-col lg:flex-row items-center">
                    <div class="w-16 h-16 image-fit">
                        <img class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtMMQfcoo0WJoDcZowrVhrmhuL9Kguv_hkVNaPYmq-kDpHiW1P9lpvESWKjfGjNpCdkMM&usqp=CAU">
                    </div>
                    <a href="{{ route('adm-info-membro', ['membro' => $membro->id]) }}" class="font-medium">
                        <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                            <a href="{{ route('adm-info-membro', ['membro' => $membro->id]) }}" class="font-medium">{{ $membro->nome }}</a>
                            <div class="text-gray-600 text-xs mt-0.5">{{ $membro->email }}</div>
                        </div>
                    </a>
                </div>

                <div class="absolute right-0 top-0 mr-5 mt-3">
                    <div class="dropdown inline-block relative">
                        <a class="dropdown-toggle w-5 h-5 block cursor-pointer" href="javascript:;" aria-expanded="false">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i>
                        </a>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-40">
                            <li>
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="javascript:;">Opção 1</a>
                            </li>
                            <li>
                                <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="javascript:;">Opção 2</a>
                            </li>
                            <li>
                                <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="javascript:;">Opção 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center lg:text-left p-5">
                <div></div>
                <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5">
                    <i data-feather="mail" class="w-3 h-3 mr-2"></i> {{ $membro->cidade }} - {{$membro->uf}}
                </div>
                <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1">
                    <i data-feather="phone" class="w-3 h-3 mr-2"></i> {{ $membro->celular }}
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    // Script para ativar o dropdown
    document.querySelectorAll('.dropdown-toggle').forEach(function(dropdownToggle) {
        dropdownToggle.addEventListener('click', function() {
            let dropdownMenu = this.nextElementSibling;
            dropdownMenu.classList.toggle('hidden');
        });
    });
</script>


        <!-- END: Users Layout -->

    </div>
@endsection

@push('custom-scripts')


<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>

<script>
    document.querySelectorAll('.dropdown-toggle').forEach(function(element) {
        element.addEventListener('click', function() {
            let dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });
</script>


@endpush
