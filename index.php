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

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet" />

    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">IMDb • DCC011 TP2</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
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
                    <h1 class="display-4 text-dark mt-3 mb-5">
                        Internet Movie Database • IMDb
                    </h1>
                    <p class="lead mb-1 text-dark-50">Turma TZ2 • 2019/02</p>
                    <p class="lead mb-1 text-dark-50">
                        Professora: Mirella Moura Moro
                    </p>
                    <p class="lead mb-5 text-dark-50">
                        Alunos: Fernanda Rocha (2018123154), Matheus Ibrahim (2018123123)
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
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Base de Dados</h2>
                <hr />
                <p>
                    Como dito anteriormente, foi utilizada neste projeto a base de dados do IMDB. A mesma foi extraída através do <a href="https://imdbpy.github.io/" target="_blank">IMDbPY</a>, versão 6.8. Um pacote em Python para recuperação e manipulação dos dados do IMDb sobre filmes e pessoas.
                </p>
                <p>
                    Abaixo, fica explícito o diagrama ER específico que foi utilizado neste projeto:
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTWR_u8NwvOnFLE9LXRXxErDIUWiEG4uvADlAVi7skJAYOk199S" style="width: 100%">
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Consultas</h2>
                <hr />
                <p>
                    As consultas realizadas foram dividadas de acordo com o especificado no enunciado do projeto:
                </p>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action flex-column align-items-start active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Consulta 01</h5>
                                    </div>
                                    <p class="mb-1">Seleciona todos os atores cujo filme tem idioma inglês.</p>
                                </a>
                                <a class="list-group-item list-group-item-action flex-column align-items-start" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Consulta 02</h5>
                                    </div>
                                    <p class="mb-1">Seleciona todos os diretores cuja data de nascimento está entre 31/01/1990 e 31/12/1999.</p>
                                </a>
                                <a class="list-group-item list-group-item-action flex-column align-items-start" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                    <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="mb-3">
                                    <code>SELECT amada FROM beloved WHERE lindinha</code>
                                </div>
                                <table class="table">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                              </tr>
                                            </tbody>
                                          </table>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <div class="mb-3">
                                        <code>SELECT lorem FROM ipsum WHERE claudia</code>
                                    </div> 
                                    <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-md-12 mb-5">
                    <h2>Análises</h2>
                    <hr />
                    <p>Aqui ficam os gráficos.</p>
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
    <script>
        $('#myList a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
</body>

</html>