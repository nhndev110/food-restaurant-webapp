<?php

require_once __DIR__ . '/router.php';

require_once "./controllers/HomeController.php";

use App\Controllers\HomeController;

get('/', function () {
  $home = new HomeController();
  $home->index();
});
