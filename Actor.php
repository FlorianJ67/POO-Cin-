<?php
class Actor extends People {
    private $_casting =[];
        
    public function __construct(string $fName,string $name,string $sexe,$birthday){
        parent::__construct($fName,$name,$sexe,$birthday);
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

    public function addCasting($newCasting){
        array_push($this->_casting,$newCasting);
    }
    public function listCasting(){
        echo "L'acteur " .$this->getFName()." ".$this->getName(). "a participer au films:<br>";
        foreach($this->_casting as $casting){
            echo $casting->getFilm()->getTitle()." dans lequel il incarne " .$casting->getRole()->getName()."<br>";
        }
    }
}
?>