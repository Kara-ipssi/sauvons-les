<?php 

namespace App\Managers;

use App\Models\Contact;
use Resources\database\Manager;
use PDO;

class ContactManager extends Manager implements ManagerInterface
{

    /**
     * Table de la base de données visée
     */
    private string $table = "contact";

    /**
     * Ajout du formulaire de contact
     */
    public function add(Contact $contact)
    {
        $sql = "INSERT INTO $this->table (email_contact, message, tel) VALUE (:email_contact, :message, :tel)";
        $req = $this->db->prepare($sql);
        $req->bindValue(":email_contact", $contact->getEmail_contact());
        $req->bindValue(":message", $contact->getMessage());
        $req->bindValue(":tel", $contact->getTel());
        $req->execute();
        return $req->fetch();
    }

    /**
     * Récupération d'un formulaire via son id
     */
    public function findOne(int $id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id LIMIT 1";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Contact::class);
        return $req->fetch();
    }

    /**
     * Récupération de tous les formulaires de contact
     */
    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $req = $this->db->prepare($sql);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Contact::class);
        return $req->fetchAll();
    }

    /**
     * Mise à jour d'un formulaire de contact
     */
    public function update(Contact $contact)
    {
        $sql = "UPDATE $this->table SET email_contact = :email_contact, message = :message, tel = :tel WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":email_contact", $contact->getEmail_contact());
        $req->bindValue(":message", $contact->getMessage());
        $req->bindValue(":tel", $contact->getTel());
        $req->bindValue(":id", $contact->getId());
        $req->execute();
        return $req->fetch();
    }

    /**
     * Suppression d'un formulaire de contact
     */
    public function delete(int $id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $req = $this->db->prepare($sql);
        $req->bindValue(":id", $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, Contact::class);
        return $req->fetch();
    }
} 