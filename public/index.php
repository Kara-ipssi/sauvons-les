<?php

session_start();
require_once __DIR__.'../../vendor/autoload.php';
// require __DIR__.'../../resources/routes/web.php';

use App\Managers\AnimalManager;
use App\Managers\UserManager;

$userManager = new UserManager();
$users = $userManager->findAll();

var_dump($users);

// Liste de animaux

$animaux = (new AnimalManager)->findAll();
var_dump($animaux);
// Obtenir un animal via son id
// $animal = (new AnimalManager)->findOne(1);





