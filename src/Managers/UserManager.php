<?php
namespace App\Managers;
use App\Models\User;
use Resources\database\Manager;

use PDO;

class UserManager extends Manager implements ManagerInterface
{
    private string $table = "user";

    public function findOne(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }

    public function findOneByEmail(string $email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":email", $email);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = $this->db->prepare($sql);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $req->fetchAll();
    }

    public function add(User $user)
    {
        $sql = "INSERT INTO $this->table (name, email, mdp, isAdmin) 
                        VALUES (:name, :email, :mdp, :isAdmin)";

        $req = $this->db->prepare($sql);
        $req->bindValue(":name", $user->getName());
        $req->bindValue(":email", $user->getEmail());
        $req->bindValue(":mdp", $user->getMdp());
        $req->bindValue(":isAdmin", $user->getIsAdmin());
        $req->execute();
        return $req->fetch();
    }

    public function update(User $user)
    {
        $sql = "UPDATE $this->table SET name = :name, mdp = :mdp, isAdmin = :isAdmin WHERE id = :id";

        $req = $this->db->prepare($sql);
        $req->bindValue(":name", $user->getName());
        $req->bindValue(":mdp", $user->getMdp());
        $req->bindValue(":isAdmin", $user->getIsAdmin());
        $req->bindValue(":id", $user->getId());
        $req->execute();
        return $req->fetch();
    }

    public function delete(Int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }
}