<?php
// importiamo le classi 
require_once 'Models/movie.php';
require_once 'Models/genre.php';

//creare un istanza della classe genre
$genre1 = new Genre();
$genre1->setName('fantasia');

// creare un istanza della classe movie 
$movie1 = new Movie('Harry Potter', 'descrizione', 2002 , 'Mattia Messana', $genre1);
// $movie1->setTitle('Harry Potter');
$movie1->setDuration(80);
$movie1->setRating(3);


// var_dump($movie1->getDuration());






var_dump($movie1);
// var_dump($movie2);