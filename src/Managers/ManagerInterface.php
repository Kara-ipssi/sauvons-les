<?php 

namespace App\Managers;

use App\Models\Animal;

interface ManagerInterface
{

    public function findAll();

    public function findOne(int $id);

    // public abstract function findFirst();
    
    // public abstract function findLast();

    // public function add(Animal $animal);

    // public function update(Animal $animal);
    
    public function delete(int $id);
}