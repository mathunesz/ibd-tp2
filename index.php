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
                        Alunos: Fernanda Rocha (2018046920), Matheus Ibrahim (201846912)
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
                    Abaixo, fica explícito o diagrama ER específico que foi utilizado neste projeto:
                </p>
                <div class="text-center"><img src="./assets/modelorelacional.png" class="img-fluid"></div>
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
                        <li>Consultas 1 e 2 envolvendo as operações de seleção e projeção.</li>
                        <li>Consultas 3, 4 e 5 envolvendo a junção de duas relações.</li>
                        <li>Consultas 6, 7 e 8 envolvendo a junção de três ou mais relações.</li>
                        <li>Consultas 9 e 10 envolvendo funções de agregação sobre o resultado da junção de pelo menos duas relações.</li>
                        <li>Consultas 11, 12 e 13 do tipo relatório.</li>
                </ul>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group" id="query-list" role="tablist"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content" id="result-query-tabs"></div>
                        </div>
                    </div>
                </div>
                <hr />
                <h4 class="mb-3">Consulte você mesmo</h4>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="try-query-textarea" rows="3"></textarea>
                    </div>
                    <button type="button" id="try-query-submit" class="btn btn-primary">Consultar</button>
                    <div id="try-query-result" style="padding: 20px 0"></div>
                </form>
            </div>
        </div>

        <div class="row">
                <div class="col-md-12 mb-5">
                    <h2>Análises</h2>
                    <hr />
                    <p>Aqui ficam os gráficos.</p>
                    <div class="col-md-12">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>

        <div class="row">
                <div class="col-md-12 mb-5">
                    <h2>Referências</h2>
                    <hr />
                    <p>[1] ASIDJIASJDOIAJSDOIAJSDOIJASDIA </p>
                    <P>[2] odajsidjasoidjaoisdjaoijsdoiajdoiajd </P>
                </div>
            </div>


    </div>
    
    <!-- /.container -->

    <!-- Footer -->
    <!-- <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    </footer> -->
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/chart.bundle.min.js"></script>
    <script>
        $('#myList a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
    <script>

        let countQueries = 0;

        function fetchData() {
            let queries = [{
                'text': 'Nome dos filmes que possuem uma duração acima da 2h30min',
                'query': 'SELECT primary_title as "Titulo Principal", runtime_minutes as "Duração" FROM titles WHERE type = "movie" AND runtime_minutes > 150'
            },{
                'text': 'Nome das pessoas que nasceram antes de 1980 e cujo nome começa com "Ant" ou "Ann"',
                'query': 'SELECT name as "Nome", born as "Ano de Nascimento" FROM people WHERE born < 1980 AND (name LIKE "Ant%" OR name LIKE "Ann%")'
            }];

            queries.forEach((query) => {
                countQueries++;
                executeQuery(query, countQueries);
            })
        }

        fetchData();

        function executeQuery(query, queryIndex) {
            $.ajax({
            datatype: "JSON",
            url: "server/control.php",
            data: {
                query: query.query
            },
            beforeSend: function() {
                let queryListItem = 
                        '<a class="disabled list-group-item list-group-item-action list-group-item-light flex-column align-items-start disabled" href="#" id="loadingQuery' + queryIndex + '">' +
                            '<div class="d-flex w-100 justify-content-between">' +
                                '<h5 class="mb-1"></h5>' +
                            '</div>' +
                            '<p class="mb-1"> Executando consulta. Aguarde... </p>' +
                        '</a>';
                    
                    $("#query-list").append(queryListItem);
            },
            success: function(returnData) {
                document.getElementById("loadingQuery" + queryIndex).remove();
                returnData = JSON.parse(returnData);

                if (returnData.flag === true) {
                    let queryListItem = 
                        '<a class="list-group-item list-group-item-action flex-column align-items-start ' + (queryIndex == 1 ? 'active' : '') + '" data-toggle="list" href="#query-result-' + queryIndex + '" role="tab">' +
                            '<div class="d-flex w-100 justify-content-between">' +
                                '<h5 class="mb-1">Consulta ' + queryIndex + '</h5>' +
                                '<small>' + returnData.time + ' s </small>' + 
                            '</div>' +
                            '<p class="mb-1">' + query.text + '</p>' +
                        '</a>';
                    
                    $("#query-list").append(queryListItem);

                    let resultQueryTable = 
                        '<div class="tab-pane fade ' + (queryIndex == 1 ? 'show active' : '') + '" id="query-result-' + queryIndex + '" role="tabpanel">' +
                            '<div class="mb-3">' +
                                '<code>' + query.query + '</code>' +
                            '</div>' +
                            '<div class="table-responsive" style="max-height: 400px; overflow-y: auto">' +
                            '<table class="table">' +
                                '<thead><tr>';

                    for (var col in returnData.data[0]) {
                        resultQueryTable += '<th scope="col">' + col + '</th>'
                    }
                    resultQueryTable += '</tr></thead>'; 
                    resultQueryTable + '<tbody>';

                    returnData.data.forEach((row) => {
                        resultQueryTable += '<tr>';
                        for (var col in row) {
                            resultQueryTable += '<td>' + row[col] + '</td>';
                        }
                        resultQueryTable += '</tr>';
                    })

                    resultQueryTable += '</tbody></table></div></div>';

                    $("#result-query-tabs").append(resultQueryTable);
                } else {
                    console.log("não");
                }
            }});
        }

        $("#try-query-submit").click(function() {
                let query = $("textarea#try-query-textarea").val();
                $.ajax({
                datatype: "JSON",
                url: "server/control.php",
                data: {
                    query: query
                },
                beforeSend: function() {
                    let loadingDiv = '<div class="alert alert-primary" role="alert" id="try-query-loading">Executando consulta. Aguarde...</div>';
                    $("#try-query-result").html(loadingDiv);
                },
                success: function(returnData) {
                    document.getElementById("try-query-loading").remove();
                    if (returnData !== "") {
                    returnData = JSON.parse(returnData);

                    if (returnData.flag === true) {
                        let resultQueryTable = 
                                '<p class="mb-3">A consulta levou <b>' + returnData.time + ' segundos</b>.</p>' +
                                '<div class="table-responsive" style="max-height: 400px; overflow-y: auto">' +
                                '<table class="table">' +
                                    '<thead><tr>';

                        for (var col in returnData.data[0]) {
                            resultQueryTable += '<th scope="col">' + col + '</th>'
                        }
                        resultQueryTable += '</tr></thead>'; 
                        resultQueryTable + '<tbody>';

                        returnData.data.forEach((row) => {
                            resultQueryTable += '<tr>';
                            for (var col in row) {
                                resultQueryTable += '<td>' + row[col] + '</td>';
                            }
                            resultQueryTable += '</tr>';
                        })

                        resultQueryTable += '</tbody></table></div>';

                        $("#try-query-result").html(resultQueryTable);
                    } else {
                        let errorDiv = '<div class="alert alert-danger" role="alert">Ocorreu um erro durante a consuta. Verifique se a sintaxe está correta e tente limitar os resultados a 100000 resultados.</div>';
                        $("#try-query-result").html(errorDiv);  
                    }
                } else {
                    let errorDiv = '<div class="alert alert-danger" role="alert">Ocorreu um erro durante a consuta. Verifique se a sintaxe está correta e tente limitar os resultados a 100000 resultados.</div>';
                    $("#try-query-result").html(errorDiv); 
                }
            }
        });
    });

    </script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>
