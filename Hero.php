<?php 
require "Character.php";
class Hero extends Character {
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;
    private $_damage;
    

    public function __construct($setHealth,$setRage,$setWeapon,$setWeaponDamage,$setShield,$setShieldValue){
        parent::__construct($setHealth,$setRage);
        $this->setWeapon($setWeapon);
        $this->setWeaponDamage($setWeaponDamage);
        $this->setShield($setShield);
        $this->setShieldValue($setShieldValue); 
    }
    public function setWeapon($setWeapon){
        $this->_weapon = $setWeapon;
    }
    public function getWeapon(){
        return $this->_weapon;
    }
    public function setWeaponDamage($setWeaponDamage){
        $this->_weaponDamage = $setWeaponDamage;
    }
    public function getWeaponDamage(){
        return $this->_weaponDamage;
    }
    public function setShield($setShield){
        $this->_shield= $setShield;
    }
    public function getShield(){
        return $this->_shield;
    }
    public function setShieldValue($setShieldValue){
        $this->_shieldValue = $setShieldValue;
    }
    public function getShieldValue(){
        return $this->_shieldValue ;
    }
    public function getDamage(){
        return $this->_damage;
    }
    public function setDamage($setDamage){
        $this->_damage = $setDamage;
    }
    public function attacked($hit){
        $_rageGain=30;
        $this->rageGain($_rageGain);
        $this->setHealth($this->getHealth()-$hit+$this->getShieldValue()); 
        
    }
    public function rageGain($_rageGain){
        $this->setRage($this->getRage()+$_rageGain);
    }
    public function maxRage(){
        if($this->getRage()>=100){
                $this->setDamage($this->getWeaponDamage());
                return $this->getDamage();
    
        }
    }
    
}