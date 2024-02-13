<?php

require_once __DIR__ . "/../vendor/autoload.php";
use IRFANM\PHP\PORTOFOLIO\App\Router;
use IRFANM\PHP\PORTOFOLIO\Controller\HomeController;
use IRFANM\PHP\PORTOFOLIO\Controller\Testing;
use IRFANM\PHP\PORTOFOLIO\Middleware\AuthMiddleware;

<<<<<<< HEAD
Router::add("GET", "/", HomeController::class, "index", []);
Router::add("GET", "/test", Testing::class, "test", ["testMid"]);
Router::add("GET", "/test/([0-9a-zA-Z]*)/id/([0-9a-zA-Z]*)", Testing::class, "testParameter", ["testMid"]);
=======
Router::add("GET", "/test", Testing::class, "test", []);
Router::add("GET", "/test/([0-9a-zA-Z]*)/id/([0-9a-zA-Z]*)", Testing::class, "testParameter", [AuthMiddleware::class]);
>>>>>>> cd6d7e1d44aad5c041f4257684025c0401d94762

Router::run();