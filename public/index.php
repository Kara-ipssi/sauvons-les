<?php

use App\Managers\AnimalManager;
use App\Managers\UserManager;
use App\Models\Animal;

require_once __DIR__.'../../vendor/autoload.php';

echo 'Hello';

$manager = new AnimalManager();

$animal = new Animal();
$animal->setNom("test");
var_dump($manager->add($animal));
