<?php

namespace App\Managers;
use App\Models\Animal;
use Resources\database\Manager;
use PDO;

class AnimalManager extends Manager implements ManagerInterface
{

    private string $table = "animal";

    public function findOne(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Animal::class);
        return $req->fetch();
    }

    public function add(Animal $animal)
    {
        $sql = "INSERT INTO $this->table (nom, age, poids, image, isDisponible, description, date_ajout) VALUE (:nom, :age, :poids, :image, true, :description, :date_ajout)";
        $req = $this->db->prepare($sql);
        $req->bindValue(":nom", $animal->getNom());
        $req->bindValue(":age", $animal->getAge());
        $req->bindValue(":poids", $animal->getPoids());
        $req->bindValue(":image", $animal->getImage());
        $req->bindValue(":description", $animal->getDescription());
        $req->bindValue(":date_ajout", $animal->getDate_ajout());
        $req->execute();
        return $req->fetch();
    }

    public function delete(Int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Animal::class);
        return $req->fetch();
    }

    public function update(Animal $animal)
    {
        $sql = "UPDATE $this->table SET nom = :nom, age = :age, poids = :poids, image = :image, isDisponible = :isDisponible, description = :description WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":nom", $animal->getNom());
        $req->bindValue(":age", $animal->getAge());
        $req->bindValue(":poids", $animal->getPoids());
        $req->bindValue(":image", $animal->getImage());
        $req->bindValue(":isDisponible", $animal->getIsDisponible());
        $req->bindValue(":description", $animal->getDescription());
        $req->bindValue(":id", $animal->getId());
        $req->execute();
        return $req->fetch();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = $this->db->prepare($sql);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Animal::class);
        return $req->fetchAll();
    }

}