<style type="text/css">
<?php include("src/View/styles/index_film.css"); ?>
</style>
<div>
    <h2>ALL MOVIES</h2>
<?php
foreach ($movies as $movie) {
    echo "<div class='movie'><p>".$movie["titre"]."
    <form method='post' action='show' class='form_movie'>
        <input type='hidden' name='id' value=".$movie["id_film"].">
        <input type='submit' value='Infos'>
    </form></p></div>";
}
?>
</div>
