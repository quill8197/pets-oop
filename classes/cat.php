<?php

class Cat extends Pet
{
    private $_name;

    function __construct($name = 'Unknown')
    {
        $this->_name = $name;
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function eat()
    {
        echo '';
    }

    function scratch()
    {
        echo '';
    }
}