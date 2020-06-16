<?php

namespace Controller;

ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();

class FilmController extends \Core\Controller
{
	public function __construct()
	{
		$this->request = new \Core\Request();
    }

    public function indexAction() 
	{
        $list_movies = new \Model\FilmModel([]);
		$movies = $list_movies->listMovies();
		$this->render("index", ["movies" => $movies]);
	}

	public function showAction() 
	{
		$params = $this->request->getQueryParams();
		if (isset($params) && $params != null) {
			$movie = new \Model\FilmModel($params);
			$movie_info = $movie->infoMovie();
			$this->render("show", ["movie_info" => $movie_info]);
		} else {
			$this->redirect("index");
		}
	}

	public function deleteAction() 
	{
		$message = "";
		$inputs = $this->request->getQueryParams();
		$user = new \Model\UserModel($inputs);
		$user->delete();
		$message = "<p>Movie deleted !</p>";
		$this->render("delete", ["message" => $message]);
	}
}