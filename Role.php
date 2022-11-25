<?php
class Role {
    private $_name;
    private $_casting;
        
    public function __construct($role){
        $this->_name = $role;
        $this->_casting = [];
    }
            
    //GET
    public function getName(){
        return $this->_name;
    }

    public function addCasting($newCasting){
        array_push($this->_casting,$newCasting);
    }

    public function listActor(){
        echo $this->getName()."<br>";
        foreach($this->_casting as $casting){
            echo "A été joué par " .$casting->getActor()->getFname()." ".$casting->getActor()->getName(). " dans le film ". $casting->getFilm()->getTitle()."<br>";
        }
    }
}
?>