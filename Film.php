<?php
class Film {
    private $_title;
    private $_launchDate;
    private $_length;
    private $_actors;
    private $_realisator;
    private $_genre;
        
    public function __construct(string $title,$launchDate,$length, Realisator $realisator,Genre $genre){
        $this->_title = $title;
        $this->_launchDate = $launchDate;
        $this->_length = $lentgh;
        $this->_actors =[];
        $this->_realisator = $realisator;
        $this->$realisator->addFilm($title);
        $this->_genre = $genre;
        $this->$genre->addFilm($title);
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
        
    //SET
    public function settitle($title){
        $this->_libelle = $libelle;
    }
    public function setLaunchDate($LaunchDate){
        $this->_devise = $devise;
    }
    public function setLength($length){
        $this->_length = $length;
    }                   
}
?>