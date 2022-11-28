<h1>Ciné</h1>

<?php
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});



$actor1 = new Actor("Michael","Keaton","Homme","05-09-1951");
$director1 = new Director("Tim","Burton","Homme","25-08-1958");

$genre1 = new Genre("Super-Hero");

$film1 = new Film("Batman",1989,126,$director1,$genre1);
$film2 = new Film("Batman2",1994,123,$director1,$genre1);

$role1 = new Role("Batman");
$role2 = new Role("Robin");

//casting
$casting = new Casting($film1,$role1,$actor1);
$casting2 = new Casting($film2,$role2,$actor1);

$role1->listActor();
echo "<br>";
$film1->listCasting();
echo "<br>";
echo "<br>";
$actor1->listCasting();
echo "<br>";
$genre1->listFilm();
echo "<br>";
echo "<br>";
$director1->listFilm();

?>