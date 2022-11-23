<?php
class Actor extends People {
    protected $_name;
    protected $_fName;
    protected $_sexe;
    protected $_birthday;
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

}
?>