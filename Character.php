<?php 
class Character {
    private $_health;
    private $_rage;

    public function getHealth(){
      return  $this->_health;
    }
    public function setHealth($setHealth){
       $this->_health = $setHealth;
    }
    public function getRage(){
      return  $this->_rage;
    }
    public function setRage($setRage){
       $this->_rage = $setRage;
    }

    public function __construct($setHealth,$setRage){
      $this->setHealth($setHealth);
      $this->setRage($setRage);

    }
}

