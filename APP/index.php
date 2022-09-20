        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/estilo.css">
            <title>Document</title>
        </head>

        <body>
            <div class="bg-dark">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <nav class="col navbar navbar-light navbar-expand-md">
                                <a href="index.html" class="navbar-brand">
                                    <img src="img/logo2.gif" class="img-logo" height="150px">
                                </a>
                                <button class="navbar-toggler" data-toggle="collapse" data-target="#principal">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div id="principal" class="collapse navbar-collapse">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item ">
                                            <a href="" class="nav-link text-light "><b>Home</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link text-light"><b>Postagem</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link text-light"><b>Comentarios</b></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="btn btn-warning">Entrar</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <header class="row">
                            <div class="col text-light d-flex">
                                <div class="align-self-center">
                                    <h1 class="display-4">
                                        <b>Baseball!</b>
                                        <br>
                                        Cadastre-se pra quem curti esse tipo de esporte, fantástico!!
                                    </h1>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div class="col d-none d-md-block text-right">
                                <img src="img/baseball1.gif" class="img-fluid" alt="">
                            </div>
                        </header>
                        <br>
                        <header class="row">
                            <div class="col text-light d-flex">
                                <div class="align-self-center">
                                    <br>
                                    <h1 class="display-4">
                                        <b>Cadastre-se</b>
                                    </h1>
                                    <div class="container">
                                        <form action="" class="mt-4 mb-3" method="post">
                                            <label for="InputEmail">Email:</label>
                                            <input type="text" id="InputEmail" required maxlength="50">
                                            <span></span>
                                            <br>
                                            <label for="InputSenha">Senha:</label>
                                            <input type="password" id="InputSenha" required maxlength="10">
                                            <span></span>
                                            <br>
                                            <label for="InputPrimeiroNome">Primeiro Nome:</label>
                                            <input type="text" id="InputPrimeiroNome" required maxlength="8">
                                            <span></span>
                                            <br>
                                            <label for="InputSegundoNome">Segundo Nome:</label>
                                            <input type="text" id="InputSegundoNome" required maxlength="12">
                                            <span></span>
                                            <br>
                                            <label for="InputCidade-Estado">Cidade-Estado:</label>
                                            <input type="text" id="InputCidade-Estado" required maxlength="10">
                                            <span></span>
                                            <br>
                                            <button class="btn btn-warning">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none d-md-block text-right">
                                <img src="img/timesMLB.jpg" class="img-fluid" alt="">
                            </div>
                        </header>

                        <div class="container">
                            <section class="row mt-4 mb-4">
                                <div class="col-md-6 d-flex">
                                    <div class="align-self-center text-light">
                                    <div class="col-md-6">
                                    <img src="img/tudo-basebal.jpg" class="img-fluid" alt="">
                                    <h3>Como é feito a bola de Baseball hoje em dia</h3>
                                </div>
                                <br>
                                        <a href="" class="btn btn-warning">Veja mais</a>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <img src="img/bola-baseball.png" class="img-fluid" alt="">
                                </div>
                            </section>
                            <section class="row mt-4 mb-4">
                                <div class="col-md-6">
                                    <img src="img/bola-basebal.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="align-self-center text-light">
                                        <h2>Comenta algo, se deseja ver mais coisas sobre esse esporte</h2>
                                        <a href="" class="btn btn-warning">Veja mais</a>

                                    </div>
                                </div>
                            </section>
                            <div class="row servicos mt-4 mb-4">
                                <div class="col-md-4 text-light">
                                    <img src="img/historia.jpg" alt="" class="img-fluid">
                                    <h4>História:</h4>
                                    <p>
                                    Há divergências sobre a origem do beisebol. Uma corrente acredita que o esporte seja de origem inglesa, derivando de um jogo semelhante chamado “rounders” que já era praticado no século XVIII na Inglaterra. Outros acreditam que o beisebol foi criado por Abner Doubleday, em Nova York, Estados Unidos, em 1839.
                                    </p>
                                </div>
                                <div class="col-md-4 text-light">
                                    <img src="img/regras.webp" alt="" class="img-fluid">
                                    <h4>Regras:</h4>
                                    <p>
                                    O objetivo de um jogo de beisebol é marcar mais pontos que o adversário. Para marcar um ponto, o rebatedor tem de percorrer as quatro bases sem ser eliminado. Já para eliminar um atacante, a defesa deve proteger a base à qual ele se dirige ou encostar (não arremessar) a bola nele enquanto ele corre
                                    </p>
                                </div>
                                <div class="col-md-4 text-light">
                                    <img src="img/curiosidades.jpg" alt="" class="img-fluid">
                                    <h4>Curiosidades:</h4>
                                    <p>
                                    - A vida útil de uma bola de beisebol numa partida profissional é de sete arremessos. <br>
                                    - Nos campeonatos oficiais dos Estados Unidos, são utilizadas 600 mil bolas por ano. <br>
                                    - Receber uma pancada forte com um taco de beisebol equivale a ser atingido por um tijolo arremessado do 20º andar de um edifício. <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <footer class="row">
                            <div class="col-md-4 d-flex justify-content-end">
                                <a href="" class="btn btn-outline-light ml-3">
                                    <i class="fa fa-twitter fa-3x"></i>
                                </a>
                                <a href="" class="btn btn-outline-light ml-3">
                                    <i class="fa fa-youtube fa-3x"></i>
                                </a>
                                <a href="" class="btn btn-outline-light ml-3">
                                    <i class="fa fa-instagram fa-3x"></i>
                                </a>
                                <a href="" class="btn btn-outline-light ml-3">
                                    <i class="fa fa-facebook fa-3x"></i>
                                </a>

                            </div>
                        </footer>

                        <div class="row servicos mt-4 mb-4">
                        <div class="col-md-4 text-light">
                                    <img src="img/giphy.gif" alt="" class="img-fluid">      
                                </div>
                                <div class="col-md-4 text-light">
                                    <img src="img/starwars.gif" alt="" class="img-fluid">      
                                </div>
                                <div class="col-md-4 text-light">
                                    <img src="img/coelho.webp" alt="" class="img-fluid">      
                                </div>
    </div>
                                </div>

        </body>
        </html>

        <?php
           if(!empty($_POST["nome"]) && empty($_POST["email"]) && empty($_POST["senha"])) && empty($_POST["primeironome"])) && empty($_POST["segundonome"])) && empty($_POST["cidadeestado"])){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $primeironome = $_POST["primeironome"];
            $segundonome = $_POST["segundonome"];
            $cidadeestado = $_POST["cidadeestado"];

               include 'insertBanco_Dados.php';

              }                                          
       */ ?>