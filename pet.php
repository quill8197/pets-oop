<?php

class Pet
{
    private $_name;
    private $_color;

    function eat()
    {
        echo '<p>'.$this->_name.' is eating.</p>';
    }
}