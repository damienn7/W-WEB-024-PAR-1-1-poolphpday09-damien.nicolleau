<?php

class MyAttributes
{
    private $a="";

    private $b="";

    public function __construct(string $a,string $b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function setA($a)
    {
        $this->a=$a;
    }


    public function setB($b)
    {
        $this->b=$b;
    }

    public function display()
    {
        echo $this->getA()." ".$this->getB()."\n";
    }
}

//$foo = new MyAttributes("Hello", "World");
//var_dump($foo);
//$foo->display();