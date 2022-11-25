<?php
class Casting {
    private $_film;
    private $_role;
    private $_actor;
        
    public function __construct(Film $film,Role $role,Actor $actor){
        $this->_film = $film;
        $this->_film->addCasting($this);

        $this->_role = $role;
        $this->_role->addCasting($this);

        $this->_actor = $actor;
        $this->_actor->addCasting($this);
    }
            
    //GET
    public function getFilm(){
        return $this->_film;
    }
    public function getRole(){
        return $this->_role;
    }
    public function getActor(){
        return $this->_actor;
    }


    
   
}