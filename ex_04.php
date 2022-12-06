<?php

class MyTinyCalculator
{
    private $a;

    private $b;

    private $result;

    public function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    public function setA($a)
    {
        $this->a=$a;
    }

    public function setB($b)
    {
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

    public function setResult($result)
    {
        $this->result=$result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function add()
    {
        $this->result=$this->a+$this->b;
        $this->setResult($this->result);
        return $this->result;
    }

    public function subtract()
    {
        $this->result=$this->a-$this->b;
        $this->setResult($this->result);
        return $this->result;
    }

    public function multiply()
    {
        $this->result=$this->a*$this->b;
        $this->setResult($this->result);
        return $this->result;
    }
    
    public function divide()
    {
        $this->result=$this->a/$this->b;
        $this->setResult($this->result);
        return $this->result;
    }

    public function showResult()
    {
        return $this->getResult();
    }
}


$foo = new MyTinyCalculator(30, 12);

echo $foo->showResult () . "\n";
