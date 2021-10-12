<?php 

namespace App\Managers;

// use App\Models\Animal;

/**
 * Défini les méthode à initialiser lorsqu'on implement cette class
 */
interface ManagerInterface
{
    public function findAll();

    public function findOne(int $id);

    // public function add(Animal $animal);

    // public function update(Animal $animal);
    
    public function delete(int $id);
}