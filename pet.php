<?php

class Pet
{
    private $_name;
    private $_color;

    function eat()
    {
        echo '<p>'.$this->_name.' is eating.</p>';
    }

    function talk()
    {
        echo '<p>'.$this->_name.' is talking.</p>';
    }

    function sleep()
    {
        echo '<p>'.$this->_name.' is sleeping.</p>';
    }
}