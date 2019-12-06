
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
                // executeQuery(query, countQueries);
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
                        resultQueryTable += '<tbody>';

                        returnData.data.forEach((row) => {
                            resultQueryTable += '<tr>';
                            for (var col in row) {
                                resultQueryTable += '<td>' + row[col] + '</td>';
                            }
                            resultQueryTable += '</tr>';
                        })

                        resultQueryTable += '</tbody></table></div>';

                        $("#try-query-result").html(resultQueryTable);
                        console.log(resultQueryTable);
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