<?php
class Actor extends People {
    private $_casting =[];
        
    public function __construct(string $fName,string $name,string $sexe,$birthday){
        parent::__construct($fName,$name,$sexe,$birthday);
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