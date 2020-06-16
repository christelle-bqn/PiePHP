<?php

namespace Model;
use \Core\ORM;

class FilmModel extends \Core\Entity
{
    public static $database;
    public $table = "film";

    /* private static $relations = [
        "has many" => [
            array("table" => "film", "key" => "id_genre")
        ],
        "has one" => [
            array("table" => "genre", "key" => "id_genre")
        ],
        "many to many" => [
            array("table1" => "user", "table2" => "film")
        ],
    ]; */

    public function listMovies()
	{
        $find = ORM::find($this->table, array('ORDER BY' => 'titre ASC'));
        return $find;
    }

    public function infoMovie()
	{
        /* $arrayInputs = $this->fields;
        $id = $arrayInputs["id"];
        $find = ORM::find($this->table, array('WHERE' => "id = '". $id ."'"));
        return $find; */
        $arrayInputs = $this->fields;
        $id = $arrayInputs["id"];
        $query = ORM::$database->query('SELECT film.id_film AS id, film.titre AS titre, film.resum AS resum, film.duree_min AS duree_min, film.annee_prod AS annee_prod, genre.nom AS genre, distrib.nom AS distrib FROM film LEFT JOIN genre ON film.id_genre = genre.id_genre LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib WHERE film.id_film = '.$id.'');
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
