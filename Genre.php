<?php
class Genre {
    public $_name;
    private $_films;
        
    public function __construct(string $name){
        $this->_name = $name;
        $this->_films = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
       
    //SET
    public function setName($name){
        $this->_name = $name;
    }

    public function addFilmToGenre($newFilm){
        array_push($this->_films,$newFilm);

    }
}
?>