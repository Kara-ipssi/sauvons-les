<?php

namespace App\Managers;
use App\Models\User;
use Resources\database\Manager;

class UserManager extends Manager implements ManagerInterface
{
    private string $table = "user";

    public function findOne(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(\PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }

    public function findOneByEmail(string $email)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":email", $email);
        $req->execute();
        $req->setFetchMode(\PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }

    public function findAll()
    {
        $query = $this->db->query("SELECT * FROM user");
        return $query->fetchAll(\PDO::FETCH_CLASS, User::class);
    }

    public function add(User $user)
    {
        $sql = "INSERT INTO user (name, email, password, isAdmin) 
                        VALUES (:name, :email, :password, :isAdmin)";

        $req = $this->db->prepare($sql);
        $req->bindValue(":name", $user->getName());
        $req->bindValue(":email", $user->getEmail());
        $req->bindValue(":password", $user->getPassword());
        $req->bindValue(":isAdmin", $user->getIsAdmin());
        $req->execute();
    }

    public function update(User $user)
    {
        $sql = "INSERT INTO user SET name = :name, password = :password, isAdmin = :isAdmin";

        $req = $this->db->prepare($sql);
        $req->bindValue(":name", $user->getName());
        $req->bindValue(":password", $user->getPassword());
        $req->bindValue(":isAdmin", $user->getIsAdmin());
        $req->execute();
    }

    public function delete(Int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(\PDO::FETCH_CLASS, User::class);
        return $req->fetch();
    }
}