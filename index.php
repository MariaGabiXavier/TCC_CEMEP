<?php


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Calculadora IMC</title>

</head>

<body>
    <main id="container">
        <selection id="img">
            <img src="assets/images/illustration.svg">

        </selection>
        <selection id="calculator">
            <form id="form">
                <h1 id="title">
                    CALCULADORA - IMC
                </h1>

                <div class="input-box">
                    <label for="weight">
                         Peso em Kg
                    </label>
                    <div class="input-field">
                        <input type="number" id="weight" class="input-field" required>
                        <span>
                             kg 
                        </span>
                    </div>
                </div>



                <div class="input-box">
                    <label for="height"> 
                        Altura em metros(use ponto ".")
                    </label>

                    <div class="input-field">
                        <input type="text" id="height" required title="Use ponto - ex 1.80">
                        <span>
                            m
                        </span>
                    </div>
                </div>



                <button id="calculate">
                calcular
               </button>

            </form>

            <div id="infos" class="hidden">
                <div id="result">
                    <div id="bmi">
                        <span id="value"></span>
                        <span> Seu imc</span>
                    </div>
                    <div id="description">
                        <span>25</span>
                    </div>
                </div>
                <div id="more_info">
                    <a href="https://mundoeducacao.uol.com.br/saude-bem-estar/imc.htm"> mais informaçoes sobre o imc</a>

                    <button class="telaR"> <a href="tela_result.html"> resultados</a></button>
                    





                </div>
            </div>

        </selection>

    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>