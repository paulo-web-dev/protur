<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorização de Viagem Internacional</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .page {
            width: 210mm;
            height: 297mm;
            padding: 20mm;
            margin: auto;
            background: white;
            border: 1px solid #000;
            box-sizing: border-box;
        }
        @media print {
            body, html {
                width: 210mm;
                height: 297mm;
            }
            .page {
                margin: 0;
                border: none;
                page-break-after: always;
            }
        }
        h1 {
            text-align: center;
        }
        p {
            text-align: justify;
        }
        .signature {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="page">
        <h1>AUTORIZAÇÃO DE VIAGEM INTERNACIONAL</h1><br><br>
        <p>
            PARA CRIANÇAS E ADOLESCENTES DESACOMPANHADOS<br>
            Fundamento: Resolução CNJ 131/2011
        </p>
        
        <p>Válida até: {{$dois_anos}} (no máximo dois anos a partir da data da emissão)</p>
        
        <p>
            Eu, {{$nome_acompanhante}} <br>
            (@if($parentesco == 'Mãe')X @endif) Mãe;   (@if($parentesco == 'pai')X @endif) Pai;   (@if($parentesco == 'Tutor(a)')X @endif) Tutor(a);  (@if($parentesco == 'Guardião(ã)')X @endif) Guardião(ã);
        </p>

        <p>
            RG: {{$rg}}, expedido por {{$orgao_emissor_responsavel}}, Celular: {{$telefone}};
        </p>

        <p>
            Residente na: {{$rua}}, <br>
            Endereço completo: {{$rua}}, {{$numero_acompanhante}}, {{$bairro_acompanhante}}, {{$cidade}} - {{$estado}}
        </p>
      

        <p>
            AUTORIZO A VIAJAR DESACOMPANHADO<br>
            (X) livremente pelo exterior
        </p>

        <p>
            A criança / o adolescente {{$nome_crianca}},<br>
            Nascido(a) no dia {{$nascimento_crianca}} na cidade de {{$cidade_nascimento_crianca}} - {{$estado_nascimento_crianca}}
        </p>

        <p>
            Portador(a) do  RG:{{$rg_crianca}}, expedido por {{$orgao_emissor_crianca}}<br>
             Residente na: {{$rua_crianca}}, <br>
            Endereço completo: {{$rua_crianca}}, {{$numero_crianca}},{{$bairro_crianca}}, {{$cidade_crianca}}, - {{$estado_crianca}}
        </p>

        <p class="signature">
           {{$cidade_documento}} , {{$hoje}}.<br>
        </p>

        <p class="signature">
            Assinatura de {{$parentesco}}<br>
            (Obrigatório o reconhecimento de firma, Res. CNJ 131/2011)<br><br><br>
            __________________________________________
        </p>
        
     
    </div>
</body>
</html>
