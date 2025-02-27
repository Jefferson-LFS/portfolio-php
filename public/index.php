<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
</head>

<body>
    <?php

    $nome = "Jefferson";

    $saudacao = "Oi";

    $titulo = $saudacao . ", portfolio do " . $nome;

    $subtitulo = "Seja bem vindo ao meu portfolio!!";

    $ano = 2025;


    $projetos = [

        [
            "titulo" => "Meu Portfolio",

            "finalizado" => false,

            "data" => "2025-10-11",

            "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML.",

            "link" => "https://github.com/Jefferson-LFS/portfolio-php"
        ],
        [
            "titulo" => "FreelanceHours",

            "finalizado" => false,

            "data" => "2024-02-12",

            "descricao" => "FreelanceHours. Desonvolvido em PHP, Laravel e Livewire.",

            "link" => "https://github.com/Jefferson-LFS/freelancehours-app"
        ],
        [
            "titulo" => "WAVE",

            "finalizado" => true,

            "data" => "2024-05-22",

            "descricao" => "Gerador de cargas múltiplas para experimentação em redes de computadores. Desonvolvido em Python e Flask.",

            "link" => "https://github.com/ifpb/wave"
        ],
        [
            "titulo" => "Encurtado de URL",

            "finalizado" => true,

            "data" => "2024-11-12",

            "descricao" => "Encurtado de URL. Escrito em Java usando AWS Lambda.",

            "link" => "https://github.com/Jefferson-LFS/create-url-shortener"
        ]
    ];

    function verificaSeEstaFinalizado($p){

       if ( $p['finalizado'] ) {
        
        return '<span style="color:green">✅ finalizado</span>';

       }
       
        return '<span style="color:crimson">⛔ não finalizado</span>';
       
        
       
    }

    function filtrarProjetos($listaDeProjetos, $finalizado = null){

        if($finalizado === null){
            return $listaDeProjetos;
        }

        $filtrados = [];

        foreach($listaDeProjetos as $projeto){

            if ( $projeto['finalizado'] === $finalizado) {
         
                $filtrados [] = $projeto;
        
            }    

        }

        return $filtrados;
    }

        function filtrarProjetosData($listaDeProjetos, $data = null){

            if(is_null($data)){
                return $listaDeProjetos;
            }
    
            $filtradosData = [];
    
            foreach($listaDeProjetos as $projeto){
    
                if ($projeto['data'] === $data) {
             
                    $filtradosData [] = $projeto;
            
                }    
    
            }
    
            return $filtradosData;
        
         
        
        }

    ?>

    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <hr />


    <ul>


        <?php foreach (filtrarProjetosData($projetos, null) as $projeto): ?>


            <div

                <?php if(! ((2024 - $ano) >2) ): ?>

                        style="background-color: burlywood"   

                <?php endif; ?>
            >

                
                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div></html>

                    <div><?= $projeto['data'] ?></div>

                    <div>Projeto:

                      <?=verificaSeEstaFinalizado($projeto)?>
                    
                    </div>
                
                <div>Link: <a href=""><?= $projeto['link'] ?></a></div>

                </div>

            </div>

        <?php endforeach; ?>


    </ul>


</body>

</html>