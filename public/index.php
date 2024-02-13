<?php

require_once __DIR__ . "/../vendor/autoload.php";
use IRFANM\PHP\PORTOFOLIO\App\Router;
use IRFANM\PHP\PORTOFOLIO\Controller\HomeController;
use IRFANM\PHP\PORTOFOLIO\Controller\Testing;

Router::add("GET", "/", HomeController::class, "index", []);
Router::add("GET", "/test", Testing::class, "test", ["testMid"]);
Router::add("GET", "/test/([0-9a-zA-Z]*)/id/([0-9a-zA-Z]*)", Testing::class, "testParameter", ["testMid"]);

Router::run();