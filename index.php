<h1>Ciné</h1>

<?php
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});



$actor1 = new Actor("Michael","Keaton","Homme","05-09-1951");
$director1 = new Director("Tim","Burton","Homme","25-08-1958");

$genre1 = new Genre("Super-Hero");

$film1 = new Film("Batman",1989,126,$director1,$genre1);


$role = new Role($actor1,"Batman",$film1);



?>