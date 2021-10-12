<?php

namespace Resources\database;

use Exception;

require_once __DIR__.'../../vendor/autoload.php';

$db = (new Database())->getDatabase();

try {
    $migration = new Migration();
    $userMigration = $migration->createUserMigration();
    $animalMigration = $migration->createAnimalMigration();
    $contactMigration = $migration->createContactMigration();

    $allMigrations = [$userMigration, $animalMigration, $contactMigration];

    foreach($allMigrations as $table){
        $req = $db->prepare($table);
        $req->execute();
    }
} catch(Exception $e){
    $e->getMessage();
}
