<?php
class Director extends People{
    protected $_name;
    protected $_fName;
    protected $_sexe;
    protected $_birthday;
    private $_films;
        
    public function __construct(string $fName,string $name,string $sexe,$birthday){
        parent::__construct($fName,$name,$sexe,$birthday);
        $this->_films = [];
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

    public function addFilm($newFilm){
        array_push($this->_films,$newFilm);
    }
}
?>