<?php
Core\Router::connect("/PiePHP/movie/index", ['controller' => 'film', 'action' => 'index']);
Core\Router::connect("/PiePHP/movie/show", ['controller' => 'film', 'action' => 'show']);
Core\Router::connect("/PiePHP/movie/show/{id}", ['controller' => 'film', 'action' => 'show']);
Core\Router::connect("/PiePHP/user/register", ['controller' => 'user', 'action' => 'register']);
Core\Router::connect("/PiePHP/user/login", ['controller' => 'user', 'action' => 'login']);
Core\Router::connect("/PiePHP/user/delete", ['controller' => 'user', 'action' => 'delete']);
Core\Router::connect("/PiePHP/user/show", ['controller' => 'user', 'action' => 'show']);
