<?php
class Film {
    private $_title;
    private $_launchDate;
    private $_length;
    private $_director;
    private $_genre;
    private $_casting = [];
        
    public function __construct(string $title,$launchDate,$length, Director $director,Genre $genre){
        $this->_title = $title;
        $this->_launchDate = $launchDate;
        $this->_length = $length;
        $this->_director = $director->displayFullName();
        $director->addFilm($title);
        $this->_genre = $genre->_name;
        $genre->addFilmToGenre($title);
    }
            
    //GET
    public function getTitle(){
        return $this->_title;
    }
    public function getLaunchDate(){
        return $this->_launchDate;
    }
    public function getLength(){
        return $this->_length;
    }
    public function getDirector(){
        return $this->_director;
    }
    public function getGenre(){
        return $this->_genre;
    }
        
    //SET
    public function setTitle($title){
        $this->_libelle = $libelle;
    }
    public function setLaunchDate($LaunchDate){
        $this->_devise = $devise;
    }
    public function setLength($length){
        $this->_length = $length;
    }   
    
    public function addFilm($newFilm){
        array_push($this->_films,$newFilm);
    }
    public function addCasting($newCasting){
        array_push($this->_casting,$newCasting);
    }
}
?>