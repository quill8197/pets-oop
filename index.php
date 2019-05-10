<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

// Start session
//session_start();

// Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');
// Must start the session after requiring the autoload or page changes won't display
session_start();

// Create an instance of the base class
$f3 = Base::instance();

// Turn on Fat-free error reporting
$f3->set('DEBUG', 3);

// Define a default route
$f3->route('GET /', function($f3)
{
    // Instantiate the Pet class
    $pet1 = new Pet();
    $f3->set('pet1', $pet1);

    $pet2 = new Dog("Timmy", "terrier");
    $f3->set('pet2', $pet2);

    $pet3 = new Cat("Rufus");
    $f3->set('pet3', $pet3);

    $view = new Template();
    echo $view->render('views/my-pets.html');
});

$f3->route('GET /testing', function()
{
    $p1 = new Pet("Roger", "green");

    $p1->setName("Jojo");
    echo ($p1->getName().'<br>');

    $p1->setColor("pink");
    echo ($p1->getColor().'<br>');

    if ($p1 instanceof Pet)
    {
        echo 'Yes!<br>';
    }
    else
    {
        echo 'No!<br>';
    }

    $d1 = new Dog("Fido", "Labrador");
    echo ($d1->fetch());

    $c1 = new Cat("Whiskers");
    echo ($c1->scratch());
});

// Run Fat-Free
$f3->run();
