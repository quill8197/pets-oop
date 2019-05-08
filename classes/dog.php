<?php

class Dog extends Pet
{
     private $_name;
     private $_breed;
 /*
     function __construct($name = 'Unknown', $breed = '?')
     {
         $this->_name = $name;
         $this->_breed = $breed;
     }

     function getName()
     {
         return $this->_name;
     }

     function setName($name)
     {
         $this->_name = $name;
     }

     function getBreed()
     {
         return $this->_breed;
     }

     function setBreed($breed)
     {
         $this->_breed = $breed;
     }
 */
    function eat()
    {
        echo '';
    }

    function fetch()
    {
        echo '<p>'.$this->getName(). ' is fetching</p>';
    }
}