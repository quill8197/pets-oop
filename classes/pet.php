<?php

/**
 * The Pet class represents a pet in a pet store
 *
 * The pet class represents a Pet with a name, type,
 * and color. Pets can talk, eat, and sleep.
 * @author Quill McConnell
 * @copyright 2019
 */
class Pet
{
    //protected $name, $color;
    private $_name, $_color;

    // Can only have 1 constructor
    // Parametrized constructor with default values for if no parameter inputs are given
    /**
     * Parametrized constructor for Pet objects
     * @param string $name The name of the pet
     * @param string $color The color of the pet
     * @return void
     */
    function __construct($name = 'Unknown', $color = '?')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    /**
     * Get the name of the pet
     * @return string
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * Set the name of the pet
     * @param $name The name of the pet
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * Get the color of the pet
     * @return string
     */
    function getColor()
    {
        return $this->_color;
    }

    /**
     * Set the color of the pet
     * @param $color The color of the pet
     * @return void
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     *
     */
    function eat()
    {
        echo '<p>'. $this->_name .' is eating</p>';
    }

    /**
     *
     */
    function talk()
    {
        echo '<p>'. $this->_name .' is talking</p>';
    }

    /**
     *
     */
    function sleep()
    {
        echo '<p>'. $this->_name .' is sleeping</p>';
    }
}