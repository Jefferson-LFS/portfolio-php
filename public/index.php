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

            "year" => 2025,

            "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML.",

            "link" => "https://github.com/Jefferson-LFS/portfolio-php"
        ],
        [
            "titulo" => "FreelanceHours",

            "finalizado" => false,

            "year" => 2024,

            "descricao" => "FreelanceHours. Desonvolvido em PHP, Laravel e Livewire.",

            "link" => "https://github.com/Jefferson-LFS/freelancehours-app"
        ],
        [
            "titulo" => "WAVE",

            "finalizado" => true,

            "year" => 2023,

            "descricao" => "Gerador de cargas múltiplas para experimentação em redes de computadores. Desonvolvido em Python e Flask.",

            "link" => "https://github.com/ifpb/wave"
        ],
        [
            "titulo" => "Encurtado de URL",

            "finalizado" => false,

            "year" => 2024,

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

    function DefineBackGround($p){

        if (! ((2024 - $p['year']) >2) ) {
         
         return 'style="background-color: burlywood"';
 
        }
        
      
        
     }
 
    
        // function filtro($itens, $funcao){
 
    
        //     $filtrados = [];
    
        //     foreach($itens as $item){
    
        //         if ($funcao($item)) {
             
        //             $filtrados [] = $item;
            
        //         }    
        //     }
    
        //     return $filtrados;
         
        
        // };
      
        $projetosFiltrados = array_filter($projetos, function($projeto) {
            return $projeto['finalizado'] === true;
        });

    ?>

    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <hr />


    <ul>


        <?php foreach ($projetosFiltrados as $projeto): ?>


            <div

                <?=DefineBackGround($projeto)?>
            >

                
                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div></html>

                    <div><?= $projeto['year'] ?></div>

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