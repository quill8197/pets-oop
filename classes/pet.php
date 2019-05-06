<?php

class Pet
{
    private $_name;
    private $_color;

    // Can only have 1 constructor
    // Parametrized constructor with default values for if no parameter inputs are given
    function __construct($name = 'Unknown', $color = '?')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo '<p>'. $this->_name .' is eating in a matching ' . $this->_color . ' bowl.</p>';
    }

    function talk()
    {
        echo '<p>'. $this->_name .' is talking in the color ' . $this->_color . '</p>';
    }

    function sleep()
    {
        echo '<p>'. $this->_name .' is sleeping in a matching ' . $this->_color . ' bed.</p>';
    }
}