<?php 


// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
require_once __DIR__ . '/client.php';
require_once __DIR__ . '/admin.php';




// Run it!
$router->run();