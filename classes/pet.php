<?php

class Pet
{
    private $_name;
    private $_color;

    /* // Default constructor
    function __construct()
    {
        $this->_name = 'unknown';
        $this->_color = '?';
    }*/

    // Parametrized constructor with default values
    function __construct($name = 'Unknown', $color = '?')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo '<p>'. $this->_name .' is eating.</p>';
    }

    function talk()
    {
        echo '<p>'. $this->_name .' is speaking ' . $this->_color. '</p>';
    }

    function sleep()
    {
        echo '<p>'. $this->_name .' is sleeping.</p>';
    }
}