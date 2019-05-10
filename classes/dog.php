<?php

class Dog extends Pet
{
     private $_breed;

     function __construct($name, $breed = 'dog')
     {
         parent::__construct($name);
         $this->_breed = $breed;
     }

     function getBreed()
     {
         return $this->_breed;
     }

     function setBreed($breed)
     {
         $this->_breed = $breed;
     }

    function fetch()
    {
        echo '<p>'.$this->getName(). ', a '.$this->_breed.
            ', is fetching a matching '.$this->color.' frisbee</p>';
    }
}