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
        $this->_length = $lentgh;
        $this->_director = $director;
        $this->_director->addFilm($title);
        $this->_genre = $genre;
        $this->_genre->addFilm($title);
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
    public function setTitle($title){
        $this->_libelle = $libelle;
    }
    public function setLaunchDate($LaunchDate){
        $this->_devise = $devise;
    }
    public function setLength($length){
        $this->_length = $length;
    }   
    
    
    public function addCasting($role,Actor $actor){
        $this->_casting->array_push($role,$actor->displayFullName());
    }
}
?>