<?php
class Casting {
    private $_film;
    private $_actor;
    private $_role;
        
    public function __construct(Film $film,Actor $actor,$role){
        $this->_film = $film->getTitle();
        $this->_actor = $actor->displayFullName();
        $this->_role = $role;
    }
            
    //GET
    public function getFilm(){
        return $this->_film;
    }
    public function getActor(){
        return $this->_actor;
    }
    public function getLength(){
        return $this->_role;
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