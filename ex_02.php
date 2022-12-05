<?php

class MyAttribute
{

    /**
     * An indentifier
     * @var string
     * @access public
     */
    public $named;

    /**
     * @param name
     */
    public function __construct($name)
    {
        $this->$named=$name;

    }

    /**
     * @access public
     */
    public function display()
    {
        echo $this->$named."\n";
    }
}


//$foo = new MyAttribute("Jean-Luc");
//$foo->display();