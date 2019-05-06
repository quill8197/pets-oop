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

        $pet2 = new Pet("Fido", "pink");
        $f3->set('pet2', $pet2);

        $pet3 = new Pet("Rufus");
        $f3->set('pet3', $pet3);

        $view = new Template();
        echo $view->render('views/my-pets.html');
    });

    // Run Fat-Free
    $f3->run();
