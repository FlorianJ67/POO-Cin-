<?php
class Realisator {
    private $_name;
    private $_fName;
    private $_sexe;
    private $_birthday;
    private $_films;
        
    public function __construct(string $fName,string $name,string $sexe,date $birthday){
        $this->_name = $name;
        $this->_fName = $fName;
        $this->_sexe = $sexe;
        $this->_birthday = $birthday;
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