<?php
class Role {
    private $_actor;
    private $_name;
    private $_film;
    private $_casting;
        
    public function __construct(Actor $actor,$role,Film $film){
        $this->_actor = $actor;
        $this->_name = $role;
        $this->_film = $film;
        $this->_casting = [];
        New Casting($film,$this,$actor);
    }
            
    //GET
    public function getActor(){
        return $this->_actor;
    }
    public function getName(){
        return $this->_name;
    }
    public function getFilm(){
        return $this->_film;
    }
    
}
?>