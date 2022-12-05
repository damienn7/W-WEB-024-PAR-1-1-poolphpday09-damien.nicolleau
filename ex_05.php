<?php

class Character
{
    const CLASSE = "Character";

    protected $name;

    protected $endurance=50;

    protected $agility=2;

    protected $strength=2;

    protected $mana=2;

    public function __construct($name)
    {
        $this->name=$name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEndurance()
    {
        return $this->endurance;
    }


    public function getAgility()
    {
        return $this->agility;
    }


    public function getStrength()
    {
        return $this->strength;
    }


    public function getMana()
    {
        return $this->mana;
    }


    public function getClasse()
    {
        return self::CLASSE;
    }
}

/*
$perso = new Character("Jean-Luc");
echo $perso->getName()."\n";
echo $perso->getEndurance()."\n";
echo $perso->getAgility()."\n";
echo $perso->getStrength()."\n";
echo $perso->getMana()."\n";
echo $perso->getClasse()."\n";
*/