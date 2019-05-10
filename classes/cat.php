<?php

class Cat extends Pet
{
    function __construct($name)
    {
        parent::__construct($name);
    }

    function scratch()
    {
        echo '<p>'.$this->name. ' is scratching a matching '.$this->color.' post</p>';
    }
}