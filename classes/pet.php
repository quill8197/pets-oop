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
    protected $name, $color;
    //private $_name, $_color;

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
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * Get the name of the pet
     * @return string
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * Set the name of the pet
     * @param $name The name of the pet
     * @return void
     */
    function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the color of the pet
     * @return string
     */
    function getColor()
    {
        return $this->color;
    }

    /**
     * Set the color of the pet
     * @param $color The color of the pet
     * @return void
     */
    function setColor($color)
    {
        $this->color = $color;
    }

    /**
     *
     */
    function eat()
    {
        echo '<p>'. $this->name .' is eating</p>';
    }

    /**
     *
     */
    function talk()
    {
        echo '<p>'. $this->name .' is talking</p>';
    }

    /**
     *
     */
    function sleep()
    {
        echo '<p>'. $this->name .' is sleeping</p>';
    }
}