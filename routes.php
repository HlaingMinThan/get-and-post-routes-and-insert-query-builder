<?php

// wwww.localhost:8000.com


$router->get("", "controllers/IndexController.php");
$router->get("about", "controllers/AboutController.php");
$router->get("contact", "controllers/ContactController.php");
$router->post("names", "controllers/add-name.php");
