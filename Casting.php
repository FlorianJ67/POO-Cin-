<?php
class Casting {
    private $_film;
    private $_role;
    private $_actor;
        
    public function __construct(Film $film,Role $role,Actor $actor){
        $this->_film = $film->_title;
        $film->addFilmCasting($role,$actor);

        $this->_role = $role->_name;
        $role->addRoleCasting($film,$actor);

        $this->_actor = $actor->displayFullName();
        $actor->addActorCasting($film,$role);
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
        

    public function addFilmCasting(Role $role,Actor $actor){
        $this->array_push($this->_casting,$role->_name,$actor->displayFullName());
    }
    public function addRoleCasting(Film $film,Actor $actor){
        $this->array_push($this->_casting,$film->_title,$actor->displayFullName());
    }
    public function addActorCasting(Film $film,Role $role){
        $this->array_push($this->_casting,$film->_title,$role->_name);
    }

}