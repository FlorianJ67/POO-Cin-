<?php
class Actor extends People {
    private $_name;
    private $_fName;
    private $_sexe;
    private $_birthday;
    private $_roles;
        
    public function __construct(string $fName,string $name,string $sexe,date $birthday,$role){
        parent::__construct($fName,$name,$sexe,$birthday);
        $this->_roles = [];
        //add role + film on a tab assos $role => $film (pas sur du code)
        public function addRole($role,Film $film){
            array_push($this->_roles,$role => $film);
        }
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }
    public function getFName(){
        return $this->_fName;
    }
    public function getsexe(){
        return $this->_sexe;
    }
    public function getBirthday(){
        return $this->_birthday;
    }

        
    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setFName($fName){
        $this->_fName = $fName;
    }
    public function setSexe($sexe){
        $this->_sexe = $sexe;
    }
    public function setBirthday($birthday){
        $this->_birthday = $birthday;
    }
    
}
?>