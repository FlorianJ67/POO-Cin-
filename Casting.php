<?php
class Casting {
    private $_film;
    private $_roles;
        
    public function __construct(Film $film){
        $this->_film = $film;
        $this->_roles = [];
        foreach($film->_casting as $role){
            $this->_array_push($role);
        }
    }
            
    //GET
    public function getFilm(){
        return $this->_film;
    }
    public function getRoles(){
        return $this->_roles;
    }
        
}
?>