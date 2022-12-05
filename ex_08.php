<?php

class Character implements iMove
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

    public function moveRight()
    {
        echo $this->name.": moves right.\n";
    }

    public function moveLeft()
    {
        echo $this->name.": moves left.\n";
    }

    public function moveUp()
    {
        echo $this->name.": moves up.\n";
    }

    public function moveDown()
    {
        echo $this->name.": moves down.\n";
    }
}

class Paladin extends Character
{
    const CLASSE = "Paladin";

    protected $name;

    protected $endurance=100;

    protected $agility=8;

    protected $strength=10;

    protected $mana=3;

    public function __construct($name)
    {
        $this->name=$name;
        echo $this->name.": I’ll engrave my name in the history !\n";
    }

    public function __destruct()
    {
        echo $this->name.": Aarrg I can’t believe I’m dead...\n";
    }

    public function attack()
    {
        echo $this->name.": I’ll crush you with my hammer !\n";
    }

    public function getClasse()
    {
        return self::CLASSE;
    }

    public function moveRight()
    {
        echo $this->name.": moves right like a bad boy.\n";
    }

    public function moveLeft()
    {
        echo $this->name.": moves left like a bad boy.\n";
    }

    public function moveUp()
    {
        echo $this->name.": moves up like a bad boy.\n";
    }

    public function moveDown()
    {
        echo $this->name.": moves down like a bad boy.\n";
    }
}

class Mage extends Character
{
    const CLASSE = "Mage";

    protected $name;

    protected $endurance=70;

    protected $agility=3;

    protected $strength=10;

    protected $mana=10;

    public function __construct($name)
    {
        $this->name=$name;
        echo $this->name.": May the gods be with me.\n";
    }

    public function __destruct()
    {
        echo $this->name.": By the four gods, I passed away...\n";
    }

    public function attack()
    {
        echo $this->name.": Feel the power of my magic !\n";
    }

    public function getClasse()
    {
        return self::CLASSE;
    }

    public function moveRight()
    {
        echo $this->name.": moves right with grace.\n";
    }

    public function moveLeft()
    {
        echo $this->name.": moves left with grace.\n";
    }

    public function moveUp()
    {
        echo $this->name.": moves up with grace.\n";
    }

    public function moveDown()
    {
        echo $this->name.": moves down with grace.\n";
    }
}


interface iMove
{
    public function moveRight();

    public function moveLeft();

    public function moveUp();

    public function moveDown();
}

/*
$paladin = new Paladin("Jean-Luc");
$paladin->moveRight();
$paladin->moveLeft();
$paladin->moveDown();
$paladin->moveUp();
$mage = new Mage("Robert");
$mage->moveRight();
$mage->moveLeft();
$mage->moveDown();
$mage->moveUp();
*/