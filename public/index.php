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

            "data" => "2024-10-11",

            "descricao" => "Meu primeiro portfolio. Escrito em PHP e HTML.",

            "link" => "https://github.com/Jefferson-LFS/portfolio-php"
        ],
        [
            "titulo" => "FreelanceHours",

            "finalizado" => true,

            "data" => "2024-02-12",

            "descricao" => "FreelanceHours. Desonvolvido em PHP, Laravel e Livewire.",

            "link" => "https://github.com/Jefferson-LFS/freelancehours-app"
        ],
        [
            "titulo" => "Encurtado de URL",

            "finalizado" => true,

            "data" => "2024-11-12",

            "descricao" => "Encurtado de URL. Escrito em Java usando AWS Lambda.",

            "link" => "https://github.com/Jefferson-LFS/create-url-shortener"
        ]
    ];

    ?>

    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <hr />


    <ul>


        <?php foreach ($projetos as $projeto): ?>


            <div

                <?php if(! ((2024 - $ano) >2) ): ?>

                        style="background-color: burlywood"   

                <?php endif; ?>
            >

                
                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div>

                    <div><?= $projeto['data'] ?></div>

                    <div>Projeto:

                        <?php if (!$projeto['finalizado']): ?>

                            <span style="color:crimson">⛔ não finalizado</span>


                        <?php else: ?>

                            <span style="color:green">✅ finalizado</span>


                        <?php endif; ?>


                    </div>
                
                <div>Link: <a href=""><?= $projeto['link'] ?></a></div>

                </div>

            </div>

        <?php endforeach; ?>


    </ul>



    <!-- <div>

        <h2><?= $projeto ?></h2>

        <p><?= $descricao ?></p>

        <div>

            <div><?= $dataDoProjeto ?></div>

            <div>Projeto 1:

  

            <?php if (!$finalizado): ?>

                <span style="color:crimson">⛔ não finalizado</span>

                
            <?php else: ?>

                <span style="color:green">✅ finalizado</span>
                

            <?php endif; ?>

               
            </div>


        </div>

    </div> -->


</body>

</html>