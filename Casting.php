<?php
class Casting {
    private $_film;
    private $_role;
    private $_actor;
        
    public function __construct(Film $film,Role $role,Actor $actor){
        $this->_film = $film;
        $film->_casting->addFilmCasting($role,$actor);
        $this->_role = $role;
        $role->_casting->addRoleCasting($film,$actor);
        $this->_actor = $actor;
        $actor->_casting->addActorCasting($film,$role);
    }
            
    //GET
    public function getFilm(){
        return $this->_film;
    }
    public function getRoles(){
        return $this->_roles;
    }
        

    public function addFilmCasting(Role $role,Actor $actor){
        $this->_casting->array_push($role,$actor->displayFullName());
    }
    public function addRoleCasting(Film $film,Actor $actor){
        $this->_casting->array_push($film,$actor->displayFullName());
    }
    public function addActorCasting(Film $film,Role $role){
        $this->_casting->array_push($film,$role);
    }

}
?>