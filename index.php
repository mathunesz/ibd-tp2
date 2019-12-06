<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>IBD TP2</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/chart.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">IMDb • DCC011 TP2</a>
        </div>
    </nav>

    <!-- Header -->
    <header class="py-5 mb-5" style="background-color: #f5c518">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h3 class="text-dark mt-5 mb-2">
                        DCC011 • Introdução a Banco de Dados
                    </h3>
                    <img src="assets/logo.png" class="float-right" style="width:200px">
                    <h1 class="display-4 text-dark mt-3 mb-5">
                        Internet Movie Database • IMDb
                    </h1>
                    <p class="lead mb-1 text-dark-50">Turma TZ2 • 2019/02</p>
                    <p class="lead mb-1 text-dark-50">
                        Professora: Mirella Moura Moro
                    </p>
                    <p class="lead mb-5 text-dark-50">
                        Alunos: Fernanda Rocha (2018046920), Matheus Ibrahim (2018046912)
                        e Matheus Lima (2017023153)
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Introdução</h2>
                <hr />
                <p>
                    IMDb, também conhecida como Internet Movie Database (em Português:
                    Base de Dados de Filmes na Internet), é uma base de dados online de
                    informação sobre música, cinema, filmes, programas e comerciais para
                    televisão e jogos de computador, hoje pertencente à Amazon.
                </p>
                <p>
                    Neste projeto, realizamos algumas consultas diretamente na base de
                    dados do IMDb afim de analisarmos um pouco sobre como é populado
                    este banco, e de extrairmos algumas informações relevantes sobre o
                    mundo cinematográfico e as pessoas inseridas nele. Conforme especificado no
                    <a target="_blank" href="https://homepages.dcc.ufmg.br/~mirella/DCC011/tp2.20192.pdf">enunciado do
                        projeto</a>, as consultas realizadas visam explorar as relações presentes na
                    base de dados e analisar as informações contidas nos registros do
                    mesmo.
                </p>
                <div class="text-center"><img src="./assets/montenegro.png" class="img-fluid"></div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Base de Dados</h2>
                <hr />
                <p>
                    Como dito anteriormente, foi utilizada neste projeto a base de dados do IMDB. A mesma foi extraída através do <a href="https://github.com/jojje/imdb-sqlite" target="_blank">IMDb SQLite</a>. Uma aplicação em Python para importação da base de dados do IMDb.
                </p>
                <p class="mb-4">
                    Abaixo, fica explícito o diagrama ER e o Entidade-Relacionamento específico que foi utilizado neste projeto:
                </p>
                <div class="text-center"><img src="./assets/relacional-imdb.png" class="img-fluid"></div>
                <div class="text-center"><img src="./assets/er.jpeg" class="img-fluid"></div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Consultas</h2>
                <hr />
                <p>
                    As consultas realizadas foram dividadas de acordo com o especificado no enunciado do projeto:
                </p>
                <ul>
                        <li>Consultas 01 e 02 envolvendo as operações de seleção e projeção.</li>
                        <li>Consultas 03, 04 e 05 envolvendo a junção de duas relações.</li>
                        <li>Consultas 06, 07 e 08 envolvendo a junção de três ou mais relações.</li>
                        <li>Consultas 09 e 10 envolvendo funções de agregação sobre o resultado da junção de pelo menos duas relações.</li>
                        <li>Consultas 11, 12 e 13 do tipo relatório.</li>
                </ul>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <?php include_once('./query-list.php'); ?>
                        </div>
                        <div class="col-md-8">
                            <?php include_once('./query-results.php'); ?>
                        </div>
                    </div>
                </div>
                <!-- <hr />
                <h4 class="mb-3">Consulte você mesmo</h4>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="try-query-textarea" rows="3"></textarea>
                    </div>
                    <button type="button" id="try-query-submit" class="btn btn-primary">Consultar</button>
                    <div id="try-query-result" style="padding: 20px 0"></div>
                </form> -->
            </div>
        </div>

        <?php include_once('./graphs.php') ?>

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Referências</h2>
                    <hr />
                    <a href="https://datasets.imdbws.com/" target="_blank"><p>[1] Banco de Dados IMDb</p>
                    <a href="https://www.imdb.com/interfaces/" target="_blank"><p>[2] Especificações das Tabelas Originais </p>
		            <a href="https://pypi.org/project/imdb-sqlite/" target="_blank"><p>[3] API IMDb SQLite </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/chart.bundle.min.js"></script>
    <script>
        $('#myList a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <script src="./js/fetch.js"></script>
    <script src="./js/charts.js"></script>
</body>

</html>
