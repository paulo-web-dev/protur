
 @extends('assets.adm.header')

@section('content')
 <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
           Informações do Membro
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->

        {{-- <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="p-5 border-t nav-tab border-gray-200 dark:border-dark-5">
                    <a id="informacoes-pessoais-tab" data-toggle="tab" data-target="#informacoes-pessoais" href="javascript:;"
                        role="tab" class="flex items-center">
                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Informações Pessoais </a>
                </div>
            </div>
        </div> --}}
        <!-- END: Profile Menu -->

        <div class="col-span-12 lg:col-span-12 xxl:col-span-12 tab-content">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <i data-feather="x" class="w-4 h-4"></i>
                    </button>
                </div>
            @endforeach
            <form action="{{route('adm-upd-membro', ['membro' => $membro->id])}}" method="post" enctype="multipart/form-data" data-single="true"
                method="post">
                @csrf
                <div id="informacoes-pessoais" role="tabpanel" aria-labelledby="informacoes-pessoais-tab"
                    class="grid grid-cols-12 gap-6 tab-pane active">
                    <!-- BEGIN: Products -->
                    <div class="intro-y box col-span-12 xxl:col-span-12">
                        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                            <h2 class="font-medium text-base mr-auto">
                                   Informações do Membro
                            </h2><br>
                             <a href="{{ route('adm-show-membros') }}" class="btn btn-primary shadow-md mr-2"><i data-feather="skip-back" class="w-4 h-4 mr-2"></i>Voltar</a>
                        </div>
 
                              
                                
                        
                    </div> 
                    <div class="intro-y box col-span-12 xxl:col-span-12 p-5">
                        <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="mt-3">
                                    <label for="nome" class="form-label"><strong>Nome</strong></label>
                                    <input id="nome" type="text" name="nome" class="form-control"
                                        placeholder="Nome" value="{{$membro->nome}}" required>
                                </div>
                                <div class="mt-3">
                                    <label for="email" class="form-label"><strong>Email</strong></label>
                                    <input id="email" type="email" name="email" class="form-control"
                                      required  placeholder="Email" value="{{$membro->email}}" value="" >
                                </div>
                                <div class="mt-3">
                                    <label for="Celular" class="form-label"><strong>Celular</strong></label>
                                    <input id="Celular" type="text" name="celular" value="{{$membro->celular}}" required class="form-control" placeholder="(XX) XXXXX-XXXX">
                                </div>



                                  <div class="mt-3">
                                    <label for="Ocupação/Profissão" class="form-label"><strong>Ocupação/Profissão</strong></label>
                                    <input id="Ocupação/Profissão" type="text" name="ocupacao"  class="form-control"
                                      value="{{$membro->ocupacao}}"  placeholder="Ocupação/Profissão">
                                </div>
                                 
                                <div class="mt-3">
                                    <label for="Sobre" class="form-label"><strong>Sobre</strong></label>
                                    <input id="Sobre" type="text" name="sobre"  class="form-control"
                                      value="{{$membro->sobre}}"  placeholder="Sobre o membro" value="">
                                </div> <br>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                               
                             

                                  <div class="mt-3">
                                   <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="cep">
                                    <strong>CEP</strong>
                                </label>
                                <input class="form-control" id="cep" name="cep" type="text"
                                    placeholder="Cep" onblur="pesquisacep(this.value);" >
                                  </div>

                                    <div class="mt-3">
                                       <label for="uf" class="form-label"><strong>Estado</strong></label>
                                <div class="relative">
                                    <select class="form-control" name="uf" id="uf"
                                        onchange="buscarCidades()">
                                        <option value="{{$membro->uf}}">{{$membro->uf}}</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                    <br><br>
                                    </div>

                                    <div class="mt-3">
                                    <label for="cidade" class="form-label"><strong>cidade</strong></label>
                                <input id="cidade" type="text" name="cidade" class="form-control"
                                   value="{{$membro->cidade}}" placeholder="Cidade" required>
                                    </div>
                                    <div class="mt-3">
                                       <label for="status" class="form-label"><strong>Status</strong></label>
                                <div class="relative">
                                    <select class="form-control" name="status" id="status" >
                                        @if($membro->status == 'Associado')
                                        <option value="{{$membro->status}}">{{$membro->status}} (Ativo)</option>
                                        <option value="Desativado/Inadimplente">Desativado/Inadimplente<option>
                                        @else
                                         <option value="{{$membro->status}}">{{$membro->status}} </option>
                                        <option value="Associado">Associado (Ativo) <option>
                                        @endif 
                                    </select>
                                    <br><br>
                                    </div>

                            </div>
                    {{-- <div class="col-span-12 xl:col-span-6">
                        <label class="form-label"><strong>Upload de Imagem</strong></label>
                        <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4">
                            <div class="px-4 pt-24 pb-24 flex items-center justify-center cursor-pointer relative">
                                <div id="areaArquivo">
                                    <i data-feather="image" class="w-4 h-4 mr-2"></i>
                                    <span class="mr-1 font-bold">Adicionar Imagem</span>
                                </div>
                                <input type="file" id="file" name="file"
                                    class="w-full h-full top-0 left-0 absolute opacity-0">
                            </div>
                        </div>
                    </div> --}}
                <br>
                    </div>
                        <div class="intro-y box col-span-12 xxl:col-span-12">
                            <button type="submit" class="btn btn-primary w-full  mr-2 mb-2"> <i data-feather="activity"
                                    class="w-4 h-4 mr-2"></i>
                                Atualizar Membro </button>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>

<script>
  document.getElementById('Celular').addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, ''); // Remove tudo que não é dígito
        x = x.replace(/^(\d{2})(\d)/g, '($1) $2'); // Adiciona parênteses ao DDD
        x = x.replace(/(\d{5})(\d)/, '$1-$2'); // Adiciona o hífen ao número
        e.target.value = x;
    }); 
        document.querySelector('form').addEventListener('submit', function() {
        let celularInput = document.getElementById('Celular');
        celularInput.value = celularInput.value.replace(/\D/g, ''); // Remove a máscara antes de enviar
    }); 
</script>

@endsection
@push('custom-scripts')
    
    <script>
        $(document).ready(function() {

            $("#cpf").bind('paste', function(e) {
                e.preventDefault();
            });

        });
    </script>
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

    <!-- Adicionando Javascript -->
    <script>


        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
 

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
    </script>

         <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>  <!--Script do iconify-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
     
        
        <!-- END: JS Assets-->
    </body>
</html>

@push('custom-scripts')





@endpush