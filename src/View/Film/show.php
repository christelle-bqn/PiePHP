<style type="text/css">
<?php include("src/View/styles/show_film.css"); ?>
</style>
<div>
    <table>
        <thead>
            <tr>
                <th>TITLE</th>
                <th>YEAR</th>
                <th>DURATION</th>
                <th>GENRE</th>
                <th>PLOT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                foreach ($movie_info as $info) {
                    echo "<td>".$info["titre"]."</td> 
                            <td>".$info["annee_prod"]."</td>
                            <td>".$info["duree_min"]." min</td>
                            <td>".$info["genre"]."</td>
                            <td>".$info["resum"]."</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</div>
<div>
    <h3>Delete movie</h3>
    <form method="post" action="delete">
        <input type="submit" value="Delete">
    </form>
</div>