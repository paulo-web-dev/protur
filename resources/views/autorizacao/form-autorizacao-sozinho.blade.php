<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from prium.github.io/elixir/v3.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 16:48:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Viajante Blindado</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://unyflex.com.br/storage/banners/vjl.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://unyflex.com.br/storage/banners/vjl.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://unyflex.com.br/storage/banners/vjl.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://unyflex.com.br/storage/banners/vjl.png">
    <link rel="manifest" href="{{url('autorizacao/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{url('autorizacao/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{url('autorizacao/vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{url('autorizacao/vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('autorizacao/vendors/hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{url('autorizacao/vendors/loaders.css/loaders.min.css')}}" rel="stylesheet">
    <link href="{{url('autorizacao/assets/css/theme.min.css')}}" rel="stylesheet" />
    <link href="{{url('autorizacao/assets/css/user.min.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  </head>
<style>  
    .btn-whatsapp {
        display: inline-block;
        padding: 10px 20px;
        width: 480px;
        background-color: #d4b48b;
        color: #fff;
        font-size: 26px;
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        border-radius: 40px;
        animation: pulse 1s infinite;
    }
    .btn-pulse {

        animation: pulse 1s infinite;
    }
    .initial{
      margin-left: 20%; 

    }


    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }

    .fa-phone {
        margin-left: 5px;
    }
</style>
  <body>

   
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
  

      <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var div = document.getElementById('minhaDiv');
            var texto = div.textContent || div.innerText;

            if (window.getSelection && document.createRange) {
                var range = document.createRange();
                range.selectNodeContents(div);
                var selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
            } else if (document.selection && document.body.createTextRange) {
                var textRange = document.body.createTextRange();
                textRange.moveToElementText(div);
                textRange.select();
            }

        });
    </script> -->
      <!-- ============================================-->
      <!-- <section> begin ============================-->


      <!-- ============================================-->
     


      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="bg-100" id="iniciar">
          <div class="container">
            <div class="text-center mb-6">
              <h3 class="fs-2 fs-md-3">Formulario para geração de Autorização</h3>
              <p>

              </p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
           <div class="container mt-5">
  <form action="{{route('autorizacao-exterior-sozinho')}}" method="post">
  @csrf
    <div class="row g-4">
      <!-- Campo de texto 1 -->
      <div class="col-md-6">
        <label for="nome_acompanhante" class="form-label">Nome Completo do Responsável</label>
        <input type="text" class="form-control" name="nome_acompanhante" placeholder="Digite seu nome">
      </div>
    <div class="col-md-6">
        <label for="parentesco" class="form-label">Parentesco</label>
        <select class="form-select" name="parentesco">
          <option value="pai">Pai</option>
          <option value="Mãe">Mãe</option>
          <option value="Tutor(a)">Tutor(a)</option>
          <option value="Guardião(ã)">Guardião(ã)</option>
        </select>
      </div>
      <!-- Campo de texto 2 -->
      
      <!-- Campo de texto 3 -->
      <div class="col-md-6">
        <label for="Telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="Telefone" placeholder="Digite seu telefone">
      </div>
      <!-- Campo de texto 4 -->
      <div class="col-md-6">
        <label for="RG" class="form-label">RG</label>
        <input type="text" class="form-control" name="rg" placeholder="Digite seu RG com o digito">
      </div>
      <div class="col-md-6">
        <label for="RG" class="form-label">Orgão Emissor</label>
        <input type="text" class="form-control" name="orgao_emissor_responsavel" placeholder="Orgão Emissor do RG do Responsável">
      </div>
     <div class="col-md-6">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" name="cep" placeholder="Digite seu CEP">
      </div>

      <div class="col-md-6">
        <label for="rua" class="form-label">Rua</label>
        <input type="text" class="form-control" name="rua" placeholder="Digite sua Rua">
      </div>

      <div class="col-md-6">
        <label for="rua" class="form-label">Número da Residencia</label>
        <input type="text" class="form-control" name="numero_acompanhante" placeholder="Digite o número de sua residência">
      </div>

      <div class="col-md-6">
        <label for="rua" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro_acompanhante" placeholder="Digite seu Bairro">
      </div>
      <!-- Campo de texto 5 -->
      <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" placeholder="Digite sua cidade">
      </div>
      <!-- Campo de texto 6 -->
      <div class="col-md-6">
        <label for="campo6" class="form-label">Estado</label>
        <input type="text" class="form-control" name="estado" placeholder="Digite seu estado">
      </div>
        <div class="col-md-6">
        <label for="nome_crianca" class="form-label">Nome Completo da Criança/Adolescente</label>
        <input type="text" class="form-control" name="nome_crianca" placeholder="Digite seu e-mail">
      </div>
      <div class="col-md-6">
        <label for="RG" class="form-label">RG Da Criança/Adolescente</label>
        <input type="text" class="form-control" name="rg_crianca" placeholder="Digite seu RG com o digito">
      </div>
      <div class="col-md-6">
        <label for="RG" class="form-label">Orgão Emissor</label>
        <input type="text" class="form-control" name="orgao_emissor_crianca" placeholder="Orgão Emissor do RG da Criança/Adolescente">
      </div>
      <div class="col-md-6">
        <label for="nascimento_crianca" class="form-label">Nascimento da Criança/Adolescente</label>
        <input type="date" class="form-control" name="nascimento_crianca" placeholder="Digite seu e-mail">
      </div>

      
      <div class="col-md-6">
        <label for="nascimento_crianca" class="form-label">Cidade do Nascimento da Criança/Adolescente</label>
        <input type="text" class="form-control" name="cidade_nascimento_crianca" placeholder="Cidade de nascimento da criança">
      </div>

           <div class="col-md-6">
        <label for="nascimento_crianca" class="form-label">Estado do Nascimento da Criança/Adolescente</label>
        <input type="text" class="form-control" name="estado_nascimento_crianca" placeholder="Estado de nascimento da criança">
      </div>

       <div class="col-md-6">
        <label for="cep" class="form-label">CEP da Criança/Adolescente</label>
        <input type="text" class="form-control" name="cep" placeholder="Digite seu CEP">
      </div>

      <div class="col-md-6">
        <label for="rua" class="form-label">Rua da Criança/Adolescente</label>
        <input type="text" class="form-control" name="rua_crianca" placeholder="Digite seu estado">
      </div>

      
      <div class="col-md-6">
        <label for="rua" class="form-label">Número da Residência Criança/Adolescente</label>
        <input type="text" class="form-control" name="numero_crianca" placeholder="Digite o Número da residência da criança/adolescente">
      </div>

        <div class="col-md-6">
        <label for="rua" class="form-label">Bairro da Residência Criança/Adolescente</label>
        <input type="text" class="form-control" name="bairro_crianca" placeholder="Bairro da residêcia da criança/adolescente">
      </div>
      <!-- Campo de texto 5 -->
      <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade da Criança/Adolescente</label>
        <input type="text" class="form-control" name="cidade_crianca" placeholder="Digite sua cidade">
      </div>
      <!-- Campo de texto 6 -->
      <div class="col-md-6">
        <label for="campo6" class="form-label">Estado da Criança/Adolescente</label>
        <input type="text" class="form-control" name="estado_crianca" placeholder="Digite seu estado">
      </div>
      <!-- Select 1 -->
     <div class="col-md-6">
        <label for="campo6" class="form-label">Cidade em que será assinado o documento</label>
        <input type="text" class="form-control" name="cidade_documento" placeholder="Digite a cidade">
      </div>

       <div class="col-md-6">
        <label for="campo6" class="form-label">Estado em que será assinado o documento</label>
        <input type="text" class="form-control" name="estado_documento" placeholder="Digite o Documento">
      </div>
    </div>
    <div class="row g-4 mt-4">
      <div class="col-12">
        <button type="submit" class="btn btn-primary w-100">Enviar</button>
      </div>
    </div>
  </form>
</div>

        </section>
 

    <footer class="footer bg-primary text-center py-4">
      <div class="container">
        <div class="row align-items-center opacity-85 text-white">
          <div class="col-sm-3 text-sm-start"><a href="index-2.html"><img src="https://unyflex.com.br/storage/banners/vjl.png" alt="logo" style="max-width:60px" /></a></div>
          <div class="col-sm-6 mt-3 mt-sm-0">
            <p class="lh-lg mb-0 fw-semi-bold">VIAJE SEM PERRENGUE, SEJA UM VIAJANTE BLINDADO!</p>
          </div>
          
        </div>
      </div>
    </footer>

    
      
    </div> 
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="{{url('autorizacao/vendors/popper/popper.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/is/is.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/bigpicture/BigPicture.js')}}"> </script>
    <script src="{{url('autorizacao/vendors/countup/countUp.umd.js')}}"> </script>
    <script src="{{url('autorizacao/vendors/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('autorizacao/vendors/gsap/gsap.js')}}"></script>
    <script src="{{url('autorizacao/vendors/gsap/customEase.js')}}"></script>
    <script src="{{url('autorizacao/assets/js/theme.js')}}"></script>
  </body>


<!-- Mirrored from prium.github.io/elixir/v3.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2024 16:49:01 GMT -->
</html>