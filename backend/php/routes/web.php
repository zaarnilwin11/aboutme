<?php
// Routes configuration

use App\Controllers\ExampleController;

$router->get('/example', [ExampleController::class, 'index']);
