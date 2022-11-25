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


}
?>