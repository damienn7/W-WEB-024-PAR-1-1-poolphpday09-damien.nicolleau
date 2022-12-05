<?php

class MyAttribute
{

    /**
     * An indentifier
     * @var string
     * @access public
     */
    public $name="";

    /**
     * @param name
     */
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * @access public
     */
    public function display()
    {
        echo $this->name."\n";
    }
}


//$foo = new MyAttribute("Jean-Luc");
//foo->display();