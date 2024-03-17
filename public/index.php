<?php

require_once __DIR__ . "/../vendor/autoload.php";
use IRFANM\PHP\PORTOFOLIO\App\Router;
use IRFANM\PHP\PORTOFOLIO\Controller\Testing;
use IRFANM\PHP\PORTOFOLIO\Controller\HomeController;
use IRFANM\PHP\PORTOFOLIO\Middleware\AuthMiddleware;

Router::add("GET", "/test", Testing::class, "test", []);
Router::add("GET", "/test/([0-9a-zA-Z]*)/id/([0-9a-zA-Z]*)", Testing::class, "testParameter", [AuthMiddleware::class]);
Router::add("GET", "/test-layout", Testing::class, "testLayout", []);

Router::add("GET", "/", HomeController::class, "index", []);

Router::run();