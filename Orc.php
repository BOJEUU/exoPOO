<?php 
require_once "Character.php";
class Orc extends Character {
    private $_damage;

    public function __construct($setHealth,$setRage){
        parent::__construct($setHealth,$setRage);
    }
    public function getDamage(){
        return $this->_damage;
    }
    public function setDamage($setDamage){
        $this->_damage = $setDamage;
    }
    public function attack(){
        $this->setDamage(rand(600 , 800));
        return $this->getDamage();
    }
    public function attacked($hit){
        $_rageGain=30;
        $this->rageGain($_rageGain);
        $this->setHealth($this->getHealth()-$hit); 
        
    }
    public function rageGain($_rageGain){
        $this->setRage($this->getRage()+$_rageGain);
    }
}