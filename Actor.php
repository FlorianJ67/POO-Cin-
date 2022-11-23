<?php
class Actor extends People {
    private $_name;
    private $_fName;
    private $_sexe;
    private $_birthday;
    private $_roles;
        
    public function __construct(string $fName,string $name,string $sexe,date $birthday){
        parent::__construct($fName,$name,$sexe,$birthday);
        $this->_roles = [];
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
    public function displayFullName(){
        return $this->_fName;
        return " ";
        return $this->_name;
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
    

    public function addRole(Role $role,Film $film){
        array_push($this->_roles,$role => $film);
    }
}
?>