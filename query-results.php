<div class="tab-content" id="result-query-tabs">
    <div class="tab-pane fade show active" id="query-result-1" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal', rating AS 'Nota', votes AS 'Votos' FROM ratings NATURAL JOIN titles ORDER BY votes DESC LIMIT 100</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table1.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-2" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal', runtime_minutes AS 'Duração' FROM titles WHERE type = 'movie' AND runtime_minutes > 150 ORDER BY runtime_minutes DESC</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table2.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-3" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal', rating AS 'Nota', votes AS 'Votos' FROM titles NATURAL JOIN ratings WHERE rating > 9.8 AND (type = 'movie' OR type = 'tvMovie')</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table3.html') ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-4" role="tabpanel">
        <div class="mb-3">
            <code>SELECT name AS 'Nome', born AS 'Data de Nascimento', COUNT(*) AS 'Quantidade' FROM people NATURAL JOIN crew WHERE category = 'self' AND born <> 'NaN' AND died IS NULL GROUP BY person_idHAVING COUNT(*) > 100 ORDER BY 'Quantidade'</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table4.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-5" role="tabpanel">
        <div class="mb-3">
            <code>SELECT name AS 'Nome', born AS 'Data de Nascimento' FROM crew NATURAL JOIN people WHERE born <> 'NaN' AND category = 'producer' GROUP BY person_id ORDER BY born DESC LIMIT 5 </code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table5.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-6" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal' FROM titles NATURAL JOIN akas WHERE title_id IN (SELECT title_id FROM titles JOIN episodes ON title_id = show_title_id WHERE type = 'tvSeries' AND ended = premiered + 1 GROUP BY title_id HAVING MAX(season_number) = 1) GROUP BY title_id HAVING COUNT(language)  > 5</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table6.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-7" role="tabpanel">
        <div class="mb-3">
            <code>SELECT name AS 'Nome', born AS 'Ano de Nascimento', primary_title AS 'Título Principal', premiered AS 'Ano de Estreia', runtime_minutes AS 'Duração' FROM people NATURAL JOIN crew NATURAL JOIN titles WHERE category = 'actress' AND premiered > born + 60 AND runtime_minutes > 120 ORDER BY name</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table7.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-8" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal', genres AS 'Gêneros', rating AS 'Avaliação' FROM akas NATURAL JOIN titles NATURAL JOIN ratings WHERE language = 'pt' AND region = 'BR' </code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table8.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-9" role="tabpanel">
        <div class="mb-3">
            <code>SELECT genres AS 'Gêneros', AVG(rating) AS 'Nota Média', COUNT(*) AS 'Quantidade de Filmes' FROM titles JOIN ratings WHERE titles.title_id = ratings.title_id AND type NOT IN (SELECT type FROM titles WHERE type <> 'movie') GROUP BY titles.genres HAVING COUNT(*) > 10 ORDER BY AVG(rating) DESC limit 500 </code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table9.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-10" role="tabpanel">
        <div class="mb-3">
            <code>SELECT name AS 'Nome', AVG(rating) AS 'Nota Média' FROM people NATURAL JOIN crew NATURAL JOIN titles NATURAL JOIN ratings WHERE category = 'director' GROUP BY person_id HAVING COUNT(*) > 5 AND type = 'movie' ORDER BY AVG(rating) DESC LIMIT 50</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table10.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-11" role="tabpanel">
        <div class="mb-3">
            <code>SELECT genres AS 'Gêneros', AVG(rating) AS 'Nota Média', ROUND(COUNT(DISTINCT season_number)/COUNT(DISTINCT title_id)) AS 'Média de Temporadas' FROM ratings NATURAL JOIN titles JOIN episodes ON show_title_id = title_id WHERE type = 'tvSeries' GROUP BY genres HAVING 3 <> 'NaN' AND 3 > 0 ORDER BY 3 DESC, AVG(rating)</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table11.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-12" role="tabpanel">
        <div class="mb-3">
            <code>SELECT primary_title AS 'Título Principal', (premiered - avg(born)) AS 'Idade Média', rating AS 'Nota' FROM ratings NATURAL JOIN titles NATURAL JOIN crew NATURAL JOIN people	WHERE type = 'movie' AND born <> 'NaN' GROUP BY title_id HAVING COUNT(category) > 1 ORDER BY rating DESC, 2</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table12.html'); ?>
        </div>
    </div>
    <div class="tab-pane fade" id="query-result-13" role="tabpanel">
        <div class="mb-3">
            <code>SELECT genres AS 'Gêneros', premiered AS 'Ano de Estreia', COUNT(*) AS 'Quantidade de Filmes', AVG(rating) AS 'Nota Média' FROM titles NATURAL JOIN ratingsWHERE type = 'movie' AND premiered <> 'NaN' AND genres LIKE '%Action%'GROUP BY genres, premiered ORDER BY premiered DESC</code>
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto">
            <?php include_once('./tables/table13.html'); ?>
        </div>
    </div>
</div>